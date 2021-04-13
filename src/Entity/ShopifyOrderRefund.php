<?php

namespace Scraper\ScraperShopify\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class ShopifyOrderRefund
{
    private ?int $id = null;

    private ?int $orderId = null;

    private ?\DateTimeInterface $createdAt = null;

    private ?string $note = null;

    private ?int $userId = null;

    private ?\DateTimeInterface $processedAt = null;

    private ?bool $restock = null;

    /** @var Collection<int, ShopifyOrderDuty> */
    private Collection $duties;

    private ?ShopifyPriceSet $totalDutiesSet = null;

    private ?string $adminGraphqlApiId = null;

    /** @var Collection<int, ShopifyOrderRefundLineItem> */
    private Collection $refundLineItems;

    /** @var Collection<int, ShopifyOrderRefundTransaction> */
    private Collection $transactions;

    /** @var Collection<int, ShopifyOrderAdjustement> */
    private Collection $orderAdjustments;

    public function __construct()
    {
        $this->duties           = new ArrayCollection();
        $this->refundLineItems  = new ArrayCollection();
        $this->transactions     = new ArrayCollection();
        $this->orderAdjustments = new ArrayCollection();
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

    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;

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

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getProcessedAt(): ?\DateTimeInterface
    {
        return $this->processedAt;
    }

    public function setProcessedAt(?\DateTimeInterface $processedAt): self
    {
        $this->processedAt = $processedAt;

        return $this;
    }

    public function getRestock(): ?bool
    {
        return $this->restock;
    }

    public function setRestock(?bool $restock): self
    {
        $this->restock = $restock;

        return $this;
    }

    public function getTotalDutiesSet(): ?ShopifyPriceSet
    {
        return $this->totalDutiesSet;
    }

    public function setTotalDutiesSet(?ShopifyPriceSet $totalDutiesSet): self
    {
        $this->totalDutiesSet = $totalDutiesSet;

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
     * @return Collection<int, ShopifyOrderRefundLineItem>
     */
    public function getRefundLineItems(): Collection
    {
        return $this->refundLineItems;
    }

    public function addRefundLineItem(ShopifyOrderRefundLineItem $refundLineItem): self
    {
        $this->refundLineItems->add($refundLineItem);

        return $this;
    }

    public function removeRefundLineItem(ShopifyOrderRefundLineItem $refundLineItem): self
    {
        $this->refundLineItems->removeElement($refundLineItem);

        return $this;
    }

    /**
     * @return Collection<int, ShopifyOrderRefundTransaction>
     */
    public function getTransactions(): Collection
    {
        return $this->transactions;
    }

    public function addTransaction(ShopifyOrderRefundTransaction $transaction): self
    {
        $this->transactions->add($transaction);

        return $this;
    }

    public function removeTransaction(ShopifyOrderRefundTransaction $transaction): self
    {
        $this->transactions->removeElement($transaction);

        return $this;
    }

    /**
     * @return Collection<int, ShopifyOrderAdjustement>
     */
    public function getOrderAdjustments(): Collection
    {
        return $this->orderAdjustments;
    }

    public function addOrderAdjustment(ShopifyOrderAdjustement $orderAdjustment): self
    {
        $this->orderAdjustments->add($orderAdjustment);

        return $this;
    }

    public function removeOrderAdjustment(ShopifyOrderAdjustement $orderAdjustment): self
    {
        $this->orderAdjustments->removeElement($orderAdjustment);

        return $this;
    }
}
