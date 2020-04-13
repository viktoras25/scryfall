<?php

namespace Viktoras\Scryfall\Tests\Entities;

use PHPUnit\Framework\TestCase;
use Viktoras\Scryfall\Entities\Card;
use Viktoras\Scryfall\Enums\Languages;

class CardTest extends TestCase
{
    /**
     * @param string $cardName
     *
     * @return false|string
     */
    private function loadCardJson(string $cardName)
    {
        return file_get_contents(__DIR__ . '/../files/Response/Card/' . $cardName . '.json');
    }

    /**
     * @param string $cardName
     *
     * @return Card
     */
    private function loadCard(string $cardName)
    {
        return Card::fromJsonString($this->loadCardJson($cardName));
    }

    public function testGetters()
    {
        $card = $this->loadCard('BorosCharm');

        $this->assertSame('a6e601a7-c542-4843-98c6-e0a38aaf6cab', $card->getId());
        $this->assertNull($card->getArenaId());
        $this->assertSame(Languages::ENGLISH, $card->getLang());
        $this->assertSame(2.0, $card->getCmc());
        $this->assertSame(['R', 'W'], $card->getColors());
        $this->assertNull($card->getLoyalty());
        $this->assertSame('{R}{W}', $card->getManaCost());
        $this->assertSame('Boros Charm', $card->getName());
        $this->assertSame('a25', $card->getSet());
        $this->assertSame(199, $card->getCollectorNumber());
        $this->assertIsArray($card->getImageUris());
    }
}
