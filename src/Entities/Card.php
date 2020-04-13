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

    /**
     * @return string
     */
    protected function acceptsObject(): string
    {
        return Enums\Objects::CARD;
    }

    /**
     * @return int|null
     */
    public function getArenaId(): ?int
    {
        return $this->arenaId;
    }

    /**
     * @param int $arenaId
     */
    public function setArenaId(int $arenaId): void
    {
        $this->arenaId = $arenaId;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getLang(): string
    {
        return $this->lang;
    }

    /**
     * @param string $lang
     */
    public function setLang(string $lang): void
    {
        $this->lang = $lang;
    }

    /**
     * @return float
     */
    public function getCmc(): float
    {
        return $this->cmc;
    }

    /**
     * @param float $cmc
     */
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

    /**
     * @return array
     */
    public function getLegalities(): array
    {
        return $this->legalities;
    }

    /**
     * @param array $legalities
     */
    public function setLegalities(array $legalities): void
    {
        $this->legalities = $legalities;
    }

    /**
     * @return string|null
     */
    public function getLoyalty(): ?string
    {
        return $this->loyalty;
    }

    /**
     * @param string $loyalty
     */
    public function setLoyalty(string $loyalty): void
    {
        $this->loyalty = $loyalty;
    }

    /**
     * @return string
     */
    public function getManaCost(): string
    {
        return $this->manaCost;
    }

    /**
     * @param string $manaCost
     */
    public function setManaCost(string $manaCost): void
    {
        $this->manaCost = $manaCost;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getOracleText(): string
    {
        return $this->oracleText;
    }

    /**
     * @param string $oracleText
     */
    public function setOracleText(string $oracleText): void
    {
        $this->oracleText = $oracleText;
    }

    /**
     * @return string
     */
    public function getPower(): string
    {
        return $this->power;
    }

    /**
     * @param string $power
     */
    public function setPower(string $power): void
    {
        $this->power = $power;
    }

    /**
     * @return string
     */
    public function getToughness(): string
    {
        return $this->toughness;
    }

    /**
     * @param string $toughness
     */
    public function setToughness(string $toughness): void
    {
        $this->toughness = $toughness;
    }

    /**
     * @return string
     */
    public function getArtist(): string
    {
        return $this->artist;
    }

    /**
     * @param string $artist
     */
    public function setArtist(string $artist): void
    {
        $this->artist = $artist;
    }

    /**
     * @return string
     */
    public function getSet(): string
    {
        return $this->set;
    }

    /**
     * @param string $set
     */
    public function setSet(string $set): void
    {
        $this->set = $set;
    }

    /**
     * @return int
     */
    public function getCollectorNumber(): int
    {
        return $this->collectorNumber;
    }

    /**
     * @param int $collectorNumber
     */
    public function setCollectorNumber(int $collectorNumber): void
    {
        $this->collectorNumber = $collectorNumber;
    }

    /**
     * @return array
     */
    public function getImageUris(): array
    {
        return $this->imageUris;
    }

    /**
     * @param array $imageUris
     */
    public function setImageUris(array $imageUris): void
    {
        $this->imageUris = $imageUris;
    }
}
