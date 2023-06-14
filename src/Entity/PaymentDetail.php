<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class PaymentDetail
{
    public ?string $creditCardBin = null;
    public ?string $avsResultCode = null;
    public ?string $cvvResultCode = null;
    public ?string $creditCardNumber = null;
    public ?string $creditCardCompany = null;
}
