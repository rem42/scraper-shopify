<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyFulfillment
{
    public ?int $id = null;
    public ?int $orderId = null;
    public ?string $status = null;
    public ?\DateTimeInterface $createdAt = null;
    public ?string $service = null;
    public ?\DateTimeInterface $updatedAt = null;
    public ?string $trackingCompany = null;
    public ?string $shipmentStatus = null;
    public ?int $locationId = null;
    /** @var array<int, ShopifyOrderLineItem> */
    public array $lineItems = [];
    public ?string $trackingNumber = null;
    /** @var array<int, string> */
    public array $trackingNumbers = [];
    public ?string $trackingUrl = null;
    /** @var array<int, string> */
    public array $trackingUrls = [];
    public ?string $name = null;
    public ?string $adminGraphqlApiId = null;

    public function addLineItem(ShopifyOrderLineItem $lineItem): self
    {
        $this->lineItems[] = $lineItem;

        return $this;
    }

    public function addTrackingNumber(string $trackingNumber): self
    {
        $this->trackingNumbers[] = $trackingNumber;

        return $this;
    }

    public function addTrackingUrl(string $trackingUrl): self
    {
        $this->trackingUrls[] = $trackingUrl;

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

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function setService(?string $service): self
    {
        $this->service = $service;
        return $this;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function setTrackingCompany(?string $trackingCompany): self
    {
        $this->trackingCompany = $trackingCompany;
        return $this;
    }

    public function setShipmentStatus(?string $shipmentStatus): self
    {
        $this->shipmentStatus = $shipmentStatus;
        return $this;
    }

    public function setLocationId(?int $locationId): self
    {
        $this->locationId = $locationId;
        return $this;
    }

    public function setTrackingNumber(?string $trackingNumber): self
    {
        $this->trackingNumber = $trackingNumber;
        return $this;
    }

    public function setTrackingUrl(?string $trackingUrl): self
    {
        $this->trackingUrl = $trackingUrl;
        return $this;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setAdminGraphqlApiId(?string $adminGraphqlApiId): self
    {
        $this->adminGraphqlApiId = $adminGraphqlApiId;
        return $this;
    }
}
