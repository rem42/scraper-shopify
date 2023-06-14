<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class TotalTaxSet
{
    public ?ShopMoney $shopMoney = null;
    public ?PresentmentMoney $presentmentMoney = null;
}
