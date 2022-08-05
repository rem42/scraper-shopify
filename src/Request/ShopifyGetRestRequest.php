<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Request;

use Scraper\Scraper\Annotation\Scraper;
use Scraper\Scraper\Request\RequestQuery;

/**
 * @Scraper(method="GET")
 */
class ShopifyGetRestRequest extends ShopifyRestRequest implements RequestQuery
{
    /** @var array<string> */
    private array $fields = [];

    /** @var array<string, string> */
    private array $filter = [];

    public function getQuery(): array
    {
        return array_merge(
            [],
            $this->getFields(),
            $this->getFilter(),
        );
    }

    public function addFilter(string $parameter, string $value): self
    {
        $this->filter[$parameter] = $value;

        return $this;
    }

    public function setFields(string ...$fields): self
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * @return array<string, string>
     */
    private function getFilter(): array
    {
        return $this->filter;
    }

    /**
     * @return array<string, string>
     */
    private function getFields(): array
    {
        if (\count($this->fields)) {
            return [
                'fields' => implode(',', $this->fields),
            ];
        }

        return [];
    }
}
