<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Tests\Api;

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
            '632910392',
            'variants',
            808950810,
            false,
            200,
            'product_variant.json'
        );

        $this->assertInstanceOf(ShopifyProductVariant::class, $result);

        $this->assertEquals(808950810, $result->id);
        $this->assertEquals(632910392, $result->productId);

        $this->assertInstanceOf(\DateTimeInterface::class, $result->createdAt);
        $this->assertInstanceOf(\DateTimeInterface::class, $result->updatedAt);

        $this->assertIsArray($result->presentmentPrices);
        $this->assertCount(1, $result->presentmentPrices);
        $this->assertInstanceOf(ShopifyProductPresentmentPrice::class, $result->presentmentPrices[0]);
    }

    public function testList(): void
    {
        /** @var ShopifyProductVariants $result */
        $result = $this->executeGetApi(
            'products',
            '632910392',
            'variants',
            null,
            false,
            200,
            'product_variants.json'
        );

        $this->assertInstanceOf(ShopifyProductVariants::class, $result);
        $this->assertCount(4, $result->variants);
        $this->assertInstanceOf(ShopifyProductVariant::class, $result->variants[0]);
    }
}
