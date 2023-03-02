<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestQuery;

#[Scraper(method: Method::DELETE)]
class ShopifyDeleteRestRequest extends ShopifyRestRequest implements RequestQuery
{
    /** @var array<string, string> */
    private array $parameters = [];

    public function getQuery(): array
    {
        return $this->getParameters();
    }

    public function addParameter(string $parameter, string $value): self
    {
        $this->parameters[$parameter] = $value;

        return $this;
    }

    /**
     * @return array<string, string>
     */
    private function getParameters(): array
    {
        return $this->parameters;
    }
}
