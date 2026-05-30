<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\Tests\Unit\Dto;

use MaxServ\FrontendRequest\Dto\RequestParameters;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class RequestParametersTest extends UnitTestCase
{
    #[Test]
    public function constructorSetsDefaults(): void
    {
        $parameters = new RequestParameters();
        self::assertNull($parameters->getPageId());
        self::assertNull($parameters->getLanguageId());
        self::assertNull($parameters->getAdditionalParameters());
    }

    #[Test]
    public function constructorAcceptsValues(): void
    {
        $parameters = new RequestParameters(42, 1, 'tx_news=1');
        self::assertSame(42, $parameters->getPageId());
        self::assertSame(1, $parameters->getLanguageId());
        self::assertSame('tx_news=1', $parameters->getAdditionalParameters());
    }

    #[Test]
    public function setPageIdUpdatesValue(): void
    {
        $parameters = new RequestParameters();
        $parameters->setPageId(10);
        self::assertSame(10, $parameters->getPageId());
    }

    #[Test]
    public function setLanguageIdUpdatesValue(): void
    {
        $parameters = new RequestParameters();
        $parameters->setLanguageId(2);
        self::assertSame(2, $parameters->getLanguageId());
    }

    #[Test]
    public function setAdditionalParametersOverwritesValue(): void
    {
        $parameters = new RequestParameters(1, 0, 'foo=bar');
        $parameters->setAdditionalParameters('baz=qux');
        self::assertSame('baz=qux', $parameters->getAdditionalParameters());
    }

    #[Test]
    public function addAdditionalParametersSetsValueWhenNull(): void
    {
        $parameters = new RequestParameters();
        $parameters->addAdditionalParameters('foo=bar');
        self::assertSame('foo=bar', $parameters->getAdditionalParameters());
    }

    #[Test]
    public function addAdditionalParametersAppendsWithAmpersand(): void
    {
        $parameters = new RequestParameters(1, 0, 'foo=bar');
        $parameters->addAdditionalParameters('baz=qux');
        self::assertSame('foo=bar&baz=qux', $parameters->getAdditionalParameters());
    }

    /**
     * @return array<string, array{0: ?int, 1: ?int, 2: bool}>
     */
    public static function isValidDataProvider(): array
    {
        return [
            'both set' => [1, 0, true],
            'pageId null' => [null, 0, false],
            'languageId null' => [1, null, false],
            'both null' => [null, null, false],
        ];
    }

    #[Test]
    #[DataProvider('isValidDataProvider')]
    public function isValidReturnsExpectedResult(?int $pageId, ?int $languageId, bool $expected): void
    {
        $parameters = new RequestParameters($pageId, $languageId);
        self::assertSame($expected, $parameters->isValid());
    }
}
