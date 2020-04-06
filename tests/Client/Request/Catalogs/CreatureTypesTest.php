<?php

namespace Viktoras\Scryfall\Tests\Client\Request\Catalogs;

use PHPUnit\Framework\TestCase;
use Viktoras\Scryfall\Client\Request\Catalogs\CreatureTypes;

class CreatureTypesTest extends TestCase
{
    public function testGetQuery()
    {
        $request = new CreatureTypes();

        $this->assertSame(
            $request->getQuery(),
            'catalog/creature-types?format=json&pretty=false'
        );
    }
}
