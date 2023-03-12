<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Tests\Api;

use Scraper\ScraperShopify\Entity\ShopifyOrder;
use Scraper\ScraperShopify\Entity\ShopifyOrders;

/**
 * @internal
 */
class ShopifyOrderApiTest extends AbstractShopifyApiTestCase
{
    public function testOne(): void
    {
        /** @var ShopifyOrder $result */
        $result = $this->executeGetApi(
            'orders',
            '450789469',
            null,
            null,
            false,
            200,
            'order.json'
        );

        $this->assertInstanceOf(ShopifyOrder::class, $result);

        $this->assertEquals(450789469, $result->id);
    }

    public function testList(): void
    {
        /** @var ShopifyOrders $result */
        $result = $this->executeGetApi(
            'orders',
            null,
            null,
            null,
            false,
            200,
            'orders.json'
        );

        $this->assertInstanceOf(ShopifyOrders::class, $result);
        $this->assertCount(1, $result->orders);
        $this->assertInstanceOf(ShopifyOrder::class, $result->orders[0]);
    }
}
