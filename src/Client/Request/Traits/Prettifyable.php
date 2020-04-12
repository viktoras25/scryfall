<?php

namespace Viktoras\Scryfall\Client\Request\Traits;

use Viktoras\Scryfall\Enums;

trait Prettifyable
{
    /**
     * If true, the returned JSON will be prettified. Avoid using for production code.
     *
     * @var string
     */
    protected $pretty = Enums\Boolean::FALSE;

    /**
     * @return string
     */
    public function isPretty(): string
    {
        return $this->pretty;
    }

    /**
     * @param bool $pretty
     */
    public function setPretty(bool $pretty): void
    {
        $this->pretty = $pretty ? Enums\Boolean::TRUE : Enums\Boolean::FALSE;
    }
}
