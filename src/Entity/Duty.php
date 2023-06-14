<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class Duty
{
    public ?string $id = null;
    public ?string $harmonizedSystemCode = null;
    public ?string $countryCodeOfOrigin = null;
    public ?ShopMoney $shopMoney = null;
    public ?PresentmentMoney $presentmentMoney = null;
    /** @var array<int, TaxLine> */
    public array $taxLines = [];
    public ?string $adminGraphqlApiId = null;

    public function addTaxLine(TaxLine $taxLine): self
    {
        $this->taxLines[] = $taxLine;
        return $this;
    }
}
