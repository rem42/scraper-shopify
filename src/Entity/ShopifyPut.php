<?php

namespace Scraper\ScraperShopify\Entity;

class ShopifyPut
{
    private ?ShopifyOrder $order = null;

    public function getOrder(): ?ShopifyOrder
    {
        return $this->order;
    }

    public function setOrder(?ShopifyOrder $order): self
    {
        $this->order = $order;

        return $this;
    }
}
