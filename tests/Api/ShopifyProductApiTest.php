<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Tests\Api;

use Scraper\ScraperShopify\Entity\ShopifyImage;
use Scraper\ScraperShopify\Entity\ShopifyProduct;
use Scraper\ScraperShopify\Entity\ShopifyProductOption;
use Scraper\ScraperShopify\Entity\ShopifyProducts;
use Scraper\ScraperShopify\Entity\ShopifyProductVariant;

/**
 * @internal
 */
class ShopifyProductApiTest extends AbstractShopifyApiTestCase
{
    public function testOne(): void
    {
        /** @var ShopifyProduct $result */
        $result = $this->executeGetApi(
            'products',
            '632910392',
            null,
            null,
            false,
            200,
            'product.json'
        );

        $this->assertInstanceOf(ShopifyProduct::class, $result);

        $this->assertEquals(632910392, $result->id);

        $this->assertInstanceOf(\DateTimeInterface::class, $result->createdAt);
        $this->assertInstanceOf(\DateTimeInterface::class, $result->updatedAt);
        $this->assertInstanceOf(\DateTimeInterface::class, $result->publishedAt);

        $this->assertIsArray($result->variants);
        $this->assertCount(4, $result->variants);
        $this->assertInstanceOf(ShopifyProductVariant::class, $result->variants[0]);

        $this->assertIsArray($result->options);
        $this->assertCount(1, $result->options);
        $this->assertInstanceOf(ShopifyProductOption::class, $result->options[0]);

        $this->assertIsArray($result->images);
        $this->assertCount(2, $result->images);
        $this->assertInstanceOf(ShopifyImage::class, $result->images[0]);

        $this->assertInstanceOf(ShopifyImage::class, $result->image);
    }

    public function testList(): void
    {
        /** @var ShopifyProducts $result */
        $result = $this->executeGetApi(
            'products',
            null,
            null,
            null,
            false,
            200,
            'products.json'
        );

        $this->assertInstanceOf(ShopifyProducts::class, $result);
        $this->assertCount(2, $result->products);
        $this->assertInstanceOf(ShopifyProduct::class, $result->products[0]);
    }
}
