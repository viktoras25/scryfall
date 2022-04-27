<?php

namespace Viktoras\Scryfall\Client;

use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface as HttpRequestInterface;
use Viktoras\Scryfall\Client\Request\RequestInterface;
use Viktoras\Scryfall\Client\Response\ErrorResponse;
use Viktoras\Scryfall\Client\Response\GenericResponse;
use Viktoras\Scryfall\Client\Response\ResponseInterface;

class Client
{
    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * @var RequestFactoryInterface
     */
    private $requestFactory;

    /**
     * @var string
     */
    private $baseUrl;

    public function __construct(
        string $baseUrl,
        ClientInterface $client,
        RequestFactoryInterface $requestFactory
    ) {
        $this->baseUrl        = rtrim($baseUrl, '/') . '/';
        $this->client         = $client;
        $this->requestFactory = $requestFactory;
    }

    private function createHttpRequest(RequestInterface $request): HttpRequestInterface
    {
        return $this->requestFactory->createRequest(
            $request->getMethod(),
            $this->baseUrl . $request->getQuery()
        );
    }

    /**
     * @throws ClientExceptionInterface
     */
    public function request(RequestInterface $request): ResponseInterface
    {
        $response = $this->client->sendRequest(
            $this->createHttpRequest($request)
        );

        $body = $response->getBody()->getContents();

        if ($response->getStatusCode() !== 200) {
            return new ErrorResponse($body);
        }

        $responseClass = str_replace(
            __NAMESPACE__ . '\\Request\\',
            __NAMESPACE__ . '\\Response\\',
            get_class($request)
        );

        if (!class_exists($responseClass)) {
            return new GenericResponse($body);
        }

        /** @var ResponseInterface */
        return new $responseClass($body);
    }
}
