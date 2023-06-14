<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class SubtotalSet
{
    public ?ShopMoney $shopMoney = null;
    public ?PresentmentMoney $presentmentMoney = null;
}
