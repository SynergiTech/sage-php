# SynergiTech\Sage\JournalCodesApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteJournalCodesKey()**](JournalCodesApi.md#deleteJournalCodesKey) | **DELETE** /journal_codes/{key} | Deletes a Journal Code |
| [**getJournalCodes()**](JournalCodesApi.md#getJournalCodes) | **GET** /journal_codes | Returns all Journal Codes |
| [**getJournalCodesKey()**](JournalCodesApi.md#getJournalCodesKey) | **GET** /journal_codes/{key} | Returns a Journal Code |
| [**postJournalCodes()**](JournalCodesApi.md#postJournalCodes) | **POST** /journal_codes | Creates a Journal Code |
| [**putJournalCodesKey()**](JournalCodesApi.md#putJournalCodesKey) | **PUT** /journal_codes/{key} | Updates a Journal Code |


## `deleteJournalCodesKey()`

```php
deleteJournalCodesKey($key)
```

Deletes a Journal Code

### Endpoint Availability  * Accounting Plus: 🇫🇷 * Accounting Standard: 🇫🇷 * Accounting Start: 🇫🇷  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Settings`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\JournalCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Journal Code Key.

try {
    $apiInstance->deleteJournalCodesKey($key);
} catch (Exception $e) {
    echo 'Exception when calling JournalCodesApi->deleteJournalCodesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Journal Code Key. | |

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

## `getJournalCodes()`

```php
getJournalCodes($updatedOrCreatedSince, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\JournalCode[]
```

Returns all Journal Codes

### Endpoint Availability  * Accounting Plus: 🇫🇷 * Accounting Standard: 🇫🇷 * Accounting Start: 🇫🇷  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Journals`: Full Access, Read Only * Area: `Settings`: Full Access, Read Only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\JournalCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Journal Codes changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$itemsPerPage = 20; // int | Returns the given number of Journal Codes per request.
$page = 1; // int | Go to specific page of Journal Codes
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Journal Codes (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getJournalCodes($updatedOrCreatedSince, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalCodesApi->getJournalCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updatedOrCreatedSince** | **\DateTime**| Use this to limit the response to Journal Codes changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Journal Codes per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Journal Codes | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Journal Codes (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\JournalCode[]**](../Model/JournalCode.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJournalCodesKey()`

```php
getJournalCodesKey($key, $attributes): \SynergiTech\Sage\Model\JournalCode
```

Returns a Journal Code

### Endpoint Availability  * Accounting Plus: 🇫🇷 * Accounting Standard: 🇫🇷 * Accounting Start: 🇫🇷  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Journals`: Full Access, Read Only * Area: `Settings`: Full Access, Read Only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\JournalCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Journal Code Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Journal Code (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getJournalCodesKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalCodesApi->getJournalCodesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Journal Code Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Journal Code (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\JournalCode**](../Model/JournalCode.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postJournalCodes()`

```php
postJournalCodes($journalCodes): \SynergiTech\Sage\Model\JournalCode
```

Creates a Journal Code

### Endpoint Availability  * Accounting Plus: 🇫🇷 * Accounting Standard: 🇫🇷 * Accounting Start: 🇫🇷  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Settings`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\JournalCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$journalCodes = new \SynergiTech\Sage\Model\PostJournalCodes(); // \SynergiTech\Sage\Model\PostJournalCodes

try {
    $result = $apiInstance->postJournalCodes($journalCodes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalCodesApi->postJournalCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **journalCodes** | [**\SynergiTech\Sage\Model\PostJournalCodes**](../Model/PostJournalCodes.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\JournalCode**](../Model/JournalCode.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putJournalCodesKey()`

```php
putJournalCodesKey($key, $journalCodes): \SynergiTech\Sage\Model\JournalCode
```

Updates a Journal Code

### Endpoint Availability  * Accounting Plus: 🇫🇷 * Accounting Standard: 🇫🇷 * Accounting Start: 🇫🇷  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Settings`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\JournalCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Journal Code Key.
$journalCodes = new \SynergiTech\Sage\Model\PutJournalCodes(); // \SynergiTech\Sage\Model\PutJournalCodes

try {
    $result = $apiInstance->putJournalCodesKey($key, $journalCodes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalCodesApi->putJournalCodesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Journal Code Key. | |
| **journalCodes** | [**\SynergiTech\Sage\Model\PutJournalCodes**](../Model/PutJournalCodes.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\JournalCode**](../Model/JournalCode.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
