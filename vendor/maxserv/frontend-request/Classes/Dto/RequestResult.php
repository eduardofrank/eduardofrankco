<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\Dto;

class RequestResult implements \JsonSerializable
{
    /**
     * @param array<string, mixed> $data
     */
    public function __construct(
        protected array $data = [],
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function getData(): array
    {
        return $this->data;
    }

    public function addData(string $key, mixed $value): void
    {
        $this->data[$key] = $value;
    }

    /**
     * @return array<string, mixed>
     */
    public function jsonSerialize(): array
    {
        return $this->data;
    }
}
