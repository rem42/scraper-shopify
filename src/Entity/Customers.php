<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class Customers
{
    use CallLimit;
    /** @var array<int, Customer> */
    public array $customers = [];

    public function addCustomer(Customer $customer): self
    {
        $this->customers[] = $customer;

        return $this;
    }
}
