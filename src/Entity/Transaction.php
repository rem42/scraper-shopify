<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class Transaction
{
    public ?int $id = null;
    public ?int $orderId = null;
    public ?string $kind = null;
    public ?string $gateway = null;
    public ?string $status = null;
    public ?string $message = null;
    public ?string $createdAt = null;
    public ?bool $test = null;
    public ?string $authorization = null;
    public ?int $locationId = null;
    public ?int $userId = null;
    public ?int $parentId = null;
    public ?string $processedAt = null;
    public ?string $deviceId = null;
    public ?string $errorCode = null;
    public ?string $sourceName = null;
    public ?Receipt $receipt = null;
    public ?CurrencyExchangeAdjustment $currencyExchangeAdjustment = null;
    public ?string $amount = null;
    public ?string $currency = null;
    public ?string $paymentId = null;
    public ?TotalUnsettledSet $totalUnsettledSet = null;
    public ?string $adminGraphqlApiId = null;
    public ?PaymentDetail $paymentDetails = null;
}
