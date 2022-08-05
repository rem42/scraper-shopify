<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyOrderLineItem
{
    public ?int $id                            = null;
    public ?int $variantId                     = null;
    public ?string $title                      = null;
    public ?int $quantity                      = null;
    public ?string $sku                        = null;
    public ?string $variantTitle               = null;
    public ?string $vendor                     = null;
    public ?string $fulfillmentService         = null;
    public ?int $productId                     = null;
    public ?bool $requiresShipping             = null;
    public ?bool $taxable                      = null;
    public ?bool $giftCard                     = null;
    public ?string $name                       = null;
    public ?string $variantInventoryManagement = null;
    /** @var array<int, ShopifyProperty> */
    public array $properties                  = [];
    public ?bool $productExists               = null;
    public ?int $fulfillableQuantity          = null;
    public ?int $grams                        = null;
    public ?string $price                     = null;
    public ?string $totalDiscount             = null;
    public ?string $fulfillmentStatus         = null;
    public ?string $fulfillmentLineItemId     = null;
    public ?ShopifyPriceSet $priceSet         = null;
    public ?ShopifyPriceSet $totalDiscountSet = null;
    /** @var array<int, ShopifyOrderDiscountAllocation> */
    public array $discountAllocations = [];
    /** @var array<int, ShopifyOrderDuty> */
    public array $duties              = [];
    public ?string $adminGraphqlApiId = null;
    /** @var array<int, ShopifyOrderTaxLine> */
    public array $taxLines = [];

    public function addProperty(ShopifyProperty $property): self
    {
        $this->properties[] = $property;

        return $this;
    }

    public function addDiscountAllocation(ShopifyOrderDiscountAllocation $discountAllocation): self
    {
        $this->discountAllocations[] = $discountAllocation;

        return $this;
    }

    public function addDuty(ShopifyOrderDuty $duty): self
    {
        $this->duties[] = $duty;

        return $this;
    }

    public function addTaxLine(ShopifyOrderTaxLine $taxLine): self
    {
        $this->taxLines[] = $taxLine;

        return $this;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setVariantId(?int $variantId): self
    {
        $this->variantId = $variantId;
        return $this;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function setSku(?string $sku): self
    {
        $this->sku = $sku;
        return $this;
    }

    public function setVariantTitle(?string $variantTitle): self
    {
        $this->variantTitle = $variantTitle;
        return $this;
    }

    public function setVendor(?string $vendor): self
    {
        $this->vendor = $vendor;
        return $this;
    }

    public function setFulfillmentService(?string $fulfillmentService): self
    {
        $this->fulfillmentService = $fulfillmentService;
        return $this;
    }

    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    public function setRequiresShipping(?bool $requiresShipping): self
    {
        $this->requiresShipping = $requiresShipping;
        return $this;
    }

    public function setTaxable(?bool $taxable): self
    {
        $this->taxable = $taxable;
        return $this;
    }

    public function setGiftCard(?bool $giftCard): self
    {
        $this->giftCard = $giftCard;
        return $this;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setVariantInventoryManagement(?string $variantInventoryManagement): self
    {
        $this->variantInventoryManagement = $variantInventoryManagement;
        return $this;
    }

    public function setProductExists(?bool $productExists): self
    {
        $this->productExists = $productExists;
        return $this;
    }

    public function setFulfillableQuantity(?int $fulfillableQuantity): self
    {
        $this->fulfillableQuantity = $fulfillableQuantity;
        return $this;
    }

    public function setGrams(?int $grams): self
    {
        $this->grams = $grams;
        return $this;
    }

    public function setPrice(?string $price): self
    {
        $this->price = $price;
        return $this;
    }

    public function setTotalDiscount(?string $totalDiscount): self
    {
        $this->totalDiscount = $totalDiscount;
        return $this;
    }

    public function setFulfillmentStatus(?string $fulfillmentStatus): self
    {
        $this->fulfillmentStatus = $fulfillmentStatus;
        return $this;
    }

    public function setFulfillmentLineItemId(?string $fulfillmentLineItemId): self
    {
        $this->fulfillmentLineItemId = $fulfillmentLineItemId;
        return $this;
    }

    public function setPriceSet(?ShopifyPriceSet $priceSet): self
    {
        $this->priceSet = $priceSet;
        return $this;
    }

    public function setTotalDiscountSet(?ShopifyPriceSet $totalDiscountSet): self
    {
        $this->totalDiscountSet = $totalDiscountSet;
        return $this;
    }

    public function setAdminGraphqlApiId(?string $adminGraphqlApiId): self
    {
        $this->adminGraphqlApiId = $adminGraphqlApiId;
        return $this;
    }
}
