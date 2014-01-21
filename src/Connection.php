<?php
/**
 * Created for Krush on 1/20/14.
 * 
 * @author Kevin Nuut
 */

namespace Assemblaphp;

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
                    ['apiUrl', 'apiKey', 'apiSecret', 'spaceId', 'version', 'responseType', 'timeout']
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
    public function call($request = '', Array $fields = [], $verb = self::VERB_GET)
    {
        $curlPath = $this->apiUrl . $this->version . '/' . $request . '.' . $this->responseType;

        $ch   = curl_init();
        $json = json_encode($fields);

        $curlOpts = [
            CURLOPT_URL            => $curlPath,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT        => $this->timeout,
            CURLOPT_HTTPHEADER     => [
                'X-Api-Key: ' . $this->apiKey,
                'X-Api-Secret: ' . $this->apiSecret,
                'Content-Type: application/' . $this->responseType,
                'Accept: application/' . $this->responseType
            ],
            CURLOPT_SSL_VERIFYPEER => false
        ];

        switch ($verb) {
            case $this::VERB_POST:
                $curlOpts[CURLOPT_POST] = true;
                $curlOpts[CURLOPT_POSTFIELDS] = $json;
                break;

            case $this::VERB_PUT:
                $curlOpts[CURLOPT_PUT] = true;
                $curlOpts[CURLOPT_POSTFIELDS] = $json;
                break;

            case $this::VERB_DELETE:
                $curlOpts[CURLOPT_CUSTOMREQUEST] = $this::VERB_DELETE;
                $curlOpts[CURLOPT_POSTFIELDS] = $json;
                break;

            case $this::VERB_GET:

            default:
                $curlOpts[CURLOPT_POST] = false;
                $curlOpts[CURLOPT_URL] = $curlPath . '?' . http_build_query($fields);
                $curlOpts[CURLOPT_POST] = false;
                break;

        }

        curl_setopt_array($ch, $curlOpts);

        $result     = curl_exec($ch);
        $httpStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        $responseData = json_decode($result);

        try {
            $this->checkStatus($httpStatus);
        } catch (\Exception $e) {
            $message = $e->getMessage();
            if (!empty($responseData->error)) {
                $message .= ' {' . $responseData->error . ': ' . $responseData->error_description . '}';
            }

            throw new \Exception ($message, $e->getCode());
        }

        return $responseData;
    }
} 