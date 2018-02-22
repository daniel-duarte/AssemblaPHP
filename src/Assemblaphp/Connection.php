<?php
/**
 * Created for No Reason on 1/20/14.
 * 
 * @author Kevin Nuut
 */

namespace Assemblaphp;

use Zend\Http\Client as HttpClient;
use Zend\Http\Response as HttpResponse;
use Zend\Http\Request as HttpRequest;
use Zend\Http\Headers as HttpHeaders;
use Zend\Http\Client\Adapter\Exception\RuntimeException as HttpRuntimeException;

/**
 * Class Connection
 *
 * @package Assemblaphp
 */
class Connection 
{
    const VERB_GET    = 'GET';
    const VERB_POST   = 'POST';
    const VERB_PUT    = 'PUT';
    const VERB_DELETE = 'DELETE';

    const RESPONSE_JSON = 'json';
    const RESPONSE_XML  = 'xml';

    const VERSION_V1 = 'v1';

    const TIMEOUT_STANDARD = 15;

    private $apiUrl = '';
    private $apiKey = '';
    private $apiSecret = '';
    private $spaceId = '';
    private $version = self::VERSION_V1;
    private $responseType = self::RESPONSE_JSON;
    private $timeout = 15;

    /**
     * @param mixed  $apiUrl
     * @param string $apiKey
     * @param string $apiSecret
     * @param string $spaceId
     * @param string $version
     * @param string $responseType
     * @param int    $timeout
     */
    public function __construct(
        $apiUrl,
        $apiKey = '',
        $apiSecret = '',
        $spaceId = '',
        $version = self::VERSION_V1,
        $responseType = self::RESPONSE_JSON,
        $timeout = self::TIMEOUT_STANDARD
    ) {
        if (is_array($apiUrl)) {
            foreach ($apiUrl as $key => $value) {
                if (in_array(
                    $key,
                    array('apiUrl', 'apiKey', 'apiSecret', 'spaceId', 'version', 'responseType', 'timeout')
                )
                ) {
                    $this->$key = $value;
                }
            }
        } else {
            $this->apiUrl       = $apiUrl;
            $this->apiKey       = $apiKey;
            $this->apiSecret    = $apiSecret;
            $this->spaceId      = $spaceId;
            $this->version      = $version;
            $this->responseType = $responseType;
            $this->timeout      = $timeout;
        }
    }

    /**
     * @param $space
     */
    public function setSpaceId($spaceId)
    {
        $this->spaceId = $spaceId;
    }

    /**
     * @return string
     */
    public function getSpaceId()
    {
        return $this->spaceId;
    }

    /**
     * Check HTTP Status and return appropriate response
     *
     * @param $status
     *
     * @return bool
     * @throws \Exception
     */
    private function checkStatus($status)
    {
        switch ($status) {
            case 200:

            case 201:

            case 204:
                return true;

            case 422:
                throw new \Exception('Request cannot be processed.', 422);

            case 404:
                throw new \Exception('Request cannot be found.', 404);

            case 403:
                throw new \Exception('Request is unauthorized.', 403);

            case 500:

            default:
                throw new \Exception('Remote server error.', 500);
        }
    }

    /**
     * @param        $url
     * @param array  $fields
     * @param string $verb
     *
     * @return bool
     * @throws \Exception
     */
    public function call($request = '', Array $fields = array(), $verb = self::VERB_GET)
    {
        $curlPath = $this->apiUrl . $this->version . '/' . $request . '.' . $this->responseType;

        switch ($verb) {
            case $this::VERB_POST:
            case $this::VERB_PUT:
            case $this::VERB_DELETE:
                $jsonBody = json_encode($fields);
                break;
            case $this::VERB_GET:
            default:
                $curlPath = $curlPath . '?' . http_build_query($fields);
                $jsonBody = null;
        }

        $httpClient = new HttpClient($curlPath, ['sslcapath' => '/etc/ssl/certs']);
        if ($jsonBody !== null) {
            $httpClient->setRawData($jsonBody, null);
        }
        $httpClient->setMethod($verb);

        $headers = new HttpHeaders();
        $headers->addHeaderLine('X-Api-Key', $this->apiKey);
        $headers->addHeaderLine('X-Api-Secret', $this->apiSecret);
        $headers->addHeaderLine('Content-Type', 'application/' . $this->responseType);
        $headers->addHeaderLine('Accept', 'application/' . $this->responseType);
        $httpClient->setHeaders($headers);

        try {
            $apiResponse = $httpClient->send();
        } catch (RuntimeException $ex) {
            // @todo log exception
            $apiResponse = new Response();
            $apiResponse->setStatusCode(HttpResponse::STATUS_CODE_500);
        }

        $apiJsonResponse = json_decode($apiResponse->getBody(), true);
        $httpStatus = $apiResponse->getStatusCode();

        try {
            $this->checkStatus($httpStatus);
        } catch (\Exception $e) {
            $message = $e->getMessage();
            if (!empty($apiJsonResponse->error)) {
                $message .= ' {' . $apiJsonResponse->error . '}';
            }

            // @todo Fix to avoid commenting the exception.
            // throw new \Exception ($message, $e->getCode());
        }

        return $apiJsonResponse;
    }
} 