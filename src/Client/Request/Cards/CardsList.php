<?php

namespace Viktoras\Scryfall\Client\Request\Cards;

use Viktoras\Scryfall\Client\Request\AbstractRequest;

class CardsList extends AbstractRequest
{
    /**
     * @var int
     */
    private $page = 1;

    /**
     * @return string
     */
    public function getQuery(): string
    {
        return 'cards?' . http_build_query(
                [
                    'page'   => $this->page,
                    'format' => $this->format,
                    'pretty' => $this->pretty
                ]
            );
    }
}
