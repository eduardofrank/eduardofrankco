<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\PageParser\Parser;

use MaxServ\FrontendRequest\Dto\RequestContext;
use MaxServ\FrontendRequest\PageParser\ParserInterface;
use MaxServ\FrontendRequest\PageParser\Service\UrlService;

class UrlParser implements ParserInterface
{
    public function __construct(
        protected UrlService $urlService
    ) {}

    public function getIdentifier(): string
    {
        return 'url';
    }

    public function parse(string $html, RequestContext $context): string
    {
        return $this->urlService->getUrl($context);
    }
}
