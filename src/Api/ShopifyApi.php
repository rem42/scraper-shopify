<?php

namespace Scraper\ScraperShopify\Api;

use Scraper\Scraper\Api\AbstractApi;
use Scraper\ScraperShopify\Exception\ShopifyUnexpectedException;
use Scraper\ScraperShopify\Request\ShopifyRestRequest;
use Scraper\ScraperShopify\Tools\ResourceMapping;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;

abstract class ShopifyApi extends AbstractApi
{
    public function execute()
    {
        $content = $this->response->getContent();

        if (!$this->request instanceof ShopifyRestRequest) {
            throw new ShopifyUnexpectedException('cannot handle ' . \get_class($this->request));
        }

        $className = ResourceMapping::find($this->request);

        $isOne = false;

        if (
            $this->request->getSubId()
            || ($this->request->getId() && null === $this->request->getSubResource())
        ) {
            $isOne = true;
        }

        $data = json_decode($content, true, 512, \JSON_THROW_ON_ERROR);

        if ($isOne) {
            $content = json_encode($data[ResourceMapping::singularize($this->request)], \JSON_THROW_ON_ERROR);
        } else {
            $this->handlePageInfo($data);
            $content = json_encode($data, \JSON_THROW_ON_ERROR);
        }

        return $this->serializer->deserialize(
            $content,
            $className,
            'json',
            [
                AbstractObjectNormalizer::DISABLE_TYPE_ENFORCEMENT => true,
            ]
        );
    }

    private function getLinkHeaderUrl(string $name): array
    {
        $headers = $this->response->getHeaders();

        if (!isset($headers['link']) || 1 !== \count($headers['link'])) {
            return [];
        }

        $matches = [];
        preg_match('/<(.[^>]*)>; rel="' . $name . '"/', $headers['link'][0], $matches);

        if (0 === \count($matches) || !$matches[1]) {
            return [];
        }

        $query_params = parse_url($matches[1], \PHP_URL_QUERY);
        parse_str($query_params, $data);

        if (!isset($data['page_info'])) {
            return [];
        }

        $pageInfo              = json_decode(base64_decode($data['page_info']), true, 512, \JSON_THROW_ON_ERROR);
        $pageInfo['page_info'] = $data['page_info'];

        return $pageInfo;
    }

    private function handlePageInfo(array &$data)
    {
        $data['next_page_info']     = $this->getLinkHeaderUrl('next');
        $data['previous_page_info'] = $this->getLinkHeaderUrl('previous');
    }
}
