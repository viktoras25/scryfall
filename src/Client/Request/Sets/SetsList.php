<?php

namespace Viktoras\Scryfall\Client\Request\Sets;

use Viktoras\Scryfall\Client\Request\AbstractRequest;

class SetsList extends AbstractRequest
{
    /**
     * @return string
     */
    public function getQuery(): string
    {
        return 'sets?' . http_build_query(
                [
                    'format' => $this->format,
                    'pretty' => $this->pretty
                ]
            );
    }
}
