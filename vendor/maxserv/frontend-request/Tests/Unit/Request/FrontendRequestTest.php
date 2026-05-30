<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\Tests\Unit\Request;

use GuzzleHttp\Exception\RequestException;
use MaxServ\FrontendRequest\Dto\RequestContext;
use MaxServ\FrontendRequest\Event\ModifyRequestEvent;
use MaxServ\FrontendRequest\Request\FrontendRequest;
use PHPUnit\Framework\Attributes\Test;
use Psr\EventDispatcher\EventDispatcherInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use TYPO3\CMS\Core\Http\RequestFactory;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class FrontendRequestTest extends UnitTestCase
{
    private RequestFactory $requestFactory;
    private ClientInterface $client;
    private EventDispatcherInterface $eventDispatcher;
    private FrontendRequest $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->requestFactory = $this->createMock(RequestFactory::class);
        $this->client = $this->createMock(ClientInterface::class);
        $this->eventDispatcher = $this->createMock(EventDispatcherInterface::class);

        $this->subject = new FrontendRequest(
            $this->requestFactory,
            $this->client,
            $this->eventDispatcher,
        );
    }

    #[Test]
    public function getHtmlResponseReturnsBodyOnSuccess(): void
    {
        $context = new RequestContext('https://example.com/page');
        $request = $this->createMock(RequestInterface::class);

        $this->requestFactory->method('createRequest')
            ->with('GET', 'https://example.com/page')
            ->willReturn($request);

        $event = new ModifyRequestEvent($request, $context);
        $this->eventDispatcher->method('dispatch')->willReturn($event);

        $body = $this->createMock(StreamInterface::class);
        $body->method('getContents')->willReturn('<html><body>Hello</body></html>');

        $response = $this->createMock(ResponseInterface::class);
        $response->method('getStatusCode')->willReturn(200);
        $response->method('getBody')->willReturn($body);

        $this->client->method('sendRequest')->with($request)->willReturn($response);

        self::assertSame('<html><body>Hello</body></html>', $this->subject->getHtmlResponse($context));
    }

    #[Test]
    public function getHtmlResponseThrowsOnNon200Status(): void
    {
        $context = new RequestContext('https://example.com/page');
        $request = $this->createMock(RequestInterface::class);

        $this->requestFactory->method('createRequest')->willReturn($request);

        $event = new ModifyRequestEvent($request, $context);
        $this->eventDispatcher->method('dispatch')->willReturn($event);

        $response = $this->createMock(ResponseInterface::class);
        $response->method('getStatusCode')->willReturn(404);

        $this->client->method('sendRequest')->willReturn($response);

        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('404');

        $this->subject->getHtmlResponse($context);
    }

    #[Test]
    public function getHtmlResponseThrowsOnRequestException(): void
    {
        $context = new RequestContext('https://example.com/page');
        $request = $this->createMock(RequestInterface::class);

        $this->requestFactory->method('createRequest')->willReturn($request);

        $event = new ModifyRequestEvent($request, $context);
        $this->eventDispatcher->method('dispatch')->willReturn($event);

        $requestException = new RequestException(
            'Connection refused',
            $request,
            null,
        );

        $this->client->method('sendRequest')->willThrowException($requestException);

        $this->expectException(\RuntimeException::class);

        $this->subject->getHtmlResponse($context);
    }

    #[Test]
    public function getHtmlResponseDispatchesModifyRequestEvent(): void
    {
        $context = new RequestContext('https://example.com/page');
        $originalRequest = $this->createMock(RequestInterface::class);
        $modifiedRequest = $this->createMock(RequestInterface::class);

        $this->requestFactory->method('createRequest')->willReturn($originalRequest);

        $this->eventDispatcher->expects(self::once())
            ->method('dispatch')
            ->with(self::callback(function (ModifyRequestEvent $event) use ($originalRequest, $context): bool {
                return $event->getRequest() === $originalRequest
                    && $event->getContext() === $context;
            }))
            ->willReturnCallback(function (ModifyRequestEvent $event) use ($modifiedRequest): ModifyRequestEvent {
                $event->setRequest($modifiedRequest);
                return $event;
            });

        $body = $this->createMock(StreamInterface::class);
        $body->method('getContents')->willReturn('<html></html>');

        $response = $this->createMock(ResponseInterface::class);
        $response->method('getStatusCode')->willReturn(200);
        $response->method('getBody')->willReturn($body);

        $this->client->expects(self::once())
            ->method('sendRequest')
            ->with($modifiedRequest)
            ->willReturn($response);

        $this->subject->getHtmlResponse($context);
    }
}
