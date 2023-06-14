<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class PaymentTerm
{
    public ?int $amount = null;
    public ?string $currency = null;
    public ?string $paymentTermsName = null;
    public ?string $paymentTermsType = null;
    public ?int $dueInDays = null;
    /** @var array<int, PaymentSchedule> */
    public array $paymentSchedules = [];

    public function addPaymentSchedule(PaymentSchedule $paymentSchedule): self
    {
        $this->paymentSchedules[] = $paymentSchedule;
        return $this;
    }
}
