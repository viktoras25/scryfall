<?php

namespace Viktoras\Scryfall\Client\Request;

use Viktoras\Scryfall\Enums;

class SetByCode extends AbstractRequest
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
                'pretty' => $this->pretty
            ]
        );

        return sprintf('sets/%s?%s', $this->code, $queryString);
    }
}
