<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Tests\Api;

use Scraper\ScraperShopify\Entity\Customer;
use Scraper\ScraperShopify\Entity\Customers;

/**
 * @internal
 */
class CustomerApiTest extends AbstractShopifyApiTestCase
{
    public function testOne(): void
    {
        $result = $this->executeGetApi(
            'customers',
            '207119551',
            null,
            null,
            false,
            200,
            'customer.json'
        );

        $this->assertInstanceOf(Customer::class, $result);

        $this->assertEquals(207119551, $result->id);
    }

    public function testList(): void
    {
        $result = $this->executeGetApi(
            'customers',
            null,
            null,
            null,
            false,
            200,
            'customers.json'
        );

        $this->assertInstanceOf(Customers::class, $result);
        $this->assertCount(2, $result->customers);
        $this->assertInstanceOf(Customer::class, $result->customers[0]);
    }
}
