<?php

namespace Viktoras\Scryfall\Client\Response;

use Viktoras\Scryfall\Entities\ObjectFactory;
use Viktoras\Scryfall\Entities\ObjectInterface;

abstract class AbstractResponse implements ResponseInterface
{
    /**
     * @var ObjectInterface
     */
    private $object;

    public function __construct(string $json)
    {
        $this->object = (new ObjectFactory())->makeFromString($json);
    }

    public function getObject(): ObjectInterface
    {
        return $this->object;
    }

    public function isErrorResponse(): bool
    {
        return $this instanceof ErrorResponse;
    }
}
