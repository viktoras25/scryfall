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

    /**
     * @param string $json
     */
    public function __construct(string $json)
    {
        $this->object = (new ObjectFactory())->makeFromString($json);
    }

    /**
     * @return ObjectInterface
     */
    public function getObject(): ObjectInterface
    {
        return $this->object;
    }

    /**
     * @return bool
     */
    public function isErrorResponse(): bool
    {
        return $this instanceof ErrorResponse;
    }
}
