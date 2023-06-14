<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class RequestOption
{
    public ?string $shippingMethod = null;
    public ?string $note = null;
    public ?\DateTimeInterface $date = null;
    public ?bool $notifyCustomer = null;
}
