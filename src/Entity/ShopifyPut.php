<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyPut
{
    public ?Order $order = null;

    public function setOrder(?Order $order): self
    {
        $this->order = $order;
        return $this;
    }
}
