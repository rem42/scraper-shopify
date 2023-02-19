<?php

namespace Scraper\ScraperShopify\Entity;

class Option
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
}
