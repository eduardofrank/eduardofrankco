<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\Request;

use GuzzleHttp\Exception\RequestException;
use MaxServ\FrontendRequest\Dto\RequestContext;
use MaxServ\FrontendRequest\Event\ModifyRequestEvent;
use Psr\EventDispatcher\EventDispatcherInterface;
use Psr\Http\Client\ClientInterface;
use TYPO3\CMS\Core\Http\RequestFactory;

class FrontendRequest
{
    public function __construct(
        protected readonly RequestFactory $requestFactory,
        protected readonly ClientInterface $client,
        protected readonly EventDispatcherInterface $eventDispatcher,
    ) {}

    public function getHtmlResponse(RequestContext $context): string
    {
        $request = $this->requestFactory->createRequest('GET', $context->getUrl());

        $event = new ModifyRequestEvent($request, $context);
        $this->eventDispatcher->dispatch($event);

        try {
            $response = $this->client->sendRequest($event->getRequest());
        } catch (RequestException $e) {
            throw new \RuntimeException((string)$e->getCode(), 1748200917, $e);
        }

        if ($response->getStatusCode() !== 200) {
            throw new \RuntimeException((string)$response->getStatusCode());
        }

        return $response->getBody()->getContents();
    }
}
