<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\Tests\Unit\Dto;

use MaxServ\FrontendRequest\Dto\RequestError;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class RequestErrorTest extends UnitTestCase
{
    #[Test]
    public function jsonSerializeReturnsErrorStructure(): void
    {
        $error = new RequestError('Something went wrong', 'https://example.com', 500);
        self::assertSame([
            'error' => [
                'reason' => 'Something went wrong',
                'url' => 'https://example.com',
                'statusCode' => 500,
            ],
        ], $error->jsonSerialize());
    }

    #[Test]
    public function constructorDefaultValues(): void
    {
        $error = new RequestError('Bad request');
        self::assertSame([
            'error' => [
                'reason' => 'Bad request',
                'url' => '',
                'statusCode' => 400,
            ],
        ], $error->jsonSerialize());
    }

    #[Test]
    public function jsonEncodeProducesExpectedOutput(): void
    {
        $error = new RequestError('Not found', 'https://example.com/page', 404);
        $json = json_encode($error);
        $decoded = json_decode($json, true);

        self::assertSame('Not found', $decoded['error']['reason']);
        self::assertSame('https://example.com/page', $decoded['error']['url']);
        self::assertSame(404, $decoded['error']['statusCode']);
    }
}
