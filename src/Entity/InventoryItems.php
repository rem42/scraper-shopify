<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class InventoryItems
{
    use CallLimit;
    /** @var array<int, InventoryItem> */
    public array $inventoryItems = [];

    public function addInventoryItem(InventoryItem $inventoryItem): self
    {
        $this->inventoryItems[] = $inventoryItem;
        return $this;
    }
}
