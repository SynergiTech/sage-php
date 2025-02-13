# Swagger\Client\SalesEstimatesApi

All URIs are relative to *https://api-qa.sageapim.com/uki/sageone/accounts/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSalesEstimatesKey**](SalesEstimatesApi.md#deleteSalesEstimatesKey) | **DELETE** /sales_estimates/{key} | Deletes a Sales Estimate
[**getSalesEstimates**](SalesEstimatesApi.md#getSalesEstimates) | **GET** /sales_estimates | Returns all Sales Estimates
[**getSalesEstimatesKey**](SalesEstimatesApi.md#getSalesEstimatesKey) | **GET** /sales_estimates/{key} | Returns a Sales Estimate
[**postSalesEstimates**](SalesEstimatesApi.md#postSalesEstimates) | **POST** /sales_estimates | Creates a Sales Estimate
[**putSalesEstimatesKey**](SalesEstimatesApi.md#putSalesEstimatesKey) | **PUT** /sales_estimates/{key} | Updates a Sales Estimate


# **deleteSalesEstimatesKey**
> deleteSalesEstimatesKey($key)

Deletes a Sales Estimate

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access

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

$apiInstance = new Swagger\Client\Api\SalesEstimatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Sales Estimate Key.

try {
    $apiInstance->deleteSalesEstimatesKey($key);
} catch (Exception $e) {
    echo 'Exception when calling SalesEstimatesApi->deleteSalesEstimatesKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Sales Estimate Key. |

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSalesEstimates**
> \Swagger\Client\Model\SalesEstimateArray getSalesEstimates($contact_id, $search, $status_id, $from_date, $to_date, $updated_or_created_since, $has_attachments, $show_legacy_id, $items_per_page, $page, $attributes)

Returns all Sales Estimates

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸 * Accounting Standard: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸 * Accounting Start: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Read Only, Restricted Access

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

$apiInstance = new Swagger\Client\Api\SalesEstimatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = "contact_id_example"; // string | Use this to filter by contact id
$search = "search_example"; // string | Use this to filter by the estimate reference or contact name.
$status_id = "status_id_example"; // string | Use this to filter by status id
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter by Sales Estimates dates
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter by Sales Estimates dates
$updated_or_created_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Sales Estimates changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$has_attachments = true; // bool | Use this to filter Sales Estimates by whether they have attachments or not
$show_legacy_id = true; // bool | Display the legacy_id for the Sales Estimates.
$items_per_page = 20; // int | Format - int32. Returns the given number of Sales Estimates per request.
$page = 1; // int | Format - int32. Go to specific page of Sales Estimates
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Sales Estimates (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getSalesEstimates($contact_id, $search, $status_id, $from_date, $to_date, $updated_or_created_since, $has_attachments, $show_legacy_id, $items_per_page, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesEstimatesApi->getSalesEstimates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **string**| Use this to filter by contact id | [optional]
 **search** | **string**| Use this to filter by the estimate reference or contact name. | [optional]
 **status_id** | **string**| Use this to filter by status id | [optional]
 **from_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter by Sales Estimates dates | [optional]
 **to_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter by Sales Estimates dates | [optional]
 **updated_or_created_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Sales Estimates changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional]
 **has_attachments** | **bool**| Use this to filter Sales Estimates by whether they have attachments or not | [optional]
 **show_legacy_id** | **bool**| Display the legacy_id for the Sales Estimates. | [optional]
 **items_per_page** | **int**| Format - int32. Returns the given number of Sales Estimates per request. | [optional] [default to 20]
 **page** | **int**| Format - int32. Go to specific page of Sales Estimates | [optional] [default to 1]
 **attributes** | **string**| Specify the attributes that you want to expose for the Sales Estimates (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\SalesEstimateArray**](../Model/SalesEstimateArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSalesEstimatesKey**
> \Swagger\Client\Model\SalesEstimate getSalesEstimatesKey($key, $nested_attributes, $show_legacy_id, $attributes)

Returns a Sales Estimate

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸 * Accounting Standard: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸 * Accounting Start: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Read Only, Restricted Access

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

$apiInstance = new Swagger\Client\Api\SalesEstimatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Sales Estimate Key.
$nested_attributes = "nested_attributes_example"; // string | Specify the attributes that you want to expose for nested entities of the Sales Estimate (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$show_legacy_id = true; // bool | Display the legacy_id for the Sales Estimate.
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Sales Estimate (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getSalesEstimatesKey($key, $nested_attributes, $show_legacy_id, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesEstimatesApi->getSalesEstimatesKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Sales Estimate Key. |
 **nested_attributes** | **string**| Specify the attributes that you want to expose for nested entities of the Sales Estimate (expose all nested attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]
 **show_legacy_id** | **bool**| Display the legacy_id for the Sales Estimate. | [optional]
 **attributes** | **string**| Specify the attributes that you want to expose for the Sales Estimate (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\SalesEstimate**](../Model/SalesEstimate.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSalesEstimates**
> \Swagger\Client\Model\SalesEstimate postSalesEstimates($post_sales_estimates)

Creates a Sales Estimate

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Restricted Access

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

$apiInstance = new Swagger\Client\Api\SalesEstimatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_sales_estimates = new \Swagger\Client\Model\PostSalesEstimates(); // \Swagger\Client\Model\PostSalesEstimates | 

try {
    $result = $apiInstance->postSalesEstimates($post_sales_estimates);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesEstimatesApi->postSalesEstimates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_sales_estimates** | [**\Swagger\Client\Model\PostSalesEstimates**](../Model/PostSalesEstimates.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\SalesEstimate**](../Model/SalesEstimate.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSalesEstimatesKey**
> \Swagger\Client\Model\SalesEstimate putSalesEstimatesKey($key, $put_sales_estimates)

Updates a Sales Estimate

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Restricted Access

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

$apiInstance = new Swagger\Client\Api\SalesEstimatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Sales Estimate Key.
$put_sales_estimates = new \Swagger\Client\Model\PutSalesEstimates(); // \Swagger\Client\Model\PutSalesEstimates | 

try {
    $result = $apiInstance->putSalesEstimatesKey($key, $put_sales_estimates);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesEstimatesApi->putSalesEstimatesKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Sales Estimate Key. |
 **put_sales_estimates** | [**\Swagger\Client\Model\PutSalesEstimates**](../Model/PutSalesEstimates.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\SalesEstimate**](../Model/SalesEstimate.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

