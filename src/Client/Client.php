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

    /**
     * @param string                  $baseUrl
     * @param ClientInterface         $client
     * @param RequestFactoryInterface $requestFactory
     */
    public function __construct(
        $baseUrl,
        ClientInterface $client,
        RequestFactoryInterface $requestFactory
    ) {
        $this->baseUrl        = rtrim($baseUrl, '/') . '/';
        $this->client         = $client;
        $this->requestFactory = $requestFactory;
    }

    /**
     * @param RequestInterface $request
     *
     * @return HttpRequestInterface
     */
    private function createHttpRequest(RequestInterface $request): HttpRequestInterface
    {
        return $this->requestFactory->createRequest(
            $request->getMethod(),
            $this->baseUrl . $request->getQuery()
        );
    }

    /**
     * @param RequestInterface $request
     *
     * @return ResponseInterface
     *
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

        return new $responseClass($body);
    }
}
