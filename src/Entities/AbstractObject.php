<?php

namespace Viktoras\Scryfall\Entities;

use Viktoras\Scryfall\Exception\InvalidArgumentException;

abstract class AbstractObject implements ObjectInterface
{
    abstract protected function acceptsObject(): string;

    /**
     * Prevent from overriding constructor.
     */
    final public function __construct()
    {
    }

    /**
     * @return ObjectInterface|static
     *
     * @throws InvalidArgumentException
     */
    public static function fromJsonString(string $json): ObjectInterface
    {
        $instance = new static();

        return static::fromArray($instance->validateInput($json));
    }

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
     * @return array JSON decoded into array
     */
    public function validateInput(string $json): array
    {
        $data = json_decode($json, true);

        if (!is_array($data) || !isset($data['object']) || $data['object'] !== $this->acceptsObject()) {
            throw new InvalidArgumentException('Invalid object');
        }

        return $data;
    }
}
