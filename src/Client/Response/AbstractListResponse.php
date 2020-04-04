<?php

namespace Viktoras\Scryfall\Client\Response;

use Viktoras\Scryfall\Entities\ListObject;

class AbstractListResponse extends AbstractResponse
{
    /**
     * @var ListObject
     */
    protected $list;

    /**
     * @param string $json
     */
    public function __construct(string $json)
    {
        $this->list = ListObject::fromJsonString($json);
    }
}
