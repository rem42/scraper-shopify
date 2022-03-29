<?php

namespace Scraper\ScraperShopify\Tests\Api;

use Scraper\ScraperShopify\Entity\ShopifyMetafield;
use Scraper\ScraperShopify\Entity\ShopifyMetafields;

/**
 * @internal
 */
class ShopifyMetafieldApiTest extends AbstractShopifyApiTestCase
{
    public function testOne(): void
    {
        /** @var ShopifyMetafield $result */
        $result = $this->executeGetApi(
            'metafields',
            721389482,
            null,
            null,
            false,
            200,
            'metafield.json'
        );

        $this->assertInstanceOf(ShopifyMetafield::class, $result);

        $this->assertEquals(721389482, $result->getId());
        $this->assertEquals('affiliates', $result->getNamespace());
        $this->assertEquals('app_key', $result->getKey());
        $this->assertEquals('app_key', $result->getValue());
        $this->assertEquals('string', $result->getValueType());
        $this->assertNull($result->getDescription());
        $this->assertEquals(548380009, $result->getOwnerId());
        $this->assertInstanceOf(\DateTimeInterface::class, $result->getCreatedAt());
        $this->assertInstanceOf(\DateTimeInterface::class, $result->getUpdatedAt());
        $this->assertEquals('shop', $result->getOwnerResource());
        $this->assertEquals('string', $result->getType());
        $this->assertEquals('gid://shopify/Metafield/721389482', $result->getAdminGraphqlApiId());
    }

    public function testList(): void
    {
        /** @var ShopifyMetafields $result */
        $result = $this->executeGetApi(
            'metafields',
            null,
            null,
            null,
            false,
            200,
            'metafields.json'
        );

        $this->assertInstanceOf(ShopifyMetafields::class, $result);
        $this->assertCount(1, $result->getMetafields());
        $this->assertInstanceOf(ShopifyMetafield::class, $result->getMetafields()->first());
    }
}
