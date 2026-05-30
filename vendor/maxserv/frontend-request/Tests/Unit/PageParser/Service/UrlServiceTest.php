<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\Tests\Unit\PageParser\Service;

use MaxServ\FrontendRequest\Dto\RequestContext;
use MaxServ\FrontendRequest\PageParser\Service\UrlService;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class UrlServiceTest extends UnitTestCase
{
    private UrlService $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = new UrlService();
    }

    /**
     * @return array<string, array{0: string, 1: string}>
     */
    public static function getBaseUrlDataProvider(): array
    {
        return [
            'simple https url' => [
                'https://example.com/page',
                'https://example.com',
            ],
            'http url' => [
                'http://example.com/page',
                'http://example.com',
            ],
            'url with port' => [
                'https://example.com:8080/page',
                'https://example.com:8080',
            ],
            'url with trailing slash' => [
                'https://example.com/',
                'https://example.com',
            ],
        ];
    }

    #[Test]
    #[DataProvider('getBaseUrlDataProvider')]
    public function getBaseUrlReturnsSchemeAndHost(string $url, string $expected): void
    {
        $context = new RequestContext($url);
        self::assertSame($expected, $this->subject->getBaseUrl($context));
    }

    #[Test]
    public function getBaseUrlReturnsFallbackForEmptyUrl(): void
    {
        $context = new RequestContext('');
        self::assertSame('//', $this->subject->getBaseUrl($context));
    }

    /**
     * @return array<string, array{0: string, 1: string}>
     */
    public static function getUrlDataProvider(): array
    {
        return [
            'url with path' => [
                'https://example.com/my/page',
                'https://example.com/my/page',
            ],
            'url with port and path' => [
                'https://example.com:3000/app/page',
                'https://example.com:3000/app/page',
            ],
            'url with trailing slash stripped' => [
                'https://example.com/page/',
                'https://example.com/page',
            ],
        ];
    }

    #[Test]
    #[DataProvider('getUrlDataProvider')]
    public function getUrlReturnsFullUrl(string $url, string $expected): void
    {
        $context = new RequestContext($url);
        self::assertSame($expected, $this->subject->getUrl($context));
    }

    #[Test]
    public function getBaseUrlCachesResult(): void
    {
        $context = new RequestContext('https://example.com/page');

        $first = $this->subject->getBaseUrl($context);
        $second = $this->subject->getBaseUrl($context);

        self::assertSame($first, $second);
        self::assertSame('https://example.com', $first);
    }
}
