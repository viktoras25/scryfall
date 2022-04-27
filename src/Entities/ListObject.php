<?php

namespace Viktoras\Scryfall\Entities;

use Viktoras\Scryfall\Enums\Objects;

class ListObject extends AbstractObject
{
    /**
     * @var array
     */
    private $data;

    /**
     * @var bool
     */
    private $hasMore;

    /**
     * @var string|null
     */
    private $nextPage;

    /**
     * @var string|null
     */
    private $totalCards;

    /**
     * @var array
     */
    private $warnings;

    /**
     * {@inheritdoc}
     */
    protected function acceptsObject(): string
    {
        return Objects::LIST;
    }

    /**
     * @return ObjectInterface[]
     */
    public function getObjects(): array
    {
        $objectFactory = new ObjectFactory();

        $objects = [];

        foreach ($this->data as $data) {
            $objects[] = $objectFactory->makeFromArray($data);
        }

        return $objects;
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function setData(array $data): void
    {
        $this->data = $data;
    }

    public function hasMore(): bool
    {
        return $this->hasMore;
    }

    public function setHasMore(bool $hasMore): void
    {
        $this->hasMore = $hasMore;
    }

    public function getNextPage(): ?string
    {
        return $this->nextPage;
    }

    public function setNextPage(?string $nextPage): void
    {
        $this->nextPage = $nextPage;
    }

    public function getTotalCards(): ?string
    {
        return $this->totalCards;
    }

    public function setTotalCards(?string $totalCards): void
    {
        $this->totalCards = $totalCards;
    }

    public function getWarnings(): array
    {
        return $this->warnings;
    }

    public function setWarnings(array $warnings): void
    {
        $this->warnings = $warnings;
    }
}
