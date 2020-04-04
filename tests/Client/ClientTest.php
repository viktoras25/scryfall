<?php

namespace Viktoras\Scryfall\Tests\Client;

use PHPUnit\Framework\TestCase;
use Viktoras\Scryfall\Client\Request\SetsList;

class ClientTest extends TestCase
{
    public function testGetQuery()
    {
        $setsRequest = new SetsList();

        $this->assertSame(
            $setsRequest->getQuery(),
            'sets?format=json&pretty=false'
        );
    }
}
