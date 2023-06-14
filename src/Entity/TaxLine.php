<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class TaxLine
{
    public ?string $title = null;
    public ?string $price = null;
    public ?PriceSet $priceSet = null;
    public ?bool $channelLiable = null;
    public ?float $rate = null;
}
