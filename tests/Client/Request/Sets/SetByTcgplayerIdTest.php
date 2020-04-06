<?php

namespace Viktoras\Scryfall\Tests\Client\Request\Sets;

use Viktoras\Scryfall\Client\Request\Sets\SetByTcgplayerId;
use PHPUnit\Framework\TestCase;

class SetByTcgplayerIdTest extends TestCase
{
    public function testGetQuery()
    {
        $request = new SetByTcgplayerId(3);

        $this->assertSame(
            $request->getQuery(),
            'sets/tcgplayer/3?format=json&pretty=false'
        );
    }
}
