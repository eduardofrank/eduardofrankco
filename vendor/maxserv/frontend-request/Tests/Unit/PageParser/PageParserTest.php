<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\Tests\Unit\PageParser;

use MaxServ\FrontendRequest\Dto\RequestContext;
use MaxServ\FrontendRequest\PageParser\PageParser;
use MaxServ\FrontendRequest\PageParser\ParserCollector;
use MaxServ\FrontendRequest\PageParser\ParserInterface;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class PageParserTest extends UnitTestCase
{
    #[Test]
    public function parsePageAggregatesResultsFromAllParsers(): void
    {
        $titleParser = $this->createMock(ParserInterface::class);
        $titleParser->method('getIdentifier')->willReturn('title');
        $titleParser->method('parse')->willReturn('Test Page');

        $localeParser = $this->createMock(ParserInterface::class);
        $localeParser->method('getIdentifier')->willReturn('locale');
        $localeParser->method('parse')->willReturn('en');

        $collector = $this->createMock(ParserCollector::class);
        $collector->method('getAll')->willReturn([
            'title' => $titleParser,
            'locale' => $localeParser,
        ]);

        $pageParser = new PageParser($collector);
        $context = new RequestContext('https://example.com');
        $result = $pageParser->parsePage('<html></html>', $context);

        self::assertSame('Test Page', $result->getData()['title']);
        self::assertSame('en', $result->getData()['locale']);
    }

    #[Test]
    public function parsePageReturnsEmptyResultWhenNoParsers(): void
    {
        $collector = $this->createMock(ParserCollector::class);
        $collector->method('getAll')->willReturn([]);

        $pageParser = new PageParser($collector);
        $context = new RequestContext('https://example.com');
        $result = $pageParser->parsePage('<html></html>', $context);

        self::assertSame([], $result->getData());
    }

    #[Test]
    public function parsePagePassesContentAndContextToParsers(): void
    {
        $html = '<html><head><title>Hello</title></head></html>';
        $context = new RequestContext('https://example.com/page');

        $parser = $this->createMock(ParserInterface::class);
        $parser->method('getIdentifier')->willReturn('test');
        $parser->expects(self::once())
            ->method('parse')
            ->with($html, $context)
            ->willReturn('parsed');

        $collector = $this->createMock(ParserCollector::class);
        $collector->method('getAll')->willReturn(['test' => $parser]);

        $pageParser = new PageParser($collector);
        $pageParser->parsePage($html, $context);
    }
}
