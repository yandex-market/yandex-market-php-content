<?php
/**
 * Yandex PHP Library
 *
 * @copyright NIX Solutions Ltd.
 * @link      https://github.com/nixsolutions/yandex-php-library
 */

/**
 * @namespace
 */

namespace Yandex\Market\Content;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use Yandex\Common\AbstractServiceClient;
use Yandex\Common\Exception\ForbiddenException;
use Yandex\Common\Exception\UnauthorizedException;
use Yandex\Market\Content\Exception\ContentRequestException;

/**
 * Class ContentClient
 *
 * @category Yandex
 * @package  MarketContent
 *
 * @author  Oleg Scherbakov <holdmann@yandex.ru>
 * @created 27.12.15 19:50
 */
class ContentClient extends AbstractServiceClient
{
    /**
     * API domain
     *
     * @var string
     */
    protected $serviceDomain = 'api.content.market.yandex.ru';
    /**
     * Requested version of API
     *
     * @var string
     */
    private $version = 'v2.1.3';
    /**
     * Store limits information during each API request
     *
     * @var array
     */
    private $limits = [];

    /**
     * @param string $token access token
     */
    public function __construct($token = '')
    {
        $this->setAccessToken($token);
    }

    /**
     * Get information about API limits
     *
     * @return array|false
     */
    public function getLimits()
    {
        return $this->limits;
    }

    /**
     * Get information about specified API limit
     *
     * @return array|false
     */
    public function getLimit($name)
    {
        if (isset($this->limits[$name])) {
            return $this->limits[$name];
        }

        return false;
    }

    /**
     * Returns API service response.
     *
     * @param  string $resource
     *
     * @return array
     * @throws ContentRequestException
     * @throws ForbiddenException
     * @throws UnauthorizedException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function getServiceResponse($resource)
    {
        $response = $this->sendRequest('GET', $this->getServiceUrl($resource));
        return $this->getDecodedBody($response->getBody());
    }

    /**
     * Sends a request
     *
     * @param string $method HTTP method
     * @param string $uri URI object or string.
     * @param array  $options Request options to apply.
     *
     * @return \Psr\Http\Message\ResponseInterface
     *
     * @throws ForbiddenException
     * @throws UnauthorizedException
     * @throws ContentRequestException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function sendRequest($method, $uri, array $options = [])
    {
        try {
            $response = $this->getClient()->request($method, $uri, $options);
        } catch (ClientException $ex) {
            $result = $ex->getResponse();
            $code = $result->getStatusCode();
            $message = $result->getReasonPhrase();

            $body = $result->getBody();
            if ($body) {
                $jsonBody = json_decode($body);
                if ($jsonBody && isset($jsonBody->error) && isset($jsonBody->error->message)) {
                    $message = $jsonBody->error->message;
                }
            }

            if ($code === 403) {
                throw new ForbiddenException($message);
            }

            if ($code === 401) {
                throw new UnauthorizedException($message);
            }

            throw new ContentRequestException(
                'Service responded with error code: "' . $code . '" and message: "' . $message . '"',
                $code
            );
        }

        $this->setLimits($response->getHeaders());

        return $response;
    }

    /**
     * @return ClientInterface
     */
    protected function getClient()
    {
        if ($this->client === null) {
            $defaultOptions = [
                'base_uri' => $this->getServiceUrl(),
                'headers' => [
                    'Host' => $this->getServiceDomain(),
                    'Accept' => '*/*',
                    'Authorization' => $this->getAccessToken(),
                ],
            ];
            if ($this->getProxy()) {
                $defaultOptions['proxy'] = $this->getProxy();
            }
            if ($this->getDebug()) {
                $defaultOptions['debug'] = $this->getDebug();
            }
            $this->client = new Client($defaultOptions);
        }

        return $this->client;
    }

    /**
     * Get url to service resource with parameters
     *
     * @param  string $resource
     *
     * @see    http://api.yandex.ru/market/partner/doc/dg/concepts/method-call.xml
     * @return string
     */
    public function getServiceUrl($resource = '')
    {
        return $this->serviceScheme . '://' . $this->serviceDomain . '/'
            . $this->version . '/' . $resource;
    }

    private function setLimits(array $headers)
    {
        // const as header name?
        $limitHeaders = [
            'X-RateLimit-Daily-Limit',
            'X-RateLimit-Daily-Remaining',
            'X-RateLimit-Global-Limit',
            'X-RateLimit-Global-Remaining',
            'X-RateLimit-Method-Limit',
            'X-RateLimit-Method-Remaining',
            'X-RateLimit-Until',
        ];

        $this->limits = [];

        foreach ($headers as $key => $value) {
            if (in_array($key, $limitHeaders, true)) {
                $this->limits[$key] = (int)$value[0];
            }
        }
    }

    /**
     * Returns URL-encoded query string
     *
     * @note: similar to http_build_query(),
     * but transform key=>value where key == value to "?key" param.
     *
     * @param array|object $queryData
     * @param string       $prefix
     * @param string       $argSeparator
     * @param int          $encType
     *
     * @return string $queryString
     */
    protected function buildQueryString(array $queryData, $prefix = '', $argSeparator = '&', $encType = PHP_QUERY_RFC3986)
    {
        foreach ($queryData as $k => &$v) {
            if (!is_scalar($v)) {
                $v = implode(',', $v);
            }
        }

        $queryString = http_build_query($queryData, $prefix, $argSeparator, $encType);

        foreach ($queryData as $k => $v) {
            if ($k == $v) {
                $queryString = str_replace("$k=$v", $v, $queryString);
            }
        }

        return $queryString;
    }
}
