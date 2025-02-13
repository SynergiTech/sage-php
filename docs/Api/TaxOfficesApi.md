# SynergiTech\Sage\TaxOfficesApi

All URIs are relative to https://api-qa.sageapim.com/uki/sageone/accounts/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTaxOffices()**](TaxOfficesApi.md#getTaxOffices) | **GET** /tax_offices | Returns all Tax Offices |
| [**getTaxOfficesKey()**](TaxOfficesApi.md#getTaxOfficesKey) | **GET** /tax_offices/{key} | Returns a Tax Office |


## `getTaxOffices()`

```php
getTaxOffices($showLegacyId, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\TaxOffice[]
```

Returns all Tax Offices

### Endpoint Availability  * Accounting Plus: 🇩🇪 * Accounting Standard: 🇩🇪 * Accounting Start: 🇩🇪

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


$apiInstance = new SynergiTech\Sage\Api\TaxOfficesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$showLegacyId = True; // bool | Display the legacy_id for the Tax Offices.
$itemsPerPage = 20; // int | Format - int32. Returns the given number of Tax Offices per request.
$page = 1; // int | Format - int32. Go to specific page of Tax Offices
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Tax Offices (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getTaxOffices($showLegacyId, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxOfficesApi->getTaxOffices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **showLegacyId** | **bool**| Display the legacy_id for the Tax Offices. | [optional] |
| **itemsPerPage** | **int**| Format - int32. Returns the given number of Tax Offices per request. | [optional] [default to 20] |
| **page** | **int**| Format - int32. Go to specific page of Tax Offices | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Tax Offices (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\TaxOffice[]**](../Model/TaxOffice.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxOfficesKey()`

```php
getTaxOfficesKey($key, $showLegacyId, $attributes): \SynergiTech\Sage\Model\TaxOffice
```

Returns a Tax Office

### Endpoint Availability  * Accounting Plus: 🇩🇪 * Accounting Standard: 🇩🇪 * Accounting Start: 🇩🇪

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


$apiInstance = new SynergiTech\Sage\Api\TaxOfficesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Tax Office Key.
$showLegacyId = True; // bool | Display the legacy_id for the Tax Office.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Tax Office (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getTaxOfficesKey($key, $showLegacyId, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxOfficesApi->getTaxOfficesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Tax Office Key. | |
| **showLegacyId** | **bool**| Display the legacy_id for the Tax Office. | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Tax Office (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\TaxOffice**](../Model/TaxOffice.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
