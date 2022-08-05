<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyCarrierServices
{
    use ShopifyPaginated;

    /** @var array<int, ShopifyCarrierService> */
    public array $carrierServices = [];

    public function addCarrierService(ShopifyCarrierService $carrierService): self
    {
        $this->carrierServices[] = $carrierService;

        return $this;
    }
}
