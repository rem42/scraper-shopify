<?php

namespace Scraper\ScraperShopify\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class ShopifyCountries
{
    use ShopifyPaginated;

    /** @var Collection<int, ShopifyCountry> */
    private Collection $countries;

    public function __construct()
    {
        $this->countries = new ArrayCollection();
    }

    /**
     * @return Collection<int, ShopifyCountry>
     */
    public function getCountries(): Collection
    {
        return $this->countries;
    }

    public function addCountry(ShopifyCountry $country): self
    {
        $this->countries->add($country);

        return $this;
    }

    public function removeCountry(ShopifyCountry $country): self
    {
        $this->countries->removeElement($country);

        return $this;
    }
}
