<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\Event;

use MaxServ\FrontendRequest\Dto\RequestContext;
use Psr\Http\Message\RequestInterface;

final class ModifyRequestEvent
{
    public function __construct(
        protected RequestInterface $request,
        protected readonly RequestContext $context,
    ) {}

    public function getRequest(): RequestInterface
    {
        return $this->request;
    }

    public function setRequest(RequestInterface $request): void
    {
        $this->request = $request;
    }

    public function getContext(): RequestContext
    {
        return $this->context;
    }
}
