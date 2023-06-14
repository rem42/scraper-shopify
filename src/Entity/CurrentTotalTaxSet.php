<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class CurrentTotalTaxSet
{
    public ?ShopMoney $shopMoney = null;
    public ?PresentmentMoney $presentmentMoney = null;
}
