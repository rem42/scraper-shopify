<?php

namespace Scraper\ScraperShopify\Entity;

class ShopifyProductPresentmentPrice
{
    private ?ShopifyPrice $price = null;

    private ?string $compareAtPrice = null;

    public function getPrice(): ?ShopifyPrice
    {
        return $this->price;
    }

    public function setPrice(?ShopifyPrice $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getCompareAtPrice(): ?string
    {
        return $this->compareAtPrice;
    }

    public function setCompareAtPrice(?string $compareAtPrice): self
    {
        $this->compareAtPrice = $compareAtPrice;

        return $this;
    }
}
