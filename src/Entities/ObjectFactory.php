<?php

namespace Viktoras\Scryfall\Entities;

use Viktoras\Scryfall\Exception\InvalidArgumentException;
use Viktoras\Scryfall\Exception\UnexpectedValueException;

class ObjectFactory
{
    /**
     * Some objects conflict with PHP reserved names, use this custom mapping
     * for alternative names.
     */
    private const CLASS_MAPPING = [
        'list' => ListObject::class
    ];

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

        // Load class name from map or generate one
        $type = self::CLASS_MAPPING[$data['object']] ?? __NAMESPACE__ . '\\' . ucfirst($data['object']);

        if (!class_exists($type) || !in_array(ObjectInterface::class, class_implements($type), true)) {
            throw new UnexpectedValueException('Unsupported object');
        }

        return $type::fromArray($data);
    }
}
