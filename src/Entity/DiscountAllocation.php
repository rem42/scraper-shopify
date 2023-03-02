<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class DiscountAllocation
{
    public ?string $amount = null;
    public ?AmountSet $amountSet = null;
    public ?int $discountApplicationIndex = null;
}
