<?php

namespace Scraper\ScraperShopify\Entity;

class Variant
{
    public ?int $id = null;
    public ?int $productId = null;
    public ?string $title = null;
    public ?string $price = null;
    public ?string $sku = null;
    public ?int $position = null;
    public ?string $inventoryPolicy = null;
    public $compareAtPrice = null;
    public ?string $fulfillmentService = null;
    public ?string $inventoryManagement = null;
    public ?string $option1 = null;
    public $option2 = null;
    public $option3 = null;
    public ?\DateTimeInterface $createdAt = null;
    public ?\DateTimeInterface $updatedAt = null;
    public ?bool $taxable = null;
    public ?string $barcode = null;
    public ?int $grams = null;
    public ?int $imageId = null;
    public ?float $weight = null;
    public ?string $weightUnit = null;
    public ?int $inventoryItemId = null;
    public ?int $inventoryQuantity = null;
    public ?int $oldInventoryQuantity = null;
    /** @var array<int, PresentmentPrice> */
    public array $presentmentPrices = [];
    public ?bool $requiresShipping = null;
    public ?string $adminGraphqlApiId = null;

    public function addPresentmentPrice(PresentmentPrice $presentmentPrice): self
    {
        $this->presentmentPrices[] = $presentmentPrice;
        return $this;
    }
}
