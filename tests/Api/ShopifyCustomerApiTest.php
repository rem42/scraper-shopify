<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Tests\Api;

use Scraper\ScraperShopify\Entity\ShopifyCustomer;
use Scraper\ScraperShopify\Entity\ShopifyCustomers;

/**
 * @internal
 */
class ShopifyCustomerApiTest extends AbstractShopifyApiTestCase
{
    public function testOne(): void
    {
        /** @var ShopifyCustomer $result */
        $result = $this->executeGetApi(
            'customers',
            '207119551',
            null,
            null,
            false,
            200,
            'customer.json'
        );

        $this->assertInstanceOf(ShopifyCustomer::class, $result);

        $this->assertEquals(207119551, $result->id);
    }

    public function testList(): void
    {
        /** @var ShopifyCustomers $result */
        $result = $this->executeGetApi(
            'customers',
            null,
            null,
            null,
            false,
            200,
            'customers.json'
        );

        $this->assertInstanceOf(ShopifyCustomers::class, $result);
        $this->assertCount(1, $result->customers);
        $this->assertInstanceOf(ShopifyCustomer::class, $result->customers[0]);
    }
}
