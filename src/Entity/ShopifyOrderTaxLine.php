<?php

namespace Scraper\ScraperShopify\Entity;

class ShopifyOrderTaxLine
{
    private ?string $price = null;

    private ?float $rate = null;

    private ?string $title = null;

    private ?ShopifyPriceSet $priceSet = null;

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(?string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getRate(): ?float
    {
        return $this->rate;
    }

    public function setRate(?float $rate): self
    {
        $this->rate = $rate;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getPriceSet(): ?ShopifyPriceSet
    {
        return $this->priceSet;
    }

    public function setPriceSet(?ShopifyPriceSet $priceSet): self
    {
        $this->priceSet = $priceSet;

        return $this;
    }
}
