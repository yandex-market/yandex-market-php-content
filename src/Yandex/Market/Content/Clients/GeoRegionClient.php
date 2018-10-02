<?php
/* @copyright © ООО Яндекс.Маркет (Yandex.Market LLC), 2018 */

/**
 * @namespace
 */
namespace Yandex\Market\Content\Clients;

use Yandex\Market\Content\ContentClient;
use Yandex\Market\Content\Models\Response\ResponseGeoRegionGet;
use Yandex\Market\Content\Models\Response\ResponseGeoRegionsGet;
use Yandex\Market\Content\Models\Response\ResponseGeoRegionSuggestGet;

class GeoRegionClient extends ContentClient
{
    /**
     * Get geo regions
     *
     * Returns geo regions list of Yandex.Market service according to params.
     *
     * @see https://tech.yandex.ru/market/content-data/doc/dg-v2/reference/geo-controller-v2-get-region-root-docpage/
     *
     * @param array $params
     *
     * @return ResponseGeoRegionsGet
     *
     * @throws \Yandex\Common\Exception\ForbiddenException
     * @throws \Yandex\Common\Exception\UnauthorizedException
     * @throws \Yandex\Market\Content\Exception\ContentRequestException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getList(array $params = [])
    {
        $resource = 'geo/regions';
        $resource .= '?' . $this->buildQueryString($params);
        $response = $this->getServiceResponse($resource);

        return new ResponseGeoRegionsGet($response);
    }

    /**
     * Get geo region information
     *
     * Returns geo region of Yandex.Market service.
     *
     * @see https://tech.yandex.ru/market/content-data/doc/dg-v2/reference/geo-controller-v2-get-region-docpage/
     *
     * @param int $regionId
     *
     * @return ResponseGeoRegionGet
     *
     * @throws \Yandex\Common\Exception\ForbiddenException
     * @throws \Yandex\Common\Exception\UnauthorizedException
     * @throws \Yandex\Market\Content\Exception\ContentRequestException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($regionId)
    {
        $resource = 'geo/regions/' . $regionId;
        $response = $this->getServiceResponse($resource);

        return new ResponseGeoRegionGet($response);
    }

    /**
     * Get childrens of geo region
     *
     * Returns children list of Yandex.Market service geo region.
     *
     * @see https://tech.yandex.ru/market/content-data/doc/dg-v2/reference/geo-controller-v2-get-children-docpage/
     *
     * @param int   $regionId
     * @param array $params
     *
     * @return ResponseGeoRegionsGet
     *
     * @throws \Yandex\Common\Exception\ForbiddenException
     * @throws \Yandex\Common\Exception\UnauthorizedException
     * @throws \Yandex\Market\Content\Exception\ContentRequestException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getChildren($regionId, array $params = [])
    {
        $resource = 'geo/regions/' . $regionId . '/children';
        $resource .= '?' . $this->buildQueryString($params);
        $response = $this->getServiceResponse($resource);

        return new ResponseGeoRegionsGet($response);
    }

    /**
     * Get suggests of geo region
     *
     * Returns suggests list of geo region in Yandex.Market service.
     *
     * @see https://tech.yandex.ru/market/content-data/doc/dg-v2/reference/geo-controller-v2-suggest-docpage/
     *
     * @param array $params
     *
     * @return ResponseGeoRegionSuggestGet
     *
     * @throws \Yandex\Common\Exception\ForbiddenException
     * @throws \Yandex\Common\Exception\UnauthorizedException
     * @throws \Yandex\Market\Content\Exception\ContentRequestException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getMatch(array $params = [])
    {
        $resource = 'geo/suggest';
        $resource .= '?' . $this->buildQueryString($params);
        $response = $this->getServiceResponse($resource);

        return new ResponseGeoRegionSuggestGet($response);
    }
}
