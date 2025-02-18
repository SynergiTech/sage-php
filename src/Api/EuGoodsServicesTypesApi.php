<?php
/**
 * EuGoodsServicesTypesApi
 * PHP version 8.1
 *
 * @package  SynergiTech\Sage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Sage One - Accounts - v3 UKI
 *
 * Documentation of the Sage Business Cloud Accounting API.
 *
 * The version of the OpenAPI document: 1.0
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SynergiTech\Sage\Api;

use InvalidArgumentException;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Promise\PromiseInterface;
use SynergiTech\Sage\ApiException;
use SynergiTech\Sage\Configuration;
use SynergiTech\Sage\HeaderSelector;
use SynergiTech\Sage\ObjectSerializer;

/**
 * EuGoodsServicesTypesApi Class Doc Comment
 *
 * @package  SynergiTech\Sage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EuGoodsServicesTypesApi
{
    /**
     * @var ClientInterface
     */
    protected ClientInterface $client;

    /**
     * @var Configuration
     */
    protected Configuration $config;

    /**
     * @var HeaderSelector
     */
    protected HeaderSelector $headerSelector;

    /**
     * @var int Host index
     */
    protected int $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'getEuGoodsServicesTypes' => [
            'application/json',
        ],
        'getEuGoodsServicesTypesKey' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface|null $client
     * @param Configuration|null   $config
     * @param HeaderSelector|null  $selector
     * @param int                  $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ?ClientInterface $client = null,
        ?Configuration $config = null,
        ?HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex(int $hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex(): int
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig(): Configuration
    {
        return $this->config;
    }

    /**
     * Operation getEuGoodsServicesTypes
     *
     * Returns all EU Goods Services Types
     *
     * @param  bool|null $showLegacyId Display the legacy_id for the EU Goods Services Types. (optional)
     * @param  int|null $itemsPerPage Format - int32. Returns the given number of EU Goods Services Types per request. (optional, default to 20)
     * @param  int|null $page Format - int32. Go to specific page of EU Goods Services Types (optional, default to 1)
     * @param  string|null $attributes Specify the attributes that you want to expose for the EU Goods Services Types (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEuGoodsServicesTypes'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \SynergiTech\Sage\Model\Base[]
     */
    public function getEuGoodsServicesTypes(
        ?bool $showLegacyId = null,
        ?int $itemsPerPage = 20,
        ?int $page = 1,
        ?string $attributes = null,
        string $contentType = self::contentTypes['getEuGoodsServicesTypes'][0]
    ): array
    {
        list($response) = $this->getEuGoodsServicesTypesWithHttpInfo($showLegacyId, $itemsPerPage, $page, $attributes, $contentType);
        return $response;
    }

    /**
     * Operation getEuGoodsServicesTypesWithHttpInfo
     *
     * Returns all EU Goods Services Types
     *
     * @param  bool|null $showLegacyId Display the legacy_id for the EU Goods Services Types. (optional)
     * @param  int|null $itemsPerPage Format - int32. Returns the given number of EU Goods Services Types per request. (optional, default to 20)
     * @param  int|null $page Format - int32. Go to specific page of EU Goods Services Types (optional, default to 1)
     * @param  string|null $attributes Specify the attributes that you want to expose for the EU Goods Services Types (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEuGoodsServicesTypes'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \SynergiTech\Sage\Model\Base[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getEuGoodsServicesTypesWithHttpInfo(
        ?bool $showLegacyId = null,
        ?int $itemsPerPage = 20,
        ?int $page = 1,
        ?string $attributes = null,
        string $contentType = self::contentTypes['getEuGoodsServicesTypes'][0]
    ): array
    {
        $request = $this->getEuGoodsServicesTypesRequest($showLegacyId, $itemsPerPage, $page, $attributes, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    if (in_array('\SynergiTech\Sage\Model\Base[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SynergiTech\Sage\Model\Base[]' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SynergiTech\Sage\Model\Base[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = '\SynergiTech\Sage\Model\Base[]';
            if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SynergiTech\Sage\Model\Base[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getEuGoodsServicesTypesAsync
     *
     * Returns all EU Goods Services Types
     *
     * @param  bool|null $showLegacyId Display the legacy_id for the EU Goods Services Types. (optional)
     * @param  int|null $itemsPerPage Format - int32. Returns the given number of EU Goods Services Types per request. (optional, default to 20)
     * @param  int|null $page Format - int32. Go to specific page of EU Goods Services Types (optional, default to 1)
     * @param  string|null $attributes Specify the attributes that you want to expose for the EU Goods Services Types (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEuGoodsServicesTypes'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getEuGoodsServicesTypesAsync(
        ?bool $showLegacyId = null,
        ?int $itemsPerPage = 20,
        ?int $page = 1,
        ?string $attributes = null,
        string $contentType = self::contentTypes['getEuGoodsServicesTypes'][0]
    ): PromiseInterface
    {
        return $this->getEuGoodsServicesTypesAsyncWithHttpInfo($showLegacyId, $itemsPerPage, $page, $attributes, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getEuGoodsServicesTypesAsyncWithHttpInfo
     *
     * Returns all EU Goods Services Types
     *
     * @param  bool|null $showLegacyId Display the legacy_id for the EU Goods Services Types. (optional)
     * @param  int|null $itemsPerPage Format - int32. Returns the given number of EU Goods Services Types per request. (optional, default to 20)
     * @param  int|null $page Format - int32. Go to specific page of EU Goods Services Types (optional, default to 1)
     * @param  string|null $attributes Specify the attributes that you want to expose for the EU Goods Services Types (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEuGoodsServicesTypes'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getEuGoodsServicesTypesAsyncWithHttpInfo(
        ?bool $showLegacyId = null,
        ?int $itemsPerPage = 20,
        ?int $page = 1,
        ?string $attributes = null,
        string $contentType = self::contentTypes['getEuGoodsServicesTypes'][0]
    ): PromiseInterface
    {
        $returnType = '\SynergiTech\Sage\Model\Base[]';
        $request = $this->getEuGoodsServicesTypesRequest($showLegacyId, $itemsPerPage, $page, $attributes, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getEuGoodsServicesTypes'
     *
     * @param  bool|null $showLegacyId Display the legacy_id for the EU Goods Services Types. (optional)
     * @param  int|null $itemsPerPage Format - int32. Returns the given number of EU Goods Services Types per request. (optional, default to 20)
     * @param  int|null $page Format - int32. Go to specific page of EU Goods Services Types (optional, default to 1)
     * @param  string|null $attributes Specify the attributes that you want to expose for the EU Goods Services Types (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEuGoodsServicesTypes'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getEuGoodsServicesTypesRequest(
        ?bool $showLegacyId = null,
        ?int $itemsPerPage = 20,
        ?int $page = 1,
        ?string $attributes = null,
        string $contentType = self::contentTypes['getEuGoodsServicesTypes'][0]
    ): Request
    {


        if ($itemsPerPage !== null && $itemsPerPage > 200) {
            throw new InvalidArgumentException('invalid value for "$itemsPerPage" when calling EuGoodsServicesTypesApi.getEuGoodsServicesTypes, must be smaller than or equal to 200.');
        }
        if ($itemsPerPage !== null && $itemsPerPage < 1) {
            throw new InvalidArgumentException('invalid value for "$itemsPerPage" when calling EuGoodsServicesTypesApi.getEuGoodsServicesTypes, must be bigger than or equal to 1.');
        }
        



        $resourcePath = '/eu_goods_services_types';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $showLegacyId,
            'show_legacy_id', // param base name
            'boolean', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $itemsPerPage,
            'items_per_page', // param base name
            'integer', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page,
            'page', // param base name
            'integer', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $attributes,
            'attributes', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('subscription-key');
        if ($apiKey !== null) {
            $queryParams['subscription-key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Ocp-Apim-Subscription-Key');
        if ($apiKey !== null) {
            $headers['Ocp-Apim-Subscription-Key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getEuGoodsServicesTypesKey
     *
     * Returns a EU Goods Services Type
     *
     * @param  string $key The EU Goods Services Type Key. (required)
     * @param  bool|null $showLegacyId Display the legacy_id for the EU Goods Services Type. (optional)
     * @param  string|null $attributes Specify the attributes that you want to expose for the EU Goods Services Type (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEuGoodsServicesTypesKey'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \SynergiTech\Sage\Model\Base
     */
    public function getEuGoodsServicesTypesKey(
        string $key,
        ?bool $showLegacyId = null,
        ?string $attributes = null,
        string $contentType = self::contentTypes['getEuGoodsServicesTypesKey'][0]
    ): \SynergiTech\Sage\Model\Base
    {
        list($response) = $this->getEuGoodsServicesTypesKeyWithHttpInfo($key, $showLegacyId, $attributes, $contentType);
        return $response;
    }

    /**
     * Operation getEuGoodsServicesTypesKeyWithHttpInfo
     *
     * Returns a EU Goods Services Type
     *
     * @param  string $key The EU Goods Services Type Key. (required)
     * @param  bool|null $showLegacyId Display the legacy_id for the EU Goods Services Type. (optional)
     * @param  string|null $attributes Specify the attributes that you want to expose for the EU Goods Services Type (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEuGoodsServicesTypesKey'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \SynergiTech\Sage\Model\Base, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEuGoodsServicesTypesKeyWithHttpInfo(
        string $key,
        ?bool $showLegacyId = null,
        ?string $attributes = null,
        string $contentType = self::contentTypes['getEuGoodsServicesTypesKey'][0]
    ): array
    {
        $request = $this->getEuGoodsServicesTypesKeyRequest($key, $showLegacyId, $attributes, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    if (in_array('\SynergiTech\Sage\Model\Base', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SynergiTech\Sage\Model\Base' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SynergiTech\Sage\Model\Base', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = '\SynergiTech\Sage\Model\Base';
            if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SynergiTech\Sage\Model\Base',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getEuGoodsServicesTypesKeyAsync
     *
     * Returns a EU Goods Services Type
     *
     * @param  string $key The EU Goods Services Type Key. (required)
     * @param  bool|null $showLegacyId Display the legacy_id for the EU Goods Services Type. (optional)
     * @param  string|null $attributes Specify the attributes that you want to expose for the EU Goods Services Type (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEuGoodsServicesTypesKey'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getEuGoodsServicesTypesKeyAsync(
        string $key,
        ?bool $showLegacyId = null,
        ?string $attributes = null,
        string $contentType = self::contentTypes['getEuGoodsServicesTypesKey'][0]
    ): PromiseInterface
    {
        return $this->getEuGoodsServicesTypesKeyAsyncWithHttpInfo($key, $showLegacyId, $attributes, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getEuGoodsServicesTypesKeyAsyncWithHttpInfo
     *
     * Returns a EU Goods Services Type
     *
     * @param  string $key The EU Goods Services Type Key. (required)
     * @param  bool|null $showLegacyId Display the legacy_id for the EU Goods Services Type. (optional)
     * @param  string|null $attributes Specify the attributes that you want to expose for the EU Goods Services Type (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEuGoodsServicesTypesKey'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getEuGoodsServicesTypesKeyAsyncWithHttpInfo(
        string $key,
        ?bool $showLegacyId = null,
        ?string $attributes = null,
        string $contentType = self::contentTypes['getEuGoodsServicesTypesKey'][0]
    ): PromiseInterface
    {
        $returnType = '\SynergiTech\Sage\Model\Base';
        $request = $this->getEuGoodsServicesTypesKeyRequest($key, $showLegacyId, $attributes, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getEuGoodsServicesTypesKey'
     *
     * @param  string $key The EU Goods Services Type Key. (required)
     * @param  bool|null $showLegacyId Display the legacy_id for the EU Goods Services Type. (optional)
     * @param  string|null $attributes Specify the attributes that you want to expose for the EU Goods Services Type (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getEuGoodsServicesTypesKey'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getEuGoodsServicesTypesKeyRequest(
        string $key,
        ?bool $showLegacyId = null,
        ?string $attributes = null,
        string $contentType = self::contentTypes['getEuGoodsServicesTypesKey'][0]
    ): Request
    {

        // verify the required parameter 'key' is set
        if ($key === null || (is_array($key) && count($key) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $key when calling getEuGoodsServicesTypesKey'
            );
        }




        $resourcePath = '/eu_goods_services_types/{key}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $showLegacyId,
            'show_legacy_id', // param base name
            'boolean', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $attributes,
            'attributes', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);


        // path params
        if ($key !== null) {
            $resourcePath = str_replace(
                '{' . 'key' . '}',
                ObjectSerializer::toPathValue($key),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('subscription-key');
        if ($apiKey !== null) {
            $queryParams['subscription-key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Ocp-Apim-Subscription-Key');
        if ($apiKey !== null) {
            $headers['Ocp-Apim-Subscription-Key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption(): array
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
