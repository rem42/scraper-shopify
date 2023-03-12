<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyProductVariants
{
    use ShopifyPaginated;

    /** @var array<int, ShopifyProductVariant> */
    public array $variants = [];

    public function addVariant(ShopifyProductVariant $variant): self
    {
        $this->variants[] = $variant;

        return $this;
    }
}
