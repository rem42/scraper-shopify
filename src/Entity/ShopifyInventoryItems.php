<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyInventoryItems
{
    use ShopifyPaginated;

    /** @var array<int, ShopifyInventoryItem> */
    public array $inventoryItems = [];

    public function addInventoryItem(ShopifyInventoryItem $inventoryItem): self
    {
        $this->inventoryItems[] = $inventoryItem;

        return $this;
    }
}
