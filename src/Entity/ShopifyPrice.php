<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyPrice
{
    public ?string $currencyCode = null;
    public ?string $amount = null;

    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    public function setAmount(?string $amount): self
    {
        $this->amount = $amount;
        return $this;
    }
}
