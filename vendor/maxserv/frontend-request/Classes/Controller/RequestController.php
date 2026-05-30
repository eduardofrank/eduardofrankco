<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\Controller;

use MaxServ\FrontendRequest\Handler\RequestHandler;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class RequestController
{
    public function __construct(
        protected readonly RequestHandler $requestHandler
    ) {}

    public function requestAction(
        ServerRequestInterface $request
    ): ResponseInterface {
        return $this->requestHandler->handle($request);
    }
}
