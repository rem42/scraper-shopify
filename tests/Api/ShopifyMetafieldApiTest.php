<?php declare(strict_types=1);

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
            '721389482',
            null,
            null,
            false,
            200,
            'metafield.json'
        );

        $this->assertInstanceOf(ShopifyMetafield::class, $result);

        $this->assertEquals(721389482, $result->id);
        $this->assertEquals('affiliates', $result->namespace);
        $this->assertEquals('app_key', $result->key);
        $this->assertEquals('app_key', $result->value);
        $this->assertEquals('string', $result->valueType);
        $this->assertNull($result->description);
        $this->assertEquals(548380009, $result->ownerId);
        $this->assertInstanceOf(\DateTimeInterface::class, $result->createdAt);
        $this->assertInstanceOf(\DateTimeInterface::class, $result->updatedAt);
        $this->assertEquals('shop', $result->ownerResource);
        $this->assertEquals('string', $result->type);
        $this->assertEquals('gid://shopify/Metafield/721389482', $result->adminGraphqlApiId);
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
        $this->assertCount(1, $result->metafields);
        $this->assertInstanceOf(ShopifyMetafield::class, $result->metafields[0]);
    }
}
