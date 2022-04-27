<?php

namespace Viktoras\Scryfall\Entities;

interface ObjectInterface
{
    public static function fromJsonString(string $json): ObjectInterface;

    public static function fromArray(array $data): ObjectInterface;
}
