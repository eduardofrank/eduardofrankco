<?php

declare(strict_types=1);

namespace MaxServ\FrontendRequest\Builder;

use MaxServ\FrontendRequest\Dto\RequestParameters;
use Psr\Http\Message\ServerRequestInterface;

class RequestParametersBuilder
{
    public function build(ServerRequestInterface $request): RequestParameters
    {
        $queryParams = $request->getQueryParams();
        if (isset($queryParams['pageId'], $queryParams['languageId'])) {
            return new RequestParameters(
                (int)$queryParams['pageId'],
                (int)$queryParams['languageId'],
                (string)($queryParams['additionalGetVars'] ?? '')
            );
        }

        $json = $this->getJsonPostData($request);
        if (isset($json['pageId'], $json['languageId'])) {
            return new RequestParameters(
                (int)$json['pageId'],
                (int)$json['languageId'],
                (string)($json['additionalGetVars'] ?? '')
            );
        }
        return new RequestParameters();
    }

    /**
     * @return array<string, mixed>
     */
    protected function getJsonPostData(ServerRequestInterface $request): array
    {
        $body = $request->getBody()->getContents();
        if (empty($body)) {
            return [];
        }
        try {
            return json_decode($body, true, 3, JSON_THROW_ON_ERROR);
        } catch (\JsonException) {
            return [];
        }
    }
}
