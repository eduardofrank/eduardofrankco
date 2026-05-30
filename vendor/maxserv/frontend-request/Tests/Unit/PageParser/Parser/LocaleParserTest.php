<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\Tests\Unit\PageParser\Parser;

use MaxServ\FrontendRequest\Dto\RequestContext;
use MaxServ\FrontendRequest\PageParser\Parser\LocaleParser;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class LocaleParserTest extends UnitTestCase
{
    private LocaleParser $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = new LocaleParser();
    }

    #[Test]
    public function getIdentifierReturnsLocale(): void
    {
        self::assertSame('locale', $this->subject->getIdentifier());
    }

    /**
     * @return array<string, array{0: string, 1: string}>
     */
    public static function parseDataProvider(): array
    {
        return [
            'simple locale' => [
                '<html lang="nl"><head></head></html>',
                'nl',
            ],
            'locale with region' => [
                '<html lang="en-US"><head></head></html>',
                'en',
            ],
            'locale with region lowercase' => [
                '<html lang="de-de"><head></head></html>',
                'de',
            ],
            'no lang attribute defaults to en' => [
                '<html><head></head></html>',
                'en',
            ],
            'html with other attributes' => [
                '<html class="no-js" lang="fr" dir="ltr"><head></head></html>',
                'fr',
            ],
        ];
    }

    #[Test]
    #[DataProvider('parseDataProvider')]
    public function parseExtractsLocale(string $html, string $expected): void
    {
        $context = new RequestContext();
        self::assertSame($expected, $this->subject->parse($html, $context));
    }
}
