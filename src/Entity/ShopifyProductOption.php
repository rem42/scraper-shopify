<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyProductOption
{
    public ?int $id = null;
    public ?int $productId = null;
    public ?string $name = null;
    public ?int $position = null;
    /** @var array<int, string> */
    public array $values = [];

    public function addValue(string $value): self
    {
        $this->values[] = $value;

        return $this;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setPosition(?int $position): self
    {
        $this->position = $position;
        return $this;
    }
}
