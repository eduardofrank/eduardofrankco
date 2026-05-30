<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\Tests\Unit\PageParser\Parser;

use MaxServ\FrontendRequest\Dto\RequestContext;
use MaxServ\FrontendRequest\PageParser\Parser\TitleParser;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class TitleParserTest extends UnitTestCase
{
    private TitleParser $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = new TitleParser();
    }

    #[Test]
    public function getIdentifierReturnsTitle(): void
    {
        self::assertSame('title', $this->subject->getIdentifier());
    }

    /**
     * @return array<string, array{0: string, 1: string}>
     */
    public static function parseDataProvider(): array
    {
        return [
            'simple title' => [
                '<html><head><title>My Page</title></head></html>',
                'My Page',
            ],
            'title with entities' => [
                '<html><head><title>Tom &amp; Jerry</title></head></html>',
                'Tom & Jerry',
            ],
            'title with html tags' => [
                '<html><head><title><b>Bold</b> Title</title></head></html>',
                'Bold Title',
            ],
            'missing title' => [
                '<html><head></head><body>No title</body></html>',
                '',
            ],
            'empty title' => [
                '<html><head><title></title></head></html>',
                '',
            ],
            'case insensitive' => [
                '<html><head><TITLE>Upper</TITLE></head></html>',
                'Upper',
            ],
        ];
    }

    #[Test]
    #[DataProvider('parseDataProvider')]
    public function parseExtractsTitle(string $html, string $expected): void
    {
        $context = new RequestContext();
        self::assertSame($expected, $this->subject->parse($html, $context));
    }
}
