<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class CurrencyExchangeAdjustment
{
    public ?int $id = null;
    public ?string $adjustment = null;
    public ?string $originalAmount = null;
    public ?string $finalAmount = null;
    public ?string $currency = null;
}
