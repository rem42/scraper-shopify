<?php

namespace Scraper\ScraperShopify\Entity;

class ShopifyCarrierService
{
    private ?int $id = null;

    private ?string $name = null;

    private ?bool $active = null;

    private ?bool $serviceDiscovery = null;

    private ?string $carrierServiceType = null;

    private ?string $adminGraphqlApiId = null;

    private ?string $format = null;

    private ?string $callbackUrl = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getServiceDiscovery(): ?bool
    {
        return $this->serviceDiscovery;
    }

    public function setServiceDiscovery(?bool $serviceDiscovery): self
    {
        $this->serviceDiscovery = $serviceDiscovery;

        return $this;
    }

    public function getCarrierServiceType(): ?string
    {
        return $this->carrierServiceType;
    }

    public function setCarrierServiceType(?string $carrierServiceType): self
    {
        $this->carrierServiceType = $carrierServiceType;

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

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(?string $format): self
    {
        $this->format = $format;

        return $this;
    }

    public function getCallbackUrl(): ?string
    {
        return $this->callbackUrl;
    }

    public function setCallbackUrl(?string $callbackUrl): self
    {
        $this->callbackUrl = $callbackUrl;

        return $this;
    }
}
