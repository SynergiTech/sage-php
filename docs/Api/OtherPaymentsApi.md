# Swagger\Client\OtherPaymentsApi

All URIs are relative to *https://api-qa.sageapim.com/uki/sageone/accounts/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteOtherPaymentsKey**](OtherPaymentsApi.md#deleteOtherPaymentsKey) | **DELETE** /other_payments/{key} | Deletes a Other Payment
[**getOtherPayments**](OtherPaymentsApi.md#getOtherPayments) | **GET** /other_payments | Returns all Other Payments
[**getOtherPaymentsKey**](OtherPaymentsApi.md#getOtherPaymentsKey) | **GET** /other_payments/{key} | Returns a Other Payment
[**postOtherPayments**](OtherPaymentsApi.md#postOtherPayments) | **POST** /other_payments | Creates a Other Payment
[**putOtherPaymentsKey**](OtherPaymentsApi.md#putOtherPaymentsKey) | **PUT** /other_payments/{key} | Updates a Other Payment


# **deleteOtherPaymentsKey**
> deleteOtherPaymentsKey($key)

Deletes a Other Payment

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Full Access

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

$apiInstance = new Swagger\Client\Api\OtherPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Other Payment Key.

try {
    $apiInstance->deleteOtherPaymentsKey($key);
} catch (Exception $e) {
    echo 'Exception when calling OtherPaymentsApi->deleteOtherPaymentsKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Other Payment Key. |

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOtherPayments**
> \Swagger\Client\Model\OtherPaymentArray getOtherPayments($bank_account_id, $contact_id, $deleted_since, $from_date, $has_attachments, $to_date, $transaction_type_id, $updated_or_created_since, $show_legacy_id, $items_per_page, $page, $attributes, $sort)

Returns all Other Payments

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Read Only, Restricted Access, Full Access

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

$apiInstance = new Swagger\Client\Api\OtherPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_account_id = "bank_account_id_example"; // string | Use this to filter by bank account id
$contact_id = "contact_id_example"; // string | Use this to filter by contact id
$deleted_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Payments deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter by Payments dates
$has_attachments = true; // bool | Use this to filter Payments by whether they have attachments or not
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter by Payments dates
$transaction_type_id = "transaction_type_id_example"; // string | Use this to filter by transaction type id
$updated_or_created_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Payments changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$show_legacy_id = true; // bool | Display the legacy_id for the Payments.
$items_per_page = 20; // int | Format - int32. Returns the given number of Payments per request.
$page = 1; // int | Format - int32. Go to specific page of Payments
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Payments (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$sort = "sort_example"; // string | Order by a given attribute (required) and direction (optional; `asc` or `desc`; defaults to `asc`). Available attributes are: created_at, updated_at, date  Example: `sort=created_at` or `sort=created_at:desc`

try {
    $result = $apiInstance->getOtherPayments($bank_account_id, $contact_id, $deleted_since, $from_date, $has_attachments, $to_date, $transaction_type_id, $updated_or_created_since, $show_legacy_id, $items_per_page, $page, $attributes, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OtherPaymentsApi->getOtherPayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_account_id** | **string**| Use this to filter by bank account id | [optional]
 **contact_id** | **string**| Use this to filter by contact id | [optional]
 **deleted_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Payments deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp. | [optional]
 **from_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter by Payments dates | [optional]
 **has_attachments** | **bool**| Use this to filter Payments by whether they have attachments or not | [optional]
 **to_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter by Payments dates | [optional]
 **transaction_type_id** | **string**| Use this to filter by transaction type id | [optional]
 **updated_or_created_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Payments changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional]
 **show_legacy_id** | **bool**| Display the legacy_id for the Payments. | [optional]
 **items_per_page** | **int**| Format - int32. Returns the given number of Payments per request. | [optional] [default to 20]
 **page** | **int**| Format - int32. Go to specific page of Payments | [optional] [default to 1]
 **attributes** | **string**| Specify the attributes that you want to expose for the Payments (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]
 **sort** | **string**| Order by a given attribute (required) and direction (optional; &#x60;asc&#x60; or &#x60;desc&#x60;; defaults to &#x60;asc&#x60;). Available attributes are: created_at, updated_at, date  Example: &#x60;sort&#x3D;created_at&#x60; or &#x60;sort&#x3D;created_at:desc&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\OtherPaymentArray**](../Model/OtherPaymentArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOtherPaymentsKey**
> \Swagger\Client\Model\OtherPayment getOtherPaymentsKey($key, $nested_attributes, $show_legacy_id, $attributes)

Returns a Other Payment

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Read Only, Restricted Access, Full Access

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

$apiInstance = new Swagger\Client\Api\OtherPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Other Payment Key.
$nested_attributes = "nested_attributes_example"; // string | Specify the attributes that you want to expose for nested entities of the Payment (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$show_legacy_id = true; // bool | Display the legacy_id for the Payment.
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Payment (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getOtherPaymentsKey($key, $nested_attributes, $show_legacy_id, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OtherPaymentsApi->getOtherPaymentsKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Other Payment Key. |
 **nested_attributes** | **string**| Specify the attributes that you want to expose for nested entities of the Payment (expose all nested attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]
 **show_legacy_id** | **bool**| Display the legacy_id for the Payment. | [optional]
 **attributes** | **string**| Specify the attributes that you want to expose for the Payment (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\OtherPayment**](../Model/OtherPayment.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOtherPayments**
> \Swagger\Client\Model\OtherPayment postOtherPayments($post_other_payments)

Creates a Other Payment

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Restricted Access, Full Access

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

$apiInstance = new Swagger\Client\Api\OtherPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_other_payments = new \Swagger\Client\Model\PostOtherPayments(); // \Swagger\Client\Model\PostOtherPayments | 

try {
    $result = $apiInstance->postOtherPayments($post_other_payments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OtherPaymentsApi->postOtherPayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_other_payments** | [**\Swagger\Client\Model\PostOtherPayments**](../Model/PostOtherPayments.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\OtherPayment**](../Model/OtherPayment.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOtherPaymentsKey**
> \Swagger\Client\Model\OtherPayment putOtherPaymentsKey($key, $put_other_payments)

Updates a Other Payment

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Restricted Access, Full Access

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

$apiInstance = new Swagger\Client\Api\OtherPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Other Payment Key.
$put_other_payments = new \Swagger\Client\Model\PutOtherPayments(); // \Swagger\Client\Model\PutOtherPayments | 

try {
    $result = $apiInstance->putOtherPaymentsKey($key, $put_other_payments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OtherPaymentsApi->putOtherPaymentsKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Other Payment Key. |
 **put_other_payments** | [**\Swagger\Client\Model\PutOtherPayments**](../Model/PutOtherPayments.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\OtherPayment**](../Model/OtherPayment.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

