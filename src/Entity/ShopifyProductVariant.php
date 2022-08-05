<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyProductVariant
{
    public ?int $id                       = null;
    public ?int $productId                = null;
    public ?string $title                 = null;
    public ?string $price                 = null;
    public ?string $sku                   = null;
    public ?int $position                 = null;
    public ?string $inventoryPolicy       = null;
    public ?string $compareAtPrice        = null;
    public ?string $fulfillmentService    = null;
    public ?string $inventoryManagement   = null;
    public ?string $option1               = null;
    public ?string $option2               = null;
    public ?string $option3               = null;
    public ?\DateTimeInterface $createdAt = null;
    public ?\DateTimeInterface $updatedAt = null;
    public ?bool $taxable                 = null;
    public ?string $barcode               = null;
    public ?int $grams                    = null;
    public ?int $imageId                  = null;
    public ?float $weight                 = null;
    public ?string $weightUnit            = null;
    public ?int $inventoryItemId          = null;
    public ?int $inventoryQuantity        = null;
    public ?int $oldInventoryQuantity     = null;
    public ?string $taxCode               = null;
    public ?bool $requiresShipping        = null;
    public ?string $adminGraphqlApiId     = null;
    /** @var array<int, ShopifyProductPresentmentPrice> */
    public array $presentmentPrices = [];

    public function addPresentmentPrice(ShopifyProductPresentmentPrice $presentmentPrice): self
    {
        $this->presentmentPrices[] = $presentmentPrice;

        return $this;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function setPrice(?string $price): self
    {
        $this->price = $price;
        return $this;
    }

    public function setSku(?string $sku): self
    {
        $this->sku = $sku;
        return $this;
    }

    public function setPosition(?int $position): self
    {
        $this->position = $position;
        return $this;
    }

    public function setInventoryPolicy(?string $inventoryPolicy): self
    {
        $this->inventoryPolicy = $inventoryPolicy;
        return $this;
    }

    public function setCompareAtPrice(?string $compareAtPrice): self
    {
        $this->compareAtPrice = $compareAtPrice;
        return $this;
    }

    public function setFulfillmentService(?string $fulfillmentService): self
    {
        $this->fulfillmentService = $fulfillmentService;
        return $this;
    }

    public function setInventoryManagement(?string $inventoryManagement): self
    {
        $this->inventoryManagement = $inventoryManagement;
        return $this;
    }

    public function setOption1(?string $option1): self
    {
        $this->option1 = $option1;
        return $this;
    }

    public function setOption2(?string $option2): self
    {
        $this->option2 = $option2;
        return $this;
    }

    public function setOption3(?string $option3): self
    {
        $this->option3 = $option3;
        return $this;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function setTaxable(?bool $taxable): self
    {
        $this->taxable = $taxable;
        return $this;
    }

    public function setBarcode(?string $barcode): self
    {
        $this->barcode = $barcode;
        return $this;
    }

    public function setGrams(?int $grams): self
    {
        $this->grams = $grams;
        return $this;
    }

    public function setImageId(?int $imageId): self
    {
        $this->imageId = $imageId;
        return $this;
    }

    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;
        return $this;
    }

    public function setWeightUnit(?string $weightUnit): self
    {
        $this->weightUnit = $weightUnit;
        return $this;
    }

    public function setInventoryItemId(?int $inventoryItemId): self
    {
        $this->inventoryItemId = $inventoryItemId;
        return $this;
    }

    public function setInventoryQuantity(?int $inventoryQuantity): self
    {
        $this->inventoryQuantity = $inventoryQuantity;
        return $this;
    }

    public function setOldInventoryQuantity(?int $oldInventoryQuantity): self
    {
        $this->oldInventoryQuantity = $oldInventoryQuantity;
        return $this;
    }

    public function setTaxCode(?string $taxCode): self
    {
        $this->taxCode = $taxCode;
        return $this;
    }

    public function setRequiresShipping(?bool $requiresShipping): self
    {
        $this->requiresShipping = $requiresShipping;
        return $this;
    }

    public function setAdminGraphqlApiId(?string $adminGraphqlApiId): self
    {
        $this->adminGraphqlApiId = $adminGraphqlApiId;
        return $this;
    }
}
