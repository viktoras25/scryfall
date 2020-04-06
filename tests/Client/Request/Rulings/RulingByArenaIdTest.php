<?php

namespace Viktoras\Scryfall\Tests\Client\Request\Rulings;

use Viktoras\Scryfall\Client\Request\Rulings\RulingByArenaId;
use PHPUnit\Framework\TestCase;

class RulingByArenaIdTest extends TestCase
{
    public function testGetQuery()
    {
        $request = new RulingByArenaId(1);

        $this->assertSame(
            $request->getQuery(),
            'cards/arena/1/rulings?format=json&pretty=false'
        );
    }
}
