<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyOrderDiscountAllocation
{
    public ?string $amount                = null;
    public ?int $discountApplicationIndex = null;
    public ?ShopifyPriceSet $amountSet    = null;

    public function setAmount(?string $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    public function setDiscountApplicationIndex(?int $discountApplicationIndex): self
    {
        $this->discountApplicationIndex = $discountApplicationIndex;
        return $this;
    }

    public function setAmountSet(?ShopifyPriceSet $amountSet): self
    {
        $this->amountSet = $amountSet;
        return $this;
    }
}
