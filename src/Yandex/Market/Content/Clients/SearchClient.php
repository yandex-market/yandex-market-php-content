<?php
/* @copyright © ООО Яндекс.Маркет (Yandex.Market LLC), 2018 */

/**
 * @namespace
 */
namespace Yandex\Market\Content\Clients;

use Yandex\Market\Content\ContentClient;
use Yandex\Market\Content\Models\Response\ResponseFilterCategoryGet;
use Yandex\Market\Content\Models\Response\ResponseSearchGet;

class SearchClient extends ContentClient
{
    /**
     * Get models & offers search result
     *
     * Returns models and offers of Yandex.Market service search result according to params.
     *
     * @see https://tech.yandex.ru/market/content-data/doc/dg-v2/reference/search-controller-v2-search-docpage/
     *
     * @param array $params
     *
     * @return ResponseSearchGet
     *
     * @throws \Yandex\Common\Exception\ForbiddenException
     * @throws \Yandex\Common\Exception\UnauthorizedException
     * @throws \Yandex\Market\Content\Exception\ContentRequestException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get(array $params = [])
    {
        $resource = 'search';
        $resource .= '?' . $this->buildQueryString($params);
        $response = $this->getServiceResponse($resource);

        return new ResponseSearchGet($response);
    }

    /**
     * Get models & offers search by filters result
     *
     * Returns models and offers of Yandex.Market service search by filters result according to params.
     *
     * @see https://tech.yandex.ru/market/content-data/doc/dg-v2/reference/search-controller-v2-filter-on-category-docpage/
     *
     * @param int   $categoryId
     * @param array $params
     *
     * @return ResponseFilterCategoryGet
     *
     * @throws \Yandex\Common\Exception\ForbiddenException
     * @throws \Yandex\Common\Exception\UnauthorizedException
     * @throws \Yandex\Market\Content\Exception\ContentRequestException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getFilterCategory($categoryId, array $params = [])
    {
        $resource = 'categories/' . $categoryId . '/search';
        $resource .= '?' . $this->buildQueryString($params);
        $response = $this->getServiceResponse($resource);

        return new ResponseFilterCategoryGet($response);
    }
}
