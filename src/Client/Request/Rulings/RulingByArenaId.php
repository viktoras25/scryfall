<?php

namespace Viktoras\Scryfall\Client\Request\Rulings;

use Viktoras\Scryfall\Client\Request\AbstractRequest;

class RulingByArenaId extends AbstractRequest
{
    /**
     * @var string
     */
    private $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function getQuery(): string
    {
        $queryString = http_build_query(
            [
                'format' => $this->format,
                'pretty' => $this->pretty
            ]
        );

        return sprintf('cards/arena/%s/rulings?%s', $this->id, $queryString);
    }
}
