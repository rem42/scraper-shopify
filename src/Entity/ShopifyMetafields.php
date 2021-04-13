<?php

namespace Scraper\ScraperShopify\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class ShopifyMetafields
{
    /** @var Collection<int, ShopifyMetafield> */
    private Collection $metafields;

    public function __construct()
    {
        $this->metafields = new ArrayCollection();
    }

    /**
     * @return Collection<int, ShopifyMetafield>
     */
    public function getMetafields(): Collection
    {
        return $this->metafields;
    }

    public function addMetafield(ShopifyMetafield $metafield): self
    {
        $this->metafields->add($metafield);

        return $this;
    }

    public function removeMetafield(ShopifyMetafield $metafield): self
    {
        $this->metafields->removeElement($metafield);

        return $this;
    }
}
