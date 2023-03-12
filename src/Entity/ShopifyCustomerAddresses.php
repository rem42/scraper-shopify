<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyCustomerAddresses
{
    /** @var array<int, ShopifyCustomerAddress> */
    public array $addresses = [];

    public function addAddress(ShopifyCustomerAddress $address): self
    {
        $this->addresses[] = $address;

        return $this;
    }
}
