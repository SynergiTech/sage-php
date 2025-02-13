<?php
/**
 * BankAccountTypesApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Sage One - Accounts - v3 UKI
 *
 * Documentation of the Sage Business Cloud Accounting API.
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.43
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * BankAccountTypesApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BankAccountTypesApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getBankAccountTypes
     *
     * Returns all Bank Account Types
     *
     * @param  bool $show_legacy_id Display the legacy_id for the Account Types. (optional)
     * @param  int $items_per_page Format - int32. Returns the given number of Account Types per request. (optional, default to 20)
     * @param  int $page Format - int32. Go to specific page of Account Types (optional, default to 1)
     * @param  string $attributes Specify the attributes that you want to expose for the Account Types (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\BaseArray
     */
    public function getBankAccountTypes($show_legacy_id = null, $items_per_page = '20', $page = '1', $attributes = null)
    {
        list($response) = $this->getBankAccountTypesWithHttpInfo($show_legacy_id, $items_per_page, $page, $attributes);
        return $response;
    }

    /**
     * Operation getBankAccountTypesWithHttpInfo
     *
     * Returns all Bank Account Types
     *
     * @param  bool $show_legacy_id Display the legacy_id for the Account Types. (optional)
     * @param  int $items_per_page Format - int32. Returns the given number of Account Types per request. (optional, default to 20)
     * @param  int $page Format - int32. Go to specific page of Account Types (optional, default to 1)
     * @param  string $attributes Specify the attributes that you want to expose for the Account Types (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\BaseArray, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBankAccountTypesWithHttpInfo($show_legacy_id = null, $items_per_page = '20', $page = '1', $attributes = null)
    {
        $returnType = '\Swagger\Client\Model\BaseArray';
        $request = $this->getBankAccountTypesRequest($show_legacy_id, $items_per_page, $page, $attributes);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
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
                        '\Swagger\Client\Model\BaseArray',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getBankAccountTypesAsync
     *
     * Returns all Bank Account Types
     *
     * @param  bool $show_legacy_id Display the legacy_id for the Account Types. (optional)
     * @param  int $items_per_page Format - int32. Returns the given number of Account Types per request. (optional, default to 20)
     * @param  int $page Format - int32. Go to specific page of Account Types (optional, default to 1)
     * @param  string $attributes Specify the attributes that you want to expose for the Account Types (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBankAccountTypesAsync($show_legacy_id = null, $items_per_page = '20', $page = '1', $attributes = null)
    {
        return $this->getBankAccountTypesAsyncWithHttpInfo($show_legacy_id, $items_per_page, $page, $attributes)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getBankAccountTypesAsyncWithHttpInfo
     *
     * Returns all Bank Account Types
     *
     * @param  bool $show_legacy_id Display the legacy_id for the Account Types. (optional)
     * @param  int $items_per_page Format - int32. Returns the given number of Account Types per request. (optional, default to 20)
     * @param  int $page Format - int32. Go to specific page of Account Types (optional, default to 1)
     * @param  string $attributes Specify the attributes that you want to expose for the Account Types (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBankAccountTypesAsyncWithHttpInfo($show_legacy_id = null, $items_per_page = '20', $page = '1', $attributes = null)
    {
        $returnType = '\Swagger\Client\Model\BaseArray';
        $request = $this->getBankAccountTypesRequest($show_legacy_id, $items_per_page, $page, $attributes);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getBankAccountTypes'
     *
     * @param  bool $show_legacy_id Display the legacy_id for the Account Types. (optional)
     * @param  int $items_per_page Format - int32. Returns the given number of Account Types per request. (optional, default to 20)
     * @param  int $page Format - int32. Go to specific page of Account Types (optional, default to 1)
     * @param  string $attributes Specify the attributes that you want to expose for the Account Types (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getBankAccountTypesRequest($show_legacy_id = null, $items_per_page = '20', $page = '1', $attributes = null)
    {
        if ($items_per_page !== null && $items_per_page > 200) {
            throw new \InvalidArgumentException('invalid value for "$items_per_page" when calling BankAccountTypesApi.getBankAccountTypes, must be smaller than or equal to 200.');
        }
        if ($items_per_page !== null && $items_per_page < 1) {
            throw new \InvalidArgumentException('invalid value for "$items_per_page" when calling BankAccountTypesApi.getBankAccountTypes, must be bigger than or equal to 1.');
        }


        $resourcePath = '/bank_account_types';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($show_legacy_id !== null) {
            $queryParams['show_legacy_id'] = ObjectSerializer::toQueryValue($show_legacy_id);
        }
        // query params
        if ($items_per_page !== null) {
            $queryParams['items_per_page'] = ObjectSerializer::toQueryValue($items_per_page);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($attributes !== null) {
            $queryParams['attributes'] = ObjectSerializer::toQueryValue($attributes);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Ocp-Apim-Subscription-Key');
        if ($apiKey !== null) {
            $headers['Ocp-Apim-Subscription-Key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('subscription-key');
        if ($apiKey !== null) {
            $queryParams['subscription-key'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getBankAccountTypesKey
     *
     * Returns a Bank Account Type
     *
     * @param  string $key The Bank Account Type Key. (required)
     * @param  bool $show_legacy_id Display the legacy_id for the Account Type. (optional)
     * @param  string $attributes Specify the attributes that you want to expose for the Account Type (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\Base
     */
    public function getBankAccountTypesKey($key, $show_legacy_id = null, $attributes = null)
    {
        list($response) = $this->getBankAccountTypesKeyWithHttpInfo($key, $show_legacy_id, $attributes);
        return $response;
    }

    /**
     * Operation getBankAccountTypesKeyWithHttpInfo
     *
     * Returns a Bank Account Type
     *
     * @param  string $key The Bank Account Type Key. (required)
     * @param  bool $show_legacy_id Display the legacy_id for the Account Type. (optional)
     * @param  string $attributes Specify the attributes that you want to expose for the Account Type (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\Base, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBankAccountTypesKeyWithHttpInfo($key, $show_legacy_id = null, $attributes = null)
    {
        $returnType = '\Swagger\Client\Model\Base';
        $request = $this->getBankAccountTypesKeyRequest($key, $show_legacy_id, $attributes);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
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
                        '\Swagger\Client\Model\Base',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getBankAccountTypesKeyAsync
     *
     * Returns a Bank Account Type
     *
     * @param  string $key The Bank Account Type Key. (required)
     * @param  bool $show_legacy_id Display the legacy_id for the Account Type. (optional)
     * @param  string $attributes Specify the attributes that you want to expose for the Account Type (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBankAccountTypesKeyAsync($key, $show_legacy_id = null, $attributes = null)
    {
        return $this->getBankAccountTypesKeyAsyncWithHttpInfo($key, $show_legacy_id, $attributes)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getBankAccountTypesKeyAsyncWithHttpInfo
     *
     * Returns a Bank Account Type
     *
     * @param  string $key The Bank Account Type Key. (required)
     * @param  bool $show_legacy_id Display the legacy_id for the Account Type. (optional)
     * @param  string $attributes Specify the attributes that you want to expose for the Account Type (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBankAccountTypesKeyAsyncWithHttpInfo($key, $show_legacy_id = null, $attributes = null)
    {
        $returnType = '\Swagger\Client\Model\Base';
        $request = $this->getBankAccountTypesKeyRequest($key, $show_legacy_id, $attributes);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getBankAccountTypesKey'
     *
     * @param  string $key The Bank Account Type Key. (required)
     * @param  bool $show_legacy_id Display the legacy_id for the Account Type. (optional)
     * @param  string $attributes Specify the attributes that you want to expose for the Account Type (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getBankAccountTypesKeyRequest($key, $show_legacy_id = null, $attributes = null)
    {
        // verify the required parameter 'key' is set
        if ($key === null || (is_array($key) && count($key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $key when calling getBankAccountTypesKey'
            );
        }

        $resourcePath = '/bank_account_types/{key}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($show_legacy_id !== null) {
            $queryParams['show_legacy_id'] = ObjectSerializer::toQueryValue($show_legacy_id);
        }
        // query params
        if ($attributes !== null) {
            $queryParams['attributes'] = ObjectSerializer::toQueryValue($attributes);
        }

        // path params
        if ($key !== null) {
            $resourcePath = str_replace(
                '{' . 'key' . '}',
                ObjectSerializer::toPathValue($key),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Ocp-Apim-Subscription-Key');
        if ($apiKey !== null) {
            $headers['Ocp-Apim-Subscription-Key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('subscription-key');
        if ($apiKey !== null) {
            $queryParams['subscription-key'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
    protected function createHttpClientOption()
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
