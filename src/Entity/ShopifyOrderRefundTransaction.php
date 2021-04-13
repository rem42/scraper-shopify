<?php

namespace Scraper\ScraperShopify\Entity;

class ShopifyOrderRefundTransaction
{
    private ?int $id = null;

    private ?int $orderId = null;

    private ?string $kind = null;

    private ?string $gateway = null;

    private ?string $status = null;

    private ?string $message = null;

    private ?\DateTimeInterface $createdAt = null;

    private ?bool $test = null;

    private ?string $authorization = null;

    private ?int $locationId = null;

    private ?int $userId = null;

    private ?int $parentId = null;

    private ?\DateTimeInterface $processedAt = null;

    private ?int $deviceId = null;

    private ?string $errorCode = null;

    private ?string $sourceName = null;

    private ?ShopifyOrderReceipt $receipt = null;

    private ?string $amount = null;

    private ?string $currency = null;

    private ?string $adminGraphqlApiId = null;

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

    public function getKind(): ?string
    {
        return $this->kind;
    }

    public function setKind(?string $kind): self
    {
        $this->kind = $kind;

        return $this;
    }

    public function getGateway(): ?string
    {
        return $this->gateway;
    }

    public function setGateway(?string $gateway): self
    {
        $this->gateway = $gateway;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;

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

    public function getTest(): ?bool
    {
        return $this->test;
    }

    public function setTest(?bool $test): self
    {
        $this->test = $test;

        return $this;
    }

    public function getAuthorization(): ?string
    {
        return $this->authorization;
    }

    public function setAuthorization(?string $authorization): self
    {
        $this->authorization = $authorization;

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

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getParentId(): ?int
    {
        return $this->parentId;
    }

    public function setParentId(?int $parentId): self
    {
        $this->parentId = $parentId;

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

    public function getDeviceId(): ?int
    {
        return $this->deviceId;
    }

    public function setDeviceId(?int $deviceId): self
    {
        $this->deviceId = $deviceId;

        return $this;
    }

    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }

    public function setErrorCode(?string $errorCode): self
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    public function getSourceName(): ?string
    {
        return $this->sourceName;
    }

    public function setSourceName(?string $sourceName): self
    {
        $this->sourceName = $sourceName;

        return $this;
    }

    public function getReceipt(): ?ShopifyOrderReceipt
    {
        return $this->receipt;
    }

    public function setReceipt(?ShopifyOrderReceipt $receipt): self
    {
        $this->receipt = $receipt;

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

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

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
}
