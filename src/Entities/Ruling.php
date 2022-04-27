<?php

namespace Viktoras\Scryfall\Entities;

use Viktoras\Scryfall\Enums;

class Ruling extends AbstractObject
{
    /**
     * @var string
     */
    private $oracleId;

    /**
     * @var string
     */
    private $source;

    /**
     * @var string
     */
    private $publishedAt;

    /**
     * @var string
     */
    private $comment;

    protected function acceptsObject(): string
    {
        return Enums\Objects::RULING;
    }

    public function getOracleId(): string
    {
        return $this->oracleId;
    }

    public function setOracleId(string $oracleId): void
    {
        $this->oracleId = $oracleId;
    }

    public function getSource(): string
    {
        return $this->source;
    }

    public function setSource(string $source): void
    {
        $this->source = $source;
    }

    public function getPublishedAt(): string
    {
        return $this->publishedAt;
    }

    public function setPublishedAt(string $publishedAt): void
    {
        $this->publishedAt = $publishedAt;
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }
}
