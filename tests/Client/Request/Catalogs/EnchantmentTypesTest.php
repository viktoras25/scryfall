<?php

namespace Viktoras\Scryfall\Tests\Client\Request\Catalogs;

use PHPUnit\Framework\TestCase;
use Viktoras\Scryfall\Client\Request\Catalogs\EnchantmentTypes;

class EnchantmentTypesTest extends TestCase
{
    public function testGetQuery()
    {
        $request = new EnchantmentTypes();

        $this->assertSame(
            $request->getQuery(),
            'catalog/enchantment-types?format=json&pretty=false'
        );
    }
}
