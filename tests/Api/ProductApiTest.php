<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Tests\Api;

use Scraper\ScraperShopify\Entity\Option;
use Scraper\ScraperShopify\Entity\Product;
use Scraper\ScraperShopify\Entity\Products;
use Scraper\ScraperShopify\Entity\Variant;

/**
 * @internal
 */
class ProductApiTest extends AbstractShopifyApiTestCase
{
    public function testOne(): void
    {
        $result = $this->executeGetApi(
            'products',
            '632910392',
            null,
            null,
            false,
            200,
            'product.json'
        );

        $this->assertInstanceOf(Product::class, $result);

        $this->assertEquals(632910392, $result->id);

        $this->assertInstanceOf(\DateTimeInterface::class, $result->createdAt);
        $this->assertInstanceOf(\DateTimeInterface::class, $result->updatedAt);
        $this->assertInstanceOf(\DateTimeInterface::class, $result->publishedAt);

        $this->assertIsArray($result->variants);
        $this->assertCount(4, $result->variants);
        $this->assertInstanceOf(Variant::class, $result->variants[0]);

        $this->assertIsArray($result->options);
        $this->assertCount(1, $result->options);
        $this->assertInstanceOf(Option::class, $result->options[0]);
    }

    public function testList(): void
    {
        $result = $this->executeGetApi(
            'products',
            null,
            null,
            null,
            false,
            200,
            'products.json'
        );

        $this->assertInstanceOf(Products::class, $result);
        $this->assertCount(2, $result->products);
        $this->assertInstanceOf(Product::class, $result->products[0]);
    }
}
