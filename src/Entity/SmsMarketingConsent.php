<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class SmsMarketingConsent
{
    public ?string $state = null;
    public ?string $optInLevel = null;
    public ?\DateTimeInterface $consentUpdatedAt = null;
    public ?string $consentCollectedFrom = null;
}
