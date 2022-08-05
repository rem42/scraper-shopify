<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Tests\Api;

use Scraper\ScraperShopify\Entity\ShopifyCountries;
use Scraper\ScraperShopify\Entity\ShopifyCountry;

/**
 * @internal
 */
class ShopifyCountryApiTest extends AbstractShopifyApiTestCase
{
    public function testOne(): void
    {
        /** @var ShopifyCountry $result */
        $result = $this->executeGetApi(
            'countries',
            '879921427',
            null,
            null,
            false,
            200,
            'country.json'
        );

        $this->assertInstanceOf(ShopifyCountry::class, $result);

        $this->assertEquals(879921427, $result->id);
    }

    public function testList(): void
    {
        /** @var ShopifyCountries $result */
        $result = $this->executeGetApi(
            'countries',
            null,
            null,
            null,
            false,
            200,
            'countries.json'
        );

        $this->assertInstanceOf(ShopifyCountries::class, $result);
        $this->assertCount(3, $result->countries);
        $this->assertInstanceOf(ShopifyCountry::class, $result->countries[0]);
    }
}
