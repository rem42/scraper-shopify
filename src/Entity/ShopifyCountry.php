<?php

namespace Scraper\ScraperShopify\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class ShopifyCountry
{
    private ?int $id = null;

    private ?string $name = null;

    private ?float $tax = null;

    private ?string $code = null;

    private ?string $taxName = null;

    /** @var Collection<int, ShopifyProvince> */
    private Collection $provinces;

    public function __construct()
    {
        $this->provinces = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

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

    public function getTax(): ?float
    {
        return $this->tax;
    }

    public function setTax(?float $tax): self
    {
        $this->tax = $tax;

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

    public function getTaxName(): ?string
    {
        return $this->taxName;
    }

    public function setTaxName(?string $taxName): self
    {
        $this->taxName = $taxName;

        return $this;
    }

    /**
     * @return Collection<int, ShopifyProvince>
     */
    public function getProvinces(): Collection
    {
        return $this->provinces;
    }

    public function addProvince(ShopifyProvince $province): self
    {
        $this->provinces->add($province);

        return $this;
    }

    public function removeProvince(ShopifyProvince $province): self
    {
        $this->provinces->removeElement($province);

        return $this;
    }
}
