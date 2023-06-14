<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class CurrentSubtotalPriceSet
{
    public ?ShopMoney $shopMoney = null;
    public ?PresentmentMoney $presentmentMoney = null;
}
