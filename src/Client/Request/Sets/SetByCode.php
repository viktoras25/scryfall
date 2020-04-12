<?php

namespace Viktoras\Scryfall\Client\Request\Sets;

use Viktoras\Scryfall\Client\Request\AbstractRequest;

class SetByCode extends AbstractRequest
{
    /**
     * @var string
     */
    private $code;

    /**
     * @param string $code
     */
    public function __construct(string $code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getQuery(): string
    {
        $queryString = http_build_query(
            [
                'format' => $this->format,
                'pretty' => $this->isPretty()
            ]
        );

        return sprintf('sets/%s?%s', $this->code, $queryString);
    }
}
