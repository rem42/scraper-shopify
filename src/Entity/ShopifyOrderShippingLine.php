<?php

namespace Scraper\ScraperShopify\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class ShopifyOrderShippingLine
{
    private ?int $id = null;

    private ?string $title = null;

    private ?string $price = null;

    private ?string $code = null;

    private ?string $source = null;

    private ?string $phone = null;

    private ?int $requestedFulfillmentServiceId = null;

    private ?string $deliveryCategory = null;

    private ?string $carrierIdentifier = null;

    private ?int $discountedPrice = null;

    private ?ShopifyPriceSet $priceSet = null;

    private ?ShopifyPriceSet $discountedPriceSet = null;

    /** @var Collection<int, ShopifyOrderDiscountAllocation> */
    private Collection $discountAllocations;

    /** @var Collection<int, ShopifyOrderTaxLine> */
    private Collection $taxLines;

    public function __construct()
    {
        $this->discountAllocations = new ArrayCollection();
        $this->taxLines            = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(?string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getRequestedFulfillmentServiceId(): ?int
    {
        return $this->requestedFulfillmentServiceId;
    }

    public function setRequestedFulfillmentServiceId(?int $requestedFulfillmentServiceId): self
    {
        $this->requestedFulfillmentServiceId = $requestedFulfillmentServiceId;

        return $this;
    }

    public function getDeliveryCategory(): ?string
    {
        return $this->deliveryCategory;
    }

    public function setDeliveryCategory(?string $deliveryCategory): self
    {
        $this->deliveryCategory = $deliveryCategory;

        return $this;
    }

    public function getCarrierIdentifier(): ?string
    {
        return $this->carrierIdentifier;
    }

    public function setCarrierIdentifier(?string $carrierIdentifier): self
    {
        $this->carrierIdentifier = $carrierIdentifier;

        return $this;
    }

    public function getDiscountedPrice(): ?int
    {
        return $this->discountedPrice;
    }

    public function setDiscountedPrice(?int $discountedPrice): self
    {
        $this->discountedPrice = $discountedPrice;

        return $this;
    }

    public function getPriceSet(): ?ShopifyPriceSet
    {
        return $this->priceSet;
    }

    public function setPriceSet(?ShopifyPriceSet $priceSet): self
    {
        $this->priceSet = $priceSet;

        return $this;
    }

    public function getDiscountedPriceSet(): ?ShopifyPriceSet
    {
        return $this->discountedPriceSet;
    }

    public function setDiscountedPriceSet(?ShopifyPriceSet $discountedPriceSet): self
    {
        $this->discountedPriceSet = $discountedPriceSet;

        return $this;
    }

    /**
     * @return Collection<int, ShopifyOrderDiscountAllocation>
     */
    public function getDiscountAllocations(): Collection
    {
        return $this->discountAllocations;
    }

    public function addDiscountAllocation(ShopifyOrderDiscountAllocation $discountAllocation): self
    {
        $this->discountAllocations->add($discountAllocation);

        return $this;
    }

    public function removeDiscountAllocation(ShopifyOrderDiscountAllocation $discountAllocation): self
    {
        $this->discountAllocations->removeElement($discountAllocation);

        return $this;
    }

    /**
     * @return Collection<int, ShopifyOrderTaxLine>
     */
    public function getTaxLines(): Collection
    {
        return $this->taxLines;
    }

    public function addTaxLine(ShopifyOrderTaxLine $taxLine): self
    {
        $this->taxLines->add($taxLine);

        return $this;
    }

    public function removeTaxLine(ShopifyOrderTaxLine $taxLine): self
    {
        $this->taxLines->removeElement($taxLine);

        return $this;
    }
}
