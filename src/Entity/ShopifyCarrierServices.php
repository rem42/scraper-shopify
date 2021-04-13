<?php

namespace Scraper\ScraperShopify\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class ShopifyCarrierServices
{
    use ShopifyPaginated;

    /** @var Collection<int, ShopifyCarrierService> */
    private Collection $carrierServices;

    public function __construct()
    {
        $this->carrierServices = new ArrayCollection();
    }

    /**
     * @return Collection<int, ShopifyCarrierService>
     */
    public function getCarrierServices(): Collection
    {
        return $this->carrierServices;
    }

    public function addCarrierService(ShopifyCarrierService $carrierService): self
    {
        $this->carrierServices->add($carrierService);

        return $this;
    }

    public function removeCarrierService(ShopifyCarrierService $carrierService): self
    {
        $this->carrierServices->removeElement($carrierService);

        return $this;
    }
}
