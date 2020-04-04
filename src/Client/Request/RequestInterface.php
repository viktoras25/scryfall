<?php

namespace Viktoras\Scryfall\Client\Request;

interface RequestInterface
{
    /**
     * @return string
     */
    public function getMethod(): string;

    /**
     * @return string
     */
    public function getQuery(): string;

    /**
     * @return string
     */
    public function getBody(): string;
}
