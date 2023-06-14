<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class Province
{
    public ?int $id = null;
    public ?int $countryId = null;
    public ?string $name = null;
    public ?string $code = null;
    public ?string $taxName = null;
    public ?string $taxType = null;
    public ?int $shippingZoneId = null;
    public float|int|null $tax = null;
    public int|float|null $taxPercentage = null;
}
