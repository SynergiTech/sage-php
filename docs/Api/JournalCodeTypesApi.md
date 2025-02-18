# SynergiTech\Sage\JournalCodeTypesApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getJournalCodeTypes()**](JournalCodeTypesApi.md#getJournalCodeTypes) | **GET** /journal_code_types | Returns all Journal Code Types |
| [**getJournalCodeTypesKey()**](JournalCodeTypesApi.md#getJournalCodeTypesKey) | **GET** /journal_code_types/{key} | Returns a Journal Code Type |


## `getJournalCodeTypes()`

```php
getJournalCodeTypes($itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\JournalCodeType[]
```

Returns all Journal Code Types

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\JournalCodeTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemsPerPage = 20; // int | Returns the given number of Country Journal Types per request.
$page = 1; // int | Go to specific page of Country Journal Types
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Country Journal Types (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getJournalCodeTypes($itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalCodeTypesApi->getJournalCodeTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **itemsPerPage** | **int**| Returns the given number of Country Journal Types per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Country Journal Types | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Country Journal Types (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\JournalCodeType[]**](../Model/JournalCodeType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJournalCodeTypesKey()`

```php
getJournalCodeTypesKey($key, $attributes): \SynergiTech\Sage\Model\JournalCodeType
```

Returns a Journal Code Type

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\JournalCodeTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Journal Code Type Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Country Journal Type (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getJournalCodeTypesKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalCodeTypesApi->getJournalCodeTypesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Journal Code Type Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Country Journal Type (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\JournalCodeType**](../Model/JournalCodeType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
