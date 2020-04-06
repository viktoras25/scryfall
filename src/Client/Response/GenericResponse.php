<?php

namespace Viktoras\Scryfall\Client\Response;

class GenericResponse extends AbstractResponse
{
    /**
     * @var string
     */
    private $json;

    /**
     * @param string $json
     */
    public function __construct(string $json)
    {
        parent::__construct($json);

        $this->json = $json;
    }

    /**
     * @return string
     */
    public function getRawResponse(): string
    {
        return $this->json;
    }
}
