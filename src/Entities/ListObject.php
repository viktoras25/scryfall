<?php

namespace Viktoras\Scryfall\Entities;

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
     * @inheritDoc
     */
    protected function acceptsObject(): string
    {
        return 'list';
    }

    /**
     * @param array $data
     *
     * @return ObjectInterface
     */
    public static function fromArray(array $data): ObjectInterface
    {
        $instance = new static();

        if (!empty($data['next_page'])) {
            $instance->setNextPage($data['next_page']);
        }

        if (!empty($data['data'])) {
            $instance->setData($data['data']);
        }

        if (!empty($data['total_cards'])) {
            $instance->setTotalCards($data['total_cards']);
        }

        if (!empty($data['warnings'])) {
            $instance->setTotalCards($data['warnings']);
        }

        return $instance;
    }

    /**
     * @return ObjectInterface[]
     */
    public function getObjects(): array
    {
        $objectFactory = new ObjectFactory();

        $objects = [];

        foreach ($this->data as $data) {
            $objects[] = $objectFactory->make($data);
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
    public function isHasMore()
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
