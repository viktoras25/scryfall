<?php

namespace Viktoras\Scryfall\Client\Response;

class GenericResponse extends AbstractResponse
{
    /**
     * @var string
     */
    private $json;

    public function __construct(string $json)
    {
        parent::__construct($json);

        $this->json = $json;
    }

    public function getRawResponse(): string
    {
        return $this->json;
    }
}
