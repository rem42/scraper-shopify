<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Tests\Api;

use Scraper\ScraperShopify\Entity\Countries;
use Scraper\ScraperShopify\Entity\Country;

/**
 * @internal
 */
class CountryApiTest extends AbstractShopifyApiTestCase
{
    public function testOne(): void
    {
        $result = $this->executeGetApi(
            'countries',
            '879921427',
            null,
            null,
            false,
            200,
            'country.json'
        );

        $this->assertInstanceOf(Country::class, $result);

        $this->assertEquals(879921427, $result->id);
    }

    public function testList(): void
    {
        $result = $this->executeGetApi(
            'countries',
            null,
            null,
            null,
            false,
            200,
            'countries.json'
        );

        $this->assertInstanceOf(Countries::class, $result);
        $this->assertCount(3, $result->countries);
        $this->assertInstanceOf(Country::class, $result->countries[0]);
    }
}
