<?php

namespace Viktoras\Scryfall\Client\Response;

use Viktoras\Scryfall\Entities\ListObject;
use Viktoras\Scryfall\Entities\Set;

class SetsList extends AbstractResponse
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
     * @return Set[]
     */
    public function getSets(): array
    {
        return $this->list->getObjects();
    }
}
