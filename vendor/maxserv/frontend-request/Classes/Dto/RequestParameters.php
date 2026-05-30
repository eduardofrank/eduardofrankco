<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\Dto;

class RequestParameters
{
    public function __construct(
        protected ?int $pageId = null,
        protected ?int $languageId = null,
        protected ?string $additionalParameters = null,
    ) {}

    public function getPageId(): ?int
    {
        return $this->pageId;
    }

    public function setPageId(int $pageId): void
    {
        $this->pageId = $pageId;
    }

    public function getLanguageId(): ?int
    {
        return $this->languageId;
    }

    public function setLanguageId(int $languageId): void
    {
        $this->languageId = $languageId;
    }

    public function getAdditionalParameters(): ?string
    {
        return $this->additionalParameters;
    }

    public function setAdditionalParameters(string $additionalParameters): void
    {
        $this->additionalParameters = $additionalParameters;
    }

    public function addAdditionalParameters(string $additionalParameters): void
    {
        if ($this->additionalParameters === null) {
            $this->additionalParameters = $additionalParameters;
        } else {
            $this->additionalParameters .= '&' . $additionalParameters;
        }
    }

    public function isValid(): bool
    {
        return $this->pageId !== null && $this->languageId !== null;
    }
}
