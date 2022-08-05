<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyOrderShippingLine
{
    public ?int $id                             = null;
    public ?string $title                       = null;
    public ?string $price                       = null;
    public ?string $code                        = null;
    public ?string $source                      = null;
    public ?string $phone                       = null;
    public ?int $requestedFulfillmentServiceId  = null;
    public ?string $deliveryCategory            = null;
    public ?string $carrierIdentifier           = null;
    public ?int $discountedPrice                = null;
    public ?ShopifyPriceSet $priceSet           = null;
    public ?ShopifyPriceSet $discountedPriceSet = null;
    /** @var array<int, ShopifyOrderDiscountAllocation> */
    public array $discountAllocations = [];
    /** @var array<int, ShopifyOrderTaxLine> */
    public array $taxLines = [];

    public function addDiscountAllocation(ShopifyOrderDiscountAllocation $discountAllocation): self
    {
        $this->discountAllocations[] = $discountAllocation;

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

    public function setCode(?string $code): self
    {
        $this->code = $code;
        return $this;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    public function setRequestedFulfillmentServiceId(?int $requestedFulfillmentServiceId): self
    {
        $this->requestedFulfillmentServiceId = $requestedFulfillmentServiceId;
        return $this;
    }

    public function setDeliveryCategory(?string $deliveryCategory): self
    {
        $this->deliveryCategory = $deliveryCategory;
        return $this;
    }

    public function setCarrierIdentifier(?string $carrierIdentifier): self
    {
        $this->carrierIdentifier = $carrierIdentifier;
        return $this;
    }

    public function setDiscountedPrice(?int $discountedPrice): self
    {
        $this->discountedPrice = $discountedPrice;
        return $this;
    }

    public function setPriceSet(?ShopifyPriceSet $priceSet): self
    {
        $this->priceSet = $priceSet;
        return $this;
    }

    public function setDiscountedPriceSet(?ShopifyPriceSet $discountedPriceSet): self
    {
        $this->discountedPriceSet = $discountedPriceSet;
        return $this;
    }
}
