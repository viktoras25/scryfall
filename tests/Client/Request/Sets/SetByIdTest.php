<?php

namespace Viktoras\Scryfall\Tests\Client\Request\Sets;

use Viktoras\Scryfall\Client\Request\Sets\SetById;
use PHPUnit\Framework\TestCase;

class SetByIdTest extends TestCase
{
    public function testGetQuery()
    {
        $request = new SetById(2);

        $this->assertSame(
            $request->getQuery(),
            'sets/2?format=json&pretty=false'
        );
    }
}
