<?php

namespace Viktoras\Scryfall\Tests\Client\Request\Catalogs;

use PHPUnit\Framework\TestCase;
use Viktoras\Scryfall\Client\Request\Catalogs\LandTypes;

class LandTypesTest extends TestCase
{
    public function testGetQuery()
    {
        $request = new LandTypes();

        $this->assertSame(
            $request->getQuery(),
            'catalog/land-types?format=json&pretty=false'
        );
    }
}
