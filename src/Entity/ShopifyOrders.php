<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyOrders
{
    use ShopifyPaginated;

    /** @var array<int, ShopifyOrder> */
    public array $orders = [];

    public function addOrder(ShopifyOrder $order): self
    {
        $this->orders[] = $order;

        return $this;
    }
}
