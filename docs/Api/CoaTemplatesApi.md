# SynergiTech\Sage\CoaTemplatesApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCoaTemplates()**](CoaTemplatesApi.md#getCoaTemplates) | **GET** /coa_templates | Returns all Coa Templates |
| [**getCoaTemplatesKey()**](CoaTemplatesApi.md#getCoaTemplatesKey) | **GET** /coa_templates/{key} | Returns a Coa Template |


## `getCoaTemplates()`

```php
getCoaTemplates($itemsPerPage, $page, $attributes, $countryId): \SynergiTech\Sage\Model\CoaTemplate[]
```

Returns all Coa Templates

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\CoaTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemsPerPage = 20; // int | Returns the given number of Coa Templates per request.
$page = 1; // int | Go to specific page of Coa Templates
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Coa Templates (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$countryId = 'countryId_example'; // string | Use this to filter by country id

try {
    $result = $apiInstance->getCoaTemplates($itemsPerPage, $page, $attributes, $countryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoaTemplatesApi->getCoaTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **itemsPerPage** | **int**| Returns the given number of Coa Templates per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Coa Templates | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Coa Templates (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **countryId** | **string**| Use this to filter by country id | [optional] |

### Return type

[**\SynergiTech\Sage\Model\CoaTemplate[]**](../Model/CoaTemplate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCoaTemplatesKey()`

```php
getCoaTemplatesKey($key, $attributes): \SynergiTech\Sage\Model\CoaTemplate
```

Returns a Coa Template

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\CoaTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Coa Template Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Coa Template (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getCoaTemplatesKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoaTemplatesApi->getCoaTemplatesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Coa Template Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Coa Template (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\CoaTemplate**](../Model/CoaTemplate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
