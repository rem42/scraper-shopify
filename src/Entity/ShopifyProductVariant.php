<?php

namespace Scraper\ScraperShopify\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class ShopifyProductVariant
{
    private ?int $id = null;

    private ?int $productId = null;

    private ?string $title = null;

    private ?string $price = null;

    private ?string $sku = null;

    private ?int $position = null;

    private ?string $inventoryPolicy = null;

    private ?string $compareAtPrice = null;

    private ?string $fulfillmentService = null;

    private ?string $inventoryManagement = null;

    private ?string $option1 = null;

    private ?string $option2 = null;

    private ?string $option3 = null;

    private ?\DateTimeInterface $createdAt = null;

    private ?\DateTimeInterface $updatedAt = null;

    private ?bool $taxable = null;

    private ?string $barcode = null;

    private ?int $grams = null;

    private ?int $imageId = null;

    private ?float $weight = null;

    private ?string $weightUnit = null;

    private ?int $inventoryItemId = null;

    private ?int $inventoryQuantity = null;

    private ?int $oldInventoryQuantity = null;

    private ?string $taxCode = null;

    private ?bool $requiresShipping = null;

    private ?string $adminGraphqlApiId = null;

    /** @var Collection<int, ShopifyProductPresentmentPrice> */
    private Collection $presentmentPrices;

    public function __construct()
    {
        $this->presentmentPrices = new ArrayCollection();
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

    public function getProductId(): ?int
    {
        return $this->productId;
    }

    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;

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

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function setSku(?string $sku): self
    {
        $this->sku = $sku;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(?int $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getInventoryPolicy(): ?string
    {
        return $this->inventoryPolicy;
    }

    public function setInventoryPolicy(?string $inventoryPolicy): self
    {
        $this->inventoryPolicy = $inventoryPolicy;

        return $this;
    }

    public function getCompareAtPrice(): ?string
    {
        return $this->compareAtPrice;
    }

    public function setCompareAtPrice(?string $compareAtPrice): self
    {
        $this->compareAtPrice = $compareAtPrice;

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

    public function getInventoryManagement(): ?string
    {
        return $this->inventoryManagement;
    }

    public function setInventoryManagement(?string $inventoryManagement): self
    {
        $this->inventoryManagement = $inventoryManagement;

        return $this;
    }

    public function getOption1(): ?string
    {
        return $this->option1;
    }

    public function setOption1(?string $option1): self
    {
        $this->option1 = $option1;

        return $this;
    }

    public function getOption2(): ?string
    {
        return $this->option2;
    }

    public function setOption2(?string $option2): self
    {
        $this->option2 = $option2;

        return $this;
    }

    public function getOption3(): ?string
    {
        return $this->option3;
    }

    public function setOption3(?string $option3): self
    {
        $this->option3 = $option3;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

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

    public function getBarcode(): ?string
    {
        return $this->barcode;
    }

    public function setBarcode(?string $barcode): self
    {
        $this->barcode = $barcode;

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

    public function getImageId(): ?int
    {
        return $this->imageId;
    }

    public function setImageId(?int $imageId): self
    {
        $this->imageId = $imageId;

        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getWeightUnit(): ?string
    {
        return $this->weightUnit;
    }

    public function setWeightUnit(?string $weightUnit): self
    {
        $this->weightUnit = $weightUnit;

        return $this;
    }

    public function getInventoryItemId(): ?int
    {
        return $this->inventoryItemId;
    }

    public function setInventoryItemId(?int $inventoryItemId): self
    {
        $this->inventoryItemId = $inventoryItemId;

        return $this;
    }

    public function getInventoryQuantity(): ?int
    {
        return $this->inventoryQuantity;
    }

    public function setInventoryQuantity(?int $inventoryQuantity): self
    {
        $this->inventoryQuantity = $inventoryQuantity;

        return $this;
    }

    public function getOldInventoryQuantity(): ?int
    {
        return $this->oldInventoryQuantity;
    }

    public function setOldInventoryQuantity(?int $oldInventoryQuantity): self
    {
        $this->oldInventoryQuantity = $oldInventoryQuantity;

        return $this;
    }

    public function getTaxCode(): ?string
    {
        return $this->taxCode;
    }

    public function setTaxCode(?string $taxCode): self
    {
        $this->taxCode = $taxCode;

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
     * @return Collection<int, ShopifyProductPresentmentPrice>
     */
    public function getPresentmentPrices(): Collection
    {
        return $this->presentmentPrices;
    }

    public function addPresentmentPrice(ShopifyProductPresentmentPrice $presentmentPrice): self
    {
        $this->presentmentPrices->add($presentmentPrice);

        return $this;
    }

    public function removePresentmentPrice(ShopifyProductPresentmentPrice $presentmentPrice): self
    {
        $this->presentmentPrices->removeElement($presentmentPrice);

        return $this;
    }
}
