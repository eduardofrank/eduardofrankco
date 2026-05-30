<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\Tests\Unit\Handler;

use MaxServ\FrontendRequest\Builder\RequestContextBuilder;
use MaxServ\FrontendRequest\Builder\RequestParametersBuilder;
use MaxServ\FrontendRequest\Dto\RequestContext;
use MaxServ\FrontendRequest\Dto\RequestParameters;
use MaxServ\FrontendRequest\Dto\RequestResult;
use MaxServ\FrontendRequest\Handler\RequestHandler;
use MaxServ\FrontendRequest\PageParser\PageParser;
use MaxServ\FrontendRequest\Request\FrontendRequest;
use PHPUnit\Framework\Attributes\Test;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\StreamInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class RequestHandlerTest extends UnitTestCase
{
    private RequestParametersBuilder $parametersBuilder;
    private RequestContextBuilder $contextBuilder;
    private FrontendRequest $frontendRequest;
    private PageParser $pageParser;
    private ResponseFactoryInterface $responseFactory;
    private RequestHandler $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->parametersBuilder = $this->createMock(RequestParametersBuilder::class);
        $this->contextBuilder = $this->createMock(RequestContextBuilder::class);
        $this->frontendRequest = $this->createMock(FrontendRequest::class);
        $this->pageParser = $this->createMock(PageParser::class);
        $this->responseFactory = $this->createMock(ResponseFactoryInterface::class);

        $this->subject = new RequestHandler(
            $this->parametersBuilder,
            $this->contextBuilder,
            $this->frontendRequest,
            $this->pageParser,
            $this->responseFactory,
        );
    }

    private function mockJsonResponse(): ResponseInterface
    {
        $body = $this->createMock(StreamInterface::class);
        $body->method('write')->willReturn(1);

        $response = $this->createMock(ResponseInterface::class);
        $response->method('withHeader')->willReturn($response);
        $response->method('withStatus')->willReturn($response);
        $response->method('getBody')->willReturn($body);

        $this->responseFactory->method('createResponse')->willReturn($response);

        return $response;
    }

    #[Test]
    public function handleReturns400ForInvalidParameters(): void
    {
        $serverRequest = $this->createMock(ServerRequestInterface::class);
        $invalidParams = new RequestParameters();

        $this->parametersBuilder->method('build')->willReturn($invalidParams);

        $response = $this->mockJsonResponse();
        $response->expects(self::once())->method('withStatus')->with(400)->willReturn($response);

        $this->subject->handle($serverRequest);
    }

    #[Test]
    public function handleReturnsSuccessfulResponse(): void
    {
        $serverRequest = $this->createMock(ServerRequestInterface::class);
        $validParams = new RequestParameters(1, 0);
        $context = new RequestContext('https://example.com');
        $result = new RequestResult(['title' => 'Test']);

        $this->parametersBuilder->method('build')->willReturn($validParams);
        $this->contextBuilder->method('build')->with($validParams)->willReturn($context);
        $this->frontendRequest->method('getHtmlResponse')->with($context)->willReturn('<html></html>');
        $this->pageParser->method('parsePage')->with('<html></html>', $context)->willReturn($result);

        $response = $this->mockJsonResponse();

        $resultResponse = $this->subject->handle($serverRequest);
        self::assertSame($response, $resultResponse);
    }

    #[Test]
    public function handleCatchesExceptionAndReturnsError(): void
    {
        $serverRequest = $this->createMock(ServerRequestInterface::class);
        $validParams = new RequestParameters(1, 0);
        $context = new RequestContext('https://example.com');

        $this->parametersBuilder->method('build')->willReturn($validParams);
        $this->contextBuilder->method('build')->willReturn($context);
        $this->frontendRequest->method('getHtmlResponse')
            ->willThrowException(new \RuntimeException('500'));

        $body = $this->createMock(StreamInterface::class);
        $body->expects(self::once())
            ->method('write')
            ->with(self::callback(function (string $json): bool {
                $data = json_decode($json, true);
                return $data['error']['reason'] === 'Request failed'
                    && $data['error']['url'] === 'https://example.com'
                    && $data['error']['statusCode'] === 500;
            }));

        $response = $this->createMock(ResponseInterface::class);
        $response->method('withHeader')->willReturn($response);
        $response->method('withStatus')->willReturn($response);
        $response->method('getBody')->willReturn($body);

        $this->responseFactory->method('createResponse')->willReturn($response);

        $this->subject->handle($serverRequest);
    }
}
