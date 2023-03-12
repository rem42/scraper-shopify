<?php

namespace Scraper\ScraperShopify\Entity;

class Fulfillment
{
    public ?\DateTimeInterface $createdAt = null;
    public ?int $id = null;
    public ?string $adminGraphqlApiId = null;
    /** @var array<int, LineItem> */
    public array $lineItems = [];
    public ?int $locationId = null;
    public ?string $name = null;
    public ?bool $notifyCustomer = null;
    public ?int $orderId = null;
    /** @var array<int, OriginAddress> */
    public array $originAddress = [];
    public ?Receipt $receipt = null;
    public ?string $service = null;
    public ?string $shipmentStatus = null;
    public ?string $status = null;
    public ?string $trackingCompany = null;
    public ?string $trackingNumber = null;
    /** @var array<int, string> */
    public array $trackingNumbers = [];
    public ?string $trackingUrl = null;
    /** @var array<int, string> */
    public array $trackingUrls = [];
    public ?\DateTimeInterface $updatedAt = null;
    public ?string $variantInventoryManagement = null;

    public function addLineItem(LineItem $lineItem): self
    {
        $this->lineItems[] = $lineItem;
        return $this;
    }

    public function addOriginAddress(OriginAddress $originAddress): self
    {
        $this->originAddress[] = $originAddress;
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
}
