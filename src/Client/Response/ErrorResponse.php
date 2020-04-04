<?php

namespace Viktoras\Scryfall\Client\Response;

use Viktoras\Scryfall\Entities\Error;

class ErrorResponse extends AbstractResponse
{
    /**
     * @var Error
     */
    private $error;

    /**
     * @param string $json
     */
    public function __construct(string $json)
    {
        $this->error = Error::fromJsonString($json);
    }

    /**
     * @return Error
     */
    public function getError(): Error
    {
        return $this->error;
    }
}
