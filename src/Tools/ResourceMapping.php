<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Tools;

use Scraper\ScraperShopify\Entity;
use Scraper\ScraperShopify\Exception\ShopifyResouceMappingNotFoundException;
use Scraper\ScraperShopify\Request\ShopifyPostRestRequest;
use Scraper\ScraperShopify\Request\ShopifyPutRestRequest;
use Scraper\ScraperShopify\Request\ShopifyRestRequest;

class ResourceMapping
{
    public const resourcesMapping = [
        'reports' => [
            'singular' => 'report',
        ],
        'addresses' => [
            'list'     => Entity\ShopifyCustomerAddresses::class,
            'one'      => Entity\ShopifyCustomerAddress::class,
            'singular' => 'address',
        ],
        'carrier_services' => [
            'list'     => Entity\ShopifyCarrierServices::class,
            'one'      => Entity\ShopifyCarrierService::class,
            'singular' => 'carrier_service',
        ],
        'countries' => [
            'list'     => Entity\ShopifyCountries::class,
            'one'      => Entity\ShopifyCountry::class,
            'singular' => 'country',
        ],
        'customers' => [
            'list'     => Entity\ShopifyCustomers::class,
            'one'      => Entity\ShopifyCustomer::class,
            'singular' => 'customer',
        ],
        'fulfillments' => [
            'list'     => Entity\ShopifyFulfillments::class,
            'one'      => Entity\ShopifyFulfillment::class,
            'singular' => 'fulfillment',
        ],
        'inventory_items' => [
            'list'     => Entity\ShopifyInventoryItems::class,
            'one'      => Entity\ShopifyInventoryItem::class,
            'singular' => 'inventory_item',
        ],
        'inventory_levels' => [
            'list'     => Entity\ShopifyInventoryLevels::class,
            'one'      => Entity\ShopifyInventoryLevel::class,
            'singular' => 'inventory_level',
        ],
        'metafields' => [
            'list'     => Entity\ShopifyMetafields::class,
            'one'      => Entity\ShopifyMetafield::class,
            'singular' => 'metafield',
        ],
        'orders' => [
            'list'     => Entity\ShopifyOrders::class,
            'one'      => Entity\ShopifyOrder::class,
            'singular' => 'order',
        ],
        'products' => [
            'list'     => Entity\ShopifyProducts::class,
            'one'      => Entity\ShopifyProduct::class,
            'singular' => 'product',
        ],
        'variants' => [
            'list'     => Entity\ShopifyProductVariants::class,
            'one'      => Entity\ShopifyProductVariant::class,
            'singular' => 'variant',
        ],
    ];

    public static function find(ShopifyRestRequest $shopifyRestRequest): string
    {
        $realResource = $shopifyRestRequest->getSubResource() ?? $shopifyRestRequest->getResource();

        if (!isset(self::resourcesMapping[$realResource])) {
            throw new ShopifyResouceMappingNotFoundException('cannot found this resource: ' . $realResource);
        }

        $resource = self::resourcesMapping[$realResource];

        $isOne = false;

        if (
            $shopifyRestRequest->getSubId()
            || ($shopifyRestRequest->getId() && null === $shopifyRestRequest->getSubResource())
        ) {
            $isOne = true;
        }

        if (
            $isOne
            || $shopifyRestRequest instanceof ShopifyPostRestRequest
            || $shopifyRestRequest instanceof ShopifyPutRestRequest
        ) {
            if (!isset($resource['one'])) {
                throw new ShopifyResouceMappingNotFoundException('cannot found one for this resource: ' . $realResource);
            }
            return $resource['one'];
        }

        if (!isset($resource['list'])) {
            throw new ShopifyResouceMappingNotFoundException('cannot found list for this resource: ' . $realResource);
        }
        return $resource['list'];
    }

    public static function singularize(ShopifyRestRequest $shopifyRestRequest): string
    {
        $realResource = $shopifyRestRequest->getSubResource() ?? $shopifyRestRequest->getResource();

        if (!isset(self::resourcesMapping[$realResource])) {
            throw new ShopifyResouceMappingNotFoundException('cannot found this resource:' . $realResource);
        }

        return self::resourcesMapping[$realResource]['singular'];
    }
}
