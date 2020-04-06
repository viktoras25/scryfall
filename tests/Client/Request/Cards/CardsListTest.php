<?php

namespace Viktoras\Scryfall\Tests\Client\Request\Cards;

use Viktoras\Scryfall\Client\Request\Cards\CardsList;
use PHPUnit\Framework\TestCase;
use Viktoras\Scryfall\Client\Request\Sets\SetsList;

class CardsListTest extends TestCase
{
    public function testGetQuery()
    {
        $request = new CardsList();

        $this->assertSame(
            $request->getQuery(),
            'cards?page=1&format=json&pretty=false'
        );
    }
}
