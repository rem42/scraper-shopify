<?php declare(strict_types=1);

namespace Scraper\ScraperShopify\Tests\Api;

use PHPUnit\Framework\TestCase;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\ScraperShopify\Api\ShopifyGetRestApi;
use Scraper\ScraperShopify\Request\ShopifyGetRestRequest;
use Symfony\Contracts\HttpClient\ResponseInterface;

abstract class AbstractShopifyApiTestCase extends TestCase
{
    protected static string $fixturesDir;

    protected function setUp(): void
    {
        parent::setUp();

        static::$fixturesDir = \dirname(__DIR__) . '/fixtures/';
    }

    protected function fixturePath(string $filename): string
    {
        return static::$fixturesDir . $filename;
    }

    protected function loadFixture(string $filename): string
    {
        $path = $this->fixturePath($filename);

        if (!file_exists($path)) {
            throw new \Exception('you need to create file first: ' . $path);
        }

        return file_get_contents($path);
    }

    /**
     * @return array<object>|bool|object
     */
    protected function executeGetApi(
        string $resource,
        ?string $id = null,
        ?string $subResource = null,
        ?int $subId = null,
        bool $count = false,
        int $statusCode,
        string $fixture
    ) {
        $scraperRequest = $this->createMock(ShopifyGetRestRequest::class);
        $scraperRequest->method('getResource')->willReturn($resource);
        $scraperRequest->method('getId')->willReturn($id);
        $scraperRequest->method('getSubResource')->willReturn($subResource);
        $scraperRequest->method('getSubId')->willReturn($subId);
        $scraperRequest->method('isCount')->willReturn($count);

        $scraper = new Scraper();

        $responseInterface = $this->createMock(ResponseInterface::class);
        $responseInterface
            ->method('getStatusCode')
            ->willReturn($statusCode)
        ;
        $responseInterface
            ->method('getContent')
            ->willReturn($this->loadFixture($fixture))
        ;

        $prestashopGetApi = new ShopifyGetRestApi(
            $scraperRequest,
            $scraper,
            $responseInterface
        );

        return $prestashopGetApi->execute();
    }
}
