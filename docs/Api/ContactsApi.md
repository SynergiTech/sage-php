# Swagger\Client\ContactsApi

All URIs are relative to *https://api-qa.sageapim.com/uki/sageone/accounts/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteContactsKey**](ContactsApi.md#deleteContactsKey) | **DELETE** /contacts/{key} | Deletes a Contact
[**getContacts**](ContactsApi.md#getContacts) | **GET** /contacts | Returns all Contacts
[**getContactsKey**](ContactsApi.md#getContactsKey) | **GET** /contacts/{key} | Returns a Contact
[**postContacts**](ContactsApi.md#postContacts) | **POST** /contacts | Creates a Contact
[**putContactsKey**](ContactsApi.md#putContactsKey) | **PUT** /contacts/{key} | Updates a Contact


# **deleteContactsKey**
> deleteContactsKey($key)

Deletes a Contact

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

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Contact Key.

try {
    $apiInstance->deleteContactsKey($key);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteContactsKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Contact Key. |

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContacts**
> \Swagger\Client\Model\ContactArray getContacts($updated_or_created_since, $deleted_since, $contact_type_id, $exclude_system, $nested_attributes, $show_balance, $context_date, $search, $email, $show_unfinished_recurring_invoices_status, $show_legacy_id, $items_per_page, $page, $attributes)

Returns all Contacts

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

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updated_or_created_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Contacts changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$deleted_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Contacts deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp.
$contact_type_id = "contact_type_id_example"; // string | Use this to filter by contact type id
$exclude_system = true; // bool | Use this to filter out system entities, not applicable for transaction creation
$nested_attributes = "nested_attributes_example"; // string | Specify the attributes that you want to expose for nested entities of the Contacts (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$show_balance = true; // bool | Use this to display the balance for a contact.
$context_date = new \DateTime("2013-10-20"); // \DateTime | Format - date (as full-date in RFC3339). Use this to determine the correct tax treatment for a contact on a given date.
$search = "search_example"; // string | Use this to filter by the contact name, company name or reference.
$email = "email_example"; // string | Use this to filter by the contact person email address.
$show_unfinished_recurring_invoices_status = true; // bool | 
$show_legacy_id = true; // bool | Display the legacy_id for the Contacts.
$items_per_page = 20; // int | Format - int32. Returns the given number of Contacts per request.
$page = 1; // int | Format - int32. Go to specific page of Contacts
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Contacts (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getContacts($updated_or_created_since, $deleted_since, $contact_type_id, $exclude_system, $nested_attributes, $show_balance, $context_date, $search, $email, $show_unfinished_recurring_invoices_status, $show_legacy_id, $items_per_page, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updated_or_created_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Contacts changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional]
 **deleted_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Contacts deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp. | [optional]
 **contact_type_id** | **string**| Use this to filter by contact type id | [optional]
 **exclude_system** | **bool**| Use this to filter out system entities, not applicable for transaction creation | [optional]
 **nested_attributes** | **string**| Specify the attributes that you want to expose for nested entities of the Contacts (expose all nested attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]
 **show_balance** | **bool**| Use this to display the balance for a contact. | [optional]
 **context_date** | **\DateTime**| Format - date (as full-date in RFC3339). Use this to determine the correct tax treatment for a contact on a given date. | [optional]
 **search** | **string**| Use this to filter by the contact name, company name or reference. | [optional]
 **email** | **string**| Use this to filter by the contact person email address. | [optional]
 **show_unfinished_recurring_invoices_status** | **bool**|  | [optional]
 **show_legacy_id** | **bool**| Display the legacy_id for the Contacts. | [optional]
 **items_per_page** | **int**| Format - int32. Returns the given number of Contacts per request. | [optional] [default to 20]
 **page** | **int**| Format - int32. Go to specific page of Contacts | [optional] [default to 1]
 **attributes** | **string**| Specify the attributes that you want to expose for the Contacts (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\ContactArray**](../Model/ContactArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactsKey**
> \Swagger\Client\Model\Contact getContactsKey($key, $nested_attributes, $show_balance, $context_date, $show_unfinished_recurring_invoices_status, $show_legacy_id, $attributes)

Returns a Contact

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

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Contact Key.
$nested_attributes = "nested_attributes_example"; // string | Specify the attributes that you want to expose for nested entities of the Contact (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$show_balance = true; // bool | Use this to display the balance for a contact.
$context_date = new \DateTime("2013-10-20"); // \DateTime | Format - date (as full-date in RFC3339). Use this to determine the correct tax treatment for a contact on a given date.
$show_unfinished_recurring_invoices_status = true; // bool | 
$show_legacy_id = true; // bool | Display the legacy_id for the Contact.
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Contact (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getContactsKey($key, $nested_attributes, $show_balance, $context_date, $show_unfinished_recurring_invoices_status, $show_legacy_id, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContactsKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Contact Key. |
 **nested_attributes** | **string**| Specify the attributes that you want to expose for nested entities of the Contact (expose all nested attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]
 **show_balance** | **bool**| Use this to display the balance for a contact. | [optional]
 **context_date** | **\DateTime**| Format - date (as full-date in RFC3339). Use this to determine the correct tax treatment for a contact on a given date. | [optional]
 **show_unfinished_recurring_invoices_status** | **bool**|  | [optional] [default to true]
 **show_legacy_id** | **bool**| Display the legacy_id for the Contact. | [optional]
 **attributes** | **string**| Specify the attributes that you want to expose for the Contact (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\Contact**](../Model/Contact.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postContacts**
> \Swagger\Client\Model\Contact postContacts($post_contacts)

Creates a Contact

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

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_contacts = new \Swagger\Client\Model\PostContacts(); // \Swagger\Client\Model\PostContacts | 

try {
    $result = $apiInstance->postContacts($post_contacts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->postContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_contacts** | [**\Swagger\Client\Model\PostContacts**](../Model/PostContacts.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Contact**](../Model/Contact.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putContactsKey**
> \Swagger\Client\Model\Contact putContactsKey($key, $put_contacts)

Updates a Contact

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

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Contact Key.
$put_contacts = new \Swagger\Client\Model\PutContacts(); // \Swagger\Client\Model\PutContacts | 

try {
    $result = $apiInstance->putContactsKey($key, $put_contacts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->putContactsKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Contact Key. |
 **put_contacts** | [**\Swagger\Client\Model\PutContacts**](../Model/PutContacts.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Contact**](../Model/Contact.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

