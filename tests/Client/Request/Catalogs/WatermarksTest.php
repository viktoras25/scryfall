<?php

namespace Viktoras\Scryfall\Tests\Client\Request\Catalogs;

use PHPUnit\Framework\TestCase;
use Viktoras\Scryfall\Client\Request\Catalogs\Watermarks;

class WatermarksTest extends TestCase
{
    public function testGetQuery()
    {
        $request = new Watermarks();

        $this->assertSame(
            $request->getQuery(),
            'catalog/watermarks?format=json&pretty=false'
        );
    }
}
