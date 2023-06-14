<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class PaymentSchedule
{
    public ?int $amount = null;
    public ?string $currency = null;
    public ?\DateTimeInterface $issuedAt = null;
    public ?\DateTimeInterface $dueAt = null;
    public ?\DateTimeInterface $completedAt = null;
    public ?string $expectedPaymentMethod = null;
}
