<?php

namespace Scraper\ScraperShopify\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class ShopifyOrder
{
    private ?int $id = null;

    private ?string $email = null;

    private ?bool $estimatedTaxes = null;

    private ?string $closedAt = null;

    private ?\DateTimeInterface $createdAt = null;

    private ?\DateTimeInterface $updatedAt = null;

    private ?int $number = null;

    private ?string $note = null;

    private ?string $token = null;

    /** @deprecated  */
    private ?string $gateway = null;

    private ?bool $test = null;

    private ?string $totalPrice = null;

    private ?string $subtotalPrice = null;

    private ?float $totalWeight = null;

    private ?string $totalTax = null;

    private ?bool $taxesIncluded = null;

    private ?string $currency = null;

    private ?string $financialStatus = null;

    private ?bool $confirmed = null;

    private ?string $totalDiscounts = null;

    private ?string $totalLineItemsPrice = null;

    private ?string $cartToken = null;

    private ?bool $buyerAcceptsMarketing = null;

    private ?string $name = null;

    private ?string $referringSite = null;

    private ?string $landingSite = null;

    private ?\DateTimeInterface $cancelledAt = null;

    private ?string $cancelReason = null;

    private ?string $totalPriceUsd = null;

    private ?string $checkoutToken = null;

    private ?string $reference = null;

    private ?int $userId = null;

    private ?int $locationId = null;

    private ?string $sourceIdentifier = null;

    private ?string $sourceUrl = null;

    private ?\DateTimeInterface $processedAt = null;

    private ?int $device_id = null;

    private ?string $phone = null;

    private ?string $customerLocale = null;

    private ?int $appId = null;

    private ?string $browserIp = null;

    private ?ShopifyClientDetails $clientDetails = null;

    private ?string $landingSiteRef = null;

    private ?int $orderNumber = null;

    /** @var Collection<int, ShopifyDiscountApplication> */
    private Collection $discountApplications;

    /** @var Collection<int, ShopifyDiscountCode> */
    private Collection $discountCodes;

    /** @var Collection<int, ShopifyNoteAttribute> */
    private Collection $noteAttributes;

    /** @deprecated  */
    private ?ShopifyPaymentDetails $paymentDetails = null;

    /** @var Collection<int, string> */
    private Collection $paymentGatewayNames;

    private ?string $processingMethod = null;

    private ?int $checkoutId = null;

    private ?string $sourceName = null;

    private ?string $fulfillmentStatus = null;

    /** @var Collection<int, ShopifyOrderTaxLine> */
    private Collection $taxLines;

    private ?string $tags = null;

    private ?string $contactEmail = null;

    private ?string $orderStatusUrl = null;

    private ?string $presentmentCurrency = null;

    private ?ShopifyPriceSet $totalLineItemsPriceSet = null;

    private ?ShopifyPriceSet $totalDiscountsSet = null;

    private ?ShopifyPriceSet $totalShippingPriceSet = null;

    private ?ShopifyPriceSet $subtotalPriceSet = null;

    private ?ShopifyPriceSet $totalPriceSet = null;

    private ?ShopifyPriceSet $totalTaxSet = null;

    /** @var Collection<int, ShopifyOrderLineItem> */
    private Collection $lineItems;

    /** @var Collection<int, ShopifyOrderFulfillment> */
    private Collection $fulfillments;

    /** @var Collection<int, ShopifyOrderRefund> */
    private Collection $refunds;

    private ?string $totalTipReceived = null;

    private ?string $originalTotalDutiesSet = null;

    private ?string $currentTotalDutiesSet = null;

    private ?string $adminGraphqlApiId = null;

    /** @var Collection<int, ShopifyOrderShippingLine> */
    private Collection $shippingLines;

    private ?ShopifyCustomerAddress $billingAddress = null;

    private ?ShopifyCustomerAddress $shippingAddress = null;

    private ?ShopifyCustomer $customer = null;

    public function __construct()
    {
        $this->discountApplications = new ArrayCollection();
        $this->discountCodes        = new ArrayCollection();
        $this->noteAttributes       = new ArrayCollection();
        $this->taxLines             = new ArrayCollection();
        $this->lineItems            = new ArrayCollection();
        $this->fulfillments         = new ArrayCollection();
        $this->refunds              = new ArrayCollection();
        $this->shippingLines        = new ArrayCollection();
        $this->paymentGatewayNames  = new ArrayCollection();
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

    public function getEstimatedTaxes(): ?bool
    {
        return $this->estimatedTaxes;
    }

    public function setEstimatedTaxes(?bool $estimatedTaxes): self
    {
        $this->estimatedTaxes = $estimatedTaxes;
        return $this;
    }

    public function getClosedAt(): ?string
    {
        return $this->closedAt;
    }

    public function setClosedAt(?string $closedAt): self
    {
        $this->closedAt = $closedAt;

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

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(?int $number): self
    {
        $this->number = $number;

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

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(?string $token): self
    {
        $this->token = $token;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getGateway(): ?string
    {
        return $this->gateway;
    }

    /**
     * @deprecated
     */
    public function setGateway(?string $gateway): self
    {
        $this->gateway = $gateway;

        return $this;
    }

    public function getTest(): ?bool
    {
        return $this->test;
    }

    public function setTest(?bool $test): self
    {
        $this->test = $test;

        return $this;
    }

    public function getTotalPrice(): ?string
    {
        return $this->totalPrice;
    }

    public function setTotalPrice(?string $totalPrice): self
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    public function getSubtotalPrice(): ?string
    {
        return $this->subtotalPrice;
    }

    public function setSubtotalPrice(?string $subtotalPrice): self
    {
        $this->subtotalPrice = $subtotalPrice;

        return $this;
    }

    public function getTotalWeight(): ?float
    {
        return $this->totalWeight;
    }

    public function setTotalWeight(?float $totalWeight): self
    {
        $this->totalWeight = $totalWeight;

        return $this;
    }

    public function getTotalTax(): ?string
    {
        return $this->totalTax;
    }

    public function setTotalTax(?string $totalTax): self
    {
        $this->totalTax = $totalTax;

        return $this;
    }

    public function getTaxesIncluded(): ?bool
    {
        return $this->taxesIncluded;
    }

    public function setTaxesIncluded(?bool $taxesIncluded): self
    {
        $this->taxesIncluded = $taxesIncluded;

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

    public function getFinancialStatus(): ?string
    {
        return $this->financialStatus;
    }

    public function setFinancialStatus(?string $financialStatus): self
    {
        $this->financialStatus = $financialStatus;

        return $this;
    }

    public function getConfirmed(): ?bool
    {
        return $this->confirmed;
    }

    public function setConfirmed(?bool $confirmed): self
    {
        $this->confirmed = $confirmed;

        return $this;
    }

    public function getTotalDiscounts(): ?string
    {
        return $this->totalDiscounts;
    }

    public function setTotalDiscounts(?string $totalDiscounts): self
    {
        $this->totalDiscounts = $totalDiscounts;

        return $this;
    }

    public function getTotalLineItemsPrice(): ?string
    {
        return $this->totalLineItemsPrice;
    }

    public function setTotalLineItemsPrice(?string $totalLineItemsPrice): self
    {
        $this->totalLineItemsPrice = $totalLineItemsPrice;

        return $this;
    }

    public function getCartToken(): ?string
    {
        return $this->cartToken;
    }

    public function setCartToken(?string $cartToken): self
    {
        $this->cartToken = $cartToken;

        return $this;
    }

    public function getBuyerAcceptsMarketing(): ?bool
    {
        return $this->buyerAcceptsMarketing;
    }

    public function setBuyerAcceptsMarketing(?bool $buyerAcceptsMarketing): self
    {
        $this->buyerAcceptsMarketing = $buyerAcceptsMarketing;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getReferringSite(): ?string
    {
        return $this->referringSite;
    }

    public function setReferringSite(?string $referringSite): self
    {
        $this->referringSite = $referringSite;

        return $this;
    }

    public function getLandingSite(): ?string
    {
        return $this->landingSite;
    }

    public function setLandingSite(?string $landingSite): self
    {
        $this->landingSite = $landingSite;

        return $this;
    }

    public function getCancelledAt(): ?\DateTimeInterface
    {
        return $this->cancelledAt;
    }

    public function setCancelledAt(?\DateTimeInterface $cancelledAt): self
    {
        $this->cancelledAt = $cancelledAt;

        return $this;
    }

    public function getCancelReason(): ?string
    {
        return $this->cancelReason;
    }

    public function setCancelReason(?string $cancelReason): self
    {
        $this->cancelReason = $cancelReason;

        return $this;
    }

    public function getTotalPriceUsd(): ?string
    {
        return $this->totalPriceUsd;
    }

    public function setTotalPriceUsd(?string $totalPriceUsd): self
    {
        $this->totalPriceUsd = $totalPriceUsd;

        return $this;
    }

    public function getCheckoutToken(): ?string
    {
        return $this->checkoutToken;
    }

    public function setCheckoutToken(?string $checkoutToken): self
    {
        $this->checkoutToken = $checkoutToken;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getLocationId(): ?int
    {
        return $this->locationId;
    }

    public function setLocationId(?int $locationId): self
    {
        $this->locationId = $locationId;

        return $this;
    }

    public function getSourceIdentifier(): ?string
    {
        return $this->sourceIdentifier;
    }

    public function setSourceIdentifier(?string $sourceIdentifier): self
    {
        $this->sourceIdentifier = $sourceIdentifier;

        return $this;
    }

    public function getSourceUrl(): ?string
    {
        return $this->sourceUrl;
    }

    public function setSourceUrl(?string $sourceUrl): self
    {
        $this->sourceUrl = $sourceUrl;

        return $this;
    }

    public function getProcessedAt(): ?\DateTimeInterface
    {
        return $this->processedAt;
    }

    public function setProcessedAt(?\DateTimeInterface $processedAt): self
    {
        $this->processedAt = $processedAt;

        return $this;
    }

    public function getDeviceId(): ?int
    {
        return $this->device_id;
    }

    public function setDeviceId(?int $device_id): self
    {
        $this->device_id = $device_id;

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

    public function getCustomerLocale(): ?string
    {
        return $this->customerLocale;
    }

    public function setCustomerLocale(?string $customerLocale): self
    {
        $this->customerLocale = $customerLocale;

        return $this;
    }

    public function getAppId(): ?int
    {
        return $this->appId;
    }

    public function setAppId(?int $appId): self
    {
        $this->appId = $appId;

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

    public function getClientDetails(): ?ShopifyClientDetails
    {
        return $this->clientDetails;
    }

    public function setClientDetails(?ShopifyClientDetails $clientDetails): self
    {
        $this->clientDetails = $clientDetails;

        return $this;
    }

    public function getLandingSiteRef(): ?string
    {
        return $this->landingSiteRef;
    }

    public function setLandingSiteRef(?string $landingSiteRef): self
    {
        $this->landingSiteRef = $landingSiteRef;

        return $this;
    }

    public function getOrderNumber(): ?int
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(?int $orderNumber): self
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getPaymentDetails(): ?ShopifyPaymentDetails
    {
        return $this->paymentDetails;
    }

    /**
     * @deprecated
     */
    public function setPaymentDetails(?ShopifyPaymentDetails $paymentDetails): self
    {
        $this->paymentDetails = $paymentDetails;

        return $this;
    }

    public function getProcessingMethod(): ?string
    {
        return $this->processingMethod;
    }

    public function setProcessingMethod(?string $processingMethod): self
    {
        $this->processingMethod = $processingMethod;

        return $this;
    }

    public function getCheckoutId(): ?int
    {
        return $this->checkoutId;
    }

    public function setCheckoutId(?int $checkoutId): self
    {
        $this->checkoutId = $checkoutId;

        return $this;
    }

    public function getSourceName(): ?string
    {
        return $this->sourceName;
    }

    public function setSourceName(?string $sourceName): self
    {
        $this->sourceName = $sourceName;

        return $this;
    }

    public function getFulfillmentStatus(): ?string
    {
        return $this->fulfillmentStatus;
    }

    public function setFulfillmentStatus(?string $fulfillmentStatus): self
    {
        $this->fulfillmentStatus = $fulfillmentStatus;

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

    public function getContactEmail(): ?string
    {
        return $this->contactEmail;
    }

    public function setContactEmail(?string $contactEmail): self
    {
        $this->contactEmail = $contactEmail;

        return $this;
    }

    public function getOrderStatusUrl(): ?string
    {
        return $this->orderStatusUrl;
    }

    public function setOrderStatusUrl(?string $orderStatusUrl): self
    {
        $this->orderStatusUrl = $orderStatusUrl;

        return $this;
    }

    public function getPresentmentCurrency(): ?string
    {
        return $this->presentmentCurrency;
    }

    public function setPresentmentCurrency(?string $presentmentCurrency): self
    {
        $this->presentmentCurrency = $presentmentCurrency;

        return $this;
    }

    public function getTotalLineItemsPriceSet(): ?ShopifyPriceSet
    {
        return $this->totalLineItemsPriceSet;
    }

    public function setTotalLineItemsPriceSet(?ShopifyPriceSet $totalLineItemsPriceSet): self
    {
        $this->totalLineItemsPriceSet = $totalLineItemsPriceSet;

        return $this;
    }

    public function getTotalDiscountsSet(): ?ShopifyPriceSet
    {
        return $this->totalDiscountsSet;
    }

    public function setTotalDiscountsSet(?ShopifyPriceSet $totalDiscountsSet): self
    {
        $this->totalDiscountsSet = $totalDiscountsSet;

        return $this;
    }

    public function getTotalShippingPriceSet(): ?ShopifyPriceSet
    {
        return $this->totalShippingPriceSet;
    }

    public function setTotalShippingPriceSet(?ShopifyPriceSet $totalShippingPriceSet): self
    {
        $this->totalShippingPriceSet = $totalShippingPriceSet;

        return $this;
    }

    public function getSubtotalPriceSet(): ?ShopifyPriceSet
    {
        return $this->subtotalPriceSet;
    }

    public function setSubtotalPriceSet(?ShopifyPriceSet $subtotalPriceSet): self
    {
        $this->subtotalPriceSet = $subtotalPriceSet;

        return $this;
    }

    public function getTotalPriceSet(): ?ShopifyPriceSet
    {
        return $this->totalPriceSet;
    }

    public function setTotalPriceSet(?ShopifyPriceSet $totalPriceSet): self
    {
        $this->totalPriceSet = $totalPriceSet;

        return $this;
    }

    public function getTotalTaxSet(): ?ShopifyPriceSet
    {
        return $this->totalTaxSet;
    }

    public function setTotalTaxSet(?ShopifyPriceSet $totalTaxSet): self
    {
        $this->totalTaxSet = $totalTaxSet;

        return $this;
    }

    public function getTotalTipReceived(): ?string
    {
        return $this->totalTipReceived;
    }

    public function setTotalTipReceived(?string $totalTipReceived): self
    {
        $this->totalTipReceived = $totalTipReceived;

        return $this;
    }

    public function getOriginalTotalDutiesSet(): ?string
    {
        return $this->originalTotalDutiesSet;
    }

    public function setOriginalTotalDutiesSet(?string $originalTotalDutiesSet): self
    {
        $this->originalTotalDutiesSet = $originalTotalDutiesSet;

        return $this;
    }

    public function getCurrentTotalDutiesSet(): ?string
    {
        return $this->currentTotalDutiesSet;
    }

    public function setCurrentTotalDutiesSet(?string $currentTotalDutiesSet): self
    {
        $this->currentTotalDutiesSet = $currentTotalDutiesSet;

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

    public function getBillingAddress(): ?ShopifyCustomerAddress
    {
        return $this->billingAddress;
    }

    public function setBillingAddress(?ShopifyCustomerAddress $billingAddress): self
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    public function getShippingAddress(): ?ShopifyCustomerAddress
    {
        return $this->shippingAddress;
    }

    public function setShippingAddress(?ShopifyCustomerAddress $shippingAddress): self
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    public function getCustomer(): ?ShopifyCustomer
    {
        return $this->customer;
    }

    public function setCustomer(?ShopifyCustomer $customer): self
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @return Collection<int, ShopifyDiscountApplication>
     */
    public function getDiscountApplications(): Collection
    {
        return $this->discountApplications;
    }

    public function addDiscountApplication(ShopifyDiscountApplication $discountApplication): self
    {
        $this->discountApplications->add($discountApplication);

        return $this;
    }

    public function removeDiscountApplication(ShopifyDiscountApplication $discountApplication): self
    {
        $this->discountApplications->removeElement($discountApplication);

        return $this;
    }

    /**
     * @return Collection<int, ShopifyDiscountCode>
     */
    public function getDiscountCodes(): Collection
    {
        return $this->discountCodes;
    }

    public function addDiscountCode(ShopifyDiscountCode $discountCode): self
    {
        $this->discountCodes->add($discountCode);

        return $this;
    }

    public function removeDiscountCode(ShopifyDiscountCode $discountCode): self
    {
        $this->discountCodes->removeElement($discountCode);

        return $this;
    }

    /**
     * @return Collection<int, ShopifyNoteAttribute>
     */
    public function getNoteAttributes(): Collection
    {
        return $this->noteAttributes;
    }

    public function addNoteAttribute(ShopifyNoteAttribute $noteAttribute): self
    {
        $this->noteAttributes->add($noteAttribute);

        return $this;
    }

    public function removeNoteAttribute(ShopifyNoteAttribute $noteAttribute): self
    {
        $this->noteAttributes->removeElement($noteAttribute);

        return $this;
    }

    /**
     * @return Collection<int, string>
     */
    public function getPaymentGatewayNames(): Collection
    {
        return $this->paymentGatewayNames;
    }

    public function addPaymentGatewayName(string $paymentGatewayName): self
    {
        $this->paymentGatewayNames->add($paymentGatewayName);

        return $this;
    }

    public function removePaymentGatewayName(string $paymentGatewayName): self
    {
        $this->paymentGatewayNames->removeElement($paymentGatewayName);

        return $this;
    }

    /**
     * @return Collection<int, ShopifyOrderTaxLine>
     */
    public function getTaxLines(): Collection
    {
        return $this->taxLines;
    }

    public function addTaxLine(ShopifyOrderTaxLine $taxLine): self
    {
        $this->taxLines->add($taxLine);

        return $this;
    }

    public function removeTaxLine(ShopifyOrderTaxLine $taxLine): self
    {
        $this->taxLines->removeElement($taxLine);

        return $this;
    }

    /**
     * @return Collection<int, ShopifyOrderLineItem>
     */
    public function getLineItems(): Collection
    {
        return $this->lineItems;
    }

    public function addLineItem(ShopifyOrderLineItem $lineItem): self
    {
        $this->lineItems->add($lineItem);

        return $this;
    }

    public function removeLineItem(ShopifyOrderLineItem $lineItem): self
    {
        $this->lineItems->removeElement($lineItem);

        return $this;
    }

    /**
     * @return Collection<int, ShopifyOrderFulfillment>
     */
    public function getFulfillments(): Collection
    {
        return $this->fulfillments;
    }

    public function addFulfillment(ShopifyOrderFulfillment $fulfillment): self
    {
        $this->fulfillments->add($fulfillment);

        return $this;
    }

    public function removeFulfillment(ShopifyOrderFulfillment $fulfillment): self
    {
        $this->fulfillments->removeElement($fulfillment);

        return $this;
    }

    /**
     * @return Collection<int, ShopifyOrderRefund>
     */
    public function getRefunds(): Collection
    {
        return $this->refunds;
    }

    public function addRefund(ShopifyOrderRefund $refund): self
    {
        $this->refunds->add($refund);

        return $this;
    }

    public function removeRefund(ShopifyOrderRefund $refund): self
    {
        $this->refunds->removeElement($refund);

        return $this;
    }

    /**
     * @return Collection<int, ShopifyOrderShippingLine>
     */
    public function getShippingLines(): Collection
    {
        return $this->shippingLines;
    }

    public function addShippingLine(ShopifyOrderShippingLine $shippingLine): self
    {
        $this->shippingLines->add($shippingLine);

        return $this;
    }

    public function removeShippingLine(ShopifyOrderShippingLine $shippingLine): self
    {
        $this->shippingLines->removeElement($shippingLine);

        return $this;
    }
}
