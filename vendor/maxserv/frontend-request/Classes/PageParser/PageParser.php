<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\PageParser;

use MaxServ\FrontendRequest\Dto\RequestContext;
use MaxServ\FrontendRequest\Dto\RequestResult;

class PageParser
{
    public function __construct(
        protected readonly ParserCollector $parserCollector,
    ) {}

    public function parsePage(string $content, RequestContext $context): RequestResult
    {
        $result = new RequestResult();
        foreach ($this->parserCollector->getAll() as $parser) {
            $result->addData($parser->getIdentifier(), $parser->parse($content, $context));
        }
        return $result;
    }
}
