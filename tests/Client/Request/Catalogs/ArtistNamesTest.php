<?php

namespace Viktoras\Scryfall\Tests\Client\Request\Catalogs;

use PHPUnit\Framework\TestCase;
use Viktoras\Scryfall\Client\Request\Catalogs\ArtistNames;

class ArtistNamesTest extends TestCase
{
    public function testGetQuery()
    {
        $request = new ArtistNames();

        $this->assertSame(
            $request->getQuery(),
            'catalog/artist-names?format=json&pretty=false'
        );
    }
}
