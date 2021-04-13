<?php

namespace Scraper\ScraperShopify\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class ShopifyProducts
{
    use ShopifyPaginated;

    /** @var Collection<int, ShopifyProduct> */
    private Collection $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    /**
     * @return Collection<int, ShopifyProduct>
     */
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(ShopifyProduct $product): self
    {
        $this->products->add($product);

        return $this;
    }

    public function removeProduct(ShopifyProduct $product): self
    {
        $this->products->removeElement($product);

        return $this;
    }
}
