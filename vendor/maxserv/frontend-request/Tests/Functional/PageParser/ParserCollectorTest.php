<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\Tests\Functional\PageParser;

use MaxServ\FrontendRequest\PageParser\ParserCollector;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Functional\FunctionalTestCase;

final class ParserCollectorTest extends FunctionalTestCase
{
    protected array $testExtensionsToLoad = [
        'maxserv/frontend-request',
    ];

    #[Test]
    public function allParsersAreAutoDiscoveredViaDi(): void
    {
        $parserCollector = $this->get(ParserCollector::class);
        $parsers = $parserCollector->getAll();

        self::assertArrayHasKey('title', $parsers);
        self::assertArrayHasKey('body', $parsers);
        self::assertArrayHasKey('metadata', $parsers);
        self::assertArrayHasKey('locale', $parsers);
        self::assertArrayHasKey('url', $parsers);
        self::assertArrayHasKey('favicon', $parsers);
    }

    #[Test]
    public function parserCollectorReturnsCorrectNumberOfParsers(): void
    {
        $parserCollector = $this->get(ParserCollector::class);
        $parsers = $parserCollector->getAll();

        self::assertCount(6, $parsers);
    }
}
