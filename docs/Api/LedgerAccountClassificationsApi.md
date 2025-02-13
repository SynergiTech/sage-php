# SynergiTech\Sage\LedgerAccountClassificationsApi

All URIs are relative to https://api-qa.sageapim.com/uki/sageone/accounts/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getLedgerAccountClassifications()**](LedgerAccountClassificationsApi.md#getLedgerAccountClassifications) | **GET** /ledger_account_classifications | Returns all Ledger Account Classifications |
| [**getLedgerAccountClassificationsKey()**](LedgerAccountClassificationsApi.md#getLedgerAccountClassificationsKey) | **GET** /ledger_account_classifications/{key} | Returns a Ledger Account Classification |


## `getLedgerAccountClassifications()`

```php
getLedgerAccountClassifications($ledgerAccountTypeId, $showLegacyId, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\Base[]
```

Returns all Ledger Account Classifications

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


$apiInstance = new SynergiTech\Sage\Api\LedgerAccountClassificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ledgerAccountTypeId = 'ledgerAccountTypeId_example'; // string | Use this to filter by ledger account type id
$showLegacyId = True; // bool | Display the legacy_id for the Ledger Account Classifications.
$itemsPerPage = 20; // int | Format - int32. Returns the given number of Ledger Account Classifications per request.
$page = 1; // int | Format - int32. Go to specific page of Ledger Account Classifications
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Ledger Account Classifications (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getLedgerAccountClassifications($ledgerAccountTypeId, $showLegacyId, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerAccountClassificationsApi->getLedgerAccountClassifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ledgerAccountTypeId** | **string**| Use this to filter by ledger account type id | [optional] |
| **showLegacyId** | **bool**| Display the legacy_id for the Ledger Account Classifications. | [optional] |
| **itemsPerPage** | **int**| Format - int32. Returns the given number of Ledger Account Classifications per request. | [optional] [default to 20] |
| **page** | **int**| Format - int32. Go to specific page of Ledger Account Classifications | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Ledger Account Classifications (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\Base[]**](../Model/Base.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLedgerAccountClassificationsKey()`

```php
getLedgerAccountClassificationsKey($key, $showLegacyId, $attributes): \SynergiTech\Sage\Model\Base
```

Returns a Ledger Account Classification

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


$apiInstance = new SynergiTech\Sage\Api\LedgerAccountClassificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Ledger Account Classification Key.
$showLegacyId = True; // bool | Display the legacy_id for the Ledger Account Classification.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Ledger Account Classification (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getLedgerAccountClassificationsKey($key, $showLegacyId, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerAccountClassificationsApi->getLedgerAccountClassificationsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Ledger Account Classification Key. | |
| **showLegacyId** | **bool**| Display the legacy_id for the Ledger Account Classification. | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Ledger Account Classification (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\Base**](../Model/Base.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
