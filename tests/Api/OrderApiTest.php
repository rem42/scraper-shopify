<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Tests\Api;

use Scraper\ScraperShopify\Entity\Order;
use Scraper\ScraperShopify\Entity\Orders;

/**
 * @internal
 */
class OrderApiTest extends AbstractShopifyApiTestCase
{
    public function testOne(): void
    {
        $result = $this->executeGetApi(
            'orders',
            '450789469',
            null,
            null,
            false,
            200,
            'order.json'
        );

        $this->assertInstanceOf(Order::class, $result);

        $this->assertEquals(450789469, $result->id);
    }

    public function testList(): void
    {
        $result = $this->executeGetApi(
            'orders',
            null,
            null,
            null,
            false,
            200,
            'orders.json'
        );

        $this->assertInstanceOf(Orders::class, $result);
        $this->assertCount(1, $result->orders);
        $this->assertInstanceOf(Order::class, $result->orders[0]);
    }
}
