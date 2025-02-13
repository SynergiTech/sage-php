# SynergiTech\Sage\AddressRegionsApi

All URIs are relative to https://api-qa.sageapim.com/uki/sageone/accounts/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAddressRegions()**](AddressRegionsApi.md#getAddressRegions) | **GET** /address_regions | Returns all Address Regions |
| [**getAddressRegionsKey()**](AddressRegionsApi.md#getAddressRegionsKey) | **GET** /address_regions/{key} | Returns a Address Region |


## `getAddressRegions()`

```php
getAddressRegions($showLegacyId, $itemsPerPage, $page, $attributes, $countryId): \SynergiTech\Sage\Model\AddressRegion[]
```

Returns all Address Regions

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸

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


$apiInstance = new SynergiTech\Sage\Api\AddressRegionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$showLegacyId = True; // bool | Display the legacy_id for the States.
$itemsPerPage = 20; // int | Format - int32. Returns the given number of States per request.
$page = 1; // int | Format - int32. Go to specific page of States
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the States (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$countryId = 'countryId_example'; // string | Use this to filter by country id

try {
    $result = $apiInstance->getAddressRegions($showLegacyId, $itemsPerPage, $page, $attributes, $countryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressRegionsApi->getAddressRegions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **showLegacyId** | **bool**| Display the legacy_id for the States. | [optional] |
| **itemsPerPage** | **int**| Format - int32. Returns the given number of States per request. | [optional] [default to 20] |
| **page** | **int**| Format - int32. Go to specific page of States | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the States (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **countryId** | **string**| Use this to filter by country id | [optional] |

### Return type

[**\SynergiTech\Sage\Model\AddressRegion[]**](../Model/AddressRegion.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAddressRegionsKey()`

```php
getAddressRegionsKey($key, $showLegacyId, $attributes): \SynergiTech\Sage\Model\AddressRegion
```

Returns a Address Region

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸

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


$apiInstance = new SynergiTech\Sage\Api\AddressRegionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Address Region Key.
$showLegacyId = True; // bool | Display the legacy_id for the State.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the State (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getAddressRegionsKey($key, $showLegacyId, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressRegionsApi->getAddressRegionsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Address Region Key. | |
| **showLegacyId** | **bool**| Display the legacy_id for the State. | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the State (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\AddressRegion**](../Model/AddressRegion.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
