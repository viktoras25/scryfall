<?php

namespace Viktoras\Scryfall\Tests\Client\Request\Catalogs;

use PHPUnit\Framework\TestCase;
use Viktoras\Scryfall\Client\Request\Catalogs\ArtifactTypes;

class ArtifactTypesTest extends TestCase
{
    public function testGetQuery()
    {
        $request = new ArtifactTypes();

        $this->assertSame(
            $request->getQuery(),
            'catalog/artifact-types?format=json&pretty=false'
        );
    }
}
