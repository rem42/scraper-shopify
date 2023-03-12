<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

trait ShopifyPaginated
{
    public ?ShopifyPageInfo $nextPageInfo = null;
    public ?ShopifyPageInfo $previousPageInfo = null;

    public function setNextPageInfo(?ShopifyPageInfo $nextPageInfo): self
    {
        $this->nextPageInfo = $nextPageInfo;
        return $this;
    }

    public function setPreviousPageInfo(?ShopifyPageInfo $previousPageInfo): self
    {
        $this->previousPageInfo = $previousPageInfo;
        return $this;
    }
}
