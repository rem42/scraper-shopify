<?php

namespace Scraper\ScraperShopify\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class ShopifyOrders
{
    use ShopifyPaginated;

    /** @var Collection<int, ShopifyOrder> */
    private Collection $orders;

    public function __construct()
    {
        $this->orders = new ArrayCollection();
    }

    /**
     * @return Collection<int, ShopifyOrder>
     */
    public function getOrders(): Collection
    {
        return $this->orders;
    }

    public function addOrder(ShopifyOrder $order): self
    {
        $this->orders->add($order);

        return $this;
    }

    public function removeOrder(ShopifyOrder $order): self
    {
        $this->orders->removeElement($order);

        return $this;
    }
}
