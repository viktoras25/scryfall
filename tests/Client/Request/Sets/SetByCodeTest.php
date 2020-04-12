<?php

namespace Viktoras\Scryfall\Tests\Client\Request\Sets;

use Viktoras\Scryfall\Client\Request\Sets\SetByCode;
use PHPUnit\Framework\TestCase;

class SetByCodeTest extends TestCase
{
    public function testGetQuery()
    {
        $request = new SetByCode('IKO');

        $this->assertSame(
            'sets/IKO?format=json&pretty=false',
            $request->getQuery()
        );
    }
}
