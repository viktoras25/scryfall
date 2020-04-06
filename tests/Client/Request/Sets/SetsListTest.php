<?php

namespace Viktoras\Scryfall\Tests\Client\Request\Sets;

use Viktoras\Scryfall\Client\Request\Sets\SetsList;
use PHPUnit\Framework\TestCase;

class SetsListTest extends TestCase
{
    public function testGetQuery()
    {
        $request = new SetsList();

        $this->assertSame(
            $request->getQuery(),
            'sets?format=json&pretty=false'
        );
    }
}
