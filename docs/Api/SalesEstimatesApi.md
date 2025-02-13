# SynergiTech\Sage\SalesEstimatesApi

All URIs are relative to https://api-qa.sageapim.com/uki/sageone/accounts/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteSalesEstimatesKey()**](SalesEstimatesApi.md#deleteSalesEstimatesKey) | **DELETE** /sales_estimates/{key} | Deletes a Sales Estimate |
| [**getSalesEstimates()**](SalesEstimatesApi.md#getSalesEstimates) | **GET** /sales_estimates | Returns all Sales Estimates |
| [**getSalesEstimatesKey()**](SalesEstimatesApi.md#getSalesEstimatesKey) | **GET** /sales_estimates/{key} | Returns a Sales Estimate |
| [**postSalesEstimates()**](SalesEstimatesApi.md#postSalesEstimates) | **POST** /sales_estimates | Creates a Sales Estimate |
| [**putSalesEstimatesKey()**](SalesEstimatesApi.md#putSalesEstimatesKey) | **PUT** /sales_estimates/{key} | Updates a Sales Estimate |


## `deleteSalesEstimatesKey()`

```php
deleteSalesEstimatesKey($key)
```

Deletes a Sales Estimate

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new SynergiTech\Sage\Api\SalesEstimatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Sales Estimate Key.

try {
    $apiInstance->deleteSalesEstimatesKey($key);
} catch (Exception $e) {
    echo 'Exception when calling SalesEstimatesApi->deleteSalesEstimatesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Sales Estimate Key. | |

### Return type

void (empty response body)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSalesEstimates()`

```php
getSalesEstimates($contactId, $search, $statusId, $fromDate, $toDate, $updatedOrCreatedSince, $hasAttachments, $showLegacyId, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\SalesEstimate[]
```

Returns all Sales Estimates

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸 * Accounting Standard: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸 * Accounting Start: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Read Only, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new SynergiTech\Sage\Api\SalesEstimatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactId = 'contactId_example'; // string | Use this to filter by contact id
$search = 'search_example'; // string | Use this to filter by the estimate reference or contact name.
$statusId = 'statusId_example'; // string | Use this to filter by status id
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter by Sales Estimates dates
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter by Sales Estimates dates
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Sales Estimates changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$hasAttachments = True; // bool | Use this to filter Sales Estimates by whether they have attachments or not
$showLegacyId = True; // bool | Display the legacy_id for the Sales Estimates.
$itemsPerPage = 20; // int | Format - int32. Returns the given number of Sales Estimates per request.
$page = 1; // int | Format - int32. Go to specific page of Sales Estimates
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Sales Estimates (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getSalesEstimates($contactId, $search, $statusId, $fromDate, $toDate, $updatedOrCreatedSince, $hasAttachments, $showLegacyId, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesEstimatesApi->getSalesEstimates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactId** | **string**| Use this to filter by contact id | [optional] |
| **search** | **string**| Use this to filter by the estimate reference or contact name. | [optional] |
| **statusId** | **string**| Use this to filter by status id | [optional] |
| **fromDate** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter by Sales Estimates dates | [optional] |
| **toDate** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter by Sales Estimates dates | [optional] |
| **updatedOrCreatedSince** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Sales Estimates changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **hasAttachments** | **bool**| Use this to filter Sales Estimates by whether they have attachments or not | [optional] |
| **showLegacyId** | **bool**| Display the legacy_id for the Sales Estimates. | [optional] |
| **itemsPerPage** | **int**| Format - int32. Returns the given number of Sales Estimates per request. | [optional] [default to 20] |
| **page** | **int**| Format - int32. Go to specific page of Sales Estimates | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Sales Estimates (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\SalesEstimate[]**](../Model/SalesEstimate.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSalesEstimatesKey()`

```php
getSalesEstimatesKey($key, $nestedAttributes, $showLegacyId, $attributes): \SynergiTech\Sage\Model\SalesEstimate
```

Returns a Sales Estimate

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸 * Accounting Standard: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸 * Accounting Start: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Read Only, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new SynergiTech\Sage\Api\SalesEstimatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Sales Estimate Key.
$nestedAttributes = 'nestedAttributes_example'; // string | Specify the attributes that you want to expose for nested entities of the Sales Estimate (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$showLegacyId = True; // bool | Display the legacy_id for the Sales Estimate.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Sales Estimate (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getSalesEstimatesKey($key, $nestedAttributes, $showLegacyId, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesEstimatesApi->getSalesEstimatesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Sales Estimate Key. | |
| **nestedAttributes** | **string**| Specify the attributes that you want to expose for nested entities of the Sales Estimate (expose all nested attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **showLegacyId** | **bool**| Display the legacy_id for the Sales Estimate. | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Sales Estimate (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\SalesEstimate**](../Model/SalesEstimate.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSalesEstimates()`

```php
postSalesEstimates($postSalesEstimates): \SynergiTech\Sage\Model\SalesEstimate
```

Creates a Sales Estimate

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new SynergiTech\Sage\Api\SalesEstimatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postSalesEstimates = new \SynergiTech\Sage\Model\PostSalesEstimates(); // \SynergiTech\Sage\Model\PostSalesEstimates

try {
    $result = $apiInstance->postSalesEstimates($postSalesEstimates);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesEstimatesApi->postSalesEstimates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **postSalesEstimates** | [**\SynergiTech\Sage\Model\PostSalesEstimates**](../Model/PostSalesEstimates.md)|  | [optional] |

### Return type

[**\SynergiTech\Sage\Model\SalesEstimate**](../Model/SalesEstimate.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putSalesEstimatesKey()`

```php
putSalesEstimatesKey($key, $putSalesEstimates): \SynergiTech\Sage\Model\SalesEstimate
```

Updates a Sales Estimate

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new SynergiTech\Sage\Api\SalesEstimatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Sales Estimate Key.
$putSalesEstimates = new \SynergiTech\Sage\Model\PutSalesEstimates(); // \SynergiTech\Sage\Model\PutSalesEstimates

try {
    $result = $apiInstance->putSalesEstimatesKey($key, $putSalesEstimates);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesEstimatesApi->putSalesEstimatesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Sales Estimate Key. | |
| **putSalesEstimates** | [**\SynergiTech\Sage\Model\PutSalesEstimates**](../Model/PutSalesEstimates.md)|  | [optional] |

### Return type

[**\SynergiTech\Sage\Model\SalesEstimate**](../Model/SalesEstimate.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
