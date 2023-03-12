<?php

namespace Scraper\ScraperShopify\Entity;

class TaxLine
{
    public ?string $title = null;
    public ?string $price = null;
    public ?float $rate = null;
    public ?PriceSet $priceSet = null;
}
