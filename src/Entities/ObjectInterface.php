<?php

namespace Viktoras\Scryfall\Entities;

interface ObjectInterface
{
    /**
     * @param string $json
     *
     * @return ObjectInterface
     */
    public static function fromJsonString(string $json): ObjectInterface;

    /**
     * @param array $data
     *
     * @return ObjectInterface
     */
    public static function fromArray(array $data): ObjectInterface;
}
