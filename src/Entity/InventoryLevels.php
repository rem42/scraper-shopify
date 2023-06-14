<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class InventoryLevels
{
    use CallLimit;
    /** @var array<int, InventoryLevel> */
    public array $inventoryLevels = [];

    public function addInventoryLevel(InventoryLevel $inventoryLevel): self
    {
        $this->inventoryLevels[] = $inventoryLevel;
        return $this;
    }
}
