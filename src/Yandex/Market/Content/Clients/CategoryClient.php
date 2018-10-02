<?php
/* @copyright © ООО Яндекс.Маркет (Yandex.Market LLC), 2018 */

/**
 * @namespace
 */
namespace Yandex\Market\Content\Clients;

use Yandex\Market\Content\ContentClient;
use Yandex\Market\Content\Models\Response\ResponseCategoryGet;
use Yandex\Market\Content\Models\Response\ResponseCategoryGetFilters;
use Yandex\Market\Content\Models\Response\ResponseCategoryGetList;

class CategoryClient extends ContentClient
{
    /**
     * Get Categories
     *
     * Returns categories list of Yandex.Market service according to params.
     *
     * @see https://tech.yandex.ru/market/content-data/doc/dg-v2/reference/category-controller-v2-get-root-categories-docpage/
     *
     * @param array $params
     *
     * @return ResponseCategoryGetList
     *
     * @throws \Yandex\Common\Exception\ForbiddenException
     * @throws \Yandex\Common\Exception\UnauthorizedException
     * @throws \Yandex\Market\Content\Exception\ContentRequestException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getList(array $params = [])
    {
        $resource = 'categories';
        $resource .= '?' . $this->buildQueryString($params);
        $response = $this->getServiceResponse($resource);

        return new ResponseCategoryGetList($response);
    }

    /**
     * Get category information
     *
     * Returns category of Yandex.Market service according to params.
     *
     * @see https://tech.yandex.ru/market/content-data/doc/dg-v2/reference/category-controller-v2-get-category-docpage/
     *
     * @param int   $categoryId
     * @param array $params
     *
     * @return ResponseCategoryGet
     *
     * @throws \Yandex\Common\Exception\ForbiddenException
     * @throws \Yandex\Common\Exception\UnauthorizedException
     * @throws \Yandex\Market\Content\Exception\ContentRequestException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($categoryId, array $params = [])
    {
        $resource = 'categories/' . $categoryId;
        $resource .= '?' . $this->buildQueryString($params);
        $response = $this->getServiceResponse($resource);

        return new ResponseCategoryGet($response);
    }

    /**
     * Get children categories
     *
     * Returns children categories list of Yandex.Market service according to params.
     *
     * @see https://tech.yandex.ru/market/content-data/doc/dg-v2/reference/category-controller-v2-get-children-categories-docpage/
     *
     * @param int   $categoryId
     * @param array $params
     *
     * @return ResponseCategoryGetList
     *
     * @throws \Yandex\Common\Exception\ForbiddenException
     * @throws \Yandex\Common\Exception\UnauthorizedException
     * @throws \Yandex\Market\Content\Exception\ContentRequestException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getChildren($categoryId, array $params = [])
    {
        $resource = 'categories/' . $categoryId . '/children';
        $resource .= '?' . $this->buildQueryString($params);
        $response = $this->getServiceResponse($resource);

        return new ResponseCategoryGetList($response);
    }

    /**
     * Get filters in category
     *
     * Returns filters list of models represented in category of Yandex.Market service according to params.
     *
     * @see https://tech.yandex.ru/market/content-data/doc/dg-v2/reference/category-controller-v2-get-category-filters-docpage/
     *
     * @param int   $categoryId
     * @param array $params
     *
     * @return ResponseCategoryGetFilters
     *
     * @throws \Yandex\Common\Exception\ForbiddenException
     * @throws \Yandex\Common\Exception\UnauthorizedException
     * @throws \Yandex\Market\Content\Exception\ContentRequestException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getFilters($categoryId, array $params = [])
    {
        $resource = 'categories/' . $categoryId . '/filters';
        $resource .= '?' . $this->buildQueryString($params);
        $response = $this->getServiceResponse($resource);

        return new ResponseCategoryGetFilters($response);
    }
}
