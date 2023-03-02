<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Tests\Api;

use Scraper\ScraperShopify\Entity\PresentmentPrice;
use Scraper\ScraperShopify\Entity\Variant;
use Scraper\ScraperShopify\Entity\Variants;

/**
 * @internal
 */
class VariantApiTest extends AbstractShopifyApiTestCase
{
    public function testOne(): void
    {
        $result = $this->executeGetApi(
            'products',
            '632910392',
            'variants',
            808950810,
            false,
            200,
            'variant.json'
        );

        $this->assertInstanceOf(Variant::class, $result);

        $this->assertEquals(808950810, $result->id);
        $this->assertEquals(632910392, $result->productId);

        $this->assertInstanceOf(\DateTimeInterface::class, $result->createdAt);
        $this->assertInstanceOf(\DateTimeInterface::class, $result->updatedAt);

        $this->assertIsArray($result->presentmentPrices);
        $this->assertCount(1, $result->presentmentPrices);
        $this->assertInstanceOf(PresentmentPrice::class, $result->presentmentPrices[0]);
    }

    public function testList(): void
    {
        $result = $this->executeGetApi(
            'products',
            '632910392',
            'variants',
            null,
            false,
            200,
            'variants.json'
        );

        $this->assertInstanceOf(Variants::class, $result);
        $this->assertCount(4, $result->variants);
        $this->assertInstanceOf(Variant::class, $result->variants[0]);
    }
}
