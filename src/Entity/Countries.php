<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class Countries
{
    use CallLimit;
    /** @var array<int, Country> */
    public array $countries = [];

    public function addCountry(Country $country): self
    {
        $this->countries[] = $country;
        return $this;
    }
}
