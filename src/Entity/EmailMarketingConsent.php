<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class EmailMarketingConsent
{
    public ?string $state = null;
    public ?string $optInLevel = null;
    public ?\DateTimeInterface $consentUpdatedAt = null;
}
