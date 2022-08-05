<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyOrderRefundTransaction
{
    public ?int $id = null;
    public ?int $orderId = null;
    public ?string $kind = null;
    public ?string $gateway = null;
    public ?string $status = null;
    public ?string $message = null;
    public ?\DateTimeInterface $createdAt = null;
    public ?bool $test = null;
    public ?string $authorization = null;
    public ?int $locationId = null;
    public ?int $userId = null;
    public ?int $parentId = null;
    public ?\DateTimeInterface $processedAt = null;
    public ?int $deviceId = null;
    public ?string $errorCode = null;
    public ?string $sourceName = null;
    public ?ShopifyOrderReceipt $receipt = null;
    public ?string $amount = null;
    public ?string $currency = null;
    public ?string $adminGraphqlApiId = null;

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

    public function setKind(?string $kind): self
    {
        $this->kind = $kind;
        return $this;
    }

    public function setGateway(?string $gateway): self
    {
        $this->gateway = $gateway;
        return $this;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function setTest(?bool $test): self
    {
        $this->test = $test;
        return $this;
    }

    public function setAuthorization(?string $authorization): self
    {
        $this->authorization = $authorization;
        return $this;
    }

    public function setLocationId(?int $locationId): self
    {
        $this->locationId = $locationId;
        return $this;
    }

    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;
        return $this;
    }

    public function setParentId(?int $parentId): self
    {
        $this->parentId = $parentId;
        return $this;
    }

    public function setProcessedAt(?\DateTimeInterface $processedAt): self
    {
        $this->processedAt = $processedAt;
        return $this;
    }

    public function setDeviceId(?int $deviceId): self
    {
        $this->deviceId = $deviceId;
        return $this;
    }

    public function setErrorCode(?string $errorCode): self
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    public function setSourceName(?string $sourceName): self
    {
        $this->sourceName = $sourceName;
        return $this;
    }

    public function setReceipt(?ShopifyOrderReceipt $receipt): self
    {
        $this->receipt = $receipt;
        return $this;
    }

    public function setAmount(?string $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;
        return $this;
    }

    public function setAdminGraphqlApiId(?string $adminGraphqlApiId): self
    {
        $this->adminGraphqlApiId = $adminGraphqlApiId;
        return $this;
    }
}
