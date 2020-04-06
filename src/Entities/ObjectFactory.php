<?php

namespace Viktoras\Scryfall\Entities;

use Viktoras\Scryfall\Exception\InvalidArgumentException;
use Viktoras\Scryfall\Exception\UnexpectedValueException;

class ObjectFactory
{
    /**
     * @param string $json
     *
     * @return ObjectInterface
     */
    public function makeFromString(string $json): ObjectInterface
    {
        $data = json_decode($json, true);

        if (!is_array($data)) {
            $data = [];
        }

        return $this->makeFromArray($data);
    }

    /**
     * @param array $data
     *
     * @return ObjectInterface
     */
    public function makeFromArray(array $data): ObjectInterface
    {
        if (!isset($data['object'])) {
            throw new InvalidArgumentException('Invalid data format');
        }

        /** @var ObjectInterface $type */
        $type = __NAMESPACE__ . '\\' . ucfirst($data['object']);

        if (!class_implements($type, ObjectInterface::class)) {
            throw new UnexpectedValueException('Unsupported object');
        }

        return $type::fromArray($data);
    }
}
