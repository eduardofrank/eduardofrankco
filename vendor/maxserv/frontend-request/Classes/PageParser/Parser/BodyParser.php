<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\PageParser\Parser;

use MaxServ\FrontendRequest\Dto\RequestContext;
use MaxServ\FrontendRequest\PageParser\ParserInterface;

class BodyParser implements ParserInterface
{
    public function getIdentifier(): string
    {
        return 'body';
    }

    public function parse(string $html, RequestContext $context): string
    {
        $bodyFound = preg_match('/<body[^>]*>(.*?)<\/body>/is', $html, $matchesBody);
        if (!$bodyFound) {
            return '';
        }

        return $matchesBody[1];
    }
}
