<?php

namespace Viktoras\Scryfall\Entities;

use Viktoras\Scryfall\Enums\Objects;

class Catalog extends AbstractObject
{
    /**
     * @var array
     */
    private $data;

    /**
     * @var string
     */
    private $uri;

    /**
     * @var int
     */
    private $totalValues;

    /**
     * @inheritDoc
     */
    protected function acceptsObject(): string
    {
        return Objects::CATALOG;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData(array $data): void
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     */
    public function setUri(string $uri): void
    {
        $this->uri = $uri;
    }

    /**
     * @return int
     */
    public function getTotalValues(): int
    {
        return $this->totalValues;
    }

    /**
     * @param int $totalValues
     */
    public function setTotalValues(int $totalValues): void
    {
        $this->totalValues = $totalValues;
    }
}
