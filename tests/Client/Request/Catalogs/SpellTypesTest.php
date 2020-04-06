<?php

namespace Viktoras\Scryfall\Tests\Client\Request\Catalogs;

use PHPUnit\Framework\TestCase;
use Viktoras\Scryfall\Client\Request\Catalogs\SpellTypes;

class SpellTypesTest extends TestCase
{
    public function testGetQuery()
    {
        $request = new SpellTypes();

        $this->assertSame(
            $request->getQuery(),
            'catalog/spell-types?format=json&pretty=false'
        );
    }
}
