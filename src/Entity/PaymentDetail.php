<?php

namespace Scraper\ScraperShopify\Entity;

class PaymentDetail
{
    public $creditCardBin = null;
    public $avsResultCode = null;
    public $cvvResultCode = null;
    public ?string $creditCardNumber = null;
    public ?string $creditCardCompany = null;
}
