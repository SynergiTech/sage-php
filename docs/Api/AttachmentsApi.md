# SynergiTech\Sage\AttachmentsApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteAttachmentsKey()**](AttachmentsApi.md#deleteAttachmentsKey) | **DELETE** /attachments/{key} | Deletes a Attachment |
| [**getAttachments()**](AttachmentsApi.md#getAttachments) | **GET** /attachments | Returns all Attachments |
| [**getAttachmentsKey()**](AttachmentsApi.md#getAttachmentsKey) | **GET** /attachments/{key} | Returns a Attachment |
| [**getAttachmentsKeyFile()**](AttachmentsApi.md#getAttachmentsKeyFile) | **GET** /attachments/{key}/file | Returns an Attachment File |
| [**postAttachments()**](AttachmentsApi.md#postAttachments) | **POST** /attachments | Creates a Attachment |
| [**putAttachmentsKey()**](AttachmentsApi.md#putAttachmentsKey) | **PUT** /attachments/{key} | Updates a Attachment |


## `deleteAttachmentsKey()`

```php
deleteAttachmentsKey($key)
```

Deletes a Attachment

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Sales`: Restricted Access, Full Access * Area: `Purchases`: Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Attachment Key.

try {
    $apiInstance->deleteAttachmentsKey($key);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->deleteAttachmentsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Attachment Key. | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttachments()`

```php
getAttachments($attachmentContextId, $attachmentContextTypeId, $legacyAttachmentContextType, $legacyAttachmentContextId, $updatedOrCreatedSince, $deletedSince, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\Attachment[]
```

Returns all Attachments

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Sales`: Read Only, Restricted Access, Full Access * Area: `Purchases`: Read Only, Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attachmentContextId = 'attachmentContextId_example'; // string | Use this to filter Attachments by attachment_context_id. Requires filtering by attachment_context_type_id as well
$attachmentContextTypeId = 'attachmentContextTypeId_example'; // string | Use this to filter Attachments by attachment_context_type_id. Requires filtering by attachment_context_id as well
$legacyAttachmentContextType = 'legacyAttachmentContextType_example'; // string
$legacyAttachmentContextId = 56; // int
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Attachments changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$deletedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Attachments deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp.
$itemsPerPage = 20; // int | Returns the given number of Attachments per request.
$page = 1; // int | Go to specific page of Attachments
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Attachments (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getAttachments($attachmentContextId, $attachmentContextTypeId, $legacyAttachmentContextType, $legacyAttachmentContextId, $updatedOrCreatedSince, $deletedSince, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->getAttachments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attachmentContextId** | **string**| Use this to filter Attachments by attachment_context_id. Requires filtering by attachment_context_type_id as well | [optional] |
| **attachmentContextTypeId** | **string**| Use this to filter Attachments by attachment_context_type_id. Requires filtering by attachment_context_id as well | [optional] |
| **legacyAttachmentContextType** | **string**|  | [optional] |
| **legacyAttachmentContextId** | **int**|  | [optional] |
| **updatedOrCreatedSince** | **\DateTime**| Use this to limit the response to Attachments changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **deletedSince** | **\DateTime**| Use this to limit the response to Attachments deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp. | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Attachments per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Attachments | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Attachments (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\Attachment[]**](../Model/Attachment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttachmentsKey()`

```php
getAttachmentsKey($key, $attributes): \SynergiTech\Sage\Model\Attachment
```

Returns a Attachment

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Sales`: Read Only, Restricted Access, Full Access * Area: `Purchases`: Read Only, Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Attachment Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Attachment (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getAttachmentsKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->getAttachmentsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Attachment Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Attachment (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\Attachment**](../Model/Attachment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttachmentsKeyFile()`

```php
getAttachmentsKeyFile($accept, $key): \SynergiTech\Sage\Model\Attachment
```

Returns an Attachment File

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Sales`: Read Only, Restricted Access, Full Access * Area: `Purchases`: Read Only, Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = 'accept_example'; // string | Specify the Accept header of the request. It must always be set to `application/octet-stream` for retrieving files.
$key = 'key_example'; // string | The Attachment Key.

try {
    $result = $apiInstance->getAttachmentsKeyFile($accept, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->getAttachmentsKeyFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| Specify the Accept header of the request. It must always be set to &#x60;application/octet-stream&#x60; for retrieving files. | |
| **key** | **string**| The Attachment Key. | |

### Return type

[**\SynergiTech\Sage\Model\Attachment**](../Model/Attachment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAttachments()`

```php
postAttachments($attachments): \SynergiTech\Sage\Model\Attachment
```

Creates a Attachment

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Sales`: Restricted Access, Full Access * Area: `Purchases`: Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attachments = new \SynergiTech\Sage\Model\PostAttachments(); // \SynergiTech\Sage\Model\PostAttachments

try {
    $result = $apiInstance->postAttachments($attachments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->postAttachments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attachments** | [**\SynergiTech\Sage\Model\PostAttachments**](../Model/PostAttachments.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\Attachment**](../Model/Attachment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putAttachmentsKey()`

```php
putAttachmentsKey($key, $attachments): \SynergiTech\Sage\Model\Attachment
```

Updates a Attachment

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Sales`: Restricted Access, Full Access * Area: `Purchases`: Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Attachment Key.
$attachments = new \SynergiTech\Sage\Model\PutAttachments(); // \SynergiTech\Sage\Model\PutAttachments

try {
    $result = $apiInstance->putAttachmentsKey($key, $attachments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->putAttachmentsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Attachment Key. | |
| **attachments** | [**\SynergiTech\Sage\Model\PutAttachments**](../Model/PutAttachments.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\Attachment**](../Model/Attachment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
