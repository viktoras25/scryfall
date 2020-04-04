<?php

namespace Viktoras\Scryfall\Client\Response;

use Viktoras\Scryfall\Entities\Card;
use Viktoras\Scryfall\Entities\ListObject;

class CardsList extends AbstractResponse
{
    /**
     * @var ListObject
     */
    private $list;

    /**
     * @param string $json
     */
    public function __construct(string $json)
    {
        $this->list = ListObject::fromJsonString($json);
    }

    /**
     * @return Card[]
     */
    public function getCards(): array
    {
        return $this->list->getObjects();
    }
}
