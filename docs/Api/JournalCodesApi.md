# Swagger\Client\JournalCodesApi

All URIs are relative to *https://api-qa.sageapim.com/uki/sageone/accounts/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteJournalCodesKey**](JournalCodesApi.md#deleteJournalCodesKey) | **DELETE** /journal_codes/{key} | Deletes a Journal Code
[**getJournalCodes**](JournalCodesApi.md#getJournalCodes) | **GET** /journal_codes | Returns all Journal Codes
[**getJournalCodesKey**](JournalCodesApi.md#getJournalCodesKey) | **GET** /journal_codes/{key} | Returns a Journal Code
[**postJournalCodes**](JournalCodesApi.md#postJournalCodes) | **POST** /journal_codes | Creates a Journal Code
[**putJournalCodesKey**](JournalCodesApi.md#putJournalCodesKey) | **PUT** /journal_codes/{key} | Updates a Journal Code


# **deleteJournalCodesKey**
> deleteJournalCodesKey($key)

Deletes a Journal Code

### Endpoint Availability  * Accounting Plus: 🇫🇷 * Accounting Standard: 🇫🇷 * Accounting Start: 🇫🇷  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Settings`: Full Access

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: apiKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\JournalCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Journal Code Key.

try {
    $apiInstance->deleteJournalCodesKey($key);
} catch (Exception $e) {
    echo 'Exception when calling JournalCodesApi->deleteJournalCodesKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Journal Code Key. |

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJournalCodes**
> \Swagger\Client\Model\JournalCodeArray getJournalCodes($updated_or_created_since, $show_legacy_id, $items_per_page, $page, $attributes)

Returns all Journal Codes

### Endpoint Availability  * Accounting Plus: 🇫🇷 * Accounting Standard: 🇫🇷 * Accounting Start: 🇫🇷  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Journals`: Full Access, Read Only * Area: `Settings`: Full Access, Read Only

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: apiKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\JournalCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updated_or_created_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Journal Codes changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$show_legacy_id = true; // bool | Display the legacy_id for the Journal Codes.
$items_per_page = 20; // int | Format - int32. Returns the given number of Journal Codes per request.
$page = 1; // int | Format - int32. Go to specific page of Journal Codes
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Journal Codes (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getJournalCodes($updated_or_created_since, $show_legacy_id, $items_per_page, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalCodesApi->getJournalCodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updated_or_created_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Journal Codes changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional]
 **show_legacy_id** | **bool**| Display the legacy_id for the Journal Codes. | [optional]
 **items_per_page** | **int**| Format - int32. Returns the given number of Journal Codes per request. | [optional] [default to 20]
 **page** | **int**| Format - int32. Go to specific page of Journal Codes | [optional] [default to 1]
 **attributes** | **string**| Specify the attributes that you want to expose for the Journal Codes (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\JournalCodeArray**](../Model/JournalCodeArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJournalCodesKey**
> \Swagger\Client\Model\JournalCode getJournalCodesKey($key, $show_legacy_id, $attributes)

Returns a Journal Code

### Endpoint Availability  * Accounting Plus: 🇫🇷 * Accounting Standard: 🇫🇷 * Accounting Start: 🇫🇷  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Journals`: Full Access, Read Only * Area: `Settings`: Full Access, Read Only

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: apiKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\JournalCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Journal Code Key.
$show_legacy_id = true; // bool | Display the legacy_id for the Journal Code.
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Journal Code (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getJournalCodesKey($key, $show_legacy_id, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalCodesApi->getJournalCodesKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Journal Code Key. |
 **show_legacy_id** | **bool**| Display the legacy_id for the Journal Code. | [optional]
 **attributes** | **string**| Specify the attributes that you want to expose for the Journal Code (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\JournalCode**](../Model/JournalCode.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postJournalCodes**
> \Swagger\Client\Model\JournalCode postJournalCodes($post_journal_codes)

Creates a Journal Code

### Endpoint Availability  * Accounting Plus: 🇫🇷 * Accounting Standard: 🇫🇷 * Accounting Start: 🇫🇷  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Settings`: Full Access

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: apiKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\JournalCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_journal_codes = new \Swagger\Client\Model\PostJournalCodes(); // \Swagger\Client\Model\PostJournalCodes | 

try {
    $result = $apiInstance->postJournalCodes($post_journal_codes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalCodesApi->postJournalCodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_journal_codes** | [**\Swagger\Client\Model\PostJournalCodes**](../Model/PostJournalCodes.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\JournalCode**](../Model/JournalCode.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putJournalCodesKey**
> \Swagger\Client\Model\JournalCode putJournalCodesKey($key, $put_journal_codes)

Updates a Journal Code

### Endpoint Availability  * Accounting Plus: 🇫🇷 * Accounting Standard: 🇫🇷 * Accounting Start: 🇫🇷  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Settings`: Full Access

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: apiKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\JournalCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Journal Code Key.
$put_journal_codes = new \Swagger\Client\Model\PutJournalCodes(); // \Swagger\Client\Model\PutJournalCodes | 

try {
    $result = $apiInstance->putJournalCodesKey($key, $put_journal_codes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalCodesApi->putJournalCodesKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Journal Code Key. |
 **put_journal_codes** | [**\Swagger\Client\Model\PutJournalCodes**](../Model/PutJournalCodes.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\JournalCode**](../Model/JournalCode.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

