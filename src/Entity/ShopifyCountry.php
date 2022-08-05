<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyCountry
{
    public ?int $id         = null;
    public ?string $name    = null;
    public ?float $tax      = null;
    public ?string $code    = null;
    public ?string $taxName = null;
    /** @var array<int, ShopifyProvince> */
    public array $provinces = [];

    public function addProvince(ShopifyProvince $province): self
    {
        $this->provinces[] = $province;

        return $this;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setTax(?float $tax): self
    {
        $this->tax = $tax;
        return $this;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;
        return $this;
    }

    public function setTaxName(?string $taxName): self
    {
        $this->taxName = $taxName;
        return $this;
    }
}
