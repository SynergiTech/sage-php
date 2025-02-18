# SynergiTech\Sage\CorrectiveReasonCodesApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCorrectiveReasonCodes()**](CorrectiveReasonCodesApi.md#getCorrectiveReasonCodes) | **GET** /corrective_reason_codes | Returns all Corrective Reason Codes |
| [**getCorrectiveReasonCodesKey()**](CorrectiveReasonCodesApi.md#getCorrectiveReasonCodesKey) | **GET** /corrective_reason_codes/{key} | Returns a Corrective Reason Code |


## `getCorrectiveReasonCodes()`

```php
getCorrectiveReasonCodes($itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\Base[]
```

Returns all Corrective Reason Codes

### Endpoint Availability  * Accounting Plus: 🇪🇸 * Accounting Standard: 🇪🇸 * Accounting Start: 🇪🇸

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\CorrectiveReasonCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemsPerPage = 20; // int | Returns the given number of Corrective Reason Codes per request.
$page = 1; // int | Go to specific page of Corrective Reason Codes
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Corrective Reason Codes (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getCorrectiveReasonCodes($itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorrectiveReasonCodesApi->getCorrectiveReasonCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **itemsPerPage** | **int**| Returns the given number of Corrective Reason Codes per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Corrective Reason Codes | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Corrective Reason Codes (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\Base[]**](../Model/Base.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorrectiveReasonCodesKey()`

```php
getCorrectiveReasonCodesKey($key, $attributes): \SynergiTech\Sage\Model\Base
```

Returns a Corrective Reason Code

### Endpoint Availability  * Accounting Plus: 🇪🇸 * Accounting Standard: 🇪🇸 * Accounting Start: 🇪🇸

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\CorrectiveReasonCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Corrective Reason Code Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Corrective Reason Code (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getCorrectiveReasonCodesKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorrectiveReasonCodesApi->getCorrectiveReasonCodesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Corrective Reason Code Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Corrective Reason Code (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\Base**](../Model/Base.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
