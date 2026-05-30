<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\Tests\Unit\PageParser\Parser;

use MaxServ\FrontendRequest\Dto\RequestContext;
use MaxServ\FrontendRequest\PageParser\Parser\BodyParser;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class BodyParserTest extends UnitTestCase
{
    private BodyParser $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = new BodyParser();
    }

    #[Test]
    public function getIdentifierReturnsBody(): void
    {
        self::assertSame('body', $this->subject->getIdentifier());
    }

    /**
     * @return array<string, array{0: string, 1: string}>
     */
    public static function parseDataProvider(): array
    {
        return [
            'simple body' => [
                '<html><body><p>Hello</p></body></html>',
                '<p>Hello</p>',
            ],
            'body with attributes' => [
                '<html><body class="page" id="top"><div>Content</div></body></html>',
                '<div>Content</div>',
            ],
            'multiline body' => [
                "<html><body>\n<h1>Title</h1>\n<p>Text</p>\n</body></html>",
                "\n<h1>Title</h1>\n<p>Text</p>\n",
            ],
            'missing body' => [
                '<html><head><title>No body</title></head></html>',
                '',
            ],
            'empty body' => [
                '<html><body></body></html>',
                '',
            ],
        ];
    }

    #[Test]
    #[DataProvider('parseDataProvider')]
    public function parseExtractsBody(string $html, string $expected): void
    {
        $context = new RequestContext();
        self::assertSame($expected, $this->subject->parse($html, $context));
    }
}
