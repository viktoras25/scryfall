<?php

namespace Viktoras\Scryfall\Client\Response\Sets;

use Viktoras\Scryfall\Client\Response\AbstractResponse;
use Viktoras\Scryfall\Entities\ObjectInterface;
use Viktoras\Scryfall\Entities\Set;

class SetById extends AbstractResponse
{
    /**
     * @return Set|ObjectInterface
     */
    public function getSet(): Set
    {
        return $this->getObject();
    }
}
