<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyProperty
{
    public ?string $name = null;
    public ?string $value = null;

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }
}
