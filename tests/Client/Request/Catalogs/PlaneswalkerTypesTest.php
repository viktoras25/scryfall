<?php

namespace Viktoras\Scryfall\Tests\Client\Request\Catalogs;

use PHPUnit\Framework\TestCase;
use Viktoras\Scryfall\Client\Request\Catalogs\PlaneswalkerTypes;

class PlaneswalkerTypesTest extends TestCase
{
    public function testGetQuery()
    {
        $request = new PlaneswalkerTypes();

        $this->assertSame(
            $request->getQuery(),
            'catalog/planeswalker-types?format=json&pretty=false'
        );
    }
}
