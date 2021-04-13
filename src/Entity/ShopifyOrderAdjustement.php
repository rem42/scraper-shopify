<?php

namespace Scraper\ScraperShopify\Entity;

class ShopifyOrderAdjustement
{
    private ?int $id = null;

    private ?int $orderId = null;

    private ?int $refundId = null;

    private ?string $amount = null;

    private ?string $taxAmount = null;

    private ?string $kind = null;

    private ?string $reason = null;

    private ?ShopifyPriceSet $amountSet = null;

    private ?ShopifyPriceSet $taxAmountSet = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

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

    public function getRefundId(): ?int
    {
        return $this->refundId;
    }

    public function setRefundId(?int $refundId): self
    {
        $this->refundId = $refundId;

        return $this;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(?string $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getTaxAmount(): ?string
    {
        return $this->taxAmount;
    }

    public function setTaxAmount(?string $taxAmount): self
    {
        $this->taxAmount = $taxAmount;

        return $this;
    }

    public function getKind(): ?string
    {
        return $this->kind;
    }

    public function setKind(?string $kind): self
    {
        $this->kind = $kind;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(?string $reason): self
    {
        $this->reason = $reason;

        return $this;
    }

    public function getAmountSet(): ?ShopifyPriceSet
    {
        return $this->amountSet;
    }

    public function setAmountSet(?ShopifyPriceSet $amountSet): self
    {
        $this->amountSet = $amountSet;

        return $this;
    }

    public function getTaxAmountSet(): ?ShopifyPriceSet
    {
        return $this->taxAmountSet;
    }

    public function setTaxAmountSet(?ShopifyPriceSet $taxAmountSet): self
    {
        $this->taxAmountSet = $taxAmountSet;

        return $this;
    }
}
