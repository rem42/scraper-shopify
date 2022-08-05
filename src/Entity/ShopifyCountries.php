<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyCountries
{
    use ShopifyPaginated;

    /** @var array<int, ShopifyCountry> */
    public array $countries = [];

    public function addCountry(ShopifyCountry $country): self
    {
        $this->countries[] = $country;

        return $this;
    }
}
