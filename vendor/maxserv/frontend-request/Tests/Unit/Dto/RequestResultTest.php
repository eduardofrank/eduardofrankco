<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\Tests\Unit\Dto;

use MaxServ\FrontendRequest\Dto\RequestResult;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class RequestResultTest extends UnitTestCase
{
    #[Test]
    public function constructorDefaultsToEmptyData(): void
    {
        $result = new RequestResult();
        self::assertSame([], $result->getData());
    }

    #[Test]
    public function constructorAcceptsInitialData(): void
    {
        $data = ['title' => 'Hello', 'locale' => 'en'];
        $result = new RequestResult($data);
        self::assertSame($data, $result->getData());
    }

    #[Test]
    public function addDataAddsKeyValuePair(): void
    {
        $result = new RequestResult();
        $result->addData('title', 'Test Page');
        self::assertSame(['title' => 'Test Page'], $result->getData());
    }

    #[Test]
    public function addDataOverwritesExistingKey(): void
    {
        $result = new RequestResult(['title' => 'Old']);
        $result->addData('title', 'New');
        self::assertSame(['title' => 'New'], $result->getData());
    }

    #[Test]
    public function jsonSerializeReturnsDataArray(): void
    {
        $data = ['title' => 'Page', 'locale' => 'en'];
        $result = new RequestResult($data);
        self::assertSame($data, $result->jsonSerialize());
    }

    #[Test]
    public function jsonEncodeProducesExpectedOutput(): void
    {
        $result = new RequestResult(['title' => 'Test']);
        self::assertSame('{"title":"Test"}', json_encode($result));
    }
}
