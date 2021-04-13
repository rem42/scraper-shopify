<?php

namespace Scraper\ScraperShopify\Entity;

class ShopifyInventoryLevel
{
    private ?int $inventoryItemId = null;

    private ?int $locationId = null;

    private ?int $available = null;

    private ?\DateTimeInterface $updatedAt = null;

    private ?string $adminGraphqlApiId = null;

    public function getInventoryItemId(): ?int
    {
        return $this->inventoryItemId;
    }

    public function setInventoryItemId(?int $inventoryItemId): self
    {
        $this->inventoryItemId = $inventoryItemId;

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

    public function getAvailable(): ?int
    {
        return $this->available;
    }

    public function setAvailable(?int $available): self
    {
        $this->available = $available;

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
