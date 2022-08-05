<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyOrderAdjustement
{
    public ?int $id                       = null;
    public ?int $orderId                  = null;
    public ?int $refundId                 = null;
    public ?string $amount                = null;
    public ?string $taxAmount             = null;
    public ?string $kind                  = null;
    public ?string $reason                = null;
    public ?ShopifyPriceSet $amountSet    = null;
    public ?ShopifyPriceSet $taxAmountSet = null;

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    public function setRefundId(?int $refundId): self
    {
        $this->refundId = $refundId;
        return $this;
    }

    public function setAmount(?string $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    public function setTaxAmount(?string $taxAmount): self
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }

    public function setKind(?string $kind): self
    {
        $this->kind = $kind;
        return $this;
    }

    public function setReason(?string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }

    public function setAmountSet(?ShopifyPriceSet $amountSet): self
    {
        $this->amountSet = $amountSet;
        return $this;
    }

    public function setTaxAmountSet(?ShopifyPriceSet $taxAmountSet): self
    {
        $this->taxAmountSet = $taxAmountSet;
        return $this;
    }
}
