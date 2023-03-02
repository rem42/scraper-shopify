<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class InventoryLevel
{
    use CallLimit;
    public ?int $inventoryItemId = null;
    public ?int $locationId = null;
    public ?int $available = null;
    public ?\DateTimeInterface $updatedAt = null;
    public ?string $adminGraphqlApiId = null;
}
