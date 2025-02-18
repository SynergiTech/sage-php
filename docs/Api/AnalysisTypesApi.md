# SynergiTech\Sage\AnalysisTypesApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAnalysisTypes()**](AnalysisTypesApi.md#getAnalysisTypes) | **GET** /analysis_types | Returns all Analysis Types |
| [**getAnalysisTypesKey()**](AnalysisTypesApi.md#getAnalysisTypesKey) | **GET** /analysis_types/{key} | Returns a Analysis Type |
| [**putAnalysisTypesKey()**](AnalysisTypesApi.md#putAnalysisTypesKey) | **PUT** /analysis_types/{key} | Updates a Analysis Type |


## `getAnalysisTypes()`

```php
getAnalysisTypes($updatedOrCreatedSince, $analysisTypeLevel, $search, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\AnalysisType[]
```

Returns all Analysis Types

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Settings`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\AnalysisTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Analysis Types changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$analysisTypeLevel = 'analysisTypeLevel_example'; // string | Use this to filter Analysis Types by analysis_type_level
$search = 'search_example'; // string | Use this to filter by the item code or description
$itemsPerPage = 20; // int | Returns the given number of Analysis Types per request.
$page = 1; // int | Go to specific page of Analysis Types
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Analysis Types (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getAnalysisTypes($updatedOrCreatedSince, $analysisTypeLevel, $search, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisTypesApi->getAnalysisTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updatedOrCreatedSince** | **\DateTime**| Use this to limit the response to Analysis Types changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **analysisTypeLevel** | **string**| Use this to filter Analysis Types by analysis_type_level | [optional] |
| **search** | **string**| Use this to filter by the item code or description | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Analysis Types per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Analysis Types | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Analysis Types (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\AnalysisType[]**](../Model/AnalysisType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAnalysisTypesKey()`

```php
getAnalysisTypesKey($key, $attributes): \SynergiTech\Sage\Model\AnalysisType
```

Returns a Analysis Type

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\AnalysisTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Analysis Type Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Analysis Type (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getAnalysisTypesKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisTypesApi->getAnalysisTypesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Analysis Type Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Analysis Type (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\AnalysisType**](../Model/AnalysisType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putAnalysisTypesKey()`

```php
putAnalysisTypesKey($key, $analysisTypes): \SynergiTech\Sage\Model\AnalysisType
```

Updates a Analysis Type

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\AnalysisTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Analysis Type Key.
$analysisTypes = new \SynergiTech\Sage\Model\PutAnalysisTypes(); // \SynergiTech\Sage\Model\PutAnalysisTypes

try {
    $result = $apiInstance->putAnalysisTypesKey($key, $analysisTypes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisTypesApi->putAnalysisTypesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Analysis Type Key. | |
| **analysisTypes** | [**\SynergiTech\Sage\Model\PutAnalysisTypes**](../Model/PutAnalysisTypes.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\AnalysisType**](../Model/AnalysisType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
