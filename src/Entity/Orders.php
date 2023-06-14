<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Entity;

class Orders
{
    use CallLimit;
    use Paginated;
    /** @var array<int, Order> */
    public array $orders = [];

    public function addOrder(Order $order): self
    {
        $this->orders[] = $order;
        return $this;
    }
}
