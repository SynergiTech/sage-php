# Swagger\Client\ContactPeopleApi

All URIs are relative to *https://api-qa.sageapim.com/uki/sageone/accounts/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteContactPersonsKey**](ContactPeopleApi.md#deleteContactPersonsKey) | **DELETE** /contact_persons/{key} | Deletes a Contact Person
[**getContactPersons**](ContactPeopleApi.md#getContactPersons) | **GET** /contact_persons | Returns all Contact People
[**getContactPersonsKey**](ContactPeopleApi.md#getContactPersonsKey) | **GET** /contact_persons/{key} | Returns a Contact Person
[**postContactPersons**](ContactPeopleApi.md#postContactPersons) | **POST** /contact_persons | Creates a Contact Person
[**putContactPersonsKey**](ContactPeopleApi.md#putContactPersonsKey) | **PUT** /contact_persons/{key} | Updates a Contact Person


# **deleteContactPersonsKey**
> deleteContactPersonsKey($key)

Deletes a Contact Person

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Contacts`: Full Access

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

$apiInstance = new Swagger\Client\Api\ContactPeopleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Contact Person Key.

try {
    $apiInstance->deleteContactPersonsKey($key);
} catch (Exception $e) {
    echo 'Exception when calling ContactPeopleApi->deleteContactPersonsKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Contact Person Key. |

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactPersons**
> \Swagger\Client\Model\ContactPersonArray getContactPersons($address_id, $updated_or_created_since, $deleted_since, $contact_id, $show_legacy_id, $items_per_page, $page, $attributes)

Returns all Contact People

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Contacts`: Read Only, Restricted Access, Full Access * Area: `Sales`: Read Only, Restricted Access, Full Access * Area: `Purchases`: Read Only, Restricted Access, Full Access

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

$apiInstance = new Swagger\Client\Api\ContactPeopleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_id = "address_id_example"; // string | Use this to filter by address id
$updated_or_created_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Address Contacts changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$deleted_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Address Contacts deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp.
$contact_id = "contact_id_example"; // string | Use this to filter by contact id
$show_legacy_id = true; // bool | Display the legacy_id for the Address Contacts.
$items_per_page = 20; // int | Format - int32. Returns the given number of Address Contacts per request.
$page = 1; // int | Format - int32. Go to specific page of Address Contacts
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Address Contacts (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getContactPersons($address_id, $updated_or_created_since, $deleted_since, $contact_id, $show_legacy_id, $items_per_page, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactPeopleApi->getContactPersons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_id** | **string**| Use this to filter by address id | [optional]
 **updated_or_created_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Address Contacts changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional]
 **deleted_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Address Contacts deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp. | [optional]
 **contact_id** | **string**| Use this to filter by contact id | [optional]
 **show_legacy_id** | **bool**| Display the legacy_id for the Address Contacts. | [optional]
 **items_per_page** | **int**| Format - int32. Returns the given number of Address Contacts per request. | [optional] [default to 20]
 **page** | **int**| Format - int32. Go to specific page of Address Contacts | [optional] [default to 1]
 **attributes** | **string**| Specify the attributes that you want to expose for the Address Contacts (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\ContactPersonArray**](../Model/ContactPersonArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactPersonsKey**
> \Swagger\Client\Model\ContactPerson getContactPersonsKey($key, $nested_attributes, $show_legacy_id, $attributes)

Returns a Contact Person

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Contacts`: Read Only, Restricted Access, Full Access * Area: `Sales`: Read Only, Restricted Access, Full Access * Area: `Purchases`: Read Only, Restricted Access, Full Access * Area: `Bank`: Read Only, Restricted Access, Full Access

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

$apiInstance = new Swagger\Client\Api\ContactPeopleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Contact Person Key.
$nested_attributes = "nested_attributes_example"; // string | Specify the attributes that you want to expose for nested entities of the Address Contact (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$show_legacy_id = true; // bool | Display the legacy_id for the Address Contact.
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Address Contact (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getContactPersonsKey($key, $nested_attributes, $show_legacy_id, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactPeopleApi->getContactPersonsKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Contact Person Key. |
 **nested_attributes** | **string**| Specify the attributes that you want to expose for nested entities of the Address Contact (expose all nested attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]
 **show_legacy_id** | **bool**| Display the legacy_id for the Address Contact. | [optional]
 **attributes** | **string**| Specify the attributes that you want to expose for the Address Contact (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\ContactPerson**](../Model/ContactPerson.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postContactPersons**
> \Swagger\Client\Model\ContactPerson postContactPersons($post_contact_persons)

Creates a Contact Person

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Contacts`: Restricted Access, Full Access

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

$apiInstance = new Swagger\Client\Api\ContactPeopleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_contact_persons = new \Swagger\Client\Model\PostContactPersons(); // \Swagger\Client\Model\PostContactPersons | 

try {
    $result = $apiInstance->postContactPersons($post_contact_persons);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactPeopleApi->postContactPersons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_contact_persons** | [**\Swagger\Client\Model\PostContactPersons**](../Model/PostContactPersons.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ContactPerson**](../Model/ContactPerson.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putContactPersonsKey**
> \Swagger\Client\Model\ContactPerson putContactPersonsKey($key, $put_contact_persons)

Updates a Contact Person

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Contacts`: Restricted Access, Full Access

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

$apiInstance = new Swagger\Client\Api\ContactPeopleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Contact Person Key.
$put_contact_persons = new \Swagger\Client\Model\PutContactPersons(); // \Swagger\Client\Model\PutContactPersons | 

try {
    $result = $apiInstance->putContactPersonsKey($key, $put_contact_persons);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactPeopleApi->putContactPersonsKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Contact Person Key. |
 **put_contact_persons** | [**\Swagger\Client\Model\PutContactPersons**](../Model/PutContactPersons.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ContactPerson**](../Model/ContactPerson.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

