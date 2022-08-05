<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyOrderTaxLine
{
    public ?string $price             = null;
    public ?float $rate               = null;
    public ?string $title             = null;
    public ?ShopifyPriceSet $priceSet = null;

    public function setPrice(?string $price): self
    {
        $this->price = $price;
        return $this;
    }

    public function setRate(?float $rate): self
    {
        $this->rate = $rate;
        return $this;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function setPriceSet(?ShopifyPriceSet $priceSet): self
    {
        $this->priceSet = $priceSet;
        return $this;
    }
}
