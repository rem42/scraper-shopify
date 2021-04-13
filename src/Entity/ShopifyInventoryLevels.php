<?php

namespace Scraper\ScraperShopify\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class ShopifyInventoryLevels
{
    use ShopifyPaginated;

    /** @var Collection<int, ShopifyInventoryLevel> */
    private Collection $inventoryLevels;

    public function __construct()
    {
        $this->inventoryLevels = new ArrayCollection();
    }

    /**
     * @return Collection<int, ShopifyInventoryLevel>
     */
    public function getInventoryLevels(): Collection
    {
        return $this->inventoryLevels;
    }

    public function addInventoryLevel(ShopifyInventoryLevel $inventoryLevel): self
    {
        $this->inventoryLevels->add($inventoryLevel);

        return $this;
    }

    public function removeInventoryLevel(ShopifyInventoryLevel $inventoryLevel): self
    {
        $this->inventoryLevels->removeElement($inventoryLevel);

        return $this;
    }
}
