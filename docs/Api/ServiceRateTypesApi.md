# SynergiTech\Sage\ServiceRateTypesApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteServiceRateTypesKey()**](ServiceRateTypesApi.md#deleteServiceRateTypesKey) | **DELETE** /service_rate_types/{key} | Deletes a Service Rate Type |
| [**getServiceRateTypes()**](ServiceRateTypesApi.md#getServiceRateTypes) | **GET** /service_rate_types | Returns all Service Rate Types |
| [**getServiceRateTypesKey()**](ServiceRateTypesApi.md#getServiceRateTypesKey) | **GET** /service_rate_types/{key} | Returns a Service Rate Type |
| [**postServiceRateTypes()**](ServiceRateTypesApi.md#postServiceRateTypes) | **POST** /service_rate_types | Creates a Service Rate Type |
| [**putServiceRateTypesKey()**](ServiceRateTypesApi.md#putServiceRateTypesKey) | **PUT** /service_rate_types/{key} | Updates a Service Rate Type |


## `deleteServiceRateTypesKey()`

```php
deleteServiceRateTypesKey($key)
```

Deletes a Service Rate Type

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Products & Services`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ServiceRateTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Service Rate Type Key.

try {
    $apiInstance->deleteServiceRateTypesKey($key);
} catch (Exception $e) {
    echo 'Exception when calling ServiceRateTypesApi->deleteServiceRateTypesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Service Rate Type Key. | |

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

## `getServiceRateTypes()`

```php
getServiceRateTypes($updatedOrCreatedSince, $active, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\ServiceRateType[]
```

Returns all Service Rate Types

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Products & Services`: Read Only, Restricted Access, Full Access * Area: `Sales`: Read Only, Restricted Access, Full Access * Area: `Purchases`: Read Only, Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ServiceRateTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Service Rates changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$active = True; // bool | Use this to only return active or inactive items
$itemsPerPage = 20; // int | Returns the given number of Service Rates per request.
$page = 1; // int | Go to specific page of Service Rates
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Service Rates (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getServiceRateTypes($updatedOrCreatedSince, $active, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceRateTypesApi->getServiceRateTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updatedOrCreatedSince** | **\DateTime**| Use this to limit the response to Service Rates changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **active** | **bool**| Use this to only return active or inactive items | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Service Rates per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Service Rates | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Service Rates (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\ServiceRateType[]**](../Model/ServiceRateType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServiceRateTypesKey()`

```php
getServiceRateTypesKey($key, $attributes): \SynergiTech\Sage\Model\ServiceRateType
```

Returns a Service Rate Type

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Products & Services`: Read Only, Restricted Access, Full Access * Area: `Sales`: Read Only, Restricted Access, Full Access * Area: `Purchases`: Read Only, Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ServiceRateTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Service Rate Type Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Service Rate (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getServiceRateTypesKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceRateTypesApi->getServiceRateTypesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Service Rate Type Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Service Rate (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\ServiceRateType**](../Model/ServiceRateType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postServiceRateTypes()`

```php
postServiceRateTypes($serviceRateTypes): \SynergiTech\Sage\Model\ServiceRateType
```

Creates a Service Rate Type

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Products & Services`: Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ServiceRateTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$serviceRateTypes = new \SynergiTech\Sage\Model\PostServiceRateTypes(); // \SynergiTech\Sage\Model\PostServiceRateTypes

try {
    $result = $apiInstance->postServiceRateTypes($serviceRateTypes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceRateTypesApi->postServiceRateTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serviceRateTypes** | [**\SynergiTech\Sage\Model\PostServiceRateTypes**](../Model/PostServiceRateTypes.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\ServiceRateType**](../Model/ServiceRateType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putServiceRateTypesKey()`

```php
putServiceRateTypesKey($key, $serviceRateTypes): \SynergiTech\Sage\Model\ServiceRateType
```

Updates a Service Rate Type

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Products & Services`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ServiceRateTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Service Rate Type Key.
$serviceRateTypes = new \SynergiTech\Sage\Model\PutServiceRateTypes(); // \SynergiTech\Sage\Model\PutServiceRateTypes

try {
    $result = $apiInstance->putServiceRateTypesKey($key, $serviceRateTypes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceRateTypesApi->putServiceRateTypesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Service Rate Type Key. | |
| **serviceRateTypes** | [**\SynergiTech\Sage\Model\PutServiceRateTypes**](../Model/PutServiceRateTypes.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\ServiceRateType**](../Model/ServiceRateType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
