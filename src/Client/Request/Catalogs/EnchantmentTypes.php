<?php

namespace Viktoras\Scryfall\Client\Request\Catalogs;

use Viktoras\Scryfall\Client\Request\AbstractRequest;

class EnchantmentTypes extends AbstractRequest
{
    /**
     * @return string
     */
    public function getQuery(): string
    {
        return 'catalog/enchantment-types?' . http_build_query(
                [
                    'format' => $this->format,
                    'pretty' => $this->pretty
                ]
            );
    }
}
