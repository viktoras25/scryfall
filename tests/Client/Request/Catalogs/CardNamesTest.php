<?php

namespace Viktoras\Scryfall\Tests\Client\Request\Catalogs;

use PHPUnit\Framework\TestCase;
use Viktoras\Scryfall\Client\Request\Catalogs\CardNames;

class CardNamesTest extends TestCase
{
    public function testGetQuery()
    {
        $request = new CardNames();

        $this->assertSame(
            $request->getQuery(),
            'catalog/card-names?format=json&pretty=false'
        );
    }
}
