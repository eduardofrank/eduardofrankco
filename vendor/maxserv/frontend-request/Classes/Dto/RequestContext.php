<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\Dto;

use TYPO3\CMS\Core\Site\Entity\Site;

class RequestContext
{
    public function __construct(
        protected readonly string $url = '',
        protected readonly ?Site $site = null,
        protected readonly ?RequestParameters $parameters = null,
    ) {}

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getSite(): ?Site
    {
        return $this->site;
    }

    public function getParameters(): ?RequestParameters
    {
        return $this->parameters;
    }
}
