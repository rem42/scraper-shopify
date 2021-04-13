<?php

namespace Scraper\ScraperShopify\Entity;

class ShopifyProvince
{
    private ?int $id = null;

    private ?int $countryId = null;

    private ?string $name = null;

    private ?string $code = null;

    private ?float $tax = null;

    private ?string $taxName = null;

    private ?string $taxType = null;

    private ?int $shippingZoneId = null;

    private ?float $taxPercentage = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getCountryId(): ?int
    {
        return $this->countryId;
    }

    public function setCountryId(?int $countryId): self
    {
        $this->countryId = $countryId;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getTax(): ?float
    {
        return $this->tax;
    }

    public function setTax(?float $tax): self
    {
        $this->tax = $tax;

        return $this;
    }

    public function getTaxName(): ?string
    {
        return $this->taxName;
    }

    public function setTaxName(?string $taxName): self
    {
        $this->taxName = $taxName;

        return $this;
    }

    public function getTaxType(): ?string
    {
        return $this->taxType;
    }

    public function setTaxType(?string $taxType): self
    {
        $this->taxType = $taxType;

        return $this;
    }

    public function getShippingZoneId(): ?int
    {
        return $this->shippingZoneId;
    }

    public function setShippingZoneId(?int $shippingZoneId): self
    {
        $this->shippingZoneId = $shippingZoneId;

        return $this;
    }

    public function getTaxPercentage(): ?float
    {
        return $this->taxPercentage;
    }

    public function setTaxPercentage(?float $taxPercentage): self
    {
        $this->taxPercentage = $taxPercentage;

        return $this;
    }
}
