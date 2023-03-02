<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class Addresses
{
    use CallLimit;
    /** @var array<int, Address> */
    public array $addresses = [];

    public function addAddress(Address $address): self
    {
        $this->addresses[] = $address;

        return $this;
    }
}
