<?php

namespace Scraper\ScraperShopify\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class ShopifyOrderLineItem
{
    private ?int $id = null;

    private ?int $variantId = null;

    private ?string $title = null;

    private ?int $quantity = null;

    private ?string $sku = null;

    private ?string $variantTitle = null;

    private ?string $vendor = null;

    private ?string $fulfillmentService = null;

    private ?int $productId = null;

    private ?bool $requiresShipping = null;

    private ?bool $taxable = null;

    private ?bool $giftCard = null;

    private ?string $name = null;

    private ?string $variantInventoryManagement = null;

    /** @var Collection<int, ShopifyProperty> */
    private ?Collection $properties;

    private ?bool $productExists = null;

    private ?int $fulfillableQuantity = null;

    private ?int $grams = null;

    private ?string $price = null;

    private ?string $totalDiscount = null;

    private ?string $fulfillmentStatus = null;

    private ?ShopifyPriceSet $priceSet = null;

    private ?ShopifyPriceSet $totalDiscountSet = null;

    /** @var Collection<int, ShopifyOrderDiscountAllocation> */
    private ?Collection $discountAllocations;

    /** @var Collection<int, ShopifyOrderDuty> */
    private ?Collection $duties;

    private ?string $adminGraphqlApiId = null;

    /** @var Collection<int, ShopifyOrderTaxLine> */
    private ?Collection $taxLines;

    public function __construct()
    {
        $this->properties          = new ArrayCollection();
        $this->discountAllocations = new ArrayCollection();
        $this->duties              = new ArrayCollection();
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

    public function getVariantId(): ?int
    {
        return $this->variantId;
    }

    public function setVariantId(?int $variantId): self
    {
        $this->variantId = $variantId;

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

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function setSku(?string $sku): self
    {
        $this->sku = $sku;

        return $this;
    }

    public function getVariantTitle(): ?string
    {
        return $this->variantTitle;
    }

    public function setVariantTitle(?string $variantTitle): self
    {
        $this->variantTitle = $variantTitle;

        return $this;
    }

    public function getVendor(): ?string
    {
        return $this->vendor;
    }

    public function setVendor(?string $vendor): self
    {
        $this->vendor = $vendor;

        return $this;
    }

    public function getFulfillmentService(): ?string
    {
        return $this->fulfillmentService;
    }

    public function setFulfillmentService(?string $fulfillmentService): self
    {
        $this->fulfillmentService = $fulfillmentService;

        return $this;
    }

    public function getProductId(): ?int
    {
        return $this->productId;
    }

    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;

        return $this;
    }

    public function getRequiresShipping(): ?bool
    {
        return $this->requiresShipping;
    }

    public function setRequiresShipping(?bool $requiresShipping): self
    {
        $this->requiresShipping = $requiresShipping;

        return $this;
    }

    public function getTaxable(): ?bool
    {
        return $this->taxable;
    }

    public function setTaxable(?bool $taxable): self
    {
        $this->taxable = $taxable;

        return $this;
    }

    public function getGiftCard(): ?bool
    {
        return $this->giftCard;
    }

    public function setGiftCard(?bool $giftCard): self
    {
        $this->giftCard = $giftCard;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getVariantInventoryManagement(): ?string
    {
        return $this->variantInventoryManagement;
    }

    public function setVariantInventoryManagement(?string $variantInventoryManagement): self
    {
        $this->variantInventoryManagement = $variantInventoryManagement;

        return $this;
    }

    public function getProductExists(): ?bool
    {
        return $this->productExists;
    }

    public function setProductExists(?bool $productExists): self
    {
        $this->productExists = $productExists;

        return $this;
    }

    public function getFulfillableQuantity(): ?int
    {
        return $this->fulfillableQuantity;
    }

    public function setFulfillableQuantity(?int $fulfillableQuantity): self
    {
        $this->fulfillableQuantity = $fulfillableQuantity;

        return $this;
    }

    public function getGrams(): ?int
    {
        return $this->grams;
    }

    public function setGrams(?int $grams): self
    {
        $this->grams = $grams;

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

    public function getTotalDiscount(): ?string
    {
        return $this->totalDiscount;
    }

    public function setTotalDiscount(?string $totalDiscount): self
    {
        $this->totalDiscount = $totalDiscount;

        return $this;
    }

    public function getFulfillmentStatus(): ?string
    {
        return $this->fulfillmentStatus;
    }

    public function setFulfillmentStatus(?string $fulfillmentStatus): self
    {
        $this->fulfillmentStatus = $fulfillmentStatus;

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

    public function getTotalDiscountSet(): ?ShopifyPriceSet
    {
        return $this->totalDiscountSet;
    }

    public function setTotalDiscountSet(?ShopifyPriceSet $totalDiscountSet): self
    {
        $this->totalDiscountSet = $totalDiscountSet;

        return $this;
    }

    public function getAdminGraphqlApiId(): ?string
    {
        return $this->adminGraphqlApiId;
    }

    public function setAdminGraphqlApiId(?string $adminGraphqlApiId): self
    {
        $this->adminGraphqlApiId = $adminGraphqlApiId;

        return $this;
    }

    /**
     * @return Collection<int, ShopifyProperty>
     */
    public function getProperties(): Collection
    {
        return $this->properties;
    }

    public function addProperty(ShopifyProperty $property): self
    {
        $this->properties->add($property);

        return $this;
    }

    public function removeProperty(ShopifyProperty $property): self
    {
        $this->properties->removeElement($property);

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
     * @return Collection<int, ShopifyOrderDuty>
     */
    public function getDuties(): Collection
    {
        return $this->duties;
    }

    public function addDuty(ShopifyOrderDuty $duty): self
    {
        $this->duties->add($duty);

        return $this;
    }

    public function removeDuty(ShopifyOrderDuty $duty): self
    {
        $this->duties->removeElement($duty);

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
