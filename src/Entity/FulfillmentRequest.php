<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class FulfillmentRequest
{
    public ?OriginalFulfillmentOrder $originalFulfillmentOrder = null;
    public ?SubmittedFulfillmentOrder $submittedFulfillmentOrder = null;
    public ?object $unsubmittedFulfillmentOrder = null;
}
