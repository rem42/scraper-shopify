<?php

namespace Scraper\ScraperShopify\Entity;

class ShopifyOrderDuty
{
    private ?int $dutyId = null;

    private ?ShopifyPriceSet $amountSet = null;

    public function getDutyId(): ?int
    {
        return $this->dutyId;
    }

    public function setDutyId(?int $dutyId): self
    {
        $this->dutyId = $dutyId;

        return $this;
    }

    public function getAmountSet(): ?ShopifyPriceSet
    {
        return $this->amountSet;
    }

    public function setAmountSet(?ShopifyPriceSet $amountSet): self
    {
        $this->amountSet = $amountSet;

        return $this;
    }
}
