<?php

namespace Scraper\ScraperShopify\Entity;

class Orders
{
    use ShopifyPaginated;
    /** @var array<int, Order> */
    public array $orders = [];

    public function addOrder(Order $order): self
    {
        $this->orders[] = $order;
        return $this;
    }
}
