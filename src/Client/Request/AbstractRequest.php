<?php

namespace Viktoras\Scryfall\Client\Request;

abstract class AbstractRequest implements RequestInterface
{
    /**
     * @inheritDoc
     */
    public function getMethod(): string
    {
        return 'GET';
    }

    /**
     * @inheritDoc
     */
    public function getQuery(): string
    {
        return '';
    }

    /**
     * @inheritDoc
     */
    public function getBody(): string
    {
        return '';
    }
}
