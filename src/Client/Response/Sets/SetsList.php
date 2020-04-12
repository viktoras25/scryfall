<?php

namespace Viktoras\Scryfall\Client\Response\Sets;

use Viktoras\Scryfall\Client\Response\AbstractResponse;
use Viktoras\Scryfall\Entities\ListObject;
use Viktoras\Scryfall\Entities\ObjectInterface;
use Viktoras\Scryfall\Entities\Set;

class SetsList extends AbstractResponse
{
    /**
     * @return ObjectInterface[]|Set[]
     */
    public function getSets(): array
    {
        /** @var ListObject $list */
        $list = $this->getObject();

        return $list->getObjects();
    }
}
