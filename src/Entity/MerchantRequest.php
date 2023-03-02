<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class MerchantRequest
{
    public ?string $message = null;
    public ?RequestOption $requestOptions = null;
    public ?string $kind = null;
}
