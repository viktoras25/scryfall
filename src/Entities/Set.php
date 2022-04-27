<?php

namespace Viktoras\Scryfall\Entities;

use DateTimeInterface;
use Viktoras\Scryfall\Enums;

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

    protected function acceptsObject(): string
    {
        return Enums\Objects::SET;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function getMtgoCode(): ?string
    {
        return $this->mtgoCode;
    }

    public function setMtgoCode(?string $mtgoCode): void
    {
        $this->mtgoCode = $mtgoCode;
    }

    public function getTcglayerId(): ?string
    {
        return $this->tcgplayerId;
    }

    public function setTcgplayerId(?string $tcgplayerId): void
    {
        $this->tcgplayerId = $tcgplayerId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getSetType(): string
    {
        return $this->setType;
    }

    public function setSetType(string $setType): void
    {
        $this->setType = $setType;
    }

    public function getReleasedAt(): ?DateTimeInterface
    {
        return $this->releasedAt;
    }

    public function setReleasedAt(?DateTimeInterface $releasedAt): void
    {
        $this->releasedAt = $releasedAt;
    }

    public function getBlockCode(): ?string
    {
        return $this->blockCode;
    }

    public function setBlockCode(?string $blockCode): void
    {
        $this->blockCode = $blockCode;
    }

    public function getParentSetCode(): ?string
    {
        return $this->parentSetCode;
    }

    public function setParentSetCode(?string $parentSetCode): void
    {
        $this->parentSetCode = $parentSetCode;
    }

    public function getCardCount(): int
    {
        return $this->cardCount;
    }

    public function setCardCount(int $cardCount): void
    {
        $this->cardCount = $cardCount;
    }

    public function isDigital(): bool
    {
        return $this->digital;
    }

    public function setDigital(bool $digital): void
    {
        $this->digital = $digital;
    }

    public function isFoilOnly(): bool
    {
        return $this->foilOnly;
    }

    public function setFoilOnly(bool $foilOnly): void
    {
        $this->foilOnly = $foilOnly;
    }

    public function getScryfallUri(): string
    {
        return $this->scryfallUri;
    }

    public function setScryfallUri(string $scryfallUri): void
    {
        $this->scryfallUri = $scryfallUri;
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function setUri(string $uri): void
    {
        $this->uri = $uri;
    }

    public function getIconSvgUri(): string
    {
        return $this->iconSvgUri;
    }

    public function setIconSvgUri(string $iconSvgUri): void
    {
        $this->iconSvgUri = $iconSvgUri;
    }

    public function getSearchUri(): string
    {
        return $this->searchUri;
    }

    public function setSearchUri(string $searchUri): void
    {
        $this->searchUri = $searchUri;
    }
}
