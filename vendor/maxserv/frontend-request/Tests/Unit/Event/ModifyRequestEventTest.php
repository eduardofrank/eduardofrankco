<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\Tests\Unit\Event;

use MaxServ\FrontendRequest\Dto\RequestContext;
use MaxServ\FrontendRequest\Event\ModifyRequestEvent;
use PHPUnit\Framework\Attributes\Test;
use Psr\Http\Message\RequestInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class ModifyRequestEventTest extends UnitTestCase
{
    #[Test]
    public function gettersReturnConstructorValues(): void
    {
        $request = $this->createMock(RequestInterface::class);
        $context = new RequestContext('https://example.com');
        $event = new ModifyRequestEvent($request, $context);

        self::assertSame($request, $event->getRequest());
        self::assertSame($context, $event->getContext());
    }

    #[Test]
    public function setRequestModifiesRequest(): void
    {
        $originalRequest = $this->createMock(RequestInterface::class);
        $modifiedRequest = $this->createMock(RequestInterface::class);
        $context = new RequestContext('https://example.com');
        $event = new ModifyRequestEvent($originalRequest, $context);

        $event->setRequest($modifiedRequest);
        self::assertSame($modifiedRequest, $event->getRequest());
    }
}
