<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyPaymentDetails
{
    public ?string $creditCardBin     = null;
    public ?string $avsResultCode     = null;
    public ?string $cvvResultCode     = null;
    public ?string $creditCardNumber  = null;
    public ?string $creditCardCompany = null;

    public function setCreditCardBin(?string $creditCardBin): self
    {
        $this->creditCardBin = $creditCardBin;
        return $this;
    }

    public function setAvsResultCode(?string $avsResultCode): self
    {
        $this->avsResultCode = $avsResultCode;
        return $this;
    }

    public function setCvvResultCode(?string $cvvResultCode): self
    {
        $this->cvvResultCode = $cvvResultCode;
        return $this;
    }

    public function setCreditCardNumber(?string $creditCardNumber): self
    {
        $this->creditCardNumber = $creditCardNumber;
        return $this;
    }

    public function setCreditCardCompany(?string $creditCardCompany): self
    {
        $this->creditCardCompany = $creditCardCompany;
        return $this;
    }
}
