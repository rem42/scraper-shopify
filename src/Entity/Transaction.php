<?php

namespace Scraper\ScraperShopify\Entity;

class Transaction
{
    public ?int $id = null;
    public ?string $adminGraphqlApiId = null;
    public ?string $amount = null;
    public ?string $authorization = null;
    public ?\DateTimeInterface $createdAt = null;
    public ?string $currency = null;
    public $deviceId = null;
    public $errorCode = null;
    public ?string $gateway = null;
    public ?string $kind = null;
    public $locationId = null;
    public $message = null;
    public ?int $orderId = null;
    public ?int $parentId = null;
    public ?string $processedAt = null;
    public ?Receipt $receipt = null;
    public ?string $sourceName = null;
    public ?string $status = null;
    public ?bool $test = null;
    public $userId = null;
}
