<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Tests\Api;

use Scraper\ScraperShopify\Entity\Metafield;
use Scraper\ScraperShopify\Entity\Metafields;

/**
 * @internal
 */
class MetafieldApiTest extends AbstractShopifyApiTestCase
{
    public function testOne(): void
    {
        $result = $this->executeGetApi(
            'metafields',
            '534526895',
            null,
            null,
            false,
            200,
            'metafield.json'
        );

        $this->assertInstanceOf(Metafield::class, $result);

        $this->assertEquals(534526895, $result->id);
        $this->assertEquals('translation', $result->namespace);
        $this->assertEquals('title_fr', $result->key);
        $this->assertEquals('Le iPod', $result->value);
        $this->assertEquals('Blog French title translation', $result->description);
        $this->assertEquals(241253187, $result->ownerId);
        $this->assertInstanceOf(\DateTimeInterface::class, $result->createdAt);
        $this->assertInstanceOf(\DateTimeInterface::class, $result->updatedAt);
        $this->assertEquals('blog', $result->ownerResource);
        $this->assertEquals('single_line_text_field', $result->type);
        $this->assertEquals('gid://shopify/Metafield/534526895', $result->adminGraphqlApiId);
    }

    public function testList(): void
    {
        $result = $this->executeGetApi(
            'metafields',
            null,
            null,
            null,
            false,
            200,
            'metafields.json'
        );

        $this->assertInstanceOf(Metafields::class, $result);
        $this->assertCount(1, $result->metafields);
        $this->assertInstanceOf(Metafield::class, $result->metafields[0]);
    }
}
