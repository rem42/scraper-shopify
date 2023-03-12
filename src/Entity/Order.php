<?php

namespace Scraper\ScraperShopify\Entity;

class Order
{
    public ?int $id = null;
    public ?string $adminGraphqlApiId = null;
    public $appId = null;
    public ?string $browserIp = null;
    public ?bool $buyerAcceptsMarketing = null;
    public $cancelReason = null;
    public $cancelledAt = null;
    public ?string $cartToken = null;
    public ?int $checkoutId = null;
    public ?string $checkoutToken = null;
    public ?ClientDetail $clientDetails = null;
    public $closedAt = null;
    public ?bool $confirmed = null;
    public ?string $contactEmail = null;
    public ?\DateTimeInterface $createdAt = null;
    public ?string $currency = null;
    public ?string $currentSubtotalPrice = null;
    public ?CurrentSubtotalPriceSet $currentSubtotalPriceSet = null;
    public ?string $currentTotalDiscounts = null;
    public ?CurrentTotalDiscountsSet $currentTotalDiscountsSet = null;
    public $currentTotalDutiesSet = null;
    public ?string $currentTotalPrice = null;
    public ?CurrentTotalPriceSet $currentTotalPriceSet = null;
    public ?string $currentTotalTax = null;
    public ?CurrentTotalTaxSet $currentTotalTaxSet = null;
    public $customerLocale = null;
    public $deviceId = null;
    /** @var array<int, DiscountCode> */
    public array $discountCodes = [];
    public ?string $email = null;
    public ?string $financialStatus = null;
    public $fulfillmentStatus = null;
    public ?string $gateway = null;
    public ?string $landingSite = null;
    public ?string $landingSiteRef = null;
    public $locationId = null;
    public ?string $name = null;
    public $note = null;
    /** @var array<int, NoteAttribute> */
    public array $noteAttributes = [];
    public ?int $number = null;
    public ?int $orderNumber = null;
    public ?string $orderStatusUrl = null;
    public $originalTotalDutiesSet = null;
    /** @var array<int, string> */
    public array $paymentGatewayNames = [];
    public ?string $phone = null;
    public ?string $presentmentCurrency = null;
    public ?string $processedAt = null;
    public ?string $processingMethod = null;
    public ?string $reference = null;
    public ?string $referringSite = null;
    public ?string $sourceIdentifier = null;
    public ?string $sourceName = null;
    public $sourceUrl = null;
    public ?string $subtotalPrice = null;
    public ?SubtotalPriceSet $subtotalPriceSet = null;
    public ?string $tags = null;
    /** @var array<int, TaxLine> */
    public array $taxLines = [];
    public ?bool $taxesIncluded = null;
    public ?bool $test = null;
    public ?string $token = null;
    public ?string $totalDiscounts = null;
    public ?TotalDiscountsSet $totalDiscountsSet = null;
    public ?string $totalLineItemsPrice = null;
    public ?TotalLineItemsPriceSet $totalLineItemsPriceSet = null;
    public ?string $totalOutstanding = null;
    public ?string $totalPrice = null;
    public ?TotalPriceSet $totalPriceSet = null;
    public ?string $totalPriceUsd = null;
    public ?TotalShippingPriceSet $totalShippingPriceSet = null;
    public ?string $totalTax = null;
    public ?TotalTaxSet $totalTaxSet = null;
    public ?string $totalTipReceived = null;
    public ?int $totalWeight = null;
    public ?\DateTimeInterface $updatedAt = null;
    public $userId = null;
    public ?BillingAddress $billingAddress = null;
    public ?Customer $customer = null;
    /** @var array<int, DiscountApplication> */
    public array $discountApplications = [];
    /** @var array<int, Fulfillment> */
    public array $fulfillments = [];
    /** @var array<int, LineItem> */
    public array $lineItems = [];
    public ?PaymentDetail $paymentDetails = null;
    /** @var array<int, Refund> */
    public array $refunds = [];
    public ?ShippingAddress $shippingAddress = null;
    /** @var array<int, ShippingLine> */
    public array $shippingLines = [];

    public function addDiscountCode(DiscountCode $discountCode): self
    {
        $this->discountCodes[] = $discountCode;
        return $this;
    }

    public function addNoteAttribute(NoteAttribute $noteAttribute): self
    {
        $this->noteAttributes[] = $noteAttribute;
        return $this;
    }

    public function addPaymentGatewayName(string $paymentGatewayName): self
    {
        $this->paymentGatewayNames[] = $paymentGatewayName;
        return $this;
    }

    public function addTaxLine(TaxLine $taxLine): self
    {
        $this->taxLines[] = $taxLine;
        return $this;
    }

    public function addDiscountApplication(DiscountApplication $discountApplication): self
    {
        $this->discountApplications[] = $discountApplication;
        return $this;
    }

    public function addFulfillment(Fulfillment $fulfillment): self
    {
        $this->fulfillments[] = $fulfillment;
        return $this;
    }

    public function addLineItem(LineItem $lineItem): self
    {
        $this->lineItems[] = $lineItem;
        return $this;
    }

    public function addRefund(Refund $refund): self
    {
        $this->refunds[] = $refund;
        return $this;
    }

    public function addShippingLine(ShippingLine $shippingLine): self
    {
        $this->shippingLines[] = $shippingLine;
        return $this;
    }
}
