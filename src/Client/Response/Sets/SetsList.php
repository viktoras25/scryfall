<?php

namespace Viktoras\Scryfall\Client\Response\Sets;

use Viktoras\Scryfall\Client\Response\AbstractListResponse;
use Viktoras\Scryfall\Entities\Set;

class SetsList extends AbstractListResponse
{
    /**
     * @return Set[]
     */
    public function getSets(): array
    {
        return $this->list->getObjects();
    }
}
