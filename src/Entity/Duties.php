<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class Duties
{
    /** @var array<int, Duty> */
    public array $duties = [];

    public function addDuty(Duty $duty): self
    {
        $this->duties[] = $duty;
        return $this;
    }
}
