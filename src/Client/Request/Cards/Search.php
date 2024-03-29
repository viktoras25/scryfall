<?php

namespace Viktoras\Scryfall\Client\Request\Cards;

use Viktoras\Scryfall\Client\Request\AbstractRequest;
use Viktoras\Scryfall\Client\Request\Traits\Paginatable;

class Search extends AbstractRequest
{
    use Paginatable;

    /** Sorting direction */
    public const SORTING_DIRECTION_AUTO = 'auto';
    public const SORTING_DIRECTION_ASC  = 'asc';
    public const SORTING_DIRECTION_DESC = 'desc';

    /** Sorting order */
    public const SORTING_ORDER_NAME   = 'name';
    public const SORTING_ORDER_CMC    = 'cmc';
    public const SORTING_ORDER_SET    = 'set';
    public const SORTING_ORDER_RARITY = 'rarity';

    /**
     * @var string
     */
    protected $order = self::SORTING_ORDER_NAME;

    /**
     * @var string
     */
    protected $dir = self::SORTING_DIRECTION_AUTO;

    /**
     * @var string
     */
    protected $query;

    public function __construct(string $query)
    {
        $this->query = $query;
    }

    public function getQuery(): string
    {
        return 'cards/search?' . http_build_query(
                [
                    'q'      => $this->query,
                    'order'  => $this->order,
                    'dir'    => $this->dir,
                    'page'   => $this->getPage(),
                    'format' => $this->format,
                    'pretty' => $this->isPretty()
                ]
            );
    }
}
