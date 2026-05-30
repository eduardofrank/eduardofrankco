<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\PageParser\Parser;

use MaxServ\FrontendRequest\Dto\RequestContext;
use MaxServ\FrontendRequest\PageParser\ParserInterface;

class MetadataParser implements ParserInterface
{
    public function getIdentifier(): string
    {
        return 'metadata';
    }

    /**
     * @return array<string, string>
     */
    public function parse(string $html, RequestContext $context): array
    {
        $metadata = [];
        if (preg_match_all('/<meta\s+name="([^"]+)"\s+content="([^"]*)"/i', $html, $matches, PREG_SET_ORDER)) {
            foreach ($matches as $match) {
                $metadata[$match[1]] = $match[2];
            }
        }
        return $metadata;
    }
}
