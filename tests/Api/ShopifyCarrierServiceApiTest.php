<?php

namespace Scraper\ScraperShopify\Tests\Api;

use Scraper\ScraperShopify\Entity\ShopifyCarrierService;
use Scraper\ScraperShopify\Entity\ShopifyCarrierServices;

/**
 * @internal
 */
class ShopifyCarrierServiceApiTest extends AbstractShopifyApiTestCase
{
    public function testOne(): void
    {
        /** @var ShopifyCarrierService $result */
        $result = $this->executeGetApi(
            'carrier_services',
            1036894958,
            null,
            null,
            false,
            200,
            'carrier_service.json'
        );

        $this->assertInstanceOf(ShopifyCarrierService::class, $result);

        $this->assertEquals(1036894958, $result->getId());
    }

    public function testList(): void
    {
        /** @var ShopifyCarrierServices $result */
        $result = $this->executeGetApi(
            'carrier_services',
            null,
            null,
            null,
            false,
            200,
            'carrier_services.json'
        );

        $this->assertInstanceOf(ShopifyCarrierServices::class, $result);
        $this->assertCount(2, $result->getCarrierServices());
        $this->assertInstanceOf(ShopifyCarrierService::class, $result->getCarrierServices()->first());
    }
}
