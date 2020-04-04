<?php

namespace Viktoras\Scryfall\Entities;

use Viktoras\Scryfall\Enums;

class Error extends AbstractObject
{
    /**
     * @var string
     */
    private $code;

    /**
     * @var int
     */
    private $status;

    /**
     * @var string
     */
    private $details;

    /**
     * @return string
     */
    protected function acceptsObject(): string
    {
        return Enums\Objects::ERROR;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getDetails(): string
    {
        return $this->details;
    }

    /**
     * @param string $details
     */
    public function setDetails(string $details): void
    {
        $this->details = $details;
    }
}
