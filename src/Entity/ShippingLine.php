<?php

namespace Scraper\ScraperShopify\Entity;

class ShippingLine
{
    public ?int $id = null;
    public $carrierIdentifier = null;
    public ?string $code = null;
    public $deliveryCategory = null;
    public ?string $discountedPrice = null;
    public ?DiscountedPriceSet $discountedPriceSet = null;
    public $phone = null;
    public ?string $price = null;
    public ?PriceSet $priceSet = null;
    public $requestedFulfillmentServiceId = null;
    public ?string $source = null;
    public ?string $title = null;
    public array $taxLines = [];
    public array $discountAllocations = [];

    public function addTaxLine($taxLine): self
    {
        $this->taxLines[] = $taxLine;
        return $this;
    }

    public function addDiscountAllocation($discountAllocation): self
    {
        $this->discountAllocations[] = $discountAllocation;
        return $this;
    }
}
