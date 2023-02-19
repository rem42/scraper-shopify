<?php

namespace Scraper\ScraperShopify\Entity;

class Image
{
    public ?int $id = null;
    public ?int $productId = null;
    public ?int $position = null;
    public ?\DateTimeInterface $createdAt = null;
    public ?\DateTimeInterface $updatedAt = null;
    public $alt = null;
    public ?int $width = null;
    public ?int $height = null;
    public ?string $src = null;
    /** @var array<int, int> */
    public array $variantIds = [];
    public ?string $adminGraphqlApiId = null;

    public function addVariantId(int $variantId): self
    {
        $this->variantIds[] = $variantId;
        return $this;
    }
}
