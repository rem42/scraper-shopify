<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class TotalShippingPriceSet
{
    public ?ShopMoney $shopMoney = null;
    public ?PresentmentMoney $presentmentMoney = null;
}
