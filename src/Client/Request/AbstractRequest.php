<?php

namespace Viktoras\Scryfall\Client\Request;

use Viktoras\Scryfall\Client\Request\Traits\Prettifyable;
use Viktoras\Scryfall\Enums;

abstract class AbstractRequest implements RequestInterface
{
    use Prettifyable;

    /**
     * The data format to return. This method only supports json.
     *
     * @var string
     */
    protected $format = Enums\ResponseFormats::JSON;

    /**
     * {@inheritdoc}
     */
    public function getMethod(): string
    {
        return 'GET';
    }

    /**
     * {@inheritdoc}
     */
    public function getQuery(): string
    {
        return '';
    }

    /**
     * {@inheritdoc}
     */
    public function getBody(): string
    {
        return '';
    }
}
