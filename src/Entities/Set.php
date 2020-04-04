<?php

namespace Viktoras\Scryfall\Entities;

use Viktoras\Scryfall\Enums;
use DateTimeInterface;

class Set extends AbstractObject
{
    /**
     * @var string UUID
     */
    private $id;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string|null
     */
    private $mtgoCode;

    /**
     * @var string|null
     */
    private $tcgplayerId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $setType;

    /**
     * @var DateTimeInterface|null
     */
    private $releasedAt;

    /**
     * @var string|null
     */
    private $blockCode;

    /**
     * @var string|null
     */
    private $parentSetCode;

    /**
     * @var int
     */
    private $cardCount;

    /**
     * @var bool
     */
    private $digital;

    /**
     * @var bool
     */
    private $foilOnly;

    /**
     * @var string
     */
    private $scryfallUri;

    /**
     * @var string
     */
    private $uri;

    /**
     * @var string
     */
    private $iconSvgUri;

    /**
     * @var string
     */
    private $searchUri;


    /**
     * @return string
     */
    protected function acceptsObject(): string
    {
        return Enums\Objects::SET;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string|null
     */
    public function getMtgoCode()
    {
        return $this->mtgoCode;
    }

    /**
     * @param string|null $mtgoCode
     */
    public function setMtgoCode($mtgoCode)
    {
        $this->mtgoCode = $mtgoCode;
    }

    /**
     * @return string|null
     */
    public function getTcglayerId()
    {
        return $this->tcgplayerId;
    }

    /**
     * @param string|null $tcgplayerId
     */
    public function setTcgplayerId($tcgplayerId)
    {
        $this->tcgplayerId = $tcgplayerId;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSetType()
    {
        return $this->setType;
    }

    /**
     * @param string $setType
     */
    public function setSetType($setType)
    {
        $this->setType = $setType;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getReleasedAt()
    {
        return $this->releasedAt;
    }

    /**
     * @param DateTimeInterface|null $releasedAt
     */
    public function setReleasedAt($releasedAt)
    {
        $this->releasedAt = $releasedAt;
    }

    /**
     * @return string|null
     */
    public function getBlockCode()
    {
        return $this->blockCode;
    }

    /**
     * @param string|null $blockCode
     */
    public function setBlockCode($blockCode)
    {
        $this->blockCode = $blockCode;
    }

    /**
     * @return string|null
     */
    public function getParentSetCode()
    {
        return $this->parentSetCode;
    }

    /**
     * @param string|null $parentSetCode
     */
    public function setParentSetCode($parentSetCode)
    {
        $this->parentSetCode = $parentSetCode;
    }

    /**
     * @return int
     */
    public function getCardCount()
    {
        return $this->cardCount;
    }

    /**
     * @param int $cardCount
     */
    public function setCardCount($cardCount)
    {
        $this->cardCount = $cardCount;
    }

    /**
     * @return bool
     */
    public function isDigital()
    {
        return $this->digital;
    }

    /**
     * @param bool $digital
     */
    public function setDigital($digital)
    {
        $this->digital = $digital;
    }

    /**
     * @return bool
     */
    public function isFoilOnly()
    {
        return $this->foilOnly;
    }

    /**
     * @param bool $foilOnly
     */
    public function setFoilOnly($foilOnly)
    {
        $this->foilOnly = $foilOnly;
    }

    /**
     * @return string
     */
    public function getScryfallUri()
    {
        return $this->scryfallUri;
    }

    /**
     * @param string $scryfallUri
     */
    public function setScryfallUri($scryfallUri)
    {
        $this->scryfallUri = $scryfallUri;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
    }

    /**
     * @return string
     */
    public function getIconSvgUri()
    {
        return $this->iconSvgUri;
    }

    /**
     * @param string $iconSvgUri
     */
    public function setIconSvgUri($iconSvgUri)
    {
        $this->iconSvgUri = $iconSvgUri;
    }

    /**
     * @return string
     */
    public function getSearchUri()
    {
        return $this->searchUri;
    }

    /**
     * @param string $searchUri
     */
    public function setSearchUri($searchUri)
    {
        $this->searchUri = $searchUri;
    }
}
