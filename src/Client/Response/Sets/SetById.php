<?php

namespace Viktoras\Scryfall\Client\Response\Sets;

use Viktoras\Scryfall\Client\Response\AbstractResponse;
use Viktoras\Scryfall\Entities\Set;

class SetById extends AbstractResponse
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
