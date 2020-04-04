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

    /**
     * @return string
     */
    protected function acceptsObject(): string
    {
        return Enums\Objects::RULING;
    }

    /**
     * @return string
     */
    public function getOracleId(): string
    {
        return $this->oracleId;
    }

    /**
     * @param string $oracleId
     */
    public function setOracleId(string $oracleId): void
    {
        $this->oracleId = $oracleId;
    }

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @param string $source
     */
    public function setSource(string $source): void
    {
        $this->source = $source;
    }

    /**
     * @return string
     */
    public function getPublishedAt(): string
    {
        return $this->publishedAt;
    }

    /**
     * @param string $publishedAt
     */
    public function setPublishedAt(string $publishedAt): void
    {
        $this->publishedAt = $publishedAt;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }
}
