<?php

namespace Scraper\ScraperShopify\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class ShopifyFulfillments
{
    use ShopifyPaginated;

    /** @var Collection<int, ShopifyFulfillment> */
    private Collection $fulfillments;

    public function __construct()
    {
        $this->fulfillments = new ArrayCollection();
    }

    /**
     * @return Collection<int, ShopifyFulfillment>
     */
    public function getFulfillments(): Collection
    {
        return $this->fulfillments;
    }

    public function addFulfillment(ShopifyFulfillment $fulfillment): self
    {
        $this->fulfillments->add($fulfillment);

        return $this;
    }

    public function removeFulfillment(ShopifyFulfillment $fulfillment): self
    {
        $this->fulfillments->removeElement($fulfillment);

        return $this;
    }
}
