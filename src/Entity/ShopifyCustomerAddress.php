<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyCustomerAddress
{
    public ?int $id              = null;
    public ?int $customerId      = null;
    public ?string $firstName    = null;
    public ?string $address1     = null;
    public ?string $phone        = null;
    public ?string $city         = null;
    public ?string $zip          = null;
    public ?string $province     = null;
    public ?string $country      = null;
    public ?string $lastName     = null;
    public ?string $address2     = null;
    public ?string $company      = null;
    public ?float $latitude      = null;
    public ?float $longitude     = null;
    public ?string $name         = null;
    public ?string $countryCode  = null;
    public ?string $provinceCode = null;
    public ?bool $default        = null;

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setCustomerId(?int $customerId): self
    {
        $this->customerId = $customerId;
        return $this;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function setAddress1(?string $address1): self
    {
        $this->address1 = $address1;
        return $this;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;
        return $this;
    }

    public function setZip(?string $zip): self
    {
        $this->zip = $zip;
        return $this;
    }

    public function setProvince(?string $province): self
    {
        $this->province = $province;
        return $this;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;
        return $this;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function setAddress2(?string $address2): self
    {
        $this->address2 = $address2;
        return $this;
    }

    public function setCompany(?string $company): self
    {
        $this->company = $company;
        return $this;
    }

    public function setLatitude(?float $latitude): self
    {
        $this->latitude = $latitude;
        return $this;
    }

    public function setLongitude(?float $longitude): self
    {
        $this->longitude = $longitude;
        return $this;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function setProvinceCode(?string $provinceCode): self
    {
        $this->provinceCode = $provinceCode;
        return $this;
    }

    public function setDefault(?bool $default): self
    {
        $this->default = $default;
        return $this;
    }
}
