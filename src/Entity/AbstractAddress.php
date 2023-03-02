<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

abstract class AbstractAddress
{
    use CallLimit;
    public ?int $id = null;
    public ?int $customerId = null;
    public ?string $firstName = null;
    public ?string $lastName = null;
    public ?string $company = null;
    public ?string $address1 = null;
    public ?string $address2 = null;
    public ?string $city = null;
    public ?string $province = null;
    public ?string $country = null;
    public ?string $zip = null;
    public ?string $phone = null;
    public ?string $provinceCode = null;
    public ?string $countryCode = null;
    public ?string $countryName = null;
    public ?bool $default = null;
}
