<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyOrderRefund
{
    public ?int $id                         = null;
    public ?int $orderId                    = null;
    public ?\DateTimeInterface $createdAt   = null;
    public ?string $note                    = null;
    public ?int $userId                     = null;
    public ?\DateTimeInterface $processedAt = null;
    public ?bool $restock                   = null;
    /** @var array<int, ShopifyOrderDuty> */
    public array $duties                    = [];
    public ?ShopifyPriceSet $totalDutiesSet = null;
    public ?string $adminGraphqlApiId       = null;
    /** @var array<int, ShopifyOrderRefundLineItem> */
    public array $refundLineItems = [];
    /** @var array<int, ShopifyOrderRefundTransaction> */
    public array $transactions = [];
    /** @var array<int, ShopifyOrderAdjustement> */
    public array $orderAdjustments = [];

    public function addDuty(ShopifyOrderDuty $duty): self
    {
        $this->duties[] = $duty;

        return $this;
    }

    public function addRefundLineItem(ShopifyOrderRefundLineItem $refundLineItem): self
    {
        $this->refundLineItems[] = $refundLineItem;

        return $this;
    }

    public function addTransaction(ShopifyOrderRefundTransaction $transaction): self
    {
        $this->transactions[] = $transaction;

        return $this;
    }

    public function addOrderAdjustment(ShopifyOrderAdjustement $orderAdjustment): self
    {
        $this->orderAdjustments[] = $orderAdjustment;

        return $this;
    }

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

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;
        return $this;
    }

    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;
        return $this;
    }

    public function setProcessedAt(?\DateTimeInterface $processedAt): self
    {
        $this->processedAt = $processedAt;
        return $this;
    }

    public function setRestock(?bool $restock): self
    {
        $this->restock = $restock;
        return $this;
    }

    public function setTotalDutiesSet(?ShopifyPriceSet $totalDutiesSet): self
    {
        $this->totalDutiesSet = $totalDutiesSet;
        return $this;
    }

    public function setAdminGraphqlApiId(?string $adminGraphqlApiId): self
    {
        $this->adminGraphqlApiId = $adminGraphqlApiId;
        return $this;
    }
}
