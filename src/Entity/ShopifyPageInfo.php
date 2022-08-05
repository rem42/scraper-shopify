<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyPageInfo
{
    public ?string $pageInfo = null;
    public ?int $lastId = null;
    public ?string $lastValue = null;
    public ?string $direction = null;

    public function setPageInfo(?string $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    public function setLastId(?int $lastId): self
    {
        $this->lastId = $lastId;
        return $this;
    }

    public function setLastValue(?string $lastValue): self
    {
        $this->lastValue = $lastValue;
        return $this;
    }

    public function setDirection(?string $direction): self
    {
        $this->direction = $direction;
        return $this;
    }
}
