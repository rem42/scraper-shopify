<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

trait Paginated
{
    public ?PageInfo $nextPageInfo = null;
    public ?PageInfo $previousPageInfo = null;
}
