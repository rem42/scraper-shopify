<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class Fulfillments
{
    use CallLimit;
    /** @var array<int, Fulfillment> */
    public array $fulfillments = [];

    public function addFulfillment(Fulfillment $fulfillment): self
    {
        $this->fulfillments[] = $fulfillment;
        return $this;
    }
}
