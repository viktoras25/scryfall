<?php

namespace Viktoras\Scryfall\Client\Response\Cards;

use Viktoras\Scryfall\Client\Response\AbstractResponse;
use Viktoras\Scryfall\Entities\Card;
use Viktoras\Scryfall\Entities\ListObject;

class CardsList extends AbstractResponse
{
    /**
     * @return Card[]
     */
    public function getCards(): array
    {
        /** @var ListObject $list */
        $list = $this->getObject();

        return $list->getObjects();
    }
}
