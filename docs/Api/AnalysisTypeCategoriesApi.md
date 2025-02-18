# SynergiTech\Sage\AnalysisTypeCategoriesApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteAnalysisTypeCategoriesKey()**](AnalysisTypeCategoriesApi.md#deleteAnalysisTypeCategoriesKey) | **DELETE** /analysis_type_categories/{key} | Deletes a Analysis Type Category |
| [**getAnalysisTypeCategories()**](AnalysisTypeCategoriesApi.md#getAnalysisTypeCategories) | **GET** /analysis_type_categories | Returns all Analysis Type Categories |
| [**getAnalysisTypeCategoriesKey()**](AnalysisTypeCategoriesApi.md#getAnalysisTypeCategoriesKey) | **GET** /analysis_type_categories/{key} | Returns a Analysis Type Category |
| [**postAnalysisTypeCategories()**](AnalysisTypeCategoriesApi.md#postAnalysisTypeCategories) | **POST** /analysis_type_categories | Creates a Analysis Type Category |
| [**putAnalysisTypeCategoriesKey()**](AnalysisTypeCategoriesApi.md#putAnalysisTypeCategoriesKey) | **PUT** /analysis_type_categories/{key} | Updates a Analysis Type Category |


## `deleteAnalysisTypeCategoriesKey()`

```php
deleteAnalysisTypeCategoriesKey($key)
```

Deletes a Analysis Type Category

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Settings`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\AnalysisTypeCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Analysis Type Category Key.

try {
    $apiInstance->deleteAnalysisTypeCategoriesKey($key);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisTypeCategoriesApi->deleteAnalysisTypeCategoriesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Analysis Type Category Key. | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAnalysisTypeCategories()`

```php
getAnalysisTypeCategories($updatedOrCreatedSince, $analysisTypeLevel, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\AnalysisTypeCategory[]
```

Returns all Analysis Type Categories

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Settings`: Full Access, Read Only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\AnalysisTypeCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Analysis Type Categories changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$analysisTypeLevel = 'analysisTypeLevel_example'; // string | Use this to filter Analysis Type Categories by analysis_type_level
$itemsPerPage = 20; // int | Returns the given number of Analysis Type Categories per request.
$page = 1; // int | Go to specific page of Analysis Type Categories
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Analysis Type Categories (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getAnalysisTypeCategories($updatedOrCreatedSince, $analysisTypeLevel, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisTypeCategoriesApi->getAnalysisTypeCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updatedOrCreatedSince** | **\DateTime**| Use this to limit the response to Analysis Type Categories changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **analysisTypeLevel** | **string**| Use this to filter Analysis Type Categories by analysis_type_level | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Analysis Type Categories per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Analysis Type Categories | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Analysis Type Categories (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\AnalysisTypeCategory[]**](../Model/AnalysisTypeCategory.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAnalysisTypeCategoriesKey()`

```php
getAnalysisTypeCategoriesKey($key, $attributes): \SynergiTech\Sage\Model\AnalysisTypeCategory
```

Returns a Analysis Type Category

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Settings`: Full Access, Read Only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\AnalysisTypeCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Analysis Type Category Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Analysis Type Category (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getAnalysisTypeCategoriesKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisTypeCategoriesApi->getAnalysisTypeCategoriesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Analysis Type Category Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Analysis Type Category (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\AnalysisTypeCategory**](../Model/AnalysisTypeCategory.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAnalysisTypeCategories()`

```php
postAnalysisTypeCategories($analysisTypeCategories): \SynergiTech\Sage\Model\AnalysisTypeCategory
```

Creates a Analysis Type Category

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Settings`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\AnalysisTypeCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$analysisTypeCategories = new \SynergiTech\Sage\Model\PostAnalysisTypeCategories(); // \SynergiTech\Sage\Model\PostAnalysisTypeCategories

try {
    $result = $apiInstance->postAnalysisTypeCategories($analysisTypeCategories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisTypeCategoriesApi->postAnalysisTypeCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **analysisTypeCategories** | [**\SynergiTech\Sage\Model\PostAnalysisTypeCategories**](../Model/PostAnalysisTypeCategories.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\AnalysisTypeCategory**](../Model/AnalysisTypeCategory.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putAnalysisTypeCategoriesKey()`

```php
putAnalysisTypeCategoriesKey($key, $analysisTypeCategories): \SynergiTech\Sage\Model\AnalysisTypeCategory
```

Updates a Analysis Type Category

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Settings`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\AnalysisTypeCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Analysis Type Category Key.
$analysisTypeCategories = new \SynergiTech\Sage\Model\PutAnalysisTypeCategories(); // \SynergiTech\Sage\Model\PutAnalysisTypeCategories

try {
    $result = $apiInstance->putAnalysisTypeCategoriesKey($key, $analysisTypeCategories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisTypeCategoriesApi->putAnalysisTypeCategoriesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Analysis Type Category Key. | |
| **analysisTypeCategories** | [**\SynergiTech\Sage\Model\PutAnalysisTypeCategories**](../Model/PutAnalysisTypeCategories.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\AnalysisTypeCategory**](../Model/AnalysisTypeCategory.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
