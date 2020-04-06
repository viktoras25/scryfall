<?php

namespace Viktoras\Scryfall\Tests\Client\Request\Catalogs;

use PHPUnit\Framework\TestCase;
use Viktoras\Scryfall\Client\Request\Catalogs\Loyalties;

class LoyaltiesTest extends TestCase
{
    public function testGetQuery()
    {
        $request = new Loyalties();

        $this->assertSame(
            $request->getQuery(),
            'catalog/loyalties?format=json&pretty=false'
        );
    }
}
