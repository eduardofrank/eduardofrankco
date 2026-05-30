<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\PageParser\Parser;

use MaxServ\FrontendRequest\Dto\RequestContext;
use MaxServ\FrontendRequest\PageParser\ParserInterface;
use MaxServ\FrontendRequest\PageParser\Service\UrlService;

class FaviconParser implements ParserInterface
{
    public function __construct(
        protected UrlService $urlService
    ) {}

    public function getIdentifier(): string
    {
        return 'favicon';
    }

    public function parse(string $html, RequestContext $context): string
    {
        $baseUrl = $this->urlService->getBaseUrl($context);

        $faviconSrc = $baseUrl . '/favicon.ico';
        $favIconFound = preg_match('/<link rel=\"shortcut icon\" href=\"([^"]*)\"/i', $html, $matchesFavIcon);
        if ($favIconFound) {
            $faviconSrc = str_contains($matchesFavIcon[1], '://') ? $matchesFavIcon[1] : $baseUrl . $matchesFavIcon[1];
        }
        $favIconHeader = @get_headers($faviconSrc);
        if (($favIconHeader[0] ?? '') === 'HTTP/1.1 404 Not Found') {
            $faviconSrc = '';
        }
        return $faviconSrc;
    }
}
