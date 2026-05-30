<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\Tests\Unit\Event;

use MaxServ\FrontendRequest\Dto\RequestParameters;
use MaxServ\FrontendRequest\Event\ModifyUrlEvent;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\CMS\Core\Site\Entity\Site;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class ModifyUrlEventTest extends UnitTestCase
{
    #[Test]
    public function gettersReturnConstructorValues(): void
    {
        $site = new Site('test', 1, []);
        $parameters = new RequestParameters(1, 0);
        $event = new ModifyUrlEvent('https://example.com', $site, $parameters);

        self::assertSame('https://example.com', $event->getUrl());
        self::assertSame($site, $event->getSite());
        self::assertSame($parameters, $event->getParameters());
    }

    #[Test]
    public function setUrlModifiesUrl(): void
    {
        $site = new Site('test', 1, []);
        $parameters = new RequestParameters(1, 0);
        $event = new ModifyUrlEvent('https://example.com', $site, $parameters);

        $event->setUrl('https://modified.com/page');
        self::assertSame('https://modified.com/page', $event->getUrl());
    }
}
