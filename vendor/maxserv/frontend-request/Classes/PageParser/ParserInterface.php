<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\PageParser;

use MaxServ\FrontendRequest\Dto\RequestContext;

interface ParserInterface
{
    public function getIdentifier(): string;

    public function parse(string $html, RequestContext $context): mixed;
}
