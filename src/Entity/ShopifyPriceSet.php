<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyPriceSet
{
    public ?ShopifyPrice $shopMoney        = null;
    public ?ShopifyPrice $presentmentMoney = null;

    public function setShopMoney(?ShopifyPrice $shopMoney): self
    {
        $this->shopMoney = $shopMoney;
        return $this;
    }

    public function setPresentmentMoney(?ShopifyPrice $presentmentMoney): self
    {
        $this->presentmentMoney = $presentmentMoney;
        return $this;
    }
}
