<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class PresentmentPrice
{
    public ?Price $price = null;
    public ?Price $compareAtPrice = null;
}
