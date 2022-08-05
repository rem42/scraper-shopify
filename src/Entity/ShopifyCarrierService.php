<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyCarrierService
{
    public ?int $id                    = null;
    public ?string $name               = null;
    public ?bool $active               = null;
    public ?bool $serviceDiscovery     = null;
    public ?string $carrierServiceType = null;
    public ?string $adminGraphqlApiId  = null;
    public ?string $format             = null;
    public ?string $callbackUrl        = null;

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;
        return $this;
    }

    public function setServiceDiscovery(?bool $serviceDiscovery): self
    {
        $this->serviceDiscovery = $serviceDiscovery;
        return $this;
    }

    public function setCarrierServiceType(?string $carrierServiceType): self
    {
        $this->carrierServiceType = $carrierServiceType;
        return $this;
    }

    public function setAdminGraphqlApiId(?string $adminGraphqlApiId): self
    {
        $this->adminGraphqlApiId = $adminGraphqlApiId;
        return $this;
    }

    public function setFormat(?string $format): self
    {
        $this->format = $format;
        return $this;
    }

    public function setCallbackUrl(?string $callbackUrl): self
    {
        $this->callbackUrl = $callbackUrl;
        return $this;
    }
}
