<?php

namespace Scraper\ScraperShopify\Entity;

class RefundLineItem
{
    public ?int $id = null;
    public ?int $lineItemId = null;
    public ?int $locationId = null;
    public ?int $quantity = null;
    public ?string $restockType = null;
    public ?float $subtotal = null;
    public ?SubtotalSet $subtotalSet = null;
    public ?float $totalTax = null;
    public ?TotalTaxSet $totalTaxSet = null;
    public ?LineItem $lineItem = null;
}
