<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\Event;

use MaxServ\FrontendRequest\Dto\RequestParameters;
use TYPO3\CMS\Core\Site\Entity\Site;

final class ModifyUrlEvent
{
    public function __construct(
        private string $url,
        private readonly Site $site,
        private readonly RequestParameters $parameters
    ) {}

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getSite(): Site
    {
        return $this->site;
    }

    public function getParameters(): RequestParameters
    {
        return $this->parameters;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }
}
