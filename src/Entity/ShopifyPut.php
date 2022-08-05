<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyPut
{
    public ?ShopifyOrder $order = null;

    public function setOrder(?ShopifyOrder $order): self
    {
        $this->order = $order;
        return $this;
    }
}
