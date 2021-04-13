<?php

namespace Scraper\ScraperShopify\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class ShopifyInventoryItem
{
    private ?int $id = null;

    private ?string $sku = null;

    private ?\DateTimeInterface $createdAt = null;

    private ?\DateTimeInterface $updatedAt = null;

    private ?bool $requiresShipping = null;

    private ?string $cost = null;

    private ?string $countryCodeOfOrigin = null;

    private ?string $provinceCodeOfOrigin = null;

    private ?string $harmonizedSystemCode = null;

    private ?bool $tracked = null;

    /** @var Collection<int, string> */
    private Collection $countryHarmonizedSystemCodes;

    private ?string $adminGraphqlApiId = null;

    public function __construct()
    {
        $this->countryHarmonizedSystemCodes = new ArrayCollection();
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

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function setSku(?string $sku): self
    {
        $this->sku = $sku;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getRequiresShipping(): ?bool
    {
        return $this->requiresShipping;
    }

    public function setRequiresShipping(?bool $requiresShipping): self
    {
        $this->requiresShipping = $requiresShipping;

        return $this;
    }

    public function getCost(): ?string
    {
        return $this->cost;
    }

    public function setCost(?string $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    public function getCountryCodeOfOrigin(): ?string
    {
        return $this->countryCodeOfOrigin;
    }

    public function setCountryCodeOfOrigin(?string $countryCodeOfOrigin): self
    {
        $this->countryCodeOfOrigin = $countryCodeOfOrigin;

        return $this;
    }

    public function getProvinceCodeOfOrigin(): ?string
    {
        return $this->provinceCodeOfOrigin;
    }

    public function setProvinceCodeOfOrigin(?string $provinceCodeOfOrigin): self
    {
        $this->provinceCodeOfOrigin = $provinceCodeOfOrigin;

        return $this;
    }

    public function getHarmonizedSystemCode(): ?string
    {
        return $this->harmonizedSystemCode;
    }

    public function setHarmonizedSystemCode(?string $harmonizedSystemCode): self
    {
        $this->harmonizedSystemCode = $harmonizedSystemCode;

        return $this;
    }

    public function getTracked(): ?bool
    {
        return $this->tracked;
    }

    public function setTracked(?bool $tracked): self
    {
        $this->tracked = $tracked;

        return $this;
    }

    /**
     * @return Collection<int, string>
     */
    public function getCountryHarmonizedSystemCodes(): Collection
    {
        return $this->countryHarmonizedSystemCodes;
    }

    public function addCountryHarmonizedSystemCode(string $countryHarmonizedSystemCode): self
    {
        $this->countryHarmonizedSystemCodes->add($countryHarmonizedSystemCode);

        return $this;
    }

    public function removeCountryHarmonizedSystemCode(string $countryHarmonizedSystemCode): self
    {
        $this->countryHarmonizedSystemCodes->removeElement($countryHarmonizedSystemCode);

        return $this;
    }

    public function getAdminGraphqlApiId(): ?string
    {
        return $this->adminGraphqlApiId;
    }

    public function setAdminGraphqlApiId(?string $adminGraphqlApiId): self
    {
        $this->adminGraphqlApiId = $adminGraphqlApiId;

        return $this;
    }
}
