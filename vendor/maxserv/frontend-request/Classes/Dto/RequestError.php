<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\Dto;

class RequestError implements \JsonSerializable
{
    public function __construct(
        protected string $reason,
        protected string $url = '',
        protected int $statusCode = 400,
    ) {}

    /**
     * @return array<string, array{reason: string, url: string, statusCode: int}>
     */
    public function jsonSerialize(): array
    {
        return [
            'error' => [
                'reason' => $this->reason,
                'url' => $this->url,
                'statusCode' => $this->statusCode,
            ],
        ];
    }
}
