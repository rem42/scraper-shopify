<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class Metafield
{
    use CallLimit;
    public ?int $id = null;
    public ?string $namespace = null;
    public ?string $key = null;
    public ?string $value = null;
    public ?string $description = null;
    public ?int $ownerId = null;
    public ?\DateTimeInterface $createdAt = null;
    public ?\DateTimeInterface $updatedAt = null;
    public ?string $ownerResource = null;
    public ?string $type = null;
    public ?string $adminGraphqlApiId = null;
}
