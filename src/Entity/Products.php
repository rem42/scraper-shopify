<?php

namespace Scraper\ScraperShopify\Entity;

class Products
{
    use ShopifyPaginated;
    /** @var array<int, Product> */
    public array $products = [];

    public function addProduct(Product $product): self
    {
        $this->products[] = $product;
        return $this;
    }
}
