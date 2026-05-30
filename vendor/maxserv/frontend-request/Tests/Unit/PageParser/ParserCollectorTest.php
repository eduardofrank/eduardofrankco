<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\Tests\Unit\PageParser;

use MaxServ\FrontendRequest\PageParser\ParserCollector;
use MaxServ\FrontendRequest\PageParser\ParserInterface;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class ParserCollectorTest extends UnitTestCase
{
    #[Test]
    public function getAllReturnsEmptyArrayWhenNoParsers(): void
    {
        $collector = new ParserCollector([]);
        self::assertSame([], $collector->getAll());
    }

    #[Test]
    public function getAllReturnsParsersKeyedByIdentifier(): void
    {
        $parserA = $this->createMock(ParserInterface::class);
        $parserA->method('getIdentifier')->willReturn('title');

        $parserB = $this->createMock(ParserInterface::class);
        $parserB->method('getIdentifier')->willReturn('body');

        $collector = new ParserCollector([$parserA, $parserB]);
        $result = $collector->getAll();

        self::assertCount(2, $result);
        self::assertArrayHasKey('title', $result);
        self::assertArrayHasKey('body', $result);
        self::assertSame($parserA, $result['title']);
        self::assertSame($parserB, $result['body']);
    }

    #[Test]
    public function laterParserOverwritesEarlierWithSameIdentifier(): void
    {
        $parserA = $this->createMock(ParserInterface::class);
        $parserA->method('getIdentifier')->willReturn('title');

        $parserB = $this->createMock(ParserInterface::class);
        $parserB->method('getIdentifier')->willReturn('title');

        $collector = new ParserCollector([$parserA, $parserB]);
        $result = $collector->getAll();

        self::assertCount(1, $result);
        self::assertSame($parserB, $result['title']);
    }
}
