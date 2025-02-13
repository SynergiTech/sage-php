# SynergiTech\Sage\CoaTemplatesApi

All URIs are relative to https://api-qa.sageapim.com/uki/sageone/accounts/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCoaTemplates()**](CoaTemplatesApi.md#getCoaTemplates) | **GET** /coa_templates | Returns all Coa Templates |
| [**getCoaTemplatesKey()**](CoaTemplatesApi.md#getCoaTemplatesKey) | **GET** /coa_templates/{key} | Returns a Coa Template |


## `getCoaTemplates()`

```php
getCoaTemplates($showLegacyId, $itemsPerPage, $page, $attributes, $countryId): \SynergiTech\Sage\Model\CoaTemplate[]
```

Returns all Coa Templates

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


$apiInstance = new SynergiTech\Sage\Api\CoaTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$showLegacyId = True; // bool | Display the legacy_id for the Coa Templates.
$itemsPerPage = 20; // int | Format - int32. Returns the given number of Coa Templates per request.
$page = 1; // int | Format - int32. Go to specific page of Coa Templates
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Coa Templates (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$countryId = 'countryId_example'; // string | Use this to filter by country id

try {
    $result = $apiInstance->getCoaTemplates($showLegacyId, $itemsPerPage, $page, $attributes, $countryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoaTemplatesApi->getCoaTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **showLegacyId** | **bool**| Display the legacy_id for the Coa Templates. | [optional] |
| **itemsPerPage** | **int**| Format - int32. Returns the given number of Coa Templates per request. | [optional] [default to 20] |
| **page** | **int**| Format - int32. Go to specific page of Coa Templates | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Coa Templates (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **countryId** | **string**| Use this to filter by country id | [optional] |

### Return type

[**\SynergiTech\Sage\Model\CoaTemplate[]**](../Model/CoaTemplate.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCoaTemplatesKey()`

```php
getCoaTemplatesKey($key, $showLegacyId, $attributes): \SynergiTech\Sage\Model\CoaTemplate
```

Returns a Coa Template

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


$apiInstance = new SynergiTech\Sage\Api\CoaTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Coa Template Key.
$showLegacyId = True; // bool | Display the legacy_id for the Coa Template.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Coa Template (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getCoaTemplatesKey($key, $showLegacyId, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoaTemplatesApi->getCoaTemplatesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Coa Template Key. | |
| **showLegacyId** | **bool**| Display the legacy_id for the Coa Template. | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Coa Template (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\CoaTemplate**](../Model/CoaTemplate.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
