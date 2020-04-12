<?php

namespace Viktoras\Scryfall\Tests\Entities;

use PHPUnit\Framework\TestCase;
use Viktoras\Scryfall\Entities\Error;
use Viktoras\Scryfall\Entities\ListObject;
use Viktoras\Scryfall\Entities\ObjectFactory;
use Viktoras\Scryfall\Exception\InvalidArgumentException;
use Viktoras\Scryfall\Exception\UnexpectedValueException;

class ObjectFactoryTest extends TestCase
{
    /**
     * @return ObjectFactory
     */
    private function getFactory(): ObjectFactory
    {
        return new ObjectFactory();
    }

    public function testMakeFromArrayInvalidFormat()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid data format');

        $this->getFactory()->makeFromArray([]);
    }

    public function testMakeFromArrayUnsupportedObject()
    {
        $this->expectException(UnexpectedValueException::class);
        $this->expectExceptionMessage('Unsupported object');

        $this->getFactory()->makeFromArray(['object' => 'sofa']);
    }

    public function testMakeFromArray()
    {
        $array = [
            'object'  => 'error',
            'code'    => 'not_found',
            'status'  => '404',
            'details' => 'The requested object or REST method was not found.',
        ];

        $error = $this->getFactory()->makeFromArray($array);

        $this->assertInstanceOf(Error::class, $error);
    }

    public function testMakeFromString()
    {
        $file = __DIR__ . '/../files/Response/Error404.json';

        $error = $this->getFactory()->makeFromString(file_get_contents($file));

        $this->assertInstanceOf(Error::class, $error);
    }

    public function testMakeFromStringInvalidJson()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid data format');

        $error = $this->getFactory()->makeFromString(file_get_contents(__FILE__));

        $this->assertInstanceOf(Error::class, $error);
    }

    public function testMakeList()
    {
        $array = ['object' => 'list'];

        $error = $this->getFactory()->makeFromArray($array);

        $this->assertInstanceOf(ListObject::class, $error);
    }
}
