<?php

namespace Scraper\ScraperShopify\Entity;

class ShippingAddress extends AbstractAddress
{
    public ?float $latitude = null;
    public ?float $longitude = null;
    public ?string $name = null;
}
