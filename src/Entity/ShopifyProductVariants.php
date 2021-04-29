<?php

namespace Scraper\ScraperShopify\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class ShopifyProductVariants
{
    use ShopifyPaginated;

    /** @var Collection<int, ShopifyProductVariant> */
    private Collection $variants;

    public function __construct()
    {
        $this->variants = new ArrayCollection();
    }

    /**
     * @return Collection<int, ShopifyProductVariant>
     */
    public function getVariants(): Collection
    {
        return $this->variants;
    }

    public function addVariant(ShopifyProductVariant $variant): self
    {
        $this->variants->add($variant);

        return $this;
    }

    public function removeVariant(ShopifyProductVariant $variant): self
    {
        $this->variants->removeElement($variant);

        return $this;
    }
}
