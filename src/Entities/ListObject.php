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
    public function getObjects()
    {
        $objectFactory = new ObjectFactory();

        $objects = [];

        foreach ($this->data as $data) {
            $objects[] = $objectFactory->makeFromArray($data);
        }

        return $objects;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return bool
     */
    public function hasMore()
    {
        return $this->hasMore;
    }

    /**
     * @param bool $hasMore
     */
    public function setHasMore($hasMore)
    {
        $this->hasMore = $hasMore;
    }

    /**
     * @return string|null
     */
    public function getNextPage()
    {
        return $this->nextPage;
    }

    /**
     * @param string|null $nextPage
     */
    public function setNextPage($nextPage)
    {
        $this->nextPage = $nextPage;
    }

    /**
     * @return string|null
     */
    public function getTotalCards()
    {
        return $this->totalCards;
    }

    /**
     * @param string|null $totalCards
     */
    public function setTotalCards($totalCards)
    {
        $this->totalCards = $totalCards;
    }

    /**
     * @return array
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * @param array $warnings
     */
    public function setWarnings($warnings)
    {
        $this->warnings = $warnings;
    }
}
