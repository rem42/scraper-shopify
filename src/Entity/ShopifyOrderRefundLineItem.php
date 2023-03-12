<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyOrderRefundLineItem
{
    public ?int $id = null;
    public ?int $quantity = null;
    public ?int $orderId = null;
    public ?int $lineItemId = null;
    public ?int $locationId = null;
    public ?string $restockType = null;
    public ?float $subtotal = null;
    public ?float $totalTax = null;
    public ?ShopifyPriceSet $subtotalSet = null;
    public ?ShopifyPriceSet $totalTaxSet = null;
    public ?ShopifyOrderLineItem $lineItem;

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    public function setLineItemId(?int $lineItemId): self
    {
        $this->lineItemId = $lineItemId;
        return $this;
    }

    public function setLocationId(?int $locationId): self
    {
        $this->locationId = $locationId;
        return $this;
    }

    public function setRestockType(?string $restockType): self
    {
        $this->restockType = $restockType;
        return $this;
    }

    public function setSubtotal(?float $subtotal): self
    {
        $this->subtotal = $subtotal;
        return $this;
    }

    public function setTotalTax(?float $totalTax): self
    {
        $this->totalTax = $totalTax;
        return $this;
    }

    public function setSubtotalSet(?ShopifyPriceSet $subtotalSet): self
    {
        $this->subtotalSet = $subtotalSet;
        return $this;
    }

    public function setTotalTaxSet(?ShopifyPriceSet $totalTaxSet): self
    {
        $this->totalTaxSet = $totalTaxSet;
        return $this;
    }

    public function setLineItem(?ShopifyOrderLineItem $lineItem): self
    {
        $this->lineItem = $lineItem;
        return $this;
    }
}
