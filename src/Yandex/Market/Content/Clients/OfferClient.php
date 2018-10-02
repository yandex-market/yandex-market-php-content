<?php
/* @copyright © ООО Яндекс.Маркет (Yandex.Market LLC), 2018 */

/**
 * @namespace
 */
namespace Yandex\Market\Content\Clients;

use Yandex\Market\Content\ContentClient;
use Yandex\Market\Content\Models\Response\ResponseOfferGet;

class OfferClient extends ContentClient
{
    /**
     * Get offer information
     *
     * Returns offer of Yandex.Market service according to params.
     *
     * @see https://tech.yandex.ru/market/content-data/doc/dg-v2/reference/offers-controller-v2-get-offer-docpage/
     *
     * @param string $offerId
     * @param array  $params
     *
     * @return ResponseOfferGet
     *
     * @throws \Yandex\Common\Exception\ForbiddenException
     * @throws \Yandex\Common\Exception\UnauthorizedException
     * @throws \Yandex\Market\Content\Exception\ContentRequestException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($offerId, array $params = [])
    {
        $resource = 'offers/' . $offerId;
        $resource .= '?' . $this->buildQueryString($params);
        $response = $this->getServiceResponse($resource);

        return new ResponseOfferGet($response);
    }
}
