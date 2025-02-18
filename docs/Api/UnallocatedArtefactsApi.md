# SynergiTech\Sage\UnallocatedArtefactsApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getUnallocatedArtefacts()**](UnallocatedArtefactsApi.md#getUnallocatedArtefacts) | **GET** /unallocated_artefacts | Returns all Unallocated Artefacts |
| [**getUnallocatedArtefactsKey()**](UnallocatedArtefactsApi.md#getUnallocatedArtefactsKey) | **GET** /unallocated_artefacts/{key} | Returns a Unallocated Artefact |


## `getUnallocatedArtefacts()`

```php
getUnallocatedArtefacts($contactId, $search, $attributes, $itemsPerPage, $page): \SynergiTech\Sage\Model\UnallocatedArtefact[]
```

Returns all Unallocated Artefacts

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Sales`: Read Only, Restricted Access, Full Access * Area: `Purchases`: Read Only, Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\UnallocatedArtefactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contactId = 'contactId_example'; // string | Use this to filter by contact id
$search = 'search_example'; // string | Use this to filter by the contact identifier.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Base Artefacts (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$itemsPerPage = 20; // int | Returns the given number of Base Artefacts per request.
$page = 1; // int | Go to specific page of Base Artefacts

try {
    $result = $apiInstance->getUnallocatedArtefacts($contactId, $search, $attributes, $itemsPerPage, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnallocatedArtefactsApi->getUnallocatedArtefacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactId** | **string**| Use this to filter by contact id | [optional] |
| **search** | **string**| Use this to filter by the contact identifier. | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Base Artefacts (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Base Artefacts per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Base Artefacts | [optional] [default to 1] |

### Return type

[**\SynergiTech\Sage\Model\UnallocatedArtefact[]**](../Model/UnallocatedArtefact.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUnallocatedArtefactsKey()`

```php
getUnallocatedArtefactsKey($key, $attributes): \SynergiTech\Sage\Model\UnallocatedArtefact
```

Returns a Unallocated Artefact

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Sales`: Read Only, Restricted Access, Full Access * Area: `Purchases`: Read Only, Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\UnallocatedArtefactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Unallocated Artefact Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Base Artefact (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getUnallocatedArtefactsKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnallocatedArtefactsApi->getUnallocatedArtefactsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Unallocated Artefact Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Base Artefact (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\UnallocatedArtefact**](../Model/UnallocatedArtefact.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
