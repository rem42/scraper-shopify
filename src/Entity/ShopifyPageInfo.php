<?php

namespace Scraper\ScraperShopify\Entity;

class ShopifyPageInfo
{
    private ?string $pageInfo = null;

    private ?int $lastId = null;

    private ?string $lastValue = null;

    private ?string $direction = null;

    public function getPageInfo(): ?string
    {
        return $this->pageInfo;
    }

    public function setPageInfo(?string $pageInfo): self
    {
        $this->pageInfo = $pageInfo;

        return $this;
    }

    public function getLastId(): ?int
    {
        return $this->lastId;
    }

    public function setLastId(?int $lastId): self
    {
        $this->lastId = $lastId;

        return $this;
    }

    public function getLastValue(): ?string
    {
        return $this->lastValue;
    }

    public function setLastValue(?string $lastValue): self
    {
        $this->lastValue = $lastValue;

        return $this;
    }

    public function getDirection(): ?string
    {
        return $this->direction;
    }

    public function setDirection(?string $direction): self
    {
        $this->direction = $direction;

        return $this;
    }
}
