<?php

namespace Scraper\ScraperShopify\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class ShopifyOrderFulfillment
{
    private ?int $id = null;

    private ?int $orderId = null;

    private ?string $status = null;

    private ?\DateTimeInterface $createdAt = null;

    private ?string $service = null;

    private ?\DateTimeInterface $updatedAt = null;

    private ?string $trackingCompany = null;

    private ?string $shipmentStatus = null;

    private ?int $locationId = null;

    /** @var Collection<int, ShopifyOrderLineItem> */
    private Collection $lineItems;

    private ?string $trackingNumber = null;

    /** @var Collection<int, string> */
    private Collection $trackingNumbers;

    private ?string $trackingUrl = null;

    /** @var Collection<int, string> */
    private Collection $trackingUrls;

    private ?ShopifyOrderReceipt $receipt = null;

    private ?string $name = null;

    private ?string $adminGraphqlApiId = null;

    public function __construct()
    {
        $this->lineItems       = new ArrayCollection();
        $this->trackingNumbers = new ArrayCollection();
        $this->trackingUrls    = new ArrayCollection();
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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

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

    public function getService(): ?string
    {
        return $this->service;
    }

    public function setService(?string $service): self
    {
        $this->service = $service;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getTrackingCompany(): ?string
    {
        return $this->trackingCompany;
    }

    public function setTrackingCompany(?string $trackingCompany): self
    {
        $this->trackingCompany = $trackingCompany;

        return $this;
    }

    public function getShipmentStatus(): ?string
    {
        return $this->shipmentStatus;
    }

    public function setShipmentStatus(?string $shipmentStatus): self
    {
        $this->shipmentStatus = $shipmentStatus;

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

    public function getTrackingNumber(): ?string
    {
        return $this->trackingNumber;
    }

    public function setTrackingNumber(?string $trackingNumber): self
    {
        $this->trackingNumber = $trackingNumber;

        return $this;
    }

    public function getTrackingUrl(): ?string
    {
        return $this->trackingUrl;
    }

    public function setTrackingUrl(?string $trackingUrl): self
    {
        $this->trackingUrl = $trackingUrl;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

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
     * @return Collection<int, ShopifyOrderLineItem>
     */
    public function getLineItems(): Collection
    {
        return $this->lineItems;
    }

    public function addLineItem(ShopifyOrderLineItem $lineItem): self
    {
        $this->lineItems->add($lineItem);

        return $this;
    }

    public function removeLineItem(ShopifyOrderLineItem $lineItem): self
    {
        $this->lineItems->removeElement($lineItem);

        return $this;
    }

    /**
     * @return Collection<int, string>
     */
    public function getTrackingNumbers(): Collection
    {
        return $this->trackingNumbers;
    }

    public function addTrackingNumber(string $trackingNumber): self
    {
        $this->trackingNumbers->add($trackingNumber);

        return $this;
    }

    public function removeTrackingNumber(string $trackingNumber): self
    {
        $this->trackingNumbers->removeElement($trackingNumber);

        return $this;
    }

    /**
     * @return Collection<int, string>
     */
    public function getTrackingUrls(): Collection
    {
        return $this->trackingUrls;
    }

    public function addTrackingUrl(string $trackingUrl): self
    {
        $this->trackingUrls->add($trackingUrl);

        return $this;
    }

    public function removeTrackingUrl(string $trackingUrl): self
    {
        $this->trackingUrls->removeElement($trackingUrl);

        return $this;
    }
}
