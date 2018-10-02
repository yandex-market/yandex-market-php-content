<?php
/* @copyright © ООО Яндекс.Маркет (Yandex.Market LLC), 2018 */

/**
 * @namespace
 */
namespace Yandex\Market\Content\Clients;

use Yandex\Market\Content\ContentClient;
use Yandex\Market\Content\Models\Response\ResponseModelGet;
use Yandex\Market\Content\Models\Response\ResponseModelMatchGet;
use Yandex\Market\Content\Models\Response\ResponseModelOffersGet;
use Yandex\Market\Content\Models\Response\ResponseModelOpinionsGet;
use Yandex\Market\Content\Models\Response\ResponseModelOutletsGet;
use Yandex\Market\Content\Models\Response\ResponseModelPopularsGet;
use Yandex\Market\Content\Models\Response\ResponseModelReviewsGet;

class ModelClient extends ContentClient
{
    /**
     * Get model information
     *
     * Returns model of Yandex.Market service according to params.
     *
     * @see https://tech.yandex.ru/market/content-data/doc/dg-v2/reference/models-controller-v2-get-model-docpage/
     *
     * @param int   $modelId
     * @param array $params
     *
     * @return ResponseModelGet
     *
     * @throws \Yandex\Common\Exception\ForbiddenException
     * @throws \Yandex\Common\Exception\UnauthorizedException
     * @throws \Yandex\Market\Content\Exception\ContentRequestException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($modelId, array $params = [])
    {
        $resource = 'models/' . $modelId;
        $resource .= '?' . $this->buildQueryString($params);
        $response = $this->getServiceResponse($resource);

        return new ResponseModelGet($response);
    }

    /**
     * Get reviews of model
     *
     * Returns reviews list where model of Yandex.Market service represented.
     *
     * @see https://tech.yandex.ru/market/content-data/doc/dg-v2/reference/models-controller-v2-get-reviews-docpage/
     *
     * @param int $modelId
     *
     * @return ResponseModelReviewsGet
     *
     * @throws \Yandex\Common\Exception\ForbiddenException
     * @throws \Yandex\Common\Exception\UnauthorizedException
     * @throws \Yandex\Market\Content\Exception\ContentRequestException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getReviews($modelId, array $params)
    {
        $resource = 'models/' . $modelId . '/reviews';
        $resource .= '?' . $this->buildQueryString($params);
        $response = $this->getServiceResponse($resource);

        return new ResponseModelReviewsGet($response);
    }

    /**
     * Get model(-s) by name and params
     *
     * Returns model(-s) of Yandex.Market service by name and params.
     *
     * @see https://tech.yandex.ru/market/content-data/doc/dg-v2/reference/models-controller-v2-get-matched-models-docpage/
     *
     * @param array $params
     *
     * @return ResponseModelMatchGet
     *
     * @throws \Yandex\Common\Exception\ForbiddenException
     * @throws \Yandex\Common\Exception\UnauthorizedException
     * @throws \Yandex\Market\Content\Exception\ContentRequestException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getMatch(array $params = [])
    {
        $resource = 'models/match';
        $resource .= '?' . $this->buildQueryString($params);
        $response = $this->getServiceResponse($resource);

        return new ResponseModelMatchGet($response);
    }

    /**
     * Get popular models by category
     *
     * Returns model list of Yandex.Market service according to params.
     *
     * @see https://tech.yandex.ru/market/content-data/doc/dg-v2/reference/category-controller-v2-get-popular-models-docpage/
     *
     * @param int   $modelId
     * @param array $params
     *
     * @return ResponseModelPopularsGet
     *
     * @throws \Yandex\Common\Exception\ForbiddenException
     * @throws \Yandex\Common\Exception\UnauthorizedException
     * @throws \Yandex\Market\Content\Exception\ContentRequestException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getPopular($categoryId, array $params = [])
    {
        $resource = 'categories/' . $categoryId . '/populars';
        $resource .= '?' . $this->buildQueryString($params);
        $response = $this->getServiceResponse($resource);

        return new ResponseModelPopularsGet($response);
    }

    /**
     * Get offers in model
     *
     * Returns offers list represented in model of Yandex.Market service according to params.
     *
     * @see https://tech.yandex.ru/market/content-data/doc/dg-v2/reference/models-controller-v2-get-offers-docpage/
     *
     * @param int   $modelId
     * @param array $params
     *
     * @return ResponseModelOffersGet
     *
     * @throws \Yandex\Common\Exception\ForbiddenException
     * @throws \Yandex\Common\Exception\UnauthorizedException
     * @throws \Yandex\Market\Content\Exception\ContentRequestException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getOffers($modelId, array $params = [])
    {
        $resource = 'models/' . $modelId . '/offers';
        $resource .= '?' . $this->buildQueryString($params);
        $response = $this->getServiceResponse($resource);

        return new ResponseModelOffersGet($response);
    }

    /**
     * Get opinions in model
     *
     * Returns opinions list represented in model of Yandex.Market service according to params.
     *
     * @see https://tech.yandex.ru/market/content-data/doc/dg-v2/reference/opinions-controller-v2-get-model-opinions-docpage/
     *
     * @param int   $modelId
     * @param array $params
     *
     * @return ResponseModelOpinionsGet
     *
     * @throws \Yandex\Common\Exception\ForbiddenException
     * @throws \Yandex\Common\Exception\UnauthorizedException
     * @throws \Yandex\Market\Content\Exception\ContentRequestException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getOpinions($modelId, array $params = [])
    {
        $resource = 'models/' . $modelId . '/opinions';
        $resource .= '?' . $this->buildQueryString($params);
        $response = $this->getServiceResponse($resource);

        return new ResponseModelOpinionsGet($response);
    }

    /**
     * Get outlets for model
     *
     * Returns outlets list represented in model of Yandex.Market service according to params.
     *
     * @see https://tech.yandex.ru/market/content-data/doc/dg-v2/reference/outlet-controller-v2-get-model-outlets-docpage/
     *
     * @param int   $modelId
     * @param array $params
     *
     * @return ResponseModelOutletsGet
     *
     * @throws \Yandex\Common\Exception\ForbiddenException
     * @throws \Yandex\Common\Exception\UnauthorizedException
     * @throws \Yandex\Market\Content\Exception\ContentRequestException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getOutlets($modelId, array $params = [])
    {
        $resource = 'models/' . $modelId . '/outlets';
        $resource .= '?' . $this->buildQueryString($params);
        $response = $this->getServiceResponse($resource);

        return new ResponseModelOutletsGet($response);
    }
}
