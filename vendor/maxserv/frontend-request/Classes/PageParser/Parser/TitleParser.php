<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\PageParser\Parser;

use MaxServ\FrontendRequest\Dto\RequestContext;
use MaxServ\FrontendRequest\PageParser\ParserInterface;

class TitleParser implements ParserInterface
{
    public function getIdentifier(): string
    {
        return 'title';
    }

    public function parse(string $html, RequestContext $context): string
    {
        if (preg_match('/<title>(.*?)<\/title>/i', $html, $matches)) {
            return strip_tags(html_entity_decode($matches[1]));
        }
        return '';
    }
}
