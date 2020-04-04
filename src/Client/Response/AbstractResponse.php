<?php

namespace Viktoras\Scryfall\Client\Response;

abstract class AbstractResponse implements ResponseInterface
{
    /**
     * @return bool
     */
    public function isErrorResponse(): bool
    {
        return $this instanceof ErrorResponse;
    }
}
