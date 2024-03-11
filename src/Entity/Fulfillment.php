<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class Fulfillment
{
    use CallLimit;
    public ?\DateTimeInterface $createdAt = null;
    public ?int $id = null;
    public ?string $adminGraphqlApiId = null;
    /** @var array<int, LineItem> */
    public array $lineItems = [];
    public ?int $locationId = null;
    public ?string $name = null;
    public ?bool $notifyCustomer = null;
    public ?int $orderId = null;
    public ?OriginAddress $originAddress = null;
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
