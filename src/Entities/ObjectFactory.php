<?php

namespace Viktoras\Scryfall\Entities;

use Viktoras\Scryfall\Exception\InvalidArgumentException;
use Viktoras\Scryfall\Exception\UnexpectedValueException;

class ObjectFactory
{
    /**
     * @param array $data
     *
     * @return ObjectInterface
     */
    public function make(array $data): ObjectInterface
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
