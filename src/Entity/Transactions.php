<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class Transactions
{
    /** @var array<int, Transaction> */
    public array $transactions = [];

    public function addTransaction(Transaction $transaction): self
    {
        $this->transactions[] = $transaction;
        return $this;
    }
}
