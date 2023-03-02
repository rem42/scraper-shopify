<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class OutgoingRequest
{
    public ?string $message = null;
    public ?RequestOption $requestOptions = null;
    public ?string $sentAt = null;
    public ?string $kind = null;
}
