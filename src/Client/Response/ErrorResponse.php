<?php

namespace Viktoras\Scryfall\Client\Response;

use Viktoras\Scryfall\Entities\Error;
use Viktoras\Scryfall\Entities\ObjectInterface;

class ErrorResponse extends AbstractResponse
{
    /**
     * @return Error|ObjectInterface
     */
    public function getError(): Error
    {
        return $this->getObject();
    }
}
