<?php

namespace Scraper\ScraperShopify\Entity;

class ShopifyOrderDiscountAllocation
{
    private ?string $amount = null;

    private ?int $discountApplicationIndex = null;

    private ?ShopifyPriceSet $amountSet = null;

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(?string $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getDiscountApplicationIndex(): ?int
    {
        return $this->discountApplicationIndex;
    }

    public function setDiscountApplicationIndex(?int $discountApplicationIndex): self
    {
        $this->discountApplicationIndex = $discountApplicationIndex;

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
