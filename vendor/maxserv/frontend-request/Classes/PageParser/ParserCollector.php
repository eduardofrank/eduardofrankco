<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\PageParser;

class ParserCollector
{
    /** @var ParserInterface[] */
    private array $parsers = [];

    /**
     * @param iterable<ParserInterface> $taggedParsers
     */
    public function __construct(iterable $taggedParsers)
    {
        foreach ($taggedParsers as $parser) {
            $this->parsers[$parser->getIdentifier()] = $parser;
        }
    }

    /**
     * @return array<string, ParserInterface>
     */
    public function getAll(): array
    {
        return $this->parsers;
    }
}
