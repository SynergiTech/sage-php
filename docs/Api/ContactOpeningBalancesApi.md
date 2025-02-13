# SynergiTech\Sage\ContactOpeningBalancesApi

All URIs are relative to https://api-qa.sageapim.com/uki/sageone/accounts/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteContactOpeningBalancesKey()**](ContactOpeningBalancesApi.md#deleteContactOpeningBalancesKey) | **DELETE** /contact_opening_balances/{key} | Deletes a Contact Opening Balance |
| [**getContactOpeningBalances()**](ContactOpeningBalancesApi.md#getContactOpeningBalances) | **GET** /contact_opening_balances | Returns all Contact Opening Balances |
| [**getContactOpeningBalancesKey()**](ContactOpeningBalancesApi.md#getContactOpeningBalancesKey) | **GET** /contact_opening_balances/{key} | Returns a Contact Opening Balance |
| [**postContactOpeningBalances()**](ContactOpeningBalancesApi.md#postContactOpeningBalances) | **POST** /contact_opening_balances | Creates a Contact Opening Balance |
| [**putContactOpeningBalancesKey()**](ContactOpeningBalancesApi.md#putContactOpeningBalancesKey) | **PUT** /contact_opening_balances/{key} | Updates a Contact Opening Balance |


## `deleteContactOpeningBalancesKey()`

```php
deleteContactOpeningBalancesKey($key)
```

Deletes a Contact Opening Balance

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Settings`, `Sales`, and `Purchases`: Full Access

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


$apiInstance = new SynergiTech\Sage\Api\ContactOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Contact Opening Balance Key.

try {
    $apiInstance->deleteContactOpeningBalancesKey($key);
} catch (Exception $e) {
    echo 'Exception when calling ContactOpeningBalancesApi->deleteContactOpeningBalancesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Contact Opening Balance Key. | |

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

## `getContactOpeningBalances()`

```php
getContactOpeningBalances($updatedOrCreatedSince, $deletedSince, $contactTypeId, $contactId, $showLegacyId, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\ContactOpeningBalance[]
```

Returns all Contact Opening Balances

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Settings`, `Sales`, and `Purchases`: Full Access, Read Only

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


$apiInstance = new SynergiTech\Sage\Api\ContactOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Batch Entries changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$deletedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Batch Entries deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp.
$contactTypeId = 'contactTypeId_example'; // string | Use this to filter by contact type id
$contactId = 'contactId_example'; // string | Use this to filter by contact id
$showLegacyId = True; // bool | Display the legacy_id for the Batch Entries.
$itemsPerPage = 20; // int | Format - int32. Returns the given number of Batch Entries per request.
$page = 1; // int | Format - int32. Go to specific page of Batch Entries
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Batch Entries (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getContactOpeningBalances($updatedOrCreatedSince, $deletedSince, $contactTypeId, $contactId, $showLegacyId, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactOpeningBalancesApi->getContactOpeningBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updatedOrCreatedSince** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Batch Entries changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **deletedSince** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Batch Entries deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp. | [optional] |
| **contactTypeId** | **string**| Use this to filter by contact type id | [optional] |
| **contactId** | **string**| Use this to filter by contact id | [optional] |
| **showLegacyId** | **bool**| Display the legacy_id for the Batch Entries. | [optional] |
| **itemsPerPage** | **int**| Format - int32. Returns the given number of Batch Entries per request. | [optional] [default to 20] |
| **page** | **int**| Format - int32. Go to specific page of Batch Entries | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Batch Entries (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\ContactOpeningBalance[]**](../Model/ContactOpeningBalance.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactOpeningBalancesKey()`

```php
getContactOpeningBalancesKey($key, $showLegacyId, $attributes): \SynergiTech\Sage\Model\ContactOpeningBalance
```

Returns a Contact Opening Balance

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Settings`, `Sales`, and `Purchases`: Full Access, Read Only

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


$apiInstance = new SynergiTech\Sage\Api\ContactOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Contact Opening Balance Key.
$showLegacyId = True; // bool | Display the legacy_id for the Batch Entry.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Batch Entry (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getContactOpeningBalancesKey($key, $showLegacyId, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactOpeningBalancesApi->getContactOpeningBalancesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Contact Opening Balance Key. | |
| **showLegacyId** | **bool**| Display the legacy_id for the Batch Entry. | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Batch Entry (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\ContactOpeningBalance**](../Model/ContactOpeningBalance.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postContactOpeningBalances()`

```php
postContactOpeningBalances($postContactOpeningBalances): \SynergiTech\Sage\Model\ContactOpeningBalance
```

Creates a Contact Opening Balance

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Settings`, `Sales`, and `Purchases`: Full Access

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


$apiInstance = new SynergiTech\Sage\Api\ContactOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postContactOpeningBalances = new \SynergiTech\Sage\Model\PostContactOpeningBalances(); // \SynergiTech\Sage\Model\PostContactOpeningBalances

try {
    $result = $apiInstance->postContactOpeningBalances($postContactOpeningBalances);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactOpeningBalancesApi->postContactOpeningBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **postContactOpeningBalances** | [**\SynergiTech\Sage\Model\PostContactOpeningBalances**](../Model/PostContactOpeningBalances.md)|  | [optional] |

### Return type

[**\SynergiTech\Sage\Model\ContactOpeningBalance**](../Model/ContactOpeningBalance.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putContactOpeningBalancesKey()`

```php
putContactOpeningBalancesKey($key, $putContactOpeningBalances): \SynergiTech\Sage\Model\ContactOpeningBalance
```

Updates a Contact Opening Balance

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Settings`, `Sales`, and `Purchases`: Full Access

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


$apiInstance = new SynergiTech\Sage\Api\ContactOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Contact Opening Balance Key.
$putContactOpeningBalances = new \SynergiTech\Sage\Model\PutContactOpeningBalances(); // \SynergiTech\Sage\Model\PutContactOpeningBalances

try {
    $result = $apiInstance->putContactOpeningBalancesKey($key, $putContactOpeningBalances);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactOpeningBalancesApi->putContactOpeningBalancesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Contact Opening Balance Key. | |
| **putContactOpeningBalances** | [**\SynergiTech\Sage\Model\PutContactOpeningBalances**](../Model/PutContactOpeningBalances.md)|  | [optional] |

### Return type

[**\SynergiTech\Sage\Model\ContactOpeningBalance**](../Model/ContactOpeningBalance.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
