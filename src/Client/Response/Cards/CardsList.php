<?php

namespace Viktoras\Scryfall\Client\Response\Cards;

use Viktoras\Scryfall\Client\Response\AbstractListResponse;
use Viktoras\Scryfall\Entities\Card;

class CardsList extends AbstractListResponse
{
    /**
     * @return Card[]
     */
    public function getCards(): array
    {
        return $this->list->getObjects();
    }
}
