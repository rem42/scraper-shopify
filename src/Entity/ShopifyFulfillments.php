<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyFulfillments
{
    use ShopifyPaginated;

    /** @var array<int, ShopifyFulfillment> */
    public array $fulfillments = [];

    public function addFulfillment(ShopifyFulfillment $fulfillment): self
    {
        $this->fulfillments[] = $fulfillment;

        return $this;
    }
}
