<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyInventoryLevel
{
    public ?int $inventoryItemId          = null;
    public ?int $locationId               = null;
    public ?int $available                = null;
    public ?\DateTimeInterface $updatedAt = null;
    public ?string $adminGraphqlApiId     = null;

    public function setInventoryItemId(?int $inventoryItemId): self
    {
        $this->inventoryItemId = $inventoryItemId;
        return $this;
    }

    public function setLocationId(?int $locationId): self
    {
        $this->locationId = $locationId;
        return $this;
    }

    public function setAvailable(?int $available): self
    {
        $this->available = $available;
        return $this;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function setAdminGraphqlApiId(?string $adminGraphqlApiId): self
    {
        $this->adminGraphqlApiId = $adminGraphqlApiId;
        return $this;
    }
}
