<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Tests\Api;

use Scraper\ScraperShopify\Entity\CarrierService;
use Scraper\ScraperShopify\Entity\CarrierServices;

/**
 * @internal
 */
class CarrierServiceApiTest extends AbstractShopifyApiTestCase
{
    public function testOne(): void
    {
        $result = $this->executeGetApi(
            'carrier_services',
            '1036894958',
            null,
            null,
            false,
            200,
            'carrier_service.json'
        );

        $this->assertInstanceOf(CarrierService::class, $result);

        $this->assertEquals(1036894956, $result->id);
    }

    public function testList(): void
    {
        $result = $this->executeGetApi(
            'carrier_services',
            null,
            null,
            null,
            false,
            200,
            'carrier_services.json'
        );

        $this->assertInstanceOf(CarrierServices::class, $result);
        $this->assertCount(2, $result->carrierServices);
        $this->assertInstanceOf(CarrierService::class, $result->carrierServices[0]);
    }
}
