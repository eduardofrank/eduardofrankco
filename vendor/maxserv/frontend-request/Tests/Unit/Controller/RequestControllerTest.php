<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\Tests\Unit\Controller;

use MaxServ\FrontendRequest\Controller\RequestController;
use MaxServ\FrontendRequest\Handler\RequestHandler;
use PHPUnit\Framework\Attributes\Test;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class RequestControllerTest extends UnitTestCase
{
    #[Test]
    public function requestActionDelegatesToHandler(): void
    {
        $request = $this->createMock(ServerRequestInterface::class);
        $response = $this->createMock(ResponseInterface::class);

        $handler = $this->createMock(RequestHandler::class);
        $handler->expects(self::once())
            ->method('handle')
            ->with($request)
            ->willReturn($response);

        $controller = new RequestController($handler);
        self::assertSame($response, $controller->requestAction($request));
    }
}
