<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class Variants
{
    use CallLimit;
    use Paginated;
    /** @var array<int, Variant> */
    public array $variants = [];

    public function addVariant(Variant $variants): self
    {
        $this->variants[] = $variants;
        return $this;
    }
}
