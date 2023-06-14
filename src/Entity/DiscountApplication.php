<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class DiscountApplication
{
    public ?string $targetType = null;
    public ?string $type = null;
    public ?string $value = null;
    public ?string $valueType = null;
    public ?string $allocationMethod = null;
    public ?string $targetSelection = null;
    public ?string $code = null;
}
