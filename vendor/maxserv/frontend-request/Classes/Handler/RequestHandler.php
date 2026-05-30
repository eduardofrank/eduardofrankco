<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\Handler;

use MaxServ\FrontendRequest\Builder\RequestContextBuilder;
use MaxServ\FrontendRequest\Builder\RequestParametersBuilder;
use MaxServ\FrontendRequest\Dto\RequestError;
use MaxServ\FrontendRequest\Dto\RequestResult;
use MaxServ\FrontendRequest\PageParser\PageParser;
use MaxServ\FrontendRequest\Request\FrontendRequest;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class RequestHandler
{
    public function __construct(
        protected readonly RequestParametersBuilder $parametersBuilder,
        protected readonly RequestContextBuilder $contextBuilder,
        protected readonly FrontendRequest $frontendRequest,
        protected readonly PageParser $pageParser,
        protected readonly ResponseFactoryInterface $responseFactory
    ) {}

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $parameters = $this->parametersBuilder->build($request);
        if (!$parameters->isValid()) {
            return $this->jsonResponse(new RequestError('Invalid request parameters'), 400);
        }

        $context = $this->contextBuilder->build($parameters);
        try {
            $html = $this->frontendRequest->getHtmlResponse($context);
            $data = $this->pageParser->parsePage($html, $context);
        } catch (\Exception $e) {
            $data = new RequestError('Request failed', $context->getUrl(), (int)$e->getMessage());
        }

        return $this->jsonResponse($data);
    }

    protected function jsonResponse(RequestResult|RequestError $data, int $statusCode = 200): ResponseInterface
    {
        $response = $this->responseFactory->createResponse()->withHeader(
            'Content-Type',
            'application/json; charset=utf-8'
        )->withStatus($statusCode);
        $response->getBody()->write(
            json_encode($data, JSON_THROW_ON_ERROR),
        );
        return $response;
    }
}
