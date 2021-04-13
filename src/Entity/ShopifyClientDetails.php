<?php

namespace Scraper\ScraperShopify\Entity;

class ShopifyClientDetails
{
    private ?string $acceptLanguage = null;

    private ?string $browserHeight = null;

    private ?string $browserIp = null;

    private ?string $browserWidth = null;

    private ?string $sessionHash = null;

    private ?string $userAgent = null;

    public function getAcceptLanguage(): ?string
    {
        return $this->acceptLanguage;
    }

    public function setAcceptLanguage(?string $acceptLanguage): self
    {
        $this->acceptLanguage = $acceptLanguage;

        return $this;
    }

    public function getBrowserHeight(): ?string
    {
        return $this->browserHeight;
    }

    public function setBrowserHeight(?string $browserHeight): self
    {
        $this->browserHeight = $browserHeight;

        return $this;
    }

    public function getBrowserIp(): ?string
    {
        return $this->browserIp;
    }

    public function setBrowserIp(?string $browserIp): self
    {
        $this->browserIp = $browserIp;

        return $this;
    }

    public function getBrowserWidth(): ?string
    {
        return $this->browserWidth;
    }

    public function setBrowserWidth(?string $browserWidth): self
    {
        $this->browserWidth = $browserWidth;

        return $this;
    }

    public function getSessionHash(): ?string
    {
        return $this->sessionHash;
    }

    public function setSessionHash(?string $sessionHash): self
    {
        $this->sessionHash = $sessionHash;

        return $this;
    }

    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }

    public function setUserAgent(?string $userAgent): self
    {
        $this->userAgent = $userAgent;

        return $this;
    }
}
