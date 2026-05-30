<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\Tests\Unit\PageParser\Parser;

use MaxServ\FrontendRequest\Dto\RequestContext;
use MaxServ\FrontendRequest\PageParser\Parser\MetadataParser;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class MetadataParserTest extends UnitTestCase
{
    private MetadataParser $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = new MetadataParser();
    }

    #[Test]
    public function getIdentifierReturnsMetadata(): void
    {
        self::assertSame('metadata', $this->subject->getIdentifier());
    }

    #[Test]
    public function parseExtractsMultipleMetaTags(): void
    {
        $html = '<html><head>'
            . '<meta name="description" content="A test page">'
            . '<meta name="keywords" content="test,page">'
            . '<meta name="author" content="John">'
            . '</head></html>';

        $context = new RequestContext();
        $result = $this->subject->parse($html, $context);

        self::assertSame([
            'description' => 'A test page',
            'keywords' => 'test,page',
            'author' => 'John',
        ], $result);
    }

    #[Test]
    public function parseReturnsEmptyArrayWhenNoMetaTags(): void
    {
        $html = '<html><head><title>No meta</title></head></html>';
        $context = new RequestContext();
        self::assertSame([], $this->subject->parse($html, $context));
    }

    #[Test]
    public function parseHandlesEmptyContent(): void
    {
        $html = '<html><head><meta name="robots" content=""></head></html>';
        $context = new RequestContext();
        $result = $this->subject->parse($html, $context);

        self::assertSame(['robots' => ''], $result);
    }

    #[Test]
    public function parseIgnoresMetaTagsWithoutNameAttribute(): void
    {
        $html = '<html><head>'
            . '<meta charset="utf-8">'
            . '<meta http-equiv="X-UA-Compatible" content="IE=edge">'
            . '<meta name="viewport" content="width=device-width">'
            . '</head></html>';

        $context = new RequestContext();
        $result = $this->subject->parse($html, $context);

        self::assertSame(['viewport' => 'width=device-width'], $result);
    }
}
