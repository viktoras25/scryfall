<?php

namespace Viktoras\Scryfall\Client\Response;

use Viktoras\Scryfall\Entities\Set;

class SetByCode extends AbstractResponse
{
    /**
     * @var Set
     */
    private $set;

    /**
     * @param string $json
     */
    public function __construct(string $json)
    {
        $this->set = Set::fromJsonString($json);
    }

    /**
     * @return Set
     */
    public function getSet(): Set
    {
        return $this->set;
    }
}
