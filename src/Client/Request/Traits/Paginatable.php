<?php

namespace Viktoras\Scryfall\Client\Request\Traits;

trait Paginatable
{
    /**
     * @var int
     */
    protected $page = 1;

    public function getPage(): int
    {
        return $this->page;
    }

    public function setPage(int $page): void
    {
        $this->page = $page;
    }

    /**
     * @return static
     */
    public function makeNextPageRequest()
    {
        $request = clone $this;
        $request->setPage($this->page++);

        return $request;
    }
}
