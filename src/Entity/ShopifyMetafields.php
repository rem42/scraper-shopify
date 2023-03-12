<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyMetafields
{
    /** @var array<int, ShopifyMetafield> */
    public array $metafields = [];

    public function addMetafield(ShopifyMetafield $metafield): self
    {
        $this->metafields[] = $metafield;

        return $this;
    }
}
