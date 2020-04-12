<?php

namespace Viktoras\Scryfall\Client\Request\Cards;

use Viktoras\Scryfall\Client\Request\AbstractRequest;
use Viktoras\Scryfall\Client\Request\Traits\Paginatable;

class CardsList extends AbstractRequest
{
    use Paginatable;

    /**
     * @return string
     */
    public function getQuery(): string
    {
        return 'cards?' . http_build_query(
                [
                    'page'   => $this->getPage(),
                    'format' => $this->format,
                    'pretty' => $this->isPretty()
                ]
            );
    }
}
