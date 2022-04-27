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

    protected function acceptsObject(): string
    {
        return Enums\Objects::ERROR;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    public function getDetails(): string
    {
        return $this->details;
    }

    public function setDetails(string $details): void
    {
        $this->details = $details;
    }
}
