# SynergiTech\Sage\ContactPersonTypesApi

All URIs are relative to https://api-qa.sageapim.com/uki/sageone/accounts/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getContactPersonTypes()**](ContactPersonTypesApi.md#getContactPersonTypes) | **GET** /contact_person_types | Returns all Contact Person Types |
| [**getContactPersonTypesKey()**](ContactPersonTypesApi.md#getContactPersonTypesKey) | **GET** /contact_person_types/{key} | Returns a Contact Person Type |


## `getContactPersonTypes()`

```php
getContactPersonTypes($showLegacyId, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\ContactPersonType[]
```

Returns all Contact Person Types

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


$apiInstance = new SynergiTech\Sage\Api\ContactPersonTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$showLegacyId = True; // bool | Display the legacy_id for the Contact Types.
$itemsPerPage = 20; // int | Format - int32. Returns the given number of Contact Types per request.
$page = 1; // int | Format - int32. Go to specific page of Contact Types
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Contact Types (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getContactPersonTypes($showLegacyId, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactPersonTypesApi->getContactPersonTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **showLegacyId** | **bool**| Display the legacy_id for the Contact Types. | [optional] |
| **itemsPerPage** | **int**| Format - int32. Returns the given number of Contact Types per request. | [optional] [default to 20] |
| **page** | **int**| Format - int32. Go to specific page of Contact Types | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Contact Types (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\ContactPersonType[]**](../Model/ContactPersonType.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactPersonTypesKey()`

```php
getContactPersonTypesKey($key, $showLegacyId, $attributes): \SynergiTech\Sage\Model\ContactPersonType
```

Returns a Contact Person Type

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


$apiInstance = new SynergiTech\Sage\Api\ContactPersonTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Contact Person Type Key.
$showLegacyId = True; // bool | Display the legacy_id for the Contact Type.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Contact Type (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getContactPersonTypesKey($key, $showLegacyId, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactPersonTypesApi->getContactPersonTypesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Contact Person Type Key. | |
| **showLegacyId** | **bool**| Display the legacy_id for the Contact Type. | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Contact Type (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\ContactPersonType**](../Model/ContactPersonType.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
