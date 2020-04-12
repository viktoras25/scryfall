<?php

namespace Viktoras\Scryfall\Client\Request\Cards;

class CardsBySet extends Search
{
    /**
     * @var string
     */
    protected $order = self::SORTING_ORDER_SET;

    /**
     * @var string
     */
    protected $dir = self::SORTING_DIRECTION_ASC;

    /**
     * @param string $setCode
     */
    public function __construct(string $setCode)
    {
        $query = 'set:' . $setCode;

        parent::__construct($query);
    }
}
