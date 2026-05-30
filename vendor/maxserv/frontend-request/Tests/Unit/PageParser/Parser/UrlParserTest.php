<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\Tests\Unit\PageParser\Parser;

use MaxServ\FrontendRequest\Dto\RequestContext;
use MaxServ\FrontendRequest\PageParser\Parser\UrlParser;
use MaxServ\FrontendRequest\PageParser\Service\UrlService;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class UrlParserTest extends UnitTestCase
{
    #[Test]
    public function getIdentifierReturnsUrl(): void
    {
        $urlService = $this->createMock(UrlService::class);
        $parser = new UrlParser($urlService);
        self::assertSame('url', $parser->getIdentifier());
    }

    #[Test]
    public function parseDelegatesToUrlService(): void
    {
        $context = new RequestContext('https://example.com/page');

        $urlService = $this->createMock(UrlService::class);
        $urlService->expects(self::once())
            ->method('getUrl')
            ->with($context)
            ->willReturn('https://example.com/page');

        $parser = new UrlParser($urlService);
        self::assertSame('https://example.com/page', $parser->parse('<html></html>', $context));
    }
}
