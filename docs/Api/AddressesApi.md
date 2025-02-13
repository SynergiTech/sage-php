# SynergiTech\Sage\AddressesApi

All URIs are relative to https://api-qa.sageapim.com/uki/sageone/accounts/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteAddressesKey()**](AddressesApi.md#deleteAddressesKey) | **DELETE** /addresses/{key} | Deletes a Address |
| [**getAddresses()**](AddressesApi.md#getAddresses) | **GET** /addresses | Returns all Addresses |
| [**getAddressesKey()**](AddressesApi.md#getAddressesKey) | **GET** /addresses/{key} | Returns a Address |
| [**postAddresses()**](AddressesApi.md#postAddresses) | **POST** /addresses | Creates a Address |
| [**putAddressesKey()**](AddressesApi.md#putAddressesKey) | **PUT** /addresses/{key} | Updates a Address |


## `deleteAddressesKey()`

```php
deleteAddressesKey($key)
```

Deletes a Address

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Contacts`: Full Access

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


$apiInstance = new SynergiTech\Sage\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Address Key.

try {
    $apiInstance->deleteAddressesKey($key);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->deleteAddressesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Address Key. | |

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

## `getAddresses()`

```php
getAddresses($contactId, $bankAccountId, $updatedOrCreatedSince, $deletedSince, $showLegacyId, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\Address[]
```

Returns all Addresses

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Contacts`: Read Only, Restricted Access, Full Access * Area: `Sales`: Read Only, Restricted Access, Full Access * Area: `Purchases`: Read Only, Restricted Access, Full Access

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


$apiInstance = new SynergiTech\Sage\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactId = 'contactId_example'; // string | Use this to filter by contact id
$bankAccountId = 'bankAccountId_example'; // string | Use this to filter by bank account id
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Addresses changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$deletedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Addresses deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp.
$showLegacyId = True; // bool | Display the legacy_id for the Addresses.
$itemsPerPage = 20; // int | Format - int32. Returns the given number of Addresses per request.
$page = 1; // int | Format - int32. Go to specific page of Addresses
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Addresses (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getAddresses($contactId, $bankAccountId, $updatedOrCreatedSince, $deletedSince, $showLegacyId, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->getAddresses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactId** | **string**| Use this to filter by contact id | [optional] |
| **bankAccountId** | **string**| Use this to filter by bank account id | [optional] |
| **updatedOrCreatedSince** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Addresses changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **deletedSince** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Addresses deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp. | [optional] |
| **showLegacyId** | **bool**| Display the legacy_id for the Addresses. | [optional] |
| **itemsPerPage** | **int**| Format - int32. Returns the given number of Addresses per request. | [optional] [default to 20] |
| **page** | **int**| Format - int32. Go to specific page of Addresses | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Addresses (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\Address[]**](../Model/Address.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAddressesKey()`

```php
getAddressesKey($key, $nestedAttributes, $showLegacyId, $attributes): \SynergiTech\Sage\Model\Address
```

Returns a Address

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Contacts`: Read Only, Restricted Access, Full Access * Area: `Sales`: Read Only, Restricted Access, Full Access * Area: `Purchases`: Read Only, Restricted Access, Full Access * Area: `Bank`: Read Only, Restricted Access, Full Access

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


$apiInstance = new SynergiTech\Sage\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Address Key.
$nestedAttributes = 'nestedAttributes_example'; // string | Specify the attributes that you want to expose for nested entities of the Address (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$showLegacyId = True; // bool | Display the legacy_id for the Address.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Address (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getAddressesKey($key, $nestedAttributes, $showLegacyId, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->getAddressesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Address Key. | |
| **nestedAttributes** | **string**| Specify the attributes that you want to expose for nested entities of the Address (expose all nested attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **showLegacyId** | **bool**| Display the legacy_id for the Address. | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Address (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\Address**](../Model/Address.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAddresses()`

```php
postAddresses($postAddresses): \SynergiTech\Sage\Model\Address
```

Creates a Address

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Contacts`: Restricted Access, Full Access

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


$apiInstance = new SynergiTech\Sage\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postAddresses = new \SynergiTech\Sage\Model\PostAddresses(); // \SynergiTech\Sage\Model\PostAddresses

try {
    $result = $apiInstance->postAddresses($postAddresses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->postAddresses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **postAddresses** | [**\SynergiTech\Sage\Model\PostAddresses**](../Model/PostAddresses.md)|  | [optional] |

### Return type

[**\SynergiTech\Sage\Model\Address**](../Model/Address.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putAddressesKey()`

```php
putAddressesKey($key, $putAddresses): \SynergiTech\Sage\Model\Address
```

Updates a Address

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Contacts`: Restricted Access, Full Access

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


$apiInstance = new SynergiTech\Sage\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Address Key.
$putAddresses = new \SynergiTech\Sage\Model\PutAddresses(); // \SynergiTech\Sage\Model\PutAddresses

try {
    $result = $apiInstance->putAddressesKey($key, $putAddresses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->putAddressesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Address Key. | |
| **putAddresses** | [**\SynergiTech\Sage\Model\PutAddresses**](../Model/PutAddresses.md)|  | [optional] |

### Return type

[**\SynergiTech\Sage\Model\Address**](../Model/Address.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
