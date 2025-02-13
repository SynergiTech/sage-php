# SynergiTech\Sage\ContactsApi

All URIs are relative to https://api-qa.sageapim.com/uki/sageone/accounts/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteContactsKey()**](ContactsApi.md#deleteContactsKey) | **DELETE** /contacts/{key} | Deletes a Contact |
| [**getContacts()**](ContactsApi.md#getContacts) | **GET** /contacts | Returns all Contacts |
| [**getContactsKey()**](ContactsApi.md#getContactsKey) | **GET** /contacts/{key} | Returns a Contact |
| [**postContacts()**](ContactsApi.md#postContacts) | **POST** /contacts | Creates a Contact |
| [**putContactsKey()**](ContactsApi.md#putContactsKey) | **PUT** /contacts/{key} | Updates a Contact |


## `deleteContactsKey()`

```php
deleteContactsKey($key)
```

Deletes a Contact

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


$apiInstance = new SynergiTech\Sage\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Contact Key.

try {
    $apiInstance->deleteContactsKey($key);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteContactsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Contact Key. | |

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

## `getContacts()`

```php
getContacts($updatedOrCreatedSince, $deletedSince, $contactTypeId, $excludeSystem, $nestedAttributes, $showBalance, $contextDate, $search, $email, $showUnfinishedRecurringInvoicesStatus, $showLegacyId, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\Contact[]
```

Returns all Contacts

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


$apiInstance = new SynergiTech\Sage\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Contacts changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$deletedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Contacts deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp.
$contactTypeId = 'contactTypeId_example'; // string | Use this to filter by contact type id
$excludeSystem = True; // bool | Use this to filter out system entities, not applicable for transaction creation
$nestedAttributes = 'nestedAttributes_example'; // string | Specify the attributes that you want to expose for nested entities of the Contacts (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$showBalance = True; // bool | Use this to display the balance for a contact.
$contextDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date (as full-date in RFC3339). Use this to determine the correct tax treatment for a contact on a given date.
$search = 'search_example'; // string | Use this to filter by the contact name, company name or reference.
$email = 'email_example'; // string | Use this to filter by the contact person email address.
$showUnfinishedRecurringInvoicesStatus = True; // bool
$showLegacyId = True; // bool | Display the legacy_id for the Contacts.
$itemsPerPage = 20; // int | Format - int32. Returns the given number of Contacts per request.
$page = 1; // int | Format - int32. Go to specific page of Contacts
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Contacts (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getContacts($updatedOrCreatedSince, $deletedSince, $contactTypeId, $excludeSystem, $nestedAttributes, $showBalance, $contextDate, $search, $email, $showUnfinishedRecurringInvoicesStatus, $showLegacyId, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updatedOrCreatedSince** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Contacts changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **deletedSince** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Contacts deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp. | [optional] |
| **contactTypeId** | **string**| Use this to filter by contact type id | [optional] |
| **excludeSystem** | **bool**| Use this to filter out system entities, not applicable for transaction creation | [optional] |
| **nestedAttributes** | **string**| Specify the attributes that you want to expose for nested entities of the Contacts (expose all nested attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **showBalance** | **bool**| Use this to display the balance for a contact. | [optional] |
| **contextDate** | **\DateTime**| Format - date (as full-date in RFC3339). Use this to determine the correct tax treatment for a contact on a given date. | [optional] |
| **search** | **string**| Use this to filter by the contact name, company name or reference. | [optional] |
| **email** | **string**| Use this to filter by the contact person email address. | [optional] |
| **showUnfinishedRecurringInvoicesStatus** | **bool**|  | [optional] |
| **showLegacyId** | **bool**| Display the legacy_id for the Contacts. | [optional] |
| **itemsPerPage** | **int**| Format - int32. Returns the given number of Contacts per request. | [optional] [default to 20] |
| **page** | **int**| Format - int32. Go to specific page of Contacts | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Contacts (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\Contact[]**](../Model/Contact.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactsKey()`

```php
getContactsKey($key, $nestedAttributes, $showBalance, $contextDate, $showUnfinishedRecurringInvoicesStatus, $showLegacyId, $attributes): \SynergiTech\Sage\Model\Contact
```

Returns a Contact

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


$apiInstance = new SynergiTech\Sage\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Contact Key.
$nestedAttributes = 'nestedAttributes_example'; // string | Specify the attributes that you want to expose for nested entities of the Contact (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$showBalance = True; // bool | Use this to display the balance for a contact.
$contextDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date (as full-date in RFC3339). Use this to determine the correct tax treatment for a contact on a given date.
$showUnfinishedRecurringInvoicesStatus = true; // bool
$showLegacyId = True; // bool | Display the legacy_id for the Contact.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Contact (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getContactsKey($key, $nestedAttributes, $showBalance, $contextDate, $showUnfinishedRecurringInvoicesStatus, $showLegacyId, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContactsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Contact Key. | |
| **nestedAttributes** | **string**| Specify the attributes that you want to expose for nested entities of the Contact (expose all nested attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **showBalance** | **bool**| Use this to display the balance for a contact. | [optional] |
| **contextDate** | **\DateTime**| Format - date (as full-date in RFC3339). Use this to determine the correct tax treatment for a contact on a given date. | [optional] |
| **showUnfinishedRecurringInvoicesStatus** | **bool**|  | [optional] [default to true] |
| **showLegacyId** | **bool**| Display the legacy_id for the Contact. | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Contact (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\Contact**](../Model/Contact.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postContacts()`

```php
postContacts($postContacts): \SynergiTech\Sage\Model\Contact
```

Creates a Contact

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


$apiInstance = new SynergiTech\Sage\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postContacts = new \SynergiTech\Sage\Model\PostContacts(); // \SynergiTech\Sage\Model\PostContacts

try {
    $result = $apiInstance->postContacts($postContacts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->postContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **postContacts** | [**\SynergiTech\Sage\Model\PostContacts**](../Model/PostContacts.md)|  | [optional] |

### Return type

[**\SynergiTech\Sage\Model\Contact**](../Model/Contact.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putContactsKey()`

```php
putContactsKey($key, $putContacts): \SynergiTech\Sage\Model\Contact
```

Updates a Contact

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


$apiInstance = new SynergiTech\Sage\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Contact Key.
$putContacts = new \SynergiTech\Sage\Model\PutContacts(); // \SynergiTech\Sage\Model\PutContacts

try {
    $result = $apiInstance->putContactsKey($key, $putContacts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->putContactsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Contact Key. | |
| **putContacts** | [**\SynergiTech\Sage\Model\PutContacts**](../Model/PutContacts.md)|  | [optional] |

### Return type

[**\SynergiTech\Sage\Model\Contact**](../Model/Contact.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
