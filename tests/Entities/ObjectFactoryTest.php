<?php

namespace Viktoras\Scryfall\Tests\Entities;

use PHPUnit\Framework\TestCase;
use Viktoras\Scryfall\Entities\Error;
use Viktoras\Scryfall\Entities\ObjectFactory;
use Viktoras\Scryfall\Exception\InvalidArgumentException;

class ObjectFactoryTest extends TestCase
{
    /**
     * @return ObjectFactory
     */
    private function getFactory(): ObjectFactory
    {
        return new ObjectFactory();
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
}