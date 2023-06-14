<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class DeliveryMethod
{
    public ?int $id = null;
    public ?string $methodType = null;
    public ?\DateTimeInterface $minDeliveryDateTime = null;
    public ?\DateTimeInterface $maxDeliveryDateTime = null;
}
