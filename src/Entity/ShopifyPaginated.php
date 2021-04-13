<?php

namespace Scraper\ScraperShopify\Entity;

trait ShopifyPaginated
{
    private ?ShopifyPageInfo $nextPageInfo     = null;
    private ?ShopifyPageInfo $previousPageInfo = null;

    public function getNextPageInfo(): ?ShopifyPageInfo
    {
        return $this->nextPageInfo;
    }

    public function setNextPageInfo(?ShopifyPageInfo $nextPageInfo): self
    {
        $this->nextPageInfo = $nextPageInfo;

        return $this;
    }

    public function getPreviousPageInfo(): ?ShopifyPageInfo
    {
        return $this->previousPageInfo;
    }

    public function setPreviousPageInfo(?ShopifyPageInfo $previousPageInfo): self
    {
        $this->previousPageInfo = $previousPageInfo;

        return $this;
    }
}
