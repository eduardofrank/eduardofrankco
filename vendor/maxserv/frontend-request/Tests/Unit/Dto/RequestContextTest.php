<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\Tests\Unit\Dto;

use MaxServ\FrontendRequest\Dto\RequestContext;
use MaxServ\FrontendRequest\Dto\RequestParameters;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\CMS\Core\Site\Entity\Site;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class RequestContextTest extends UnitTestCase
{
    #[Test]
    public function constructorSetsDefaults(): void
    {
        $context = new RequestContext();
        self::assertSame('', $context->getUrl());
        self::assertNull($context->getSite());
        self::assertNull($context->getParameters());
    }

    #[Test]
    public function constructorAcceptsValues(): void
    {
        $site = new Site('test', 1, []);
        $parameters = new RequestParameters(1, 0);
        $context = new RequestContext('https://example.com/page', $site, $parameters);

        self::assertSame('https://example.com/page', $context->getUrl());
        self::assertSame($site, $context->getSite());
        self::assertSame($parameters, $context->getParameters());
    }
}
