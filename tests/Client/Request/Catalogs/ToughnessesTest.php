<?php

namespace Viktoras\Scryfall\Tests\Client\Request\Catalogs;

use PHPUnit\Framework\TestCase;
use Viktoras\Scryfall\Client\Request\Catalogs\Toughnesses;

class ToughnessesTest extends TestCase
{
    public function testGetQuery()
    {
        $request = new Toughnesses();

        $this->assertSame(
            $request->getQuery(),
            'catalog/toughnesses?format=json&pretty=false'
        );
    }
}
