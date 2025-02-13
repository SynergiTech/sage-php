# SynergiTech\Sage\JournalCodesApi

All URIs are relative to https://api-qa.sageapim.com/uki/sageone/accounts/v3, except if the operation defines another base path.

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


// Configure API key authorization: apiKeyQuery
$config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new SynergiTech\Sage\Api\JournalCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJournalCodes()`

```php
getJournalCodes($updatedOrCreatedSince, $showLegacyId, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\JournalCode[]
```

Returns all Journal Codes

### Endpoint Availability  * Accounting Plus: 🇫🇷 * Accounting Standard: 🇫🇷 * Accounting Start: 🇫🇷  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Journals`: Full Access, Read Only * Area: `Settings`: Full Access, Read Only

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


$apiInstance = new SynergiTech\Sage\Api\JournalCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Journal Codes changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$showLegacyId = True; // bool | Display the legacy_id for the Journal Codes.
$itemsPerPage = 20; // int | Format - int32. Returns the given number of Journal Codes per request.
$page = 1; // int | Format - int32. Go to specific page of Journal Codes
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Journal Codes (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getJournalCodes($updatedOrCreatedSince, $showLegacyId, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalCodesApi->getJournalCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updatedOrCreatedSince** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Journal Codes changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **showLegacyId** | **bool**| Display the legacy_id for the Journal Codes. | [optional] |
| **itemsPerPage** | **int**| Format - int32. Returns the given number of Journal Codes per request. | [optional] [default to 20] |
| **page** | **int**| Format - int32. Go to specific page of Journal Codes | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Journal Codes (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\JournalCode[]**](../Model/JournalCode.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJournalCodesKey()`

```php
getJournalCodesKey($key, $showLegacyId, $attributes): \SynergiTech\Sage\Model\JournalCode
```

Returns a Journal Code

### Endpoint Availability  * Accounting Plus: 🇫🇷 * Accounting Standard: 🇫🇷 * Accounting Start: 🇫🇷  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Journals`: Full Access, Read Only * Area: `Settings`: Full Access, Read Only

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


$apiInstance = new SynergiTech\Sage\Api\JournalCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Journal Code Key.
$showLegacyId = True; // bool | Display the legacy_id for the Journal Code.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Journal Code (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getJournalCodesKey($key, $showLegacyId, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalCodesApi->getJournalCodesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Journal Code Key. | |
| **showLegacyId** | **bool**| Display the legacy_id for the Journal Code. | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Journal Code (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\JournalCode**](../Model/JournalCode.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postJournalCodes()`

```php
postJournalCodes($postJournalCodes): \SynergiTech\Sage\Model\JournalCode
```

Creates a Journal Code

### Endpoint Availability  * Accounting Plus: 🇫🇷 * Accounting Standard: 🇫🇷 * Accounting Start: 🇫🇷  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Settings`: Full Access

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


$apiInstance = new SynergiTech\Sage\Api\JournalCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postJournalCodes = new \SynergiTech\Sage\Model\PostJournalCodes(); // \SynergiTech\Sage\Model\PostJournalCodes

try {
    $result = $apiInstance->postJournalCodes($postJournalCodes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalCodesApi->postJournalCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **postJournalCodes** | [**\SynergiTech\Sage\Model\PostJournalCodes**](../Model/PostJournalCodes.md)|  | [optional] |

### Return type

[**\SynergiTech\Sage\Model\JournalCode**](../Model/JournalCode.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putJournalCodesKey()`

```php
putJournalCodesKey($key, $putJournalCodes): \SynergiTech\Sage\Model\JournalCode
```

Updates a Journal Code

### Endpoint Availability  * Accounting Plus: 🇫🇷 * Accounting Standard: 🇫🇷 * Accounting Start: 🇫🇷  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Settings`: Full Access

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


$apiInstance = new SynergiTech\Sage\Api\JournalCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Journal Code Key.
$putJournalCodes = new \SynergiTech\Sage\Model\PutJournalCodes(); // \SynergiTech\Sage\Model\PutJournalCodes

try {
    $result = $apiInstance->putJournalCodesKey($key, $putJournalCodes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalCodesApi->putJournalCodesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Journal Code Key. | |
| **putJournalCodes** | [**\SynergiTech\Sage\Model\PutJournalCodes**](../Model/PutJournalCodes.md)|  | [optional] |

### Return type

[**\SynergiTech\Sage\Model\JournalCode**](../Model/JournalCode.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
