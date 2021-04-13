<?php

namespace Scraper\ScraperShopify\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class ShopifyOrderRefundLineItem
{
    private ?int $id = null;

    private ?int $quantity = null;

    private ?int $orderId = null;

    private ?int $lineItemId = null;

    private ?int $locationId = null;

    private ?string $restockType = null;

    private ?float $subtotal = null;

    private ?float $totalTax = null;

    private ?ShopifyPriceSet $subtotalSet = null;

    private ?ShopifyPriceSet $totalTaxSet = null;

    private ?ShopifyOrderLineItem $lineItem;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

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

    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;

        return $this;
    }

    public function getLineItemId(): ?int
    {
        return $this->lineItemId;
    }

    public function setLineItemId(?int $lineItemId): self
    {
        $this->lineItemId = $lineItemId;

        return $this;
    }

    public function getLocationId(): ?int
    {
        return $this->locationId;
    }

    public function setLocationId(?int $locationId): self
    {
        $this->locationId = $locationId;

        return $this;
    }

    public function getRestockType(): ?string
    {
        return $this->restockType;
    }

    public function setRestockType(?string $restockType): self
    {
        $this->restockType = $restockType;

        return $this;
    }

    public function getSubtotal(): ?float
    {
        return $this->subtotal;
    }

    public function setSubtotal(?float $subtotal): self
    {
        $this->subtotal = $subtotal;

        return $this;
    }

    public function getTotalTax(): ?float
    {
        return $this->totalTax;
    }

    public function setTotalTax(?float $totalTax): self
    {
        $this->totalTax = $totalTax;

        return $this;
    }

    public function getSubtotalSet(): ?ShopifyPriceSet
    {
        return $this->subtotalSet;
    }

    public function setSubtotalSet(?ShopifyPriceSet $subtotalSet): self
    {
        $this->subtotalSet = $subtotalSet;

        return $this;
    }

    public function getTotalTaxSet(): ?ShopifyPriceSet
    {
        return $this->totalTaxSet;
    }

    public function setTotalTaxSet(?ShopifyPriceSet $totalTaxSet): self
    {
        $this->totalTaxSet = $totalTaxSet;

        return $this;
    }

    public function getLineItem(): ?ShopifyOrderLineItem
    {
        return $this->lineItem;
    }

    public function setLineItem(?ShopifyOrderLineItem $lineItem): self
    {
        $this->lineItem = $lineItem;

        return $this;
    }
}
