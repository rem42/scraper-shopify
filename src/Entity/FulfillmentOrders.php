<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class FulfillmentOrders
{
    use CallLimit;
    /** @var array<int, FulfillmentOrder> */
    public array $fulfillmentOrders = [];

    public function addFulfillmentOrder(FulfillmentOrder $fulfillmentOrder): self
    {
        $this->fulfillmentOrders[] = $fulfillmentOrder;
        return $this;
    }
}
