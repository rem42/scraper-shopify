<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class ShopifyCustomer
{
    public ?int $id = null;
    public ?string $email = null;
    public ?bool $acceptsMarketing = null;
    public ?\DateTimeInterface $createdAt = null;
    public ?\DateTimeInterface $updatedAt = null;
    public ?string $firstName = null;
    public ?string $lastName = null;
    public ?int $ordersCount = null;
    public ?string $state = null;
    public ?string $totalSpent = null;
    public ?int $lastOrderId = null;
    public ?string $note = null;
    public ?bool $verifiedEmail = null;
    public ?string $multipassIdentifier = null;
    public ?bool $taxExempt = null;
    public ?string $phone = null;
    public ?string $tags = null;
    public ?string $lastOrderName = null;
    public ?string $currency = null;
    public ?\DateTimeInterface $acceptsMarketingUpdatedAt = null;
    public ?string $marketingOptInLevel = null;
    /** @var array<int, string> */
    public array $taxExemptions = [];
    public ?string $adminGraphqlApiId = null;
    public ?ShopifyCustomerAddress $defaultAddress = null;

    public function addTaxExemption(string $taxExemption): self
    {
        $this->taxExemptions[] = $taxExemption;

        return $this;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function setAcceptsMarketing(?bool $acceptsMarketing): self
    {
        $this->acceptsMarketing = $acceptsMarketing;
        return $this;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function setOrdersCount(?int $ordersCount): self
    {
        $this->ordersCount = $ordersCount;
        return $this;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
    }

    public function setTotalSpent(?string $totalSpent): self
    {
        $this->totalSpent = $totalSpent;
        return $this;
    }

    public function setLastOrderId(?int $lastOrderId): self
    {
        $this->lastOrderId = $lastOrderId;
        return $this;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;
        return $this;
    }

    public function setVerifiedEmail(?bool $verifiedEmail): self
    {
        $this->verifiedEmail = $verifiedEmail;
        return $this;
    }

    public function setMultipassIdentifier(?string $multipassIdentifier): self
    {
        $this->multipassIdentifier = $multipassIdentifier;
        return $this;
    }

    public function setTaxExempt(?bool $taxExempt): self
    {
        $this->taxExempt = $taxExempt;
        return $this;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    public function setTags(?string $tags): self
    {
        $this->tags = $tags;
        return $this;
    }

    public function setLastOrderName(?string $lastOrderName): self
    {
        $this->lastOrderName = $lastOrderName;
        return $this;
    }

    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;
        return $this;
    }

    public function setAcceptsMarketingUpdatedAt(?\DateTimeInterface $acceptsMarketingUpdatedAt): self
    {
        $this->acceptsMarketingUpdatedAt = $acceptsMarketingUpdatedAt;
        return $this;
    }

    public function setMarketingOptInLevel(?string $marketingOptInLevel): self
    {
        $this->marketingOptInLevel = $marketingOptInLevel;
        return $this;
    }

    public function setAdminGraphqlApiId(?string $adminGraphqlApiId): self
    {
        $this->adminGraphqlApiId = $adminGraphqlApiId;
        return $this;
    }

    public function setDefaultAddress(?ShopifyCustomerAddress $defaultAddress): self
    {
        $this->defaultAddress = $defaultAddress;
        return $this;
    }
}
