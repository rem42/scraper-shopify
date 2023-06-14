<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class InventoryItem
{
    use CallLimit;
    public ?int $id = null;
    public ?string $sku = null;
    public ?\DateTimeInterface $createdAt = null;
    public ?\DateTimeInterface $updatedAt = null;
    public ?bool $requiresShipping = null;
    public ?string $cost = null;
    public ?string $countryCodeOfOrigin = null;
    public ?string $provinceCodeOfOrigin = null;
    public ?string $harmonizedSystemCode = null;
    public ?bool $tracked = null;
    /** @var array<int, CountryHarmonizedSystemCode> */
    public array $countryHarmonizedSystemCodes = [];
    public ?string $adminGraphqlApiId = null;

    public function addCountryHarmonizedSystemCode(CountryHarmonizedSystemCode $countryHarmonizedSystemCode): self
    {
        $this->countryHarmonizedSystemCodes[] = $countryHarmonizedSystemCode;
        return $this;
    }
}
