<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class Products
{
    use CallLimit;
    use Paginated;
    /** @var array<int, Product> */
    public array $products = [];

    public function addProduct(Product $product): self
    {
        $this->products[] = $product;
        return $this;
    }
}
