<?php

namespace Scraper\ScraperShopify\Tests\Api;

use Doctrine\Common\Collections\Collection;
use Scraper\ScraperShopify\Entity\ShopifyProductPresentmentPrice;
use Scraper\ScraperShopify\Entity\ShopifyProductVariant;
use Scraper\ScraperShopify\Entity\ShopifyProductVariants;

/**
 * @internal
 */
class ShopifyProductVariantApiTest extends AbstractShopifyApiTestCase
{
    public function testOne(): void
    {
        /** @var ShopifyProductVariant $result */
        $result = $this->executeGetApi(
            'products',
            632910392,
            'variants',
            808950810,
            false,
            200,
            'product_variant.json'
        );

        $this->assertInstanceOf(ShopifyProductVariant::class, $result);

        $this->assertEquals(808950810, $result->getId());
        $this->assertEquals(632910392, $result->getProductId());

        $this->assertInstanceOf(\DateTimeInterface::class, $result->getCreatedAt());
        $this->assertInstanceOf(\DateTimeInterface::class, $result->getUpdatedAt());

        $this->assertInstanceOf(Collection::class, $result->getPresentmentPrices());
        $this->assertCount(1, $result->getPresentmentPrices());
        $this->assertInstanceOf(ShopifyProductPresentmentPrice::class, $result->getPresentmentPrices()->first());
    }

    public function testList(): void
    {
        /** @var ShopifyProductVariants $result */
        $result = $this->executeGetApi(
            'products',
            632910392,
            'variants',
            null,
            false,
            200,
            'product_variants.json'
        );

        $this->assertInstanceOf(ShopifyProductVariants::class, $result);
        $this->assertCount(4, $result->getVariants());
        $this->assertInstanceOf(ShopifyProductVariant::class, $result->getVariants()->first());
    }
}
