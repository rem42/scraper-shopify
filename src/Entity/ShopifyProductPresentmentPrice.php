<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyProductPresentmentPrice
{
    public ?ShopifyPrice $price = null;
    public ?string $compareAtPrice = null;

    public function setPrice(?ShopifyPrice $price): self
    {
        $this->price = $price;
        return $this;
    }

    public function setCompareAtPrice(?string $compareAtPrice): self
    {
        $this->compareAtPrice = $compareAtPrice;
        return $this;
    }
}
