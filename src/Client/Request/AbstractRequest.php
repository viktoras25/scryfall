<?php

namespace Viktoras\Scryfall\Client\Request;

use Viktoras\Scryfall\Enums;

abstract class AbstractRequest implements RequestInterface
{
    /**
     * The data format to return. This method only supports json.
     *
     * @var string
     */
    protected $format = Enums\ResponseFormats::JSON;

    /**
     * If true, the returned JSON will be prettified. Avoid using for production code.
     *
     * @var bool
     */
    protected $pretty = Enums\Boolean::FALSE;

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
