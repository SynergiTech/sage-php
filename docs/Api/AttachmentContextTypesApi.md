# SynergiTech\Sage\AttachmentContextTypesApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAttachmentContextTypes()**](AttachmentContextTypesApi.md#getAttachmentContextTypes) | **GET** /attachment_context_types | Returns all Attachment Context Types |
| [**getAttachmentContextTypesKey()**](AttachmentContextTypesApi.md#getAttachmentContextTypesKey) | **GET** /attachment_context_types/{key} | Returns a Attachment Context Type |


## `getAttachmentContextTypes()`

```php
getAttachmentContextTypes($itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\Base[]
```

Returns all Attachment Context Types

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\AttachmentContextTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemsPerPage = 20; // int | Returns the given number of Attachment Context Types per request.
$page = 1; // int | Go to specific page of Attachment Context Types
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Attachment Context Types (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getAttachmentContextTypes($itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentContextTypesApi->getAttachmentContextTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **itemsPerPage** | **int**| Returns the given number of Attachment Context Types per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Attachment Context Types | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Attachment Context Types (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

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

## `getAttachmentContextTypesKey()`

```php
getAttachmentContextTypesKey($key, $attributes): \SynergiTech\Sage\Model\Base
```

Returns a Attachment Context Type

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\AttachmentContextTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Attachment Context Type Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Attachment Context Type (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getAttachmentContextTypesKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentContextTypesApi->getAttachmentContextTypesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Attachment Context Type Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Attachment Context Type (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

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
