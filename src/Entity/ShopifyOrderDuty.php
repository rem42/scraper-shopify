<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyOrderDuty
{
    public ?int $dutyId = null;
    public ?ShopifyPriceSet $amountSet = null;

    public function setDutyId(?int $dutyId): self
    {
        $this->dutyId = $dutyId;
        return $this;
    }

    public function setAmountSet(?ShopifyPriceSet $amountSet): self
    {
        $this->amountSet = $amountSet;
        return $this;
    }
}
