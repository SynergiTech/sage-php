# Swagger\Client\ProductSalesPriceTypesApi

All URIs are relative to *https://api-qa.sageapim.com/uki/sageone/accounts/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteProductSalesPriceTypesKey**](ProductSalesPriceTypesApi.md#deleteProductSalesPriceTypesKey) | **DELETE** /product_sales_price_types/{key} | Deletes a Product Sales Price Type
[**getProductSalesPriceTypes**](ProductSalesPriceTypesApi.md#getProductSalesPriceTypes) | **GET** /product_sales_price_types | Returns all Product Sales Price Types
[**getProductSalesPriceTypesKey**](ProductSalesPriceTypesApi.md#getProductSalesPriceTypesKey) | **GET** /product_sales_price_types/{key} | Returns a Product Sales Price Type
[**postProductSalesPriceTypes**](ProductSalesPriceTypesApi.md#postProductSalesPriceTypes) | **POST** /product_sales_price_types | Creates a Product Sales Price Type
[**putProductSalesPriceTypesKey**](ProductSalesPriceTypesApi.md#putProductSalesPriceTypesKey) | **PUT** /product_sales_price_types/{key} | Updates a Product Sales Price Type


# **deleteProductSalesPriceTypesKey**
> deleteProductSalesPriceTypesKey($key)

Deletes a Product Sales Price Type

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Products & Services`: Full Access

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: apiKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductSalesPriceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Product Sales Price Type Key.

try {
    $apiInstance->deleteProductSalesPriceTypesKey($key);
} catch (Exception $e) {
    echo 'Exception when calling ProductSalesPriceTypesApi->deleteProductSalesPriceTypesKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Product Sales Price Type Key. |

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductSalesPriceTypes**
> \Swagger\Client\Model\ProductSalesPriceTypeArray getProductSalesPriceTypes($active, $show_legacy_id, $items_per_page, $page, $attributes)

Returns all Product Sales Price Types

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Products & Services`: Read Only, Restricted Access, Full Access * Area: `Sales`: Read Only, Restricted Access, Full Access * Area: `Purchases`: Read Only, Restricted Access, Full Access

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: apiKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductSalesPriceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$active = true; // bool | Use this to only return active or inactive items
$show_legacy_id = true; // bool | Display the legacy_id for the Product Prices.
$items_per_page = 20; // int | Format - int32. Returns the given number of Product Prices per request.
$page = 1; // int | Format - int32. Go to specific page of Product Prices
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Product Prices (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getProductSalesPriceTypes($active, $show_legacy_id, $items_per_page, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSalesPriceTypesApi->getProductSalesPriceTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **active** | **bool**| Use this to only return active or inactive items | [optional]
 **show_legacy_id** | **bool**| Display the legacy_id for the Product Prices. | [optional]
 **items_per_page** | **int**| Format - int32. Returns the given number of Product Prices per request. | [optional] [default to 20]
 **page** | **int**| Format - int32. Go to specific page of Product Prices | [optional] [default to 1]
 **attributes** | **string**| Specify the attributes that you want to expose for the Product Prices (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\ProductSalesPriceTypeArray**](../Model/ProductSalesPriceTypeArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductSalesPriceTypesKey**
> \Swagger\Client\Model\ProductSalesPriceType getProductSalesPriceTypesKey($key, $show_legacy_id, $attributes)

Returns a Product Sales Price Type

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Products & Services`: Read Only, Restricted Access, Full Access * Area: `Sales`: Read Only, Restricted Access, Full Access * Area: `Purchases`: Read Only, Restricted Access, Full Access

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: apiKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductSalesPriceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Product Sales Price Type Key.
$show_legacy_id = true; // bool | Display the legacy_id for the Product Price.
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Product Price (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getProductSalesPriceTypesKey($key, $show_legacy_id, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSalesPriceTypesApi->getProductSalesPriceTypesKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Product Sales Price Type Key. |
 **show_legacy_id** | **bool**| Display the legacy_id for the Product Price. | [optional]
 **attributes** | **string**| Specify the attributes that you want to expose for the Product Price (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\ProductSalesPriceType**](../Model/ProductSalesPriceType.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postProductSalesPriceTypes**
> \Swagger\Client\Model\ProductSalesPriceType postProductSalesPriceTypes($post_product_sales_price_types)

Creates a Product Sales Price Type

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Products & Services`: Restricted Access, Full Access

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: apiKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductSalesPriceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_product_sales_price_types = new \Swagger\Client\Model\PostProductSalesPriceTypes(); // \Swagger\Client\Model\PostProductSalesPriceTypes | 

try {
    $result = $apiInstance->postProductSalesPriceTypes($post_product_sales_price_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSalesPriceTypesApi->postProductSalesPriceTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_product_sales_price_types** | [**\Swagger\Client\Model\PostProductSalesPriceTypes**](../Model/PostProductSalesPriceTypes.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSalesPriceType**](../Model/ProductSalesPriceType.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putProductSalesPriceTypesKey**
> \Swagger\Client\Model\ProductSalesPriceType putProductSalesPriceTypesKey($key, $put_product_sales_price_types)

Updates a Product Sales Price Type

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Products & Services`: Full Access

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: apiKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductSalesPriceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Product Sales Price Type Key.
$put_product_sales_price_types = new \Swagger\Client\Model\PutProductSalesPriceTypes(); // \Swagger\Client\Model\PutProductSalesPriceTypes | 

try {
    $result = $apiInstance->putProductSalesPriceTypesKey($key, $put_product_sales_price_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSalesPriceTypesApi->putProductSalesPriceTypesKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Product Sales Price Type Key. |
 **put_product_sales_price_types** | [**\Swagger\Client\Model\PutProductSalesPriceTypes**](../Model/PutProductSalesPriceTypes.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSalesPriceType**](../Model/ProductSalesPriceType.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

