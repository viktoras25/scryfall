<?php

namespace Viktoras\Scryfall\Client\Request;

use Viktoras\Scryfall\Enums;

class SetsList extends AbstractRequest
{
    /**
     * The data format to return. This method only supports json.
     *
     * @var string
     */
    private $format = Enums\Formats::JSON;

    /**
     * If true, the returned JSON will be prettified. Avoid using for production code.
     *
     * @var bool
     */
    private $pretty = Enums\Boolean::FALSE;

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
