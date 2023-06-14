<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ApiCallLimit
{
    public ?int $current = null;
    public ?int $max = null;

    public function isExceeded(): bool
    {
        return $this->current === $this->max;
    }
}
