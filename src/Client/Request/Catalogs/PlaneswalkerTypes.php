<?php

namespace Viktoras\Scryfall\Client\Request\Catalogs;

use Viktoras\Scryfall\Client\Request\AbstractRequest;

class PlaneswalkerTypes extends AbstractRequest
{
    public function getQuery(): string
    {
        return 'catalog/planeswalker-types?' . http_build_query(
                [
                    'format' => $this->format,
                    'pretty' => $this->pretty
                ]
            );
    }
}
