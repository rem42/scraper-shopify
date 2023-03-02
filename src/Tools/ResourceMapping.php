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
            'list' => Entity\Addresses::class,
            'one' => Entity\Address::class,
            'singular' => 'address',
        ],
        'carrier_services' => [
            'list' => Entity\CarrierServices::class,
            'one' => Entity\CarrierService::class,
            'singular' => 'carrier_service',
        ],
        'countries' => [
            'list' => Entity\Countries::class,
            'one' => Entity\Country::class,
            'singular' => 'country',
        ],
        'customers' => [
            'list' => Entity\Customers::class,
            'one' => Entity\Customer::class,
            'singular' => 'customer',
        ],
        'fulfillments' => [
            'list' => Entity\Fulfillments::class,
            'one' => Entity\Fulfillment::class,
            'singular' => 'fulfillment',
        ],
        'fulfillment_orders' => [
            'list' => Entity\FulfillmentOrders::class,
            'one' => Entity\FulfillmentOrder::class,
            'singular' => 'fulfillment_order',
        ],
        'fulfillment_request' => [
            'list' => Entity\FulfillmentRequest::class,
            'one' => Entity\FulfillmentRequest::class,
            'singular' => 'fulfillment_request',
        ],
        'fulfillment_request_accept' => [
            'list' => Entity\FulfillmentOrder::class,
            'one' => Entity\FulfillmentOrder::class,
            'singular' => 'fulfillment_request',
        ],
        'assigned_fulfillment_orders' => [
            'list' => Entity\FulfillmentOrders::class,
            'one' => Entity\FulfillmentOrder::class,
            'singular' => 'fulfillment_order',
        ],
        'inventory_items' => [
            'list' => Entity\InventoryItems::class,
            'one' => Entity\InventoryItem::class,
            'singular' => 'inventory_item',
        ],
        'inventory_levels' => [
            'list' => Entity\InventoryLevels::class,
            'one' => Entity\InventoryLevel::class,
            'singular' => 'inventory_level',
        ],
        'metafields' => [
            'list' => Entity\Metafields::class,
            'one' => Entity\Metafield::class,
            'singular' => 'metafield',
        ],
        'orders' => [
            'list' => Entity\Orders::class,
            'one' => Entity\Order::class,
            'singular' => 'order',
        ],
        'products' => [
            'list' => Entity\Products::class,
            'one' => Entity\Product::class,
            'singular' => 'product',
        ],
        'variants' => [
            'list' => Entity\Variants::class,
            'one' => Entity\Variant::class,
            'singular' => 'variant',
        ],
    ];

    public static function find(ShopifyRestRequest $shopifyRestRequest): string
    {
        $realResource = $shopifyRestRequest->getSubResource() ?? $shopifyRestRequest->getResource();
        $realResource = str_replace('/', '_', $realResource);

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
