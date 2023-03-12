<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyNoteAttribute
{
    public ?string $name;
    public ?string $value;

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
