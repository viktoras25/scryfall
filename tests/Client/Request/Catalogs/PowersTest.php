<?php

namespace Viktoras\Scryfall\Tests\Client\Request\Catalogs;

use PHPUnit\Framework\TestCase;
use Viktoras\Scryfall\Client\Request\Catalogs\Powers;

class PowersTest extends TestCase
{
    public function testGetQuery()
    {
        $request = new Powers();

        $this->assertSame(
            $request->getQuery(),
            'catalog/powers?format=json&pretty=false'
        );
    }
}
