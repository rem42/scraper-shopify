<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class LineItem
{
    public ?int $id = null;
    public ?string $adminGraphqlApiId = null;
    public ?int $shopId = null;
    public ?int $fulfillmentOrderId = null;
    public ?int $lineItemId = null;
    public ?int $inventoryItemId = null;
    public ?int $variantId = null;
    public ?string $title = null;
    public ?int $quantity = null;
    public ?string $price = null;
    public ?PriceSet $priceSet = null;
    public ?int $grams = null;
    public ?string $sku = null;
    public ?string $variantTitle = null;
    public ?string $vendor = null;
    public ?string $fulfillmentService = null;
    public ?int $productId = null;
    public ?bool $requiresShipping = null;
    public ?bool $taxable = null;
    public ?bool $giftCard = null;
    public ?string $name = null;
    public ?string $variantInventoryManagement = null;
    /** @var array<int, Property> */
    public array $properties = [];
    public ?bool $productExists = null;
    public ?int $fulfillableQuantity = null;
    public ?string $totalDiscount = null;
    public ?TotalDiscountSet $totalDiscountSet = null;
    public ?string $fulfillmentStatus = null;
    public ?int $fulfillmentLineItemId = null;
    /** @var array<int, TaxLine> */
    public array $taxLines = [];
    /** @var array<int, Duty> */
    public array $duties = [];
    /** @var array<int, DiscountAllocation> */
    public array $discountAllocations = [];

    public function addProperty(Property $property): self
    {
        $this->properties[] = $property;
        return $this;
    }

    public function addTaxLine(TaxLine $taxLine): self
    {
        $this->taxLines[] = $taxLine;
        return $this;
    }

    public function addDuty(Duty $duty): self
    {
        $this->duties[] = $duty;
        return $this;
    }

    public function addDiscountAllocation(DiscountAllocation $discountAllocation): self
    {
        $this->discountAllocations[] = $discountAllocation;
        return $this;
    }
}
