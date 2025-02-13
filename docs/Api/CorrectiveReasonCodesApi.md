# SynergiTech\Sage\CorrectiveReasonCodesApi

All URIs are relative to https://api-qa.sageapim.com/uki/sageone/accounts/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCorrectiveReasonCodes()**](CorrectiveReasonCodesApi.md#getCorrectiveReasonCodes) | **GET** /corrective_reason_codes | Returns all Corrective Reason Codes |
| [**getCorrectiveReasonCodesKey()**](CorrectiveReasonCodesApi.md#getCorrectiveReasonCodesKey) | **GET** /corrective_reason_codes/{key} | Returns a Corrective Reason Code |


## `getCorrectiveReasonCodes()`

```php
getCorrectiveReasonCodes($showLegacyId, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\Base[]
```

Returns all Corrective Reason Codes

### Endpoint Availability  * Accounting Plus: 🇪🇸 * Accounting Standard: 🇪🇸 * Accounting Start: 🇪🇸

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


$apiInstance = new SynergiTech\Sage\Api\CorrectiveReasonCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$showLegacyId = True; // bool | Display the legacy_id for the Corrective Reason Codes.
$itemsPerPage = 20; // int | Format - int32. Returns the given number of Corrective Reason Codes per request.
$page = 1; // int | Format - int32. Go to specific page of Corrective Reason Codes
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Corrective Reason Codes (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getCorrectiveReasonCodes($showLegacyId, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorrectiveReasonCodesApi->getCorrectiveReasonCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **showLegacyId** | **bool**| Display the legacy_id for the Corrective Reason Codes. | [optional] |
| **itemsPerPage** | **int**| Format - int32. Returns the given number of Corrective Reason Codes per request. | [optional] [default to 20] |
| **page** | **int**| Format - int32. Go to specific page of Corrective Reason Codes | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Corrective Reason Codes (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\Base[]**](../Model/Base.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorrectiveReasonCodesKey()`

```php
getCorrectiveReasonCodesKey($key, $showLegacyId, $attributes): \SynergiTech\Sage\Model\Base
```

Returns a Corrective Reason Code

### Endpoint Availability  * Accounting Plus: 🇪🇸 * Accounting Standard: 🇪🇸 * Accounting Start: 🇪🇸

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


$apiInstance = new SynergiTech\Sage\Api\CorrectiveReasonCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Corrective Reason Code Key.
$showLegacyId = True; // bool | Display the legacy_id for the Corrective Reason Code.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Corrective Reason Code (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getCorrectiveReasonCodesKey($key, $showLegacyId, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorrectiveReasonCodesApi->getCorrectiveReasonCodesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Corrective Reason Code Key. | |
| **showLegacyId** | **bool**| Display the legacy_id for the Corrective Reason Code. | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Corrective Reason Code (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\Base**](../Model/Base.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
