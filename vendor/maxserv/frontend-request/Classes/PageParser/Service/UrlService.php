<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\PageParser\Service;

use MaxServ\FrontendRequest\Dto\RequestContext;

class UrlService
{
    /**
     * @var array<string, string>
     */
    protected array $baseUrls = [];

    public function getBaseUrl(RequestContext $context): string
    {
        if (isset($this->baseUrls[$context->getUrl()])) {
            return $this->baseUrls[$context->getUrl()];
        }
        $urlParts = $this->getUrlParts($context);
        if (!is_array($urlParts)) {
            return '://';
        }
        if ($urlParts['port'] ?? false) {
            return (isset($urlParts['scheme']) ? $urlParts['scheme'] . ':' : '') . '//' . ($urlParts['host'] ?? '') . ':' . $urlParts['port'];
        }
        return (isset($urlParts['scheme']) ? $urlParts['scheme'] . ':' : '') . '//' . ($urlParts['host'] ?? '');
    }

    public function getUrl(RequestContext $context): string
    {
        $urlParts = $this->getUrlParts($context);
        $baseUrl = $this->getBaseUrl($context);
        return $baseUrl . ($urlParts['path'] ?? '');
    }

    /**
     * @return array<string, int|string>|null
     */
    protected function getUrlParts(RequestContext $context): ?array
    {
        $urlParts = parse_url((string)preg_replace('/\/$/', '', $context->getUrl()));
        return is_array($urlParts) ? $urlParts : null;
    }
}
