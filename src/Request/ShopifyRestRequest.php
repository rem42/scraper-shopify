<?php

namespace Scraper\ScraperShopify\Request;

use Scraper\Scraper\Annotation\Scraper;
use Scraper\Scraper\Request\RequestAuthBasic;
use Scraper\Scraper\Request\ScraperRequest;

/**
 * @Scraper(scheme="HTTPS", host="{host}", path="/admin/api/{version}/{resources}.json")
 */
abstract class ShopifyRestRequest extends ScraperRequest implements RequestAuthBasic
{
    private string $host;
    private string $username;
    private string $password;

    private bool $count = false;

    private string $resource;
    private ?string $id = null;

    private ?string $subResource = null;

    private ?int $subId = null;

    public function __construct(
        string $host,
        string $username,
        string $password
    ) {
        $this->host     = $host;
        $this->username = $username;
        $this->password = $password;
    }

    public function isCount(): bool
    {
        return $this->count;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getSubId(): ?int
    {
        return $this->subId;
    }

    public function getSubResource(): ?string
    {
        return $this->subResource;
    }

    public function getResource(): string
    {
        return $this->resource;
    }

    public function setCount(bool $count): object
    {
        $this->count = $count;

        return $this;
    }

    public function setResource(string $resource): object
    {
        $this->resource = $resource;

        return $this;
    }

    public function setId(?string $id): object
    {
        $this->id = $id;

        return $this;
    }

    public function setSubResource(?string $subResource): object
    {
        $this->subResource = $subResource;

        return $this;
    }

    public function setSubId(?int $subId): object
    {
        $this->subId = $subId;

        return $this;
    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function getResources(): string
    {
        $resources = [
            $this->resource,
            $this->id,
            $this->subResource,
            $this->subId,
            $this->count ? 'count' : null,
        ];
        $resources = array_filter($resources);

        return implode('/', $resources);
    }

    public function getVersion(): string
    {
        return '2022-04';
    }

    public function getAuthBasic(): string
    {
        return $this->username . ':' . $this->password;
    }
}
