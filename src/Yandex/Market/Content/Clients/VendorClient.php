<?php
/* @copyright © ООО Яндекс.Маркет (Yandex.Market LLC), 2018 */


/**
 * @namespace
 */
namespace Yandex\Market\Content\Clients;

use Yandex\Market\Content\ContentClient;
use Yandex\Market\Content\Models\Response\ResponseVendorGet;
use Yandex\Market\Content\Models\Response\ResponseVendorMatchGet;
use Yandex\Market\Content\Models\Response\ResponseVendorsListGet;

class VendorClient extends ContentClient
{
    /**
     * Get Vendors
     *
     * Returns vindors list of Yandex.Market service according to params.
     *
     * @see https://tech.yandex.ru/market/content-data/doc/dg-v2/reference/vendor-controller-v2-get-vendor-list-docpage/
     *
     * @param array $params
     *
     * @return ResponseVendorsListGet
     *
     * @throws \Yandex\Common\Exception\ForbiddenException
     * @throws \Yandex\Common\Exception\UnauthorizedException
     * @throws \Yandex\Market\Content\Exception\ContentRequestException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getList($params = [])
    {
        $resource = 'vendors';
        $resource .= '?' . $this->buildQueryString($params);
        $response = $this->getServiceResponse($resource);

        return new ResponseVendorsListGet($response);
    }

    /**
     * Get vendor information
     *
     * Returns vendor of Yandex.Market service according to params.
     *
     * @see https://tech.yandex.ru/market/content-data/doc/dg-v2/reference/vendor-controller-v2-get-vendor-docpage/
     *
     * @param int $vendorId
     *
     * @return ResponseVendorGet
     *
     * @throws \Yandex\Common\Exception\ForbiddenException
     * @throws \Yandex\Common\Exception\UnauthorizedException
     * @throws \Yandex\Market\Content\Exception\ContentRequestException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($vendorId)
    {
        $resource = 'vendors/' . $vendorId;
        $response = $this->getServiceResponse($resource);

        return new ResponseVendorGet($response);
    }

    /**
     * Get vendor
     *
     * Returns vendor of Yandex.Market service matched specified params.
     *
     * @see https://tech.yandex.ru/market/content-data/doc/dg-v2/reference/vendor-controller-v2-match-vendor-docpage/
     *
     * @param array $params
     *
     * @return ResponseVendorMatchGet
     *
     * @throws \Yandex\Common\Exception\ForbiddenException
     * @throws \Yandex\Common\Exception\UnauthorizedException
     * @throws \Yandex\Market\Content\Exception\ContentRequestException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getMatch(array $params = [])
    {
        $resource = 'vendors/match';
        $resource .= '?' . $this->buildQueryString($params);
        $response = $this->getServiceResponse($resource);

        return new ResponseVendorMatchGet($response);
    }
}
