<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyProvince
{
    public ?int $id              = null;
    public ?int $countryId       = null;
    public ?string $name         = null;
    public ?string $code         = null;
    public ?float $tax           = null;
    public ?string $taxName      = null;
    public ?string $taxType      = null;
    public ?int $shippingZoneId  = null;
    public ?float $taxPercentage = null;

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setCountryId(?int $countryId): self
    {
        $this->countryId = $countryId;
        return $this;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;
        return $this;
    }

    public function setTax(?float $tax): self
    {
        $this->tax = $tax;
        return $this;
    }

    public function setTaxName(?string $taxName): self
    {
        $this->taxName = $taxName;
        return $this;
    }

    public function setTaxType(?string $taxType): self
    {
        $this->taxType = $taxType;
        return $this;
    }

    public function setShippingZoneId(?int $shippingZoneId): self
    {
        $this->shippingZoneId = $shippingZoneId;
        return $this;
    }

    public function setTaxPercentage(?float $taxPercentage): self
    {
        $this->taxPercentage = $taxPercentage;
        return $this;
    }
}
