<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyCustomers
{
    /** @var array<int, ShopifyCustomer> */
    public array $customers = [];

    public function addCustomer(ShopifyCustomer $customer): self
    {
        $this->customers[] = $customer;

        return $this;
    }
}
