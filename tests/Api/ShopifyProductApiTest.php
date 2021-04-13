<?php

namespace Scraper\ScraperShopify\Tests\Api;

use Doctrine\Common\Collections\Collection;
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
            632910392,
            null,
            null,
            false,
            200,
            'product.json'
        );

        $this->assertInstanceOf(ShopifyProduct::class, $result);

        $this->assertEquals(632910392, $result->getId());

        $this->assertInstanceOf(\DateTimeInterface::class, $result->getCreatedAt());
        $this->assertInstanceOf(\DateTimeInterface::class, $result->getUpdatedAt());
        $this->assertInstanceOf(\DateTimeInterface::class, $result->getPublishedAt());

        $this->assertInstanceOf(Collection::class, $result->getVariants());
        $this->assertCount(4, $result->getVariants());
        $this->assertInstanceOf(ShopifyProductVariant::class, $result->getVariants()->first());

        $this->assertInstanceOf(Collection::class, $result->getOptions());
        $this->assertCount(1, $result->getOptions());
        $this->assertInstanceOf(ShopifyProductOption::class, $result->getOptions()->first());

        $this->assertInstanceOf(Collection::class, $result->getImages());
        $this->assertCount(2, $result->getImages());
        $this->assertInstanceOf(ShopifyImage::class, $result->getImages()->first());

        $this->assertInstanceOf(ShopifyImage::class, $result->getImage());
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
        $this->assertCount(2, $result->getProducts());
        $this->assertInstanceOf(ShopifyProduct::class, $result->getProducts()->first());
    }
}
