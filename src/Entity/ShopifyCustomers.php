<?php

namespace Scraper\ScraperShopify\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class ShopifyCustomers
{
    /** @var Collection<int, ShopifyCustomer> */
    private Collection $customers;

    public function __construct()
    {
        $this->customers = new ArrayCollection();
    }

    /**
     * @return Collection<int, ShopifyCustomer>
     */
    public function getCustomers(): Collection
    {
        return $this->customers;
    }

    public function addCustomer(ShopifyCustomer $customer): self
    {
        $this->customers->add($customer);

        return $this;
    }

    public function removeCustomer(ShopifyCustomer $customer): self
    {
        $this->customers->removeElement($customer);

        return $this;
    }
}
