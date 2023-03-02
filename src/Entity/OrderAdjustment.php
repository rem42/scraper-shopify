<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class OrderAdjustment
{
    public ?int $id = null;
    public ?int $orderId = null;
    public ?int $refundId = null;
    public ?string $amount = null;
    public ?string $taxAmount = null;
    public ?string $kind = null;
    public ?string $reason = null;
    public ?AmountSet $amountSet = null;
    public ?TaxAmountSet $taxAmountSet = null;
}
