<?php

namespace Viktoras\Scryfall\Entities;

use Viktoras\Scryfall\Enums;

class Card extends AbstractObject
{
    /**
     * This card’s Arena ID, if any. A large percentage of cards are not available on Arena and do not have this ID.
     *
     * @var int
     */
    private $arenaId;

    /**
     * A unique ID for this card in Scryfall’s database.
     *
     * @var string
     */
    private $id;

    /**
     * A language code for this printing.
     *
     * @var string
     */
    private $lang;

    /**
     * @var float
     */
    private $cmc;

    /**
     * @var string[]
     */
    private $colors;

    /**
     * @var array
     */
    private $legalities;

    /**
     * @var string
     */
    private $loyalty;

    /**
     * @var string
     */
    private $manaCost;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $oracleText;

    /**
     * @var string
     */
    private $power;

    /**
     * @var string
     */
    private $toughness;

    /**
     * @var string
     */
    private $artist;

    /**
     * @var string
     */
    private $set;

    /**
     * @var int
     */
    private $collectorNumber;

    /**
     * @var array
     */
    private $imageUris;

    protected function acceptsObject(): string
    {
        return Enums\Objects::CARD;
    }

    public function getArenaId(): ?int
    {
        return $this->arenaId;
    }

    public function setArenaId(int $arenaId): void
    {
        $this->arenaId = $arenaId;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getLang(): string
    {
        return $this->lang;
    }

    public function setLang(string $lang): void
    {
        $this->lang = $lang;
    }

    public function getCmc(): float
    {
        return $this->cmc;
    }

    public function setCmc(float $cmc): void
    {
        $this->cmc = $cmc;
    }

    /**
     * @return string[]
     */
    public function getColors(): array
    {
        return $this->colors;
    }

    /**
     * @param string[] $colors
     */
    public function setColors(array $colors): void
    {
        $this->colors = $colors;
    }

    public function getLegalities(): array
    {
        return $this->legalities;
    }

    public function setLegalities(array $legalities): void
    {
        $this->legalities = $legalities;
    }

    public function getLoyalty(): ?string
    {
        return $this->loyalty;
    }

    public function setLoyalty(string $loyalty): void
    {
        $this->loyalty = $loyalty;
    }

    public function getManaCost(): string
    {
        return $this->manaCost;
    }

    public function setManaCost(string $manaCost): void
    {
        $this->manaCost = $manaCost;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getOracleText(): string
    {
        return $this->oracleText;
    }

    public function setOracleText(string $oracleText): void
    {
        $this->oracleText = $oracleText;
    }

    public function getPower(): string
    {
        return $this->power;
    }

    public function setPower(string $power): void
    {
        $this->power = $power;
    }

    public function getToughness(): string
    {
        return $this->toughness;
    }

    public function setToughness(string $toughness): void
    {
        $this->toughness = $toughness;
    }

    public function getArtist(): string
    {
        return $this->artist;
    }

    public function setArtist(string $artist): void
    {
        $this->artist = $artist;
    }

    public function getSet(): string
    {
        return $this->set;
    }

    public function setSet(string $set): void
    {
        $this->set = $set;
    }

    public function getCollectorNumber(): int
    {
        return $this->collectorNumber;
    }

    public function setCollectorNumber(int $collectorNumber): void
    {
        $this->collectorNumber = $collectorNumber;
    }

    public function getImageUris(): array
    {
        return $this->imageUris;
    }

    public function setImageUris(array $imageUris): void
    {
        $this->imageUris = $imageUris;
    }
}
