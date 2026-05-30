<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\Tests\Unit\Builder;

use MaxServ\FrontendRequest\Builder\RequestParametersBuilder;
use PHPUnit\Framework\Attributes\Test;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\StreamInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class RequestParametersBuilderTest extends UnitTestCase
{
    private RequestParametersBuilder $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = new RequestParametersBuilder();
    }

    #[Test]
    public function buildFromQueryParams(): void
    {
        $request = $this->createMock(ServerRequestInterface::class);
        $request->method('getQueryParams')->willReturn([
            'pageId' => '42',
            'languageId' => '1',
            'additionalGetVars' => 'tx_news=5',
        ]);

        $parameters = $this->subject->build($request);

        self::assertSame(42, $parameters->getPageId());
        self::assertSame(1, $parameters->getLanguageId());
        self::assertSame('tx_news=5', $parameters->getAdditionalParameters());
        self::assertTrue($parameters->isValid());
    }

    #[Test]
    public function buildFromQueryParamsWithoutAdditionalGetVars(): void
    {
        $request = $this->createMock(ServerRequestInterface::class);
        $request->method('getQueryParams')->willReturn([
            'pageId' => '10',
            'languageId' => '0',
        ]);

        $parameters = $this->subject->build($request);

        self::assertSame(10, $parameters->getPageId());
        self::assertSame(0, $parameters->getLanguageId());
        self::assertSame('', $parameters->getAdditionalParameters());
    }

    #[Test]
    public function buildFromJsonBody(): void
    {
        $body = $this->createMock(StreamInterface::class);
        $body->method('getContents')->willReturn('{"pageId":7,"languageId":2,"additionalGetVars":"type=123"}');

        $request = $this->createMock(ServerRequestInterface::class);
        $request->method('getQueryParams')->willReturn([]);
        $request->method('getBody')->willReturn($body);

        $parameters = $this->subject->build($request);

        self::assertSame(7, $parameters->getPageId());
        self::assertSame(2, $parameters->getLanguageId());
        self::assertSame('type=123', $parameters->getAdditionalParameters());
    }

    #[Test]
    public function buildFallsBackToEmptyParametersWhenNoData(): void
    {
        $body = $this->createMock(StreamInterface::class);
        $body->method('getContents')->willReturn('');

        $request = $this->createMock(ServerRequestInterface::class);
        $request->method('getQueryParams')->willReturn([]);
        $request->method('getBody')->willReturn($body);

        $parameters = $this->subject->build($request);

        self::assertNull($parameters->getPageId());
        self::assertNull($parameters->getLanguageId());
        self::assertFalse($parameters->isValid());
    }

    #[Test]
    public function buildHandlesInvalidJson(): void
    {
        $body = $this->createMock(StreamInterface::class);
        $body->method('getContents')->willReturn('{invalid json}');

        $request = $this->createMock(ServerRequestInterface::class);
        $request->method('getQueryParams')->willReturn([]);
        $request->method('getBody')->willReturn($body);

        $parameters = $this->subject->build($request);

        self::assertFalse($parameters->isValid());
    }

    #[Test]
    public function buildPrefersQueryParamsOverJsonBody(): void
    {
        $body = $this->createMock(StreamInterface::class);
        $body->method('getContents')->willReturn('{"pageId":99,"languageId":9}');

        $request = $this->createMock(ServerRequestInterface::class);
        $request->method('getQueryParams')->willReturn([
            'pageId' => '1',
            'languageId' => '0',
        ]);
        $request->method('getBody')->willReturn($body);

        $parameters = $this->subject->build($request);

        self::assertSame(1, $parameters->getPageId());
        self::assertSame(0, $parameters->getLanguageId());
    }
}
