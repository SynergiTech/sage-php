# SynergiTech\Sage\ArtefactStatusesApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getArtefactStatuses()**](ArtefactStatusesApi.md#getArtefactStatuses) | **GET** /artefact_statuses | Returns all Artefact Statuses |
| [**getArtefactStatusesKey()**](ArtefactStatusesApi.md#getArtefactStatusesKey) | **GET** /artefact_statuses/{key} | Returns a Artefact Status |


## `getArtefactStatuses()`

```php
getArtefactStatuses($itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\Base[]
```

Returns all Artefact Statuses

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Sales`: Read Only, Restricted Access, Full Access * Area: `Purchases`: Read Only, Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ArtefactStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemsPerPage = 20; // int | Returns the given number of Artefact Statuses per request.
$page = 1; // int | Go to specific page of Artefact Statuses
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Artefact Statuses (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getArtefactStatuses($itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArtefactStatusesApi->getArtefactStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **itemsPerPage** | **int**| Returns the given number of Artefact Statuses per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Artefact Statuses | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Artefact Statuses (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

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

## `getArtefactStatusesKey()`

```php
getArtefactStatusesKey($key, $attributes): \SynergiTech\Sage\Model\Base
```

Returns a Artefact Status

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Sales`: Read Only, Restricted Access, Full Access * Area: `Purchases`: Read Only, Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ArtefactStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Artefact Status Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Artefact Status (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getArtefactStatusesKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArtefactStatusesApi->getArtefactStatusesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Artefact Status Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Artefact Status (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

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
