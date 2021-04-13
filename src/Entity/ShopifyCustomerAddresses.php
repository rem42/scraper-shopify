<?php

namespace Scraper\ScraperShopify\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class ShopifyCustomerAddresses
{
    /** @var Collection<int, ShopifyCustomerAddress> */
    private Collection $addresses;

    public function __construct()
    {
        $this->addresses = new ArrayCollection();
    }

    /**
     * @return Collection<int, ShopifyCustomerAddress>
     */
    public function getAddresses(): Collection
    {
        return $this->addresses;
    }

    public function addAddress(ShopifyCustomerAddress $address): self
    {
        $this->addresses->add($address);

        return $this;
    }

    public function removeAddress(ShopifyCustomerAddress $address): self
    {
        $this->addresses->removeElement($address);

        return $this;
    }
}
