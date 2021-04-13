<?php

namespace Scraper\ScraperShopify\Entity;

class ShopifyPaymentDetails
{
    private ?string $creditCardBin = null;

    private ?string $avsResultCode = null;

    private ?string $cvvResultCode = null;

    private ?string $creditCardNumber = null;

    private ?string $creditCardCompany = null;

    public function getCreditCardBin(): ?string
    {
        return $this->creditCardBin;
    }

    public function setCreditCardBin(?string $creditCardBin): self
    {
        $this->creditCardBin = $creditCardBin;

        return $this;
    }

    public function getAvsResultCode(): ?string
    {
        return $this->avsResultCode;
    }

    public function setAvsResultCode(?string $avsResultCode): self
    {
        $this->avsResultCode = $avsResultCode;

        return $this;
    }

    public function getCvvResultCode(): ?string
    {
        return $this->cvvResultCode;
    }

    public function setCvvResultCode(?string $cvvResultCode): self
    {
        $this->cvvResultCode = $cvvResultCode;

        return $this;
    }

    public function getCreditCardNumber(): ?string
    {
        return $this->creditCardNumber;
    }

    public function setCreditCardNumber(?string $creditCardNumber): self
    {
        $this->creditCardNumber = $creditCardNumber;

        return $this;
    }

    public function getCreditCardCompany(): ?string
    {
        return $this->creditCardCompany;
    }

    public function setCreditCardCompany(?string $creditCardCompany): self
    {
        $this->creditCardCompany = $creditCardCompany;

        return $this;
    }
}
