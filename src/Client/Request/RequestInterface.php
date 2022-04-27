<?php

namespace Viktoras\Scryfall\Client\Request;

interface RequestInterface
{
    public function getMethod(): string;

    public function getQuery(): string;

    public function getBody(): string;
}
