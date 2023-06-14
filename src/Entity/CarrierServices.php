<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class CarrierServices
{
    use CallLimit;
    /** @var array<int, CarrierService> */
    public array $carrierServices = [];

    public function addCarrierService(CarrierService $carrierService): self
    {
        $this->carrierServices[] = $carrierService;
        return $this;
    }
}
