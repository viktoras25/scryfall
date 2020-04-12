<?php

namespace Viktoras\Scryfall\Entities;

use Viktoras\Scryfall\Exception\InvalidArgumentException;

abstract class AbstractObject implements ObjectInterface
{
    /**
     * @return string
     */
    abstract protected function acceptsObject(): string;

    /**
     * Prevent from overriding constructor
     */
    final public function __construct()
    {
    }

    /**
     * @param string $json
     *
     * @return ObjectInterface|static
     *
     * @throws InvalidArgumentException
     */
    public static function fromJsonString(string $json): ObjectInterface
    {
        $instance = new static();

        return static::fromArray($instance->validateInput($json));
    }

    /**
     * @param array $data
     *
     * @return ObjectInterface
     */
    public static function fromArray(array $data): ObjectInterface
    {
        $instance = new static();

        foreach ($data as $key => $value) {
            $methodName = 'set' . str_replace(' ', '', ucwords(str_replace('_', ' ', $key)));

            if (method_exists($instance, $methodName)) {
                $instance->$methodName($value);
            }
        }

        return $instance;
    }

    /**
     * @param string $json
     *
     * @return array JSON decoded into array
     */
    public function validateInput(string $json): array
    {
        $data = json_decode($json, true);

        if (!isset($data['object']) || $data['object'] !== $this->acceptsObject()) {
            throw new InvalidArgumentException('Invalid object');
        }

        return $data;
    }
}
