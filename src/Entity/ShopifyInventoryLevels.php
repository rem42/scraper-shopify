<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyInventoryLevels
{
    use ShopifyPaginated;

    /** @var array<int, ShopifyInventoryLevel> */
    public array $inventoryLevels = [];

    public function addInventoryLevel(ShopifyInventoryLevel $inventoryLevel): self
    {
        $this->inventoryLevels[] = $inventoryLevel;

        return $this;
    }
}
