<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyInventoryItem
{
    public ?int $id                       = null;
    public ?string $sku                   = null;
    public ?\DateTimeInterface $createdAt = null;
    public ?\DateTimeInterface $updatedAt = null;
    public ?bool $requiresShipping        = null;
    public ?string $cost                  = null;
    public ?string $countryCodeOfOrigin   = null;
    public ?string $provinceCodeOfOrigin  = null;
    public ?string $harmonizedSystemCode  = null;
    public ?bool $tracked                 = null;
    /** @var array<int, string> */
    public array $countryHarmonizedSystemCodes = [];
    public ?string $adminGraphqlApiId          = null;

    public function addCountryHarmonizedSystemCode(string $countryHarmonizedSystemCode): self
    {
        $this->countryHarmonizedSystemCodes[] = $countryHarmonizedSystemCode;

        return $this;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setSku(?string $sku): self
    {
        $this->sku = $sku;
        return $this;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function setRequiresShipping(?bool $requiresShipping): self
    {
        $this->requiresShipping = $requiresShipping;
        return $this;
    }

    public function setCost(?string $cost): self
    {
        $this->cost = $cost;
        return $this;
    }

    public function setCountryCodeOfOrigin(?string $countryCodeOfOrigin): self
    {
        $this->countryCodeOfOrigin = $countryCodeOfOrigin;
        return $this;
    }

    public function setProvinceCodeOfOrigin(?string $provinceCodeOfOrigin): self
    {
        $this->provinceCodeOfOrigin = $provinceCodeOfOrigin;
        return $this;
    }

    public function setHarmonizedSystemCode(?string $harmonizedSystemCode): self
    {
        $this->harmonizedSystemCode = $harmonizedSystemCode;
        return $this;
    }

    public function setTracked(?bool $tracked): self
    {
        $this->tracked = $tracked;
        return $this;
    }

    public function setAdminGraphqlApiId(?string $adminGraphqlApiId): self
    {
        $this->adminGraphqlApiId = $adminGraphqlApiId;
        return $this;
    }
}
