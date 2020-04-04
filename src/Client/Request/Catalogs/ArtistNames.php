<?php

namespace Viktoras\Scryfall\Client\Request\Catalogs;

use Viktoras\Scryfall\Client\Request\AbstractRequest;

class ArtistNames extends AbstractRequest
{
    /**
     * @return string
     */
    public function getQuery(): string
    {
        return 'catalog/artist-names?' . http_build_query(
                [
                    'format' => $this->format,
                    'pretty' => $this->pretty
                ]
            );
    }
}
