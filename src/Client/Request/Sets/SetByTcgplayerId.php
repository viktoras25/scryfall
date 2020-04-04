<?php

namespace Viktoras\Scryfall\Client\Request\Sets;

use Viktoras\Scryfall\Client\Request\AbstractRequest;

class SetByTcgplayerId extends AbstractRequest
{
    /**
     * @var string
     */
    private $id;

    /**
     * @param string $id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getQuery(): string
    {
        $queryString = http_build_query(
            [
                'format' => $this->format,
                'pretty' => $this->pretty
            ]
        );

        return sprintf('sets/tcgplayer/%s?%s', $this->id, $queryString);
    }
}
