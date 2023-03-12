<?php

namespace Scraper\ScraperShopify\Entity;

class BillingAddress extends AbstractAddress
{

    public ?float $latitude = null;
    public ?float $longitude = null;
    public ?string $name = null;
}
