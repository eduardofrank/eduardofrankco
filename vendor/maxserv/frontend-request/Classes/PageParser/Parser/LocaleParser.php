<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\PageParser\Parser;

use MaxServ\FrontendRequest\Dto\RequestContext;
use MaxServ\FrontendRequest\PageParser\ParserInterface;

class LocaleParser implements ParserInterface
{
    public function getIdentifier(): string
    {
        return 'locale';
    }

    public function parse(string $html, RequestContext $context): string
    {
        $localeFound = preg_match('/<html[^>]*lang="([a-z\-A-Z]*)"/is', $html, $matchesLocale);
        if ($localeFound) {
            [$locale] = explode('-', trim($matchesLocale[1]));
            return $locale;
        }

        return 'en'; // Default locale if not found
    }
}
