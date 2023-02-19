<?php

namespace Scraper\ScraperShopify\Entity;

class Refund
{
    public ?int $id = null;
    public ?string $adminGraphqlApiId = null;
    public ?\DateTimeInterface $createdAt = null;
    public ?string $note = null;
    public ?int $orderId = null;
    public ?string $processedAt = null;
    public ?bool $restock = null;
    public ?int $userId = null;
    public array $orderAdjustments = [];
    /** @var array<int, Transaction> */
    public array $transactions = [];
    /** @var array<int, RefundLineItem> */
    public array $refundLineItems = [];
    public array $duties = [];

    public function addOrderAdjustment($orderAdjustment): self
    {
        $this->orderAdjustments[] = $orderAdjustment;
        return $this;
    }

    public function addTransaction(Transaction $transaction): self
    {
        $this->transactions[] = $transaction;
        return $this;
    }

    public function addRefundLineItem(RefundLineItem $refundLineItem): self
    {
        $this->refundLineItems[] = $refundLineItem;
        return $this;
    }

    public function addDuty($duty): self
    {
        $this->duties[] = $duty;
        return $this;
    }
}
