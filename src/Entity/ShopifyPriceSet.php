<?php

namespace Scraper\ScraperShopify\Entity;

class ShopifyPriceSet
{
    private ?ShopifyPrice $shopMoney = null;

    private ?ShopifyPrice $presentmentMoney = null;

    public function getShopMoney(): ?ShopifyPrice
    {
        return $this->shopMoney;
    }

    public function setShopMoney(?ShopifyPrice $shopMoney): self
    {
        $this->shopMoney = $shopMoney;

        return $this;
    }

    public function getPresentmentMoney(): ?ShopifyPrice
    {
        return $this->presentmentMoney;
    }

    public function setPresentmentMoney(?ShopifyPrice $presentmentMoney): self
    {
        $this->presentmentMoney = $presentmentMoney;

        return $this;
    }
}
