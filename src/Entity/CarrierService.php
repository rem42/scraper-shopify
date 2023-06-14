<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class CarrierService
{
    use CallLimit;
    public ?int $id = null;
    public ?string $name = null;
    public ?bool $active = null;
    public ?bool $serviceDiscovery = null;
    public ?string $carrierServiceType = null;
    public ?string $adminGraphqlApiId = null;
    public ?string $format = null;
    public ?string $callbackUrl = null;
}
