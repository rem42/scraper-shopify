<?php

namespace Scraper\ScraperShopify\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class ShopifyCustomer
{
    private ?int $id = null;

    private ?string $email = null;

    private ?bool $acceptsMarketing = null;

    private ?\DateTimeInterface $createdAt = null;

    private ?\DateTimeInterface $updatedAt = null;

    private ?string $firstName = null;

    private ?string $lastName = null;

    private ?int $ordersCount = null;

    private ?string $state = null;

    private ?string $totalSpent = null;

    private ?int $lastOrderId = null;

    private ?string $note = null;

    private ?bool $verifiedEmail = null;

    private ?string $multipassIdentifier = null;

    private ?bool $taxExempt = null;

    private ?string $phone = null;

    private ?string $tags = null;

    private ?string $lastOrderName = null;

    private ?string $currency = null;

    private ?\DateTimeInterface $acceptsMarketingUpdatedAt = null;

    private ?string $marketingOptInLevel = null;

    /** @var Collection<int, string> */
    private Collection $taxExemptions;

    private ?string $adminGraphqlApiId = null;

    private ?ShopifyCustomerAddress $defaultAddress = null;

    public function __construct()
    {
        $this->taxExemptions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getAcceptsMarketing(): ?bool
    {
        return $this->acceptsMarketing;
    }

    public function setAcceptsMarketing(?bool $acceptsMarketing): self
    {
        $this->acceptsMarketing = $acceptsMarketing;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getOrdersCount(): ?int
    {
        return $this->ordersCount;
    }

    public function setOrdersCount(?int $ordersCount): self
    {
        $this->ordersCount = $ordersCount;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getTotalSpent(): ?string
    {
        return $this->totalSpent;
    }

    public function setTotalSpent(?string $totalSpent): self
    {
        $this->totalSpent = $totalSpent;

        return $this;
    }

    public function getLastOrderId(): ?int
    {
        return $this->lastOrderId;
    }

    public function setLastOrderId(?int $lastOrderId): self
    {
        $this->lastOrderId = $lastOrderId;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getVerifiedEmail(): ?bool
    {
        return $this->verifiedEmail;
    }

    public function setVerifiedEmail(?bool $verifiedEmail): self
    {
        $this->verifiedEmail = $verifiedEmail;

        return $this;
    }

    public function getMultipassIdentifier(): ?string
    {
        return $this->multipassIdentifier;
    }

    public function setMultipassIdentifier(?string $multipassIdentifier): self
    {
        $this->multipassIdentifier = $multipassIdentifier;

        return $this;
    }

    public function getTaxExempt(): ?bool
    {
        return $this->taxExempt;
    }

    public function setTaxExempt(?bool $taxExempt): self
    {
        $this->taxExempt = $taxExempt;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getTags(): ?string
    {
        return $this->tags;
    }

    public function setTags(?string $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    public function getLastOrderName(): ?string
    {
        return $this->lastOrderName;
    }

    public function setLastOrderName(?string $lastOrderName): self
    {
        $this->lastOrderName = $lastOrderName;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getAcceptsMarketingUpdatedAt(): ?\DateTimeInterface
    {
        return $this->acceptsMarketingUpdatedAt;
    }

    public function setAcceptsMarketingUpdatedAt(?\DateTimeInterface $acceptsMarketingUpdatedAt): self
    {
        $this->acceptsMarketingUpdatedAt = $acceptsMarketingUpdatedAt;

        return $this;
    }

    public function getMarketingOptInLevel(): ?string
    {
        return $this->marketingOptInLevel;
    }

    public function setMarketingOptInLevel(?string $marketingOptInLevel): self
    {
        $this->marketingOptInLevel = $marketingOptInLevel;

        return $this;
    }

    public function getAdminGraphqlApiId(): ?string
    {
        return $this->adminGraphqlApiId;
    }

    public function setAdminGraphqlApiId(?string $adminGraphqlApiId): self
    {
        $this->adminGraphqlApiId = $adminGraphqlApiId;

        return $this;
    }

    public function getDefaultAddress(): ?ShopifyCustomerAddress
    {
        return $this->defaultAddress;
    }

    public function setDefaultAddress(?ShopifyCustomerAddress $defaultAddress): self
    {
        $this->defaultAddress = $defaultAddress;

        return $this;
    }

    /**
     * @return Collection<int, string>
     */
    public function getTaxExemptions(): Collection
    {
        return $this->taxExemptions;
    }

    public function addTaxExemption(string $taxExemption): self
    {
        $this->taxExemptions->add($taxExemption);

        return $this;
    }

    public function removeTaxExemption(string $taxExemption): self
    {
        $this->taxExemptions->removeElement($taxExemption);

        return $this;
    }
}
