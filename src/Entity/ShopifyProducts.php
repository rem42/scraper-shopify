<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyProducts
{
    use ShopifyPaginated;

    /** @var array<int, ShopifyProduct> */
    public array $products = [];

    public function addProduct(ShopifyProduct $product): self
    {
        $this->products[] = $product;

        return $this;
    }
}
