<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scraper;

#[Scraper(method: Method::DELETE)]
class ShopifyDeleteRestRequest extends ShopifyRestRequest
{
}
