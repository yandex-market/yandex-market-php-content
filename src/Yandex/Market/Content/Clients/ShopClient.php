<?php
/* @copyright © ООО Яндекс.Маркет (Yandex.Market LLC), 2018 */

/**
 * @namespace
 */
namespace Yandex\Market\Content\Clients;

use Yandex\Market\Content\ContentClient;
use Yandex\Market\Content\Models\Response\ResponseShopGet;
use Yandex\Market\Content\Models\Response\ResponseShopMatchGet;
use Yandex\Market\Content\Models\Response\ResponseShopOpinionsGet;
use Yandex\Market\Content\Models\Response\ResponseShopOutletsGet;

class ShopClient extends ContentClient
{
    /**
     * Get Shop
     *
     * Returns shop of Yandex.Market service matched specified params.
     *
     * @see https://tech.yandex.ru/market/content-data/doc/dg-v2/reference/shops-controller-v2-get-shop-list-docpage/
     *
     * @param array $params
     *
     * @return ResponseShopMatchGet
     *
     * @throws \Yandex\Common\Exception\ForbiddenException
     * @throws \Yandex\Common\Exception\UnauthorizedException
     * @throws \Yandex\Market\Content\Exception\ContentRequestException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getMatch(array $params = [])
    {
        $resource = 'shops';
        $resource .= '?' . $this->buildQueryString($params);
        $response = $this->getServiceResponse($resource);

        return new ResponseShopMatchGet($response);
    }

    /**
     * Get shop information
     *
     * Returns shop of Yandex.Market.
     *
     * @see https://tech.yandex.ru/market/content-data/doc/dg-v2/reference/shops-controller-v2-get-shop-docpage/
     *
     * @param int $shopId
     *
     * @return ResponseShopGet
     *
     * @throws \Yandex\Common\Exception\ForbiddenException
     * @throws \Yandex\Common\Exception\UnauthorizedException
     * @throws \Yandex\Market\Content\Exception\ContentRequestException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($shopId, array $params = [])
    {
        $resource = 'shops/' . $shopId;
        $resource .= '?' . $this->buildQueryString($params);
        $response = $this->getServiceResponse($resource);

        return new ResponseShopGet($response);
    }

    /**
     * Get shop chronological ordered opinions information
     *
     * Returns chronological ordered opinions for shops of Yandex.Market.
     *
     * @see https://tech.yandex.ru/market/content-data/doc/dg-v2/reference/opinions-controller-v2-get-shop-opinions-docpage/
     *
     * @param int $shopId
     *
     * @return ResponseShopOpinionsGet
     *
     * @throws \Yandex\Common\Exception\ForbiddenException
     * @throws \Yandex\Common\Exception\UnauthorizedException
     * @throws \Yandex\Market\Content\Exception\ContentRequestException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getOpinions($shopId, array $params = [])
    {
        $resource = 'shops/' . $shopId . '/opinions';
        $resource .= '?' . $this->buildQueryString($params);
        $response = $this->getServiceResponse($resource);

        return new ResponseShopOpinionsGet($response);
    }

    /**
     * Get opinions in model
     *
     * Returns opinions list represented in shop of Yandex.Market service according to params.
     *
     * @see https://tech.yandex.ru/market/content-data/doc/dg-v2/reference/opinions-controller-v2-get-model-opinions-docpage/
     *
     * @param int   $modelId
     * @param array $params
     *
     * @return ResponseShopOpinionsGet
     *
     * @throws \Yandex\Common\Exception\ForbiddenException
     * @throws \Yandex\Common\Exception\UnauthorizedException
     * @throws \Yandex\Market\Content\Exception\ContentRequestException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getOpinionsChronological($modelId, array $params = [])
    {
        $resource = 'shops/' . $modelId . '/opinions/chronological';
        $resource .= '?' . $this->buildQueryString($params);
        $response = $this->getServiceResponse($resource);

        return new ResponseShopOpinionsGet($response);
    }

    /**
     * Get outlets information
     *
     * Returns outlet list for shops of Yandex.Market.
     *
     * @see https://tech.yandex.ru/market/content-data/doc/dg-v2/reference/shops-controller-v2-get-shop-outlets-docpage/
     *
     * @param int $shopId
     *
     * @return ResponseShopOutletsGet
     *
     * @throws \Yandex\Common\Exception\ForbiddenException
     * @throws \Yandex\Common\Exception\UnauthorizedException
     * @throws \Yandex\Market\Content\Exception\ContentRequestException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getOutlets($shopId, array $params = [])
    {
        $resource = 'shops/' . $shopId . '/outlets';
        $resource .= '?' . $this->buildQueryString($params);
        $response = $this->getServiceResponse($resource);

        return new ResponseShopOutletsGet($response);
    }
}
