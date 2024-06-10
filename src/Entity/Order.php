<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class Order
{
    use CallLimit;
    public ?int $appId = null;
    public ?BillingAddress $billingAddress = null;
    public ?string $browserIp = null;
    public ?bool $buyerAcceptsMarketing = null;
    public ?string $cancelReason = null;
    public ?\DateTimeInterface $cancelledAt = null;
    public ?string $cartToken = null;
    public ?string $checkoutToken = null;
    public ?ClientDetail $clientDetails = null;
    public ?\DateTimeInterface  $closedAt = null;
    public ?Company $company = null;
    public ?\DateTimeInterface  $createdAt = null;
    public ?string $currency = null;
    public ?string $currentTotalDiscounts = null;
    public ?CurrentTotalDiscountsSet $currentTotalDiscountsSet = null;
    public ?CurrentTotalDutiesSet $currentTotalDutiesSet = null;
    public ?string $currentTotalPrice = null;
    public ?CurrentTotalPriceSet $currentTotalPriceSet = null;
    public ?string $currentSubtotalPrice = null;
    public ?CurrentSubtotalPriceSet $currentSubtotalPriceSet = null;
    public ?string $currentTotalTax = null;
    public ?CurrentTotalTaxSet $currentTotalTaxSet = null;
    public ?Customer $customer = null;
    public ?string $customerLocale = null;
    public ?DiscountApplication $discountApplications = null;
    /** @var array<int, DiscountCode> */
    public array $discountCodes = [];
    public ?string $email = null;
    public ?bool $estimatedTaxes = null;
    public ?string $financialStatus = null;
    /** @var array<int, Fulfillment> */
    public array $fulfillments = [];
    public ?string $fulfillmentStatus = null;
    public ?string $gateway = null;
    public ?int $id = null;
    public ?string $landingSite = null;
    /** @var array<int, LineItem> */
    public array $lineItems = [];
    public ?int $locationId = null;
    public ?int $merchantOfRecordAppId = null;
    public ?string $name = null;
    public ?string $note = null;
    /** @var array<int, NoteAttribute> */
    public array $noteAttributes = [];
    public ?int $number = null;
    public ?int $orderNumber = null;
    public ?OriginalTotalDutiesSet $originalTotalDutiesSet = null;
    public ?PaymentDetail $paymentDetails = null;
    public ?PaymentTerm $paymentTerms = null;
    /** @var array<int, string> */
    public array $paymentGatewayNames = [];
    public ?string $phone = null;
    public ?string $presentmentCurrency = null;
    public ?\DateTimeInterface $processedAt = null;
    public ?string $processingMethod = null;
    public ?string $referringSite = null;
    /** @var array<int, Refund> */
    public array $refunds = [];
    public ?ShippingAddress $shippingAddress = null;
    /** @var array<int, ShippingLine> */
    public array $shippingLines = [];
    public ?string $sourceName = null;
    public ?string $sourceIdentifier = null;
    public ?string $sourceUrl = null;
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
    public ?TotalShippingPriceSet $totalShippingPriceSet = null;
    public ?string $totalTax = null;
    public ?TotalTaxSet $totalTaxSet = null;
    public ?string $totalTipReceived = null;
    public ?int $totalWeight = null;
    public ?\DateTimeInterface $updatedAt = null;
    public ?int $userId = null;
    public ?OrderStatusUrl $orderStatusUrl = null;

    public function addDiscountCode(DiscountCode $discountCode): self
    {
        $this->discountCodes[] = $discountCode;
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

    public function addTaxLine(TaxLine $taxLine): self
    {
        $this->taxLines[] = $taxLine;
        return $this;
    }
}
