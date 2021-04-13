<?php

namespace Scraper\ScraperShopify\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class ShopifyInventoryItems
{
    use ShopifyPaginated;

    /** @var Collection<int, ShopifyInventoryItem> */
    private Collection $inventoryItems;

    public function __construct()
    {
        $this->inventoryItems = new ArrayCollection();
    }

    /**
     * @return Collection<int, ShopifyInventoryItem>
     */
    public function getInventoryItems(): Collection
    {
        return $this->inventoryItems;
    }

    public function addInventoryItem(ShopifyInventoryItem $inventoryItem): self
    {
        $this->inventoryItems->add($inventoryItem);

        return $this;
    }

    public function removeInventoryItem(ShopifyInventoryItem $inventoryItem): self
    {
        $this->inventoryItems->removeElement($inventoryItem);

        return $this;
    }
}
