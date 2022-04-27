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
     * {@inheritdoc}
     */
    protected function acceptsObject(): string
    {
        return Objects::CATALOG;
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function setData(array $data): void
    {
        $this->data = $data;
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function setUri(string $uri): void
    {
        $this->uri = $uri;
    }

    public function getTotalValues(): int
    {
        return $this->totalValues;
    }

    public function setTotalValues(int $totalValues): void
    {
        $this->totalValues = $totalValues;
    }
}
