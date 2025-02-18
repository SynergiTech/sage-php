# Sage-PHP

Documentation of the Sage Business Cloud Accounting API.

For more information, please visit [mailto:sbc-accounting-api-developers@sage.com](mailto:sbc-accounting-api-developers@sage.com).

## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/synergitech/sage-php.git"
    }
  ],
  "require": {
    "synergitech/sage-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/Sage-PHP/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new SynergiTech\Sage\Api\AddressRegionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemsPerPage = 20; // int | Returns the given number of States per request.
$page = 1; // int | Go to specific page of States
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the States (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$countryId = 'countryId_example'; // string | Use this to filter by country id

try {
    $result = $apiInstance->getAddressRegions($itemsPerPage, $page, $attributes, $countryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressRegionsApi->getAddressRegions: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.accounting.sage.com/v3.1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AddressRegionsApi* | [**getAddressRegions**](docs/Api/AddressRegionsApi.md#getaddressregions) | **GET** /address_regions | Returns all Address Regions
*AddressRegionsApi* | [**getAddressRegionsKey**](docs/Api/AddressRegionsApi.md#getaddressregionskey) | **GET** /address_regions/{key} | Returns a Address Region
*AddressTypesApi* | [**getAddressTypes**](docs/Api/AddressTypesApi.md#getaddresstypes) | **GET** /address_types | Returns all Address Types
*AddressTypesApi* | [**getAddressTypesKey**](docs/Api/AddressTypesApi.md#getaddresstypeskey) | **GET** /address_types/{key} | Returns a Address Type
*AddressesApi* | [**deleteAddressesKey**](docs/Api/AddressesApi.md#deleteaddresseskey) | **DELETE** /addresses/{key} | Deletes a Address
*AddressesApi* | [**getAddresses**](docs/Api/AddressesApi.md#getaddresses) | **GET** /addresses | Returns all Addresses
*AddressesApi* | [**getAddressesKey**](docs/Api/AddressesApi.md#getaddresseskey) | **GET** /addresses/{key} | Returns a Address
*AddressesApi* | [**postAddresses**](docs/Api/AddressesApi.md#postaddresses) | **POST** /addresses | Creates a Address
*AddressesApi* | [**putAddressesKey**](docs/Api/AddressesApi.md#putaddresseskey) | **PUT** /addresses/{key} | Updates a Address
*AnalysisTypeCategoriesApi* | [**deleteAnalysisTypeCategoriesKey**](docs/Api/AnalysisTypeCategoriesApi.md#deleteanalysistypecategorieskey) | **DELETE** /analysis_type_categories/{key} | Deletes a Analysis Type Category
*AnalysisTypeCategoriesApi* | [**getAnalysisTypeCategories**](docs/Api/AnalysisTypeCategoriesApi.md#getanalysistypecategories) | **GET** /analysis_type_categories | Returns all Analysis Type Categories
*AnalysisTypeCategoriesApi* | [**getAnalysisTypeCategoriesKey**](docs/Api/AnalysisTypeCategoriesApi.md#getanalysistypecategorieskey) | **GET** /analysis_type_categories/{key} | Returns a Analysis Type Category
*AnalysisTypeCategoriesApi* | [**postAnalysisTypeCategories**](docs/Api/AnalysisTypeCategoriesApi.md#postanalysistypecategories) | **POST** /analysis_type_categories | Creates a Analysis Type Category
*AnalysisTypeCategoriesApi* | [**putAnalysisTypeCategoriesKey**](docs/Api/AnalysisTypeCategoriesApi.md#putanalysistypecategorieskey) | **PUT** /analysis_type_categories/{key} | Updates a Analysis Type Category
*AnalysisTypesApi* | [**getAnalysisTypes**](docs/Api/AnalysisTypesApi.md#getanalysistypes) | **GET** /analysis_types | Returns all Analysis Types
*AnalysisTypesApi* | [**getAnalysisTypesKey**](docs/Api/AnalysisTypesApi.md#getanalysistypeskey) | **GET** /analysis_types/{key} | Returns a Analysis Type
*AnalysisTypesApi* | [**putAnalysisTypesKey**](docs/Api/AnalysisTypesApi.md#putanalysistypeskey) | **PUT** /analysis_types/{key} | Updates a Analysis Type
*ArtefactStatusesApi* | [**getArtefactStatuses**](docs/Api/ArtefactStatusesApi.md#getartefactstatuses) | **GET** /artefact_statuses | Returns all Artefact Statuses
*ArtefactStatusesApi* | [**getArtefactStatusesKey**](docs/Api/ArtefactStatusesApi.md#getartefactstatuseskey) | **GET** /artefact_statuses/{key} | Returns a Artefact Status
*AttachmentContextTypesApi* | [**getAttachmentContextTypes**](docs/Api/AttachmentContextTypesApi.md#getattachmentcontexttypes) | **GET** /attachment_context_types | Returns all Attachment Context Types
*AttachmentContextTypesApi* | [**getAttachmentContextTypesKey**](docs/Api/AttachmentContextTypesApi.md#getattachmentcontexttypeskey) | **GET** /attachment_context_types/{key} | Returns a Attachment Context Type
*AttachmentsApi* | [**deleteAttachmentsKey**](docs/Api/AttachmentsApi.md#deleteattachmentskey) | **DELETE** /attachments/{key} | Deletes a Attachment
*AttachmentsApi* | [**getAttachments**](docs/Api/AttachmentsApi.md#getattachments) | **GET** /attachments | Returns all Attachments
*AttachmentsApi* | [**getAttachmentsKey**](docs/Api/AttachmentsApi.md#getattachmentskey) | **GET** /attachments/{key} | Returns a Attachment
*AttachmentsApi* | [**getAttachmentsKeyFile**](docs/Api/AttachmentsApi.md#getattachmentskeyfile) | **GET** /attachments/{key}/file | Returns an Attachment File
*AttachmentsApi* | [**postAttachments**](docs/Api/AttachmentsApi.md#postattachments) | **POST** /attachments | Creates a Attachment
*AttachmentsApi* | [**putAttachmentsKey**](docs/Api/AttachmentsApi.md#putattachmentskey) | **PUT** /attachments/{key} | Updates a Attachment
*BankAccountTypesApi* | [**getBankAccountTypes**](docs/Api/BankAccountTypesApi.md#getbankaccounttypes) | **GET** /bank_account_types | Returns all Bank Account Types
*BankAccountTypesApi* | [**getBankAccountTypesKey**](docs/Api/BankAccountTypesApi.md#getbankaccounttypeskey) | **GET** /bank_account_types/{key} | Returns a Bank Account Type
*BankAccountsApi* | [**deleteBankAccountsKey**](docs/Api/BankAccountsApi.md#deletebankaccountskey) | **DELETE** /bank_accounts/{key} | Deletes a Bank Account
*BankAccountsApi* | [**getBankAccounts**](docs/Api/BankAccountsApi.md#getbankaccounts) | **GET** /bank_accounts | Returns all Bank Accounts
*BankAccountsApi* | [**getBankAccountsKey**](docs/Api/BankAccountsApi.md#getbankaccountskey) | **GET** /bank_accounts/{key} | Returns a Bank Account
*BankAccountsApi* | [**getBankAccountsKeyBankFeed**](docs/Api/BankAccountsApi.md#getbankaccountskeybankfeed) | **GET** /bank_accounts/{key}/bank_feed | Bank feed endpoint for Banking Cloud Bank accounts
*BankAccountsApi* | [**postBankAccounts**](docs/Api/BankAccountsApi.md#postbankaccounts) | **POST** /bank_accounts | Creates a Bank Account
*BankAccountsApi* | [**putBankAccountsKey**](docs/Api/BankAccountsApi.md#putbankaccountskey) | **PUT** /bank_accounts/{key} | Updates a Bank Account
*BankDepositsApi* | [**deleteBankDepositsKey**](docs/Api/BankDepositsApi.md#deletebankdepositskey) | **DELETE** /bank_deposits/{key} | Deletes a Bank Deposit
*BankDepositsApi* | [**getBankDeposits**](docs/Api/BankDepositsApi.md#getbankdeposits) | **GET** /bank_deposits | Returns all Bank Deposits
*BankDepositsApi* | [**getBankDepositsKey**](docs/Api/BankDepositsApi.md#getbankdepositskey) | **GET** /bank_deposits/{key} | Returns a Bank Deposit
*BankDepositsApi* | [**postBankDeposits**](docs/Api/BankDepositsApi.md#postbankdeposits) | **POST** /bank_deposits | Creates a Bank Deposit
*BankOpeningBalancesApi* | [**deleteBankOpeningBalancesKey**](docs/Api/BankOpeningBalancesApi.md#deletebankopeningbalanceskey) | **DELETE** /bank_opening_balances/{key} | Deletes a Bank Opening Balance
*BankOpeningBalancesApi* | [**getBankOpeningBalances**](docs/Api/BankOpeningBalancesApi.md#getbankopeningbalances) | **GET** /bank_opening_balances | Returns all Bank Opening Balances
*BankOpeningBalancesApi* | [**getBankOpeningBalancesKey**](docs/Api/BankOpeningBalancesApi.md#getbankopeningbalanceskey) | **GET** /bank_opening_balances/{key} | Returns a Bank Opening Balance
*BankOpeningBalancesApi* | [**postBankOpeningBalances**](docs/Api/BankOpeningBalancesApi.md#postbankopeningbalances) | **POST** /bank_opening_balances | Creates a Bank Opening Balance
*BankOpeningBalancesApi* | [**putBankOpeningBalancesKey**](docs/Api/BankOpeningBalancesApi.md#putbankopeningbalanceskey) | **PUT** /bank_opening_balances/{key} | Updates a Bank Opening Balance
*BankReconciliationsApi* | [**getBankReconciliations**](docs/Api/BankReconciliationsApi.md#getbankreconciliations) | **GET** /bank_reconciliations | Returns all Bank Reconciliations
*BankReconciliationsApi* | [**getBankReconciliationsKey**](docs/Api/BankReconciliationsApi.md#getbankreconciliationskey) | **GET** /bank_reconciliations/{key} | Returns a Bank Reconciliation
*BankReconciliationsApi* | [**postBankReconciliations**](docs/Api/BankReconciliationsApi.md#postbankreconciliations) | **POST** /bank_reconciliations | Creates a Bank Reconciliation
*BankReconciliationsApi* | [**putBankReconciliationsKey**](docs/Api/BankReconciliationsApi.md#putbankreconciliationskey) | **PUT** /bank_reconciliations/{key} | Updates a Bank Reconciliation
*BankTransfersApi* | [**deleteBankTransfersKey**](docs/Api/BankTransfersApi.md#deletebanktransferskey) | **DELETE** /bank_transfers/{key} | Deletes a Bank Transfer
*BankTransfersApi* | [**getBankTransfers**](docs/Api/BankTransfersApi.md#getbanktransfers) | **GET** /bank_transfers | Returns all Bank Transfers
*BankTransfersApi* | [**getBankTransfersKey**](docs/Api/BankTransfersApi.md#getbanktransferskey) | **GET** /bank_transfers/{key} | Returns a Bank Transfer
*BankTransfersApi* | [**postBankTransfers**](docs/Api/BankTransfersApi.md#postbanktransfers) | **POST** /bank_transfers | Creates a Bank Transfer
*BankTransfersApi* | [**putBankTransfersKey**](docs/Api/BankTransfersApi.md#putbanktransferskey) | **PUT** /bank_transfers/{key} | Updates a Bank Transfer
*BusinessActivityTypesApi* | [**getBusinessActivityTypes**](docs/Api/BusinessActivityTypesApi.md#getbusinessactivitytypes) | **GET** /business_activity_types | Returns all Business Activity Types
*BusinessActivityTypesApi* | [**getBusinessActivityTypesKey**](docs/Api/BusinessActivityTypesApi.md#getbusinessactivitytypeskey) | **GET** /business_activity_types/{key} | Returns a Business Activity Type
*BusinessExchangeRatesApi* | [**deleteBusinessExchangeRatesKey**](docs/Api/BusinessExchangeRatesApi.md#deletebusinessexchangerateskey) | **DELETE** /business_exchange_rates/{key} | Deletes a Business Exchange Rate
*BusinessExchangeRatesApi* | [**getBusinessExchangeRates**](docs/Api/BusinessExchangeRatesApi.md#getbusinessexchangerates) | **GET** /business_exchange_rates | Returns all Business Exchange Rates
*BusinessExchangeRatesApi* | [**getBusinessExchangeRatesKey**](docs/Api/BusinessExchangeRatesApi.md#getbusinessexchangerateskey) | **GET** /business_exchange_rates/{key} | Returns a Business Exchange Rate
*BusinessExchangeRatesApi* | [**postBusinessExchangeRates**](docs/Api/BusinessExchangeRatesApi.md#postbusinessexchangerates) | **POST** /business_exchange_rates | Creates a Business Exchange Rate
*BusinessExchangeRatesApi* | [**putBusinessExchangeRatesKey**](docs/Api/BusinessExchangeRatesApi.md#putbusinessexchangerateskey) | **PUT** /business_exchange_rates/{key} | Updates a Business Exchange Rate
*BusinessSettingsApi* | [**getBusinessSettings**](docs/Api/BusinessSettingsApi.md#getbusinesssettings) | **GET** /business_settings | Returns all Business Settings
*BusinessSettingsApi* | [**putBusinessSettings**](docs/Api/BusinessSettingsApi.md#putbusinesssettings) | **PUT** /business_settings | Updates a Business Settings
*BusinessTypesApi* | [**getBusinessTypes**](docs/Api/BusinessTypesApi.md#getbusinesstypes) | **GET** /business_types | Returns all Business Types
*BusinessTypesApi* | [**getBusinessTypesKey**](docs/Api/BusinessTypesApi.md#getbusinesstypeskey) | **GET** /business_types/{key} | Returns a Business Type
*CatalogItemTypesApi* | [**getCatalogItemTypes**](docs/Api/CatalogItemTypesApi.md#getcatalogitemtypes) | **GET** /catalog_item_types | Returns all Catalog Item Types
*CatalogItemTypesApi* | [**getCatalogItemTypesKey**](docs/Api/CatalogItemTypesApi.md#getcatalogitemtypeskey) | **GET** /catalog_item_types/{key} | Returns a Catalog Item Type
*CisSettingsApi* | [**getCisSettings**](docs/Api/CisSettingsApi.md#getcissettings) | **GET** /cis_settings | Returns all Cis Settings
*CisSettingsApi* | [**putCisSettings**](docs/Api/CisSettingsApi.md#putcissettings) | **PUT** /cis_settings | Updates a Cis Settings
*CoaAccountsApi* | [**getCoaAccounts**](docs/Api/CoaAccountsApi.md#getcoaaccounts) | **GET** /coa_accounts | Returns all Coa Accounts
*CoaAccountsApi* | [**getCoaAccountsKey**](docs/Api/CoaAccountsApi.md#getcoaaccountskey) | **GET** /coa_accounts/{key} | Returns a Coa Account
*CoaTemplatesApi* | [**getCoaTemplates**](docs/Api/CoaTemplatesApi.md#getcoatemplates) | **GET** /coa_templates | Returns all Coa Templates
*CoaTemplatesApi* | [**getCoaTemplatesKey**](docs/Api/CoaTemplatesApi.md#getcoatemplateskey) | **GET** /coa_templates/{key} | Returns a Coa Template
*ContactAllocationsApi* | [**deleteContactAllocationsKey**](docs/Api/ContactAllocationsApi.md#deletecontactallocationskey) | **DELETE** /contact_allocations/{key} | Deletes a Contact Allocation
*ContactAllocationsApi* | [**getContactAllocations**](docs/Api/ContactAllocationsApi.md#getcontactallocations) | **GET** /contact_allocations | Returns all Contact Allocations
*ContactAllocationsApi* | [**getContactAllocationsKey**](docs/Api/ContactAllocationsApi.md#getcontactallocationskey) | **GET** /contact_allocations/{key} | Returns a Contact Allocation
*ContactAllocationsApi* | [**postContactAllocations**](docs/Api/ContactAllocationsApi.md#postcontactallocations) | **POST** /contact_allocations | Creates a Contact Allocation
*ContactAllocationsApi* | [**putContactAllocationsKey**](docs/Api/ContactAllocationsApi.md#putcontactallocationskey) | **PUT** /contact_allocations/{key} | Updates a Contact Allocation
*ContactOpeningBalanceTypesApi* | [**getContactOpeningBalanceTypes**](docs/Api/ContactOpeningBalanceTypesApi.md#getcontactopeningbalancetypes) | **GET** /contact_opening_balance_types | Returns all Contact Opening Balance Types
*ContactOpeningBalanceTypesApi* | [**getContactOpeningBalanceTypesKey**](docs/Api/ContactOpeningBalanceTypesApi.md#getcontactopeningbalancetypeskey) | **GET** /contact_opening_balance_types/{key} | Returns a Contact Opening Balance Type
*ContactOpeningBalancesApi* | [**deleteContactOpeningBalancesKey**](docs/Api/ContactOpeningBalancesApi.md#deletecontactopeningbalanceskey) | **DELETE** /contact_opening_balances/{key} | Deletes a Contact Opening Balance
*ContactOpeningBalancesApi* | [**getContactOpeningBalances**](docs/Api/ContactOpeningBalancesApi.md#getcontactopeningbalances) | **GET** /contact_opening_balances | Returns all Contact Opening Balances
*ContactOpeningBalancesApi* | [**getContactOpeningBalancesKey**](docs/Api/ContactOpeningBalancesApi.md#getcontactopeningbalanceskey) | **GET** /contact_opening_balances/{key} | Returns a Contact Opening Balance
*ContactOpeningBalancesApi* | [**postContactOpeningBalances**](docs/Api/ContactOpeningBalancesApi.md#postcontactopeningbalances) | **POST** /contact_opening_balances | Creates a Contact Opening Balance
*ContactOpeningBalancesApi* | [**putContactOpeningBalancesKey**](docs/Api/ContactOpeningBalancesApi.md#putcontactopeningbalanceskey) | **PUT** /contact_opening_balances/{key} | Updates a Contact Opening Balance
*ContactPaymentsApi* | [**deleteContactPaymentsKey**](docs/Api/ContactPaymentsApi.md#deletecontactpaymentskey) | **DELETE** /contact_payments/{key} | Deletes a Contact Payment
*ContactPaymentsApi* | [**getContactPayments**](docs/Api/ContactPaymentsApi.md#getcontactpayments) | **GET** /contact_payments | Returns all Contact Payments
*ContactPaymentsApi* | [**getContactPaymentsKey**](docs/Api/ContactPaymentsApi.md#getcontactpaymentskey) | **GET** /contact_payments/{key} | Returns a Contact Payment
*ContactPaymentsApi* | [**postContactPayments**](docs/Api/ContactPaymentsApi.md#postcontactpayments) | **POST** /contact_payments | Creates a Contact Payment
*ContactPaymentsApi* | [**putContactPaymentsKey**](docs/Api/ContactPaymentsApi.md#putcontactpaymentskey) | **PUT** /contact_payments/{key} | Updates a Contact Payment
*ContactPeopleApi* | [**deleteContactPersonsKey**](docs/Api/ContactPeopleApi.md#deletecontactpersonskey) | **DELETE** /contact_persons/{key} | Deletes a Contact Person
*ContactPeopleApi* | [**getContactPersons**](docs/Api/ContactPeopleApi.md#getcontactpersons) | **GET** /contact_persons | Returns all Contact People
*ContactPeopleApi* | [**getContactPersonsKey**](docs/Api/ContactPeopleApi.md#getcontactpersonskey) | **GET** /contact_persons/{key} | Returns a Contact Person
*ContactPeopleApi* | [**postContactPersons**](docs/Api/ContactPeopleApi.md#postcontactpersons) | **POST** /contact_persons | Creates a Contact Person
*ContactPeopleApi* | [**putContactPersonsKey**](docs/Api/ContactPeopleApi.md#putcontactpersonskey) | **PUT** /contact_persons/{key} | Updates a Contact Person
*ContactPersonTypesApi* | [**getContactPersonTypes**](docs/Api/ContactPersonTypesApi.md#getcontactpersontypes) | **GET** /contact_person_types | Returns all Contact Person Types
*ContactPersonTypesApi* | [**getContactPersonTypesKey**](docs/Api/ContactPersonTypesApi.md#getcontactpersontypeskey) | **GET** /contact_person_types/{key} | Returns a Contact Person Type
*ContactTypesApi* | [**getContactTypes**](docs/Api/ContactTypesApi.md#getcontacttypes) | **GET** /contact_types | Returns all Contact Types
*ContactTypesApi* | [**getContactTypesKey**](docs/Api/ContactTypesApi.md#getcontacttypeskey) | **GET** /contact_types/{key} | Returns a Contact Type
*ContactsApi* | [**deleteContactsKey**](docs/Api/ContactsApi.md#deletecontactskey) | **DELETE** /contacts/{key} | Deletes a Contact
*ContactsApi* | [**getContacts**](docs/Api/ContactsApi.md#getcontacts) | **GET** /contacts | Returns all Contacts
*ContactsApi* | [**getContactsKey**](docs/Api/ContactsApi.md#getcontactskey) | **GET** /contacts/{key} | Returns a Contact
*ContactsApi* | [**postContacts**](docs/Api/ContactsApi.md#postcontacts) | **POST** /contacts | Creates a Contact
*ContactsApi* | [**putContactsKey**](docs/Api/ContactsApi.md#putcontactskey) | **PUT** /contacts/{key} | Updates a Contact
*CorrectiveReasonCodesApi* | [**getCorrectiveReasonCodes**](docs/Api/CorrectiveReasonCodesApi.md#getcorrectivereasoncodes) | **GET** /corrective_reason_codes | Returns all Corrective Reason Codes
*CorrectiveReasonCodesApi* | [**getCorrectiveReasonCodesKey**](docs/Api/CorrectiveReasonCodesApi.md#getcorrectivereasoncodeskey) | **GET** /corrective_reason_codes/{key} | Returns a Corrective Reason Code
*CountriesApi* | [**getCountries**](docs/Api/CountriesApi.md#getcountries) | **GET** /countries | Returns all Countries
*CountriesApi* | [**getCountriesKey**](docs/Api/CountriesApi.md#getcountrieskey) | **GET** /countries/{key} | Returns a Country
*CountryGroupsApi* | [**getCountryGroups**](docs/Api/CountryGroupsApi.md#getcountrygroups) | **GET** /country_groups | Returns all Country Groups
*CountryGroupsApi* | [**getCountryGroupsKey**](docs/Api/CountryGroupsApi.md#getcountrygroupskey) | **GET** /country_groups/{key} | Returns a Country Group
*CountryOfRegistrationsApi* | [**getCountriesOfRegistration**](docs/Api/CountryOfRegistrationsApi.md#getcountriesofregistration) | **GET** /countries_of_registration | Returns all Country Of Registrations
*CountryOfRegistrationsApi* | [**getCountriesOfRegistrationKey**](docs/Api/CountryOfRegistrationsApi.md#getcountriesofregistrationkey) | **GET** /countries_of_registration/{key} | Returns a Country Of Registration
*CurrenciesApi* | [**getCurrencies**](docs/Api/CurrenciesApi.md#getcurrencies) | **GET** /currencies | Returns all Currencies
*CurrenciesApi* | [**getCurrenciesKey**](docs/Api/CurrenciesApi.md#getcurrencieskey) | **GET** /currencies/{key} | Returns a Currency
*DatevSettingsApi* | [**getDatevSettings**](docs/Api/DatevSettingsApi.md#getdatevsettings) | **GET** /datev_settings | Returns all Datev Settings
*DatevSettingsApi* | [**putDatevSettings**](docs/Api/DatevSettingsApi.md#putdatevsettings) | **PUT** /datev_settings | Updates a Datev Settings
*EUGoodsServicesTypesApi* | [**getEuGoodsServicesTypes**](docs/Api/EUGoodsServicesTypesApi.md#geteugoodsservicestypes) | **GET** /eu_goods_services_types | Returns all EU Goods Services Types
*EUGoodsServicesTypesApi* | [**getEuGoodsServicesTypesKey**](docs/Api/EUGoodsServicesTypesApi.md#geteugoodsservicestypeskey) | **GET** /eu_goods_services_types/{key} | Returns a EU Goods Services Type
*EUSalesDescriptionsApi* | [**getEuSalesDescriptions**](docs/Api/EUSalesDescriptionsApi.md#geteusalesdescriptions) | **GET** /eu_sales_descriptions | Returns all EU Sales Descriptions
*EUSalesDescriptionsApi* | [**getEuSalesDescriptionsKey**](docs/Api/EUSalesDescriptionsApi.md#geteusalesdescriptionskey) | **GET** /eu_sales_descriptions/{key} | Returns a EU Sales Description
*EmailSettingsApi* | [**getEmailSettings**](docs/Api/EmailSettingsApi.md#getemailsettings) | **GET** /email_settings | Returns all Email Settings
*EmailSettingsApi* | [**putEmailSettings**](docs/Api/EmailSettingsApi.md#putemailsettings) | **PUT** /email_settings | Updates a Email Settings
*ExchangeRatesApi* | [**getExchangeRates**](docs/Api/ExchangeRatesApi.md#getexchangerates) | **GET** /exchange_rates | Returns all Exchange Rates
*ExchangeRatesApi* | [**getExchangeRatesKey**](docs/Api/ExchangeRatesApi.md#getexchangerateskey) | **GET** /exchange_rates/{key} | Returns a Exchange Rate
*FinancialSettingsApi* | [**getFinancialSettings**](docs/Api/FinancialSettingsApi.md#getfinancialsettings) | **GET** /financial_settings | Returns all Financial Settings
*FinancialSettingsApi* | [**putFinancialSettings**](docs/Api/FinancialSettingsApi.md#putfinancialsettings) | **PUT** /financial_settings | Updates a Financial Settings
*HostedArtefactPaymentSettingsApi* | [**deleteHostedArtefactPaymentSettingsKey**](docs/Api/HostedArtefactPaymentSettingsApi.md#deletehostedartefactpaymentsettingskey) | **DELETE** /hosted_artefact_payment_settings/{key} | Deletes a Hosted Artefact Payment Setting
*HostedArtefactPaymentSettingsApi* | [**getHostedArtefactPaymentSettings**](docs/Api/HostedArtefactPaymentSettingsApi.md#gethostedartefactpaymentsettings) | **GET** /hosted_artefact_payment_settings | Returns all Hosted Artefact Payment Settings
*HostedArtefactPaymentSettingsApi* | [**getHostedArtefactPaymentSettingsKey**](docs/Api/HostedArtefactPaymentSettingsApi.md#gethostedartefactpaymentsettingskey) | **GET** /hosted_artefact_payment_settings/{key} | Returns a Hosted Artefact Payment Setting
*HostedArtefactPaymentSettingsApi* | [**postHostedArtefactPaymentSettings**](docs/Api/HostedArtefactPaymentSettingsApi.md#posthostedartefactpaymentsettings) | **POST** /hosted_artefact_payment_settings | Creates a Hosted Artefact Payment Setting
*InvoiceSettingsApi* | [**getInvoiceSettings**](docs/Api/InvoiceSettingsApi.md#getinvoicesettings) | **GET** /invoice_settings | Returns all Invoice Settings
*InvoiceSettingsApi* | [**putInvoiceSettings**](docs/Api/InvoiceSettingsApi.md#putinvoicesettings) | **PUT** /invoice_settings | Updates a Invoice Settings
*JournalCodeTypesApi* | [**getJournalCodeTypes**](docs/Api/JournalCodeTypesApi.md#getjournalcodetypes) | **GET** /journal_code_types | Returns all Journal Code Types
*JournalCodeTypesApi* | [**getJournalCodeTypesKey**](docs/Api/JournalCodeTypesApi.md#getjournalcodetypeskey) | **GET** /journal_code_types/{key} | Returns a Journal Code Type
*JournalCodesApi* | [**deleteJournalCodesKey**](docs/Api/JournalCodesApi.md#deletejournalcodeskey) | **DELETE** /journal_codes/{key} | Deletes a Journal Code
*JournalCodesApi* | [**getJournalCodes**](docs/Api/JournalCodesApi.md#getjournalcodes) | **GET** /journal_codes | Returns all Journal Codes
*JournalCodesApi* | [**getJournalCodesKey**](docs/Api/JournalCodesApi.md#getjournalcodeskey) | **GET** /journal_codes/{key} | Returns a Journal Code
*JournalCodesApi* | [**postJournalCodes**](docs/Api/JournalCodesApi.md#postjournalcodes) | **POST** /journal_codes | Creates a Journal Code
*JournalCodesApi* | [**putJournalCodesKey**](docs/Api/JournalCodesApi.md#putjournalcodeskey) | **PUT** /journal_codes/{key} | Updates a Journal Code
*JournalsApi* | [**deleteJournalsKey**](docs/Api/JournalsApi.md#deletejournalskey) | **DELETE** /journals/{key} | Deletes a Journal
*JournalsApi* | [**getJournals**](docs/Api/JournalsApi.md#getjournals) | **GET** /journals | Returns all Journals
*JournalsApi* | [**getJournalsKey**](docs/Api/JournalsApi.md#getjournalskey) | **GET** /journals/{key} | Returns a Journal
*JournalsApi* | [**postJournals**](docs/Api/JournalsApi.md#postjournals) | **POST** /journals | Creates a Journal
*JournalsApi* | [**postJournalsKeyReissue**](docs/Api/JournalsApi.md#postjournalskeyreissue) | **POST** /journals/{key}/reissue | Reissues an existing Journal by voiding the existing one and creating a new one
*LedgerAccountClassificationsApi* | [**getLedgerAccountClassifications**](docs/Api/LedgerAccountClassificationsApi.md#getledgeraccountclassifications) | **GET** /ledger_account_classifications | Returns all Ledger Account Classifications
*LedgerAccountClassificationsApi* | [**getLedgerAccountClassificationsKey**](docs/Api/LedgerAccountClassificationsApi.md#getledgeraccountclassificationskey) | **GET** /ledger_account_classifications/{key} | Returns a Ledger Account Classification
*LedgerAccountOpeningBalancesApi* | [**deleteLedgerAccountOpeningBalancesKey**](docs/Api/LedgerAccountOpeningBalancesApi.md#deleteledgeraccountopeningbalanceskey) | **DELETE** /ledger_account_opening_balances/{key} | Deletes a Ledger Account Opening Balance
*LedgerAccountOpeningBalancesApi* | [**getLedgerAccountOpeningBalances**](docs/Api/LedgerAccountOpeningBalancesApi.md#getledgeraccountopeningbalances) | **GET** /ledger_account_opening_balances | Returns all Ledger Account Opening Balances
*LedgerAccountOpeningBalancesApi* | [**getLedgerAccountOpeningBalancesKey**](docs/Api/LedgerAccountOpeningBalancesApi.md#getledgeraccountopeningbalanceskey) | **GET** /ledger_account_opening_balances/{key} | Returns a Ledger Account Opening Balance
*LedgerAccountOpeningBalancesApi* | [**postLedgerAccountOpeningBalances**](docs/Api/LedgerAccountOpeningBalancesApi.md#postledgeraccountopeningbalances) | **POST** /ledger_account_opening_balances | Creates a Ledger Account Opening Balance
*LedgerAccountOpeningBalancesApi* | [**putLedgerAccountOpeningBalancesKey**](docs/Api/LedgerAccountOpeningBalancesApi.md#putledgeraccountopeningbalanceskey) | **PUT** /ledger_account_opening_balances/{key} | Updates a Ledger Account Opening Balance
*LedgerAccountTypesApi* | [**getLedgerAccountTypes**](docs/Api/LedgerAccountTypesApi.md#getledgeraccounttypes) | **GET** /ledger_account_types | Returns all Ledger Account Types
*LedgerAccountTypesApi* | [**getLedgerAccountTypesKey**](docs/Api/LedgerAccountTypesApi.md#getledgeraccounttypeskey) | **GET** /ledger_account_types/{key} | Returns a Ledger Account Type
*LedgerAccountsApi* | [**getLedgerAccounts**](docs/Api/LedgerAccountsApi.md#getledgeraccounts) | **GET** /ledger_accounts | Returns all Ledger Accounts
*LedgerAccountsApi* | [**getLedgerAccountsKey**](docs/Api/LedgerAccountsApi.md#getledgeraccountskey) | **GET** /ledger_accounts/{key} | Returns a Ledger Account
*LedgerAccountsApi* | [**postLedgerAccounts**](docs/Api/LedgerAccountsApi.md#postledgeraccounts) | **POST** /ledger_accounts | Creates a Ledger Account
*LedgerAccountsApi* | [**putLedgerAccountsKey**](docs/Api/LedgerAccountsApi.md#putledgeraccountskey) | **PUT** /ledger_accounts/{key} | Updates a Ledger Account
*LedgerEntriesApi* | [**getLedgerEntries**](docs/Api/LedgerEntriesApi.md#getledgerentries) | **GET** /ledger_entries | Returns all Ledger Entries
*LedgerEntriesApi* | [**getLedgerEntriesKey**](docs/Api/LedgerEntriesApi.md#getledgerentrieskey) | **GET** /ledger_entries/{key} | Returns a Ledger Entry
*LegalFormTypesApi* | [**getLegalFormTypes**](docs/Api/LegalFormTypesApi.md#getlegalformtypes) | **GET** /legal_form_types | Returns all Legal Form Types
*LegalFormTypesApi* | [**getLegalFormTypesKey**](docs/Api/LegalFormTypesApi.md#getlegalformtypeskey) | **GET** /legal_form_types/{key} | Returns a Legal Form Type
*LiveExchangeRatesApi* | [**getLiveExchangeRates**](docs/Api/LiveExchangeRatesApi.md#getliveexchangerates) | **GET** /live_exchange_rates | Returns all Live Exchange Rates
*LiveExchangeRatesApi* | [**getLiveExchangeRatesKey**](docs/Api/LiveExchangeRatesApi.md#getliveexchangerateskey) | **GET** /live_exchange_rates/{key} | Returns a Live Exchange Rate
*MigrationTaxReturnsApi* | [**getMigrationTaxReturns**](docs/Api/MigrationTaxReturnsApi.md#getmigrationtaxreturns) | **GET** /migration_tax_returns | Returns all Migration Tax Returns
*MigrationTaxReturnsApi* | [**getMigrationTaxReturnsKey**](docs/Api/MigrationTaxReturnsApi.md#getmigrationtaxreturnskey) | **GET** /migration_tax_returns/{key} | Returns a Migration Tax Return
*MigrationTaxReturnsApi* | [**postMigrationTaxReturns**](docs/Api/MigrationTaxReturnsApi.md#postmigrationtaxreturns) | **POST** /migration_tax_returns | Creates a Migration Tax Return
*MigrationsApi* | [**getMigrations**](docs/Api/MigrationsApi.md#getmigrations) | **GET** /migrations | Returns all Migrations
*MigrationsApi* | [**putMigrations**](docs/Api/MigrationsApi.md#putmigrations) | **PUT** /migrations | Updates a Migrations
*OpeningBalanceJournalsApi* | [**deleteOpeningBalanceJournalsKey**](docs/Api/OpeningBalanceJournalsApi.md#deleteopeningbalancejournalskey) | **DELETE** /opening_balance_journals/{key} | Deletes a Opening Balance Journal
*OpeningBalanceJournalsApi* | [**getOpeningBalanceJournals**](docs/Api/OpeningBalanceJournalsApi.md#getopeningbalancejournals) | **GET** /opening_balance_journals | Returns all Opening Balance Journals
*OpeningBalanceJournalsApi* | [**getOpeningBalanceJournalsKey**](docs/Api/OpeningBalanceJournalsApi.md#getopeningbalancejournalskey) | **GET** /opening_balance_journals/{key} | Returns a Opening Balance Journal
*OpeningBalanceJournalsApi* | [**postOpeningBalanceJournals**](docs/Api/OpeningBalanceJournalsApi.md#postopeningbalancejournals) | **POST** /opening_balance_journals | Creates a Opening Balance Journal
*OtherPaymentsApi* | [**deleteOtherPaymentsKey**](docs/Api/OtherPaymentsApi.md#deleteotherpaymentskey) | **DELETE** /other_payments/{key} | Deletes a Other Payment
*OtherPaymentsApi* | [**getOtherPayments**](docs/Api/OtherPaymentsApi.md#getotherpayments) | **GET** /other_payments | Returns all Other Payments
*OtherPaymentsApi* | [**getOtherPaymentsKey**](docs/Api/OtherPaymentsApi.md#getotherpaymentskey) | **GET** /other_payments/{key} | Returns a Other Payment
*OtherPaymentsApi* | [**postOtherPayments**](docs/Api/OtherPaymentsApi.md#postotherpayments) | **POST** /other_payments | Creates a Other Payment
*OtherPaymentsApi* | [**putOtherPaymentsKey**](docs/Api/OtherPaymentsApi.md#putotherpaymentskey) | **PUT** /other_payments/{key} | Updates a Other Payment
*PaymentMethodsApi* | [**getPaymentMethods**](docs/Api/PaymentMethodsApi.md#getpaymentmethods) | **GET** /payment_methods | Returns all Payment Methods
*PaymentMethodsApi* | [**getPaymentMethodsKey**](docs/Api/PaymentMethodsApi.md#getpaymentmethodskey) | **GET** /payment_methods/{key} | Returns a Payment Method
*ProductSalesPriceTypesApi* | [**deleteProductSalesPriceTypesKey**](docs/Api/ProductSalesPriceTypesApi.md#deleteproductsalespricetypeskey) | **DELETE** /product_sales_price_types/{key} | Deletes a Product Sales Price Type
*ProductSalesPriceTypesApi* | [**getProductSalesPriceTypes**](docs/Api/ProductSalesPriceTypesApi.md#getproductsalespricetypes) | **GET** /product_sales_price_types | Returns all Product Sales Price Types
*ProductSalesPriceTypesApi* | [**getProductSalesPriceTypesKey**](docs/Api/ProductSalesPriceTypesApi.md#getproductsalespricetypeskey) | **GET** /product_sales_price_types/{key} | Returns a Product Sales Price Type
*ProductSalesPriceTypesApi* | [**postProductSalesPriceTypes**](docs/Api/ProductSalesPriceTypesApi.md#postproductsalespricetypes) | **POST** /product_sales_price_types | Creates a Product Sales Price Type
*ProductSalesPriceTypesApi* | [**putProductSalesPriceTypesKey**](docs/Api/ProductSalesPriceTypesApi.md#putproductsalespricetypeskey) | **PUT** /product_sales_price_types/{key} | Updates a Product Sales Price Type
*ProductsApi* | [**deleteProductsKey**](docs/Api/ProductsApi.md#deleteproductskey) | **DELETE** /products/{key} | Deletes a Product
*ProductsApi* | [**getProducts**](docs/Api/ProductsApi.md#getproducts) | **GET** /products | Returns all Products
*ProductsApi* | [**getProductsKey**](docs/Api/ProductsApi.md#getproductskey) | **GET** /products/{key} | Returns a Product
*ProductsApi* | [**postProducts**](docs/Api/ProductsApi.md#postproducts) | **POST** /products | Creates a Product
*ProductsApi* | [**putProductsKey**](docs/Api/ProductsApi.md#putproductskey) | **PUT** /products/{key} | Updates a Product
*PurchaseCorrectiveInvoicesApi* | [**deletePurchaseCorrectiveInvoicesKey**](docs/Api/PurchaseCorrectiveInvoicesApi.md#deletepurchasecorrectiveinvoiceskey) | **DELETE** /purchase_corrective_invoices/{key} | Deletes a Purchase Corrective Invoice
*PurchaseCorrectiveInvoicesApi* | [**getPurchaseCorrectiveInvoices**](docs/Api/PurchaseCorrectiveInvoicesApi.md#getpurchasecorrectiveinvoices) | **GET** /purchase_corrective_invoices | Returns all Purchase Corrective Invoices
*PurchaseCorrectiveInvoicesApi* | [**getPurchaseCorrectiveInvoicesKey**](docs/Api/PurchaseCorrectiveInvoicesApi.md#getpurchasecorrectiveinvoiceskey) | **GET** /purchase_corrective_invoices/{key} | Returns a Purchase Corrective Invoice
*PurchaseCorrectiveInvoicesApi* | [**postPurchaseCorrectiveInvoices**](docs/Api/PurchaseCorrectiveInvoicesApi.md#postpurchasecorrectiveinvoices) | **POST** /purchase_corrective_invoices | Creates a Purchase Corrective Invoice
*PurchaseCorrectiveInvoicesApi* | [**putPurchaseCorrectiveInvoicesKey**](docs/Api/PurchaseCorrectiveInvoicesApi.md#putpurchasecorrectiveinvoiceskey) | **PUT** /purchase_corrective_invoices/{key} | Updates a Purchase Corrective Invoice
*PurchaseCreditNotesApi* | [**deletePurchaseCreditNotesKey**](docs/Api/PurchaseCreditNotesApi.md#deletepurchasecreditnoteskey) | **DELETE** /purchase_credit_notes/{key} | Deletes a Purchase Credit Note
*PurchaseCreditNotesApi* | [**getPurchaseCreditNotes**](docs/Api/PurchaseCreditNotesApi.md#getpurchasecreditnotes) | **GET** /purchase_credit_notes | Returns all Purchase Credit Notes
*PurchaseCreditNotesApi* | [**getPurchaseCreditNotesKey**](docs/Api/PurchaseCreditNotesApi.md#getpurchasecreditnoteskey) | **GET** /purchase_credit_notes/{key} | Returns a Purchase Credit Note
*PurchaseCreditNotesApi* | [**postPurchaseCreditNotes**](docs/Api/PurchaseCreditNotesApi.md#postpurchasecreditnotes) | **POST** /purchase_credit_notes | Creates a Purchase Credit Note
*PurchaseCreditNotesApi* | [**postPurchaseCreditNotesKeyRelease**](docs/Api/PurchaseCreditNotesApi.md#postpurchasecreditnoteskeyrelease) | **POST** /purchase_credit_notes/{key}/release | Releases a Purchase Credit Note
*PurchaseCreditNotesApi* | [**putPurchaseCreditNotesKey**](docs/Api/PurchaseCreditNotesApi.md#putpurchasecreditnoteskey) | **PUT** /purchase_credit_notes/{key} | Updates a Purchase Credit Note
*PurchaseInvoicesApi* | [**deletePurchaseInvoicesKey**](docs/Api/PurchaseInvoicesApi.md#deletepurchaseinvoiceskey) | **DELETE** /purchase_invoices/{key} | Deletes a Purchase Invoice
*PurchaseInvoicesApi* | [**getPurchaseInvoices**](docs/Api/PurchaseInvoicesApi.md#getpurchaseinvoices) | **GET** /purchase_invoices | Returns all Purchase Invoices
*PurchaseInvoicesApi* | [**getPurchaseInvoicesKey**](docs/Api/PurchaseInvoicesApi.md#getpurchaseinvoiceskey) | **GET** /purchase_invoices/{key} | Returns a Purchase Invoice
*PurchaseInvoicesApi* | [**postPurchaseInvoices**](docs/Api/PurchaseInvoicesApi.md#postpurchaseinvoices) | **POST** /purchase_invoices | Creates a Purchase Invoice
*PurchaseInvoicesApi* | [**postPurchaseInvoicesKeyRelease**](docs/Api/PurchaseInvoicesApi.md#postpurchaseinvoiceskeyrelease) | **POST** /purchase_invoices/{key}/release | Releases a Purchase Invoice
*PurchaseInvoicesApi* | [**putPurchaseInvoicesKey**](docs/Api/PurchaseInvoicesApi.md#putpurchaseinvoiceskey) | **PUT** /purchase_invoices/{key} | Updates a Purchase Invoice
*PurchaseQuickEntriesApi* | [**deletePurchaseQuickEntriesKey**](docs/Api/PurchaseQuickEntriesApi.md#deletepurchasequickentrieskey) | **DELETE** /purchase_quick_entries/{key} | Deletes a Purchase Quick Entry
*PurchaseQuickEntriesApi* | [**getPurchaseQuickEntries**](docs/Api/PurchaseQuickEntriesApi.md#getpurchasequickentries) | **GET** /purchase_quick_entries | Returns all Purchase Quick Entries
*PurchaseQuickEntriesApi* | [**getPurchaseQuickEntriesKey**](docs/Api/PurchaseQuickEntriesApi.md#getpurchasequickentrieskey) | **GET** /purchase_quick_entries/{key} | Returns a Purchase Quick Entry
*PurchaseQuickEntriesApi* | [**postPurchaseQuickEntries**](docs/Api/PurchaseQuickEntriesApi.md#postpurchasequickentries) | **POST** /purchase_quick_entries | Creates a Purchase Quick Entry
*PurchaseQuickEntriesApi* | [**putPurchaseQuickEntriesKey**](docs/Api/PurchaseQuickEntriesApi.md#putpurchasequickentrieskey) | **PUT** /purchase_quick_entries/{key} | Updates a Purchase Quick Entry
*QuickEntryTypesApi* | [**getQuickEntryTypes**](docs/Api/QuickEntryTypesApi.md#getquickentrytypes) | **GET** /quick_entry_types | Returns all Quick Entry Types
*QuickEntryTypesApi* | [**getQuickEntryTypesKey**](docs/Api/QuickEntryTypesApi.md#getquickentrytypeskey) | **GET** /quick_entry_types/{key} | Returns a Quick Entry Type
*SalesCorrectiveInvoicesApi* | [**deleteSalesCorrectiveInvoicesKey**](docs/Api/SalesCorrectiveInvoicesApi.md#deletesalescorrectiveinvoiceskey) | **DELETE** /sales_corrective_invoices/{key} | Voids a Sales Corrective Invoice
*SalesCorrectiveInvoicesApi* | [**getSalesCorrectiveInvoices**](docs/Api/SalesCorrectiveInvoicesApi.md#getsalescorrectiveinvoices) | **GET** /sales_corrective_invoices | Returns all Sales Corrective Invoices
*SalesCorrectiveInvoicesApi* | [**getSalesCorrectiveInvoicesKey**](docs/Api/SalesCorrectiveInvoicesApi.md#getsalescorrectiveinvoiceskey) | **GET** /sales_corrective_invoices/{key} | Returns a Sales Corrective Invoice
*SalesCorrectiveInvoicesApi* | [**postSalesCorrectiveInvoices**](docs/Api/SalesCorrectiveInvoicesApi.md#postsalescorrectiveinvoices) | **POST** /sales_corrective_invoices | Creates a Sales Corrective Invoice
*SalesCorrectiveInvoicesApi* | [**putSalesCorrectiveInvoicesKey**](docs/Api/SalesCorrectiveInvoicesApi.md#putsalescorrectiveinvoiceskey) | **PUT** /sales_corrective_invoices/{key} | Updates a Sales Corrective Invoice
*SalesCreditNotesApi* | [**deleteSalesCreditNotesKey**](docs/Api/SalesCreditNotesApi.md#deletesalescreditnoteskey) | **DELETE** /sales_credit_notes/{key} | Voids a Sales Credit Note
*SalesCreditNotesApi* | [**getSalesCreditNotes**](docs/Api/SalesCreditNotesApi.md#getsalescreditnotes) | **GET** /sales_credit_notes | Returns all Sales Credit Notes
*SalesCreditNotesApi* | [**getSalesCreditNotesKey**](docs/Api/SalesCreditNotesApi.md#getsalescreditnoteskey) | **GET** /sales_credit_notes/{key} | Returns a Sales Credit Note
*SalesCreditNotesApi* | [**postSalesCreditNotes**](docs/Api/SalesCreditNotesApi.md#postsalescreditnotes) | **POST** /sales_credit_notes | Creates a Sales Credit Note
*SalesCreditNotesApi* | [**postSalesCreditNotesKeyRelease**](docs/Api/SalesCreditNotesApi.md#postsalescreditnoteskeyrelease) | **POST** /sales_credit_notes/{key}/release | Releases a Sales Credit Note
*SalesCreditNotesApi* | [**putSalesCreditNotesKey**](docs/Api/SalesCreditNotesApi.md#putsalescreditnoteskey) | **PUT** /sales_credit_notes/{key} | Updates a Sales Credit Note
*SalesEstimatesApi* | [**deleteSalesEstimatesKey**](docs/Api/SalesEstimatesApi.md#deletesalesestimateskey) | **DELETE** /sales_estimates/{key} | Deletes a Sales Estimate
*SalesEstimatesApi* | [**getSalesEstimates**](docs/Api/SalesEstimatesApi.md#getsalesestimates) | **GET** /sales_estimates | Returns all Sales Estimates
*SalesEstimatesApi* | [**getSalesEstimatesKey**](docs/Api/SalesEstimatesApi.md#getsalesestimateskey) | **GET** /sales_estimates/{key} | Returns a Sales Estimate
*SalesEstimatesApi* | [**postSalesEstimates**](docs/Api/SalesEstimatesApi.md#postsalesestimates) | **POST** /sales_estimates | Creates a Sales Estimate
*SalesEstimatesApi* | [**putSalesEstimatesKey**](docs/Api/SalesEstimatesApi.md#putsalesestimateskey) | **PUT** /sales_estimates/{key} | Updates a Sales Estimate
*SalesInvoicesApi* | [**deleteSalesInvoicesKey**](docs/Api/SalesInvoicesApi.md#deletesalesinvoiceskey) | **DELETE** /sales_invoices/{key} | Voids a Sales Invoice
*SalesInvoicesApi* | [**getSalesInvoices**](docs/Api/SalesInvoicesApi.md#getsalesinvoices) | **GET** /sales_invoices | Returns all Sales Invoices
*SalesInvoicesApi* | [**getSalesInvoicesKey**](docs/Api/SalesInvoicesApi.md#getsalesinvoiceskey) | **GET** /sales_invoices/{key} | Returns a Sales Invoice
*SalesInvoicesApi* | [**postSalesInvoices**](docs/Api/SalesInvoicesApi.md#postsalesinvoices) | **POST** /sales_invoices | Creates a Sales Invoice
*SalesInvoicesApi* | [**postSalesInvoicesKeyRelease**](docs/Api/SalesInvoicesApi.md#postsalesinvoiceskeyrelease) | **POST** /sales_invoices/{key}/release | Releases a Sales Invoice
*SalesInvoicesApi* | [**putSalesInvoicesKey**](docs/Api/SalesInvoicesApi.md#putsalesinvoiceskey) | **PUT** /sales_invoices/{key} | Updates a Sales Invoice
*SalesQuickEntriesApi* | [**deleteSalesQuickEntriesKey**](docs/Api/SalesQuickEntriesApi.md#deletesalesquickentrieskey) | **DELETE** /sales_quick_entries/{key} | Deletes a Sales Quick Entry
*SalesQuickEntriesApi* | [**getSalesQuickEntries**](docs/Api/SalesQuickEntriesApi.md#getsalesquickentries) | **GET** /sales_quick_entries | Returns all Sales Quick Entries
*SalesQuickEntriesApi* | [**getSalesQuickEntriesKey**](docs/Api/SalesQuickEntriesApi.md#getsalesquickentrieskey) | **GET** /sales_quick_entries/{key} | Returns a Sales Quick Entry
*SalesQuickEntriesApi* | [**postSalesQuickEntries**](docs/Api/SalesQuickEntriesApi.md#postsalesquickentries) | **POST** /sales_quick_entries | Creates a Sales Quick Entry
*SalesQuickEntriesApi* | [**putSalesQuickEntriesKey**](docs/Api/SalesQuickEntriesApi.md#putsalesquickentrieskey) | **PUT** /sales_quick_entries/{key} | Updates a Sales Quick Entry
*SalesQuotesApi* | [**deleteSalesQuotesKey**](docs/Api/SalesQuotesApi.md#deletesalesquoteskey) | **DELETE** /sales_quotes/{key} | Deletes a Sales Quote
*SalesQuotesApi* | [**getSalesQuotes**](docs/Api/SalesQuotesApi.md#getsalesquotes) | **GET** /sales_quotes | Returns all Sales Quotes
*SalesQuotesApi* | [**getSalesQuotesKey**](docs/Api/SalesQuotesApi.md#getsalesquoteskey) | **GET** /sales_quotes/{key} | Returns a Sales Quote
*SalesQuotesApi* | [**postSalesQuotes**](docs/Api/SalesQuotesApi.md#postsalesquotes) | **POST** /sales_quotes | Creates a Sales Quote
*SalesQuotesApi* | [**putSalesQuotesKey**](docs/Api/SalesQuotesApi.md#putsalesquoteskey) | **PUT** /sales_quotes/{key} | Updates a Sales Quote
*ServiceRateTypesApi* | [**deleteServiceRateTypesKey**](docs/Api/ServiceRateTypesApi.md#deleteserviceratetypeskey) | **DELETE** /service_rate_types/{key} | Deletes a Service Rate Type
*ServiceRateTypesApi* | [**getServiceRateTypes**](docs/Api/ServiceRateTypesApi.md#getserviceratetypes) | **GET** /service_rate_types | Returns all Service Rate Types
*ServiceRateTypesApi* | [**getServiceRateTypesKey**](docs/Api/ServiceRateTypesApi.md#getserviceratetypeskey) | **GET** /service_rate_types/{key} | Returns a Service Rate Type
*ServiceRateTypesApi* | [**postServiceRateTypes**](docs/Api/ServiceRateTypesApi.md#postserviceratetypes) | **POST** /service_rate_types | Creates a Service Rate Type
*ServiceRateTypesApi* | [**putServiceRateTypesKey**](docs/Api/ServiceRateTypesApi.md#putserviceratetypeskey) | **PUT** /service_rate_types/{key} | Updates a Service Rate Type
*ServicesApi* | [**deleteServicesKey**](docs/Api/ServicesApi.md#deleteserviceskey) | **DELETE** /services/{key} | Deletes a Service
*ServicesApi* | [**getServices**](docs/Api/ServicesApi.md#getservices) | **GET** /services | Returns all Services
*ServicesApi* | [**getServicesKey**](docs/Api/ServicesApi.md#getserviceskey) | **GET** /services/{key} | Returns a Service
*ServicesApi* | [**postServices**](docs/Api/ServicesApi.md#postservices) | **POST** /services | Creates a Service
*ServicesApi* | [**putServicesKey**](docs/Api/ServicesApi.md#putserviceskey) | **PUT** /services/{key} | Updates a Service
*StockItemsApi* | [**deleteStockItemsKey**](docs/Api/StockItemsApi.md#deletestockitemskey) | **DELETE** /stock_items/{key} | Deletes a Stock Item
*StockItemsApi* | [**getStockItems**](docs/Api/StockItemsApi.md#getstockitems) | **GET** /stock_items | Returns all Stock Items
*StockItemsApi* | [**getStockItemsKey**](docs/Api/StockItemsApi.md#getstockitemskey) | **GET** /stock_items/{key} | Returns a Stock Item
*StockItemsApi* | [**postStockItems**](docs/Api/StockItemsApi.md#poststockitems) | **POST** /stock_items | Creates a Stock Item
*StockItemsApi* | [**putStockItemsKey**](docs/Api/StockItemsApi.md#putstockitemskey) | **PUT** /stock_items/{key} | Updates a Stock Item
*StockMovementsApi* | [**deleteStockMovementsKey**](docs/Api/StockMovementsApi.md#deletestockmovementskey) | **DELETE** /stock_movements/{key} | Deletes a Stock Movement
*StockMovementsApi* | [**getStockMovements**](docs/Api/StockMovementsApi.md#getstockmovements) | **GET** /stock_movements | Returns all Stock Movements
*StockMovementsApi* | [**getStockMovementsKey**](docs/Api/StockMovementsApi.md#getstockmovementskey) | **GET** /stock_movements/{key} | Returns a Stock Movement
*StockMovementsApi* | [**postStockMovements**](docs/Api/StockMovementsApi.md#poststockmovements) | **POST** /stock_movements | Creates a Stock Movement
*StockMovementsApi* | [**putStockMovementsKey**](docs/Api/StockMovementsApi.md#putstockmovementskey) | **PUT** /stock_movements/{key} | Updates a Stock Movement
*TaxDeterminationsApi* | [**getTaxDeterminations**](docs/Api/TaxDeterminationsApi.md#gettaxdeterminations) | **GET** /tax_determinations | Returns all Tax Determinations
*TaxOfficesApi* | [**getTaxOffices**](docs/Api/TaxOfficesApi.md#gettaxoffices) | **GET** /tax_offices | Returns all Tax Offices
*TaxOfficesApi* | [**getTaxOfficesKey**](docs/Api/TaxOfficesApi.md#gettaxofficeskey) | **GET** /tax_offices/{key} | Returns a Tax Office
*TaxProfilesApi* | [**getTaxProfiles**](docs/Api/TaxProfilesApi.md#gettaxprofiles) | **GET** /tax_profiles | Returns all Tax Profiles
*TaxProfilesApi* | [**getTaxProfilesKey**](docs/Api/TaxProfilesApi.md#gettaxprofileskey) | **GET** /tax_profiles/{key} | Returns a Tax Profile
*TaxProfilesApi* | [**putTaxProfilesKey**](docs/Api/TaxProfilesApi.md#puttaxprofileskey) | **PUT** /tax_profiles/{key} | Updates a Tax Profile
*TaxRatesApi* | [**deleteTaxRatesKey**](docs/Api/TaxRatesApi.md#deletetaxrateskey) | **DELETE** /tax_rates/{key} | Deletes a Tax Rate (US only)
*TaxRatesApi* | [**getTaxRates**](docs/Api/TaxRatesApi.md#gettaxrates) | **GET** /tax_rates | Returns all Tax Rates
*TaxRatesApi* | [**getTaxRatesKey**](docs/Api/TaxRatesApi.md#gettaxrateskey) | **GET** /tax_rates/{key} | Returns a Tax Rate
*TaxRatesApi* | [**postTaxRates**](docs/Api/TaxRatesApi.md#posttaxrates) | **POST** /tax_rates | Creates a Tax Rate (US only)
*TaxRatesApi* | [**putTaxRatesKey**](docs/Api/TaxRatesApi.md#puttaxrateskey) | **PUT** /tax_rates/{key} | Updates a Tax Rate (US only)
*TaxReturnFrequenciesApi* | [**getTaxReturnFrequencies**](docs/Api/TaxReturnFrequenciesApi.md#gettaxreturnfrequencies) | **GET** /tax_return_frequencies | Returns all Tax Return Frequencies
*TaxReturnFrequenciesApi* | [**getTaxReturnFrequenciesKey**](docs/Api/TaxReturnFrequenciesApi.md#gettaxreturnfrequencieskey) | **GET** /tax_return_frequencies/{key} | Returns a Tax Return Frequency
*TaxSchemesApi* | [**getTaxSchemes**](docs/Api/TaxSchemesApi.md#gettaxschemes) | **GET** /tax_schemes | Returns all Tax Schemes
*TaxSchemesApi* | [**getTaxSchemesKey**](docs/Api/TaxSchemesApi.md#gettaxschemeskey) | **GET** /tax_schemes/{key} | Returns a Tax Scheme
*TaxTypesApi* | [**getTaxTypes**](docs/Api/TaxTypesApi.md#gettaxtypes) | **GET** /tax_types | Returns all Tax Types
*TaxTypesApi* | [**getTaxTypesKey**](docs/Api/TaxTypesApi.md#gettaxtypeskey) | **GET** /tax_types/{key} | Returns a Tax Type
*TransactionTypesApi* | [**getTransactionTypes**](docs/Api/TransactionTypesApi.md#gettransactiontypes) | **GET** /transaction_types | Returns all Transaction Types
*TransactionTypesApi* | [**getTransactionTypesKey**](docs/Api/TransactionTypesApi.md#gettransactiontypeskey) | **GET** /transaction_types/{key} | Returns a Transaction Type
*TransactionsApi* | [**getTransactions**](docs/Api/TransactionsApi.md#gettransactions) | **GET** /transactions | Returns all Transactions
*TransactionsApi* | [**getTransactionsKey**](docs/Api/TransactionsApi.md#gettransactionskey) | **GET** /transactions/{key} | Returns a Transaction
*UnallocatedArtefactsApi* | [**getUnallocatedArtefacts**](docs/Api/UnallocatedArtefactsApi.md#getunallocatedartefacts) | **GET** /unallocated_artefacts | Returns all Unallocated Artefacts
*UnallocatedArtefactsApi* | [**getUnallocatedArtefactsKey**](docs/Api/UnallocatedArtefactsApi.md#getunallocatedartefactskey) | **GET** /unallocated_artefacts/{key} | Returns a Unallocated Artefact

## Models

- [Address](docs/Model/Address.md)
- [AddressRegion](docs/Model/AddressRegion.md)
- [AllocatedArtefact](docs/Model/AllocatedArtefact.md)
- [AllocatedPaymentArtefact](docs/Model/AllocatedPaymentArtefact.md)
- [AnalysisType](docs/Model/AnalysisType.md)
- [AnalysisTypeCategory](docs/Model/AnalysisTypeCategory.md)
- [AnalysisTypeLineItem](docs/Model/AnalysisTypeLineItem.md)
- [ArtefactDetailedTaxAnalysis](docs/Model/ArtefactDetailedTaxAnalysis.md)
- [ArtefactDetailedTaxAnalysisBreakdown](docs/Model/ArtefactDetailedTaxAnalysisBreakdown.md)
- [ArtefactTaxAnalysis](docs/Model/ArtefactTaxAnalysis.md)
- [Attachment](docs/Model/Attachment.md)
- [BankAccount](docs/Model/BankAccount.md)
- [BankAccountContact](docs/Model/BankAccountContact.md)
- [BankAccountDetails](docs/Model/BankAccountDetails.md)
- [BankDeposit](docs/Model/BankDeposit.md)
- [BankOpeningBalance](docs/Model/BankOpeningBalance.md)
- [BankReconciliation](docs/Model/BankReconciliation.md)
- [BankReconciliationStatus](docs/Model/BankReconciliationStatus.md)
- [BankTransfer](docs/Model/BankTransfer.md)
- [Base](docs/Model/Base.md)
- [BaseJournalLine](docs/Model/BaseJournalLine.md)
- [BusinessActivityType](docs/Model/BusinessActivityType.md)
- [BusinessExchangeRate](docs/Model/BusinessExchangeRate.md)
- [BusinessSettings](docs/Model/BusinessSettings.md)
- [BusinessType](docs/Model/BusinessType.md)
- [CisSettings](docs/Model/CisSettings.md)
- [CoaAccount](docs/Model/CoaAccount.md)
- [CoaGroupType](docs/Model/CoaGroupType.md)
- [CoaTemplate](docs/Model/CoaTemplate.md)
- [ComponentTaxRate](docs/Model/ComponentTaxRate.md)
- [Contact](docs/Model/Contact.md)
- [ContactAllocation](docs/Model/ContactAllocation.md)
- [ContactCisDeductionRate](docs/Model/ContactCisDeductionRate.md)
- [ContactCisSettings](docs/Model/ContactCisSettings.md)
- [ContactOpeningBalance](docs/Model/ContactOpeningBalance.md)
- [ContactPayment](docs/Model/ContactPayment.md)
- [ContactPerson](docs/Model/ContactPerson.md)
- [ContactPersonType](docs/Model/ContactPersonType.md)
- [ContactTaxTreatment](docs/Model/ContactTaxTreatment.md)
- [DatevSettings](docs/Model/DatevSettings.md)
- [DefaultLedgerAccounts](docs/Model/DefaultLedgerAccounts.md)
- [DefaultMessages](docs/Model/DefaultMessages.md)
- [EmailSettings](docs/Model/EmailSettings.md)
- [EuSalesDescription](docs/Model/EuSalesDescription.md)
- [ExchangeRate](docs/Model/ExchangeRate.md)
- [FinancialSettings](docs/Model/FinancialSettings.md)
- [FooterDetails](docs/Model/FooterDetails.md)
- [GBBoxData](docs/Model/GBBoxData.md)
- [Generic](docs/Model/Generic.md)
- [HostedArtefactPaymentSetting](docs/Model/HostedArtefactPaymentSetting.md)
- [IEBoxData](docs/Model/IEBoxData.md)
- [InvoiceSettings](docs/Model/InvoiceSettings.md)
- [InvoiceSettingsDocumentHeadings](docs/Model/InvoiceSettingsDocumentHeadings.md)
- [InvoiceSettingsLineItemTitles](docs/Model/InvoiceSettingsLineItemTitles.md)
- [Journal](docs/Model/Journal.md)
- [JournalCode](docs/Model/JournalCode.md)
- [JournalCodeType](docs/Model/JournalCodeType.md)
- [JournalLine](docs/Model/JournalLine.md)
- [LedgerAccount](docs/Model/LedgerAccount.md)
- [LedgerAccountBalanceDetails](docs/Model/LedgerAccountBalanceDetails.md)
- [LedgerAccountOpeningBalance](docs/Model/LedgerAccountOpeningBalance.md)
- [LedgerEntry](docs/Model/LedgerEntry.md)
- [LegalFormType](docs/Model/LegalFormType.md)
- [Link](docs/Model/Link.md)
- [LiveExchangeRate](docs/Model/LiveExchangeRate.md)
- [Migration](docs/Model/Migration.md)
- [MigrationStatus](docs/Model/MigrationStatus.md)
- [MigrationTaxReturn](docs/Model/MigrationTaxReturn.md)
- [OpeningBalanceJournal](docs/Model/OpeningBalanceJournal.md)
- [OtherPayment](docs/Model/OtherPayment.md)
- [OtherPaymentLineItem](docs/Model/OtherPaymentLineItem.md)
- [PaymentAllocation](docs/Model/PaymentAllocation.md)
- [PaymentOnAccount](docs/Model/PaymentOnAccount.md)
- [PostAddresses](docs/Model/PostAddresses.md)
- [PostAddressesAddress](docs/Model/PostAddressesAddress.md)
- [PostAnalysisTypeCategories](docs/Model/PostAnalysisTypeCategories.md)
- [PostAnalysisTypeCategoriesAnalysisTypeCategory](docs/Model/PostAnalysisTypeCategoriesAnalysisTypeCategory.md)
- [PostAttachments](docs/Model/PostAttachments.md)
- [PostAttachmentsAttachment](docs/Model/PostAttachmentsAttachment.md)
- [PostBankAccounts](docs/Model/PostBankAccounts.md)
- [PostBankAccountsBankAccount](docs/Model/PostBankAccountsBankAccount.md)
- [PostBankAccountsBankAccountBankAccountDetails](docs/Model/PostBankAccountsBankAccountBankAccountDetails.md)
- [PostBankAccountsBankAccountMainAddress](docs/Model/PostBankAccountsBankAccountMainAddress.md)
- [PostBankAccountsBankAccountMainContactPerson](docs/Model/PostBankAccountsBankAccountMainContactPerson.md)
- [PostBankDeposits](docs/Model/PostBankDeposits.md)
- [PostBankDepositsBankDeposit](docs/Model/PostBankDepositsBankDeposit.md)
- [PostBankOpeningBalances](docs/Model/PostBankOpeningBalances.md)
- [PostBankOpeningBalancesBankOpeningBalance](docs/Model/PostBankOpeningBalancesBankOpeningBalance.md)
- [PostBankReconciliations](docs/Model/PostBankReconciliations.md)
- [PostBankReconciliationsBankReconciliation](docs/Model/PostBankReconciliationsBankReconciliation.md)
- [PostBankTransfers](docs/Model/PostBankTransfers.md)
- [PostBankTransfersBankTransfer](docs/Model/PostBankTransfersBankTransfer.md)
- [PostBusinessExchangeRates](docs/Model/PostBusinessExchangeRates.md)
- [PostBusinessExchangeRatesBusinessExchangeRate](docs/Model/PostBusinessExchangeRatesBusinessExchangeRate.md)
- [PostContactAllocations](docs/Model/PostContactAllocations.md)
- [PostContactAllocationsContactAllocation](docs/Model/PostContactAllocationsContactAllocation.md)
- [PostContactAllocationsContactAllocationAllocatedArtefactsInner](docs/Model/PostContactAllocationsContactAllocationAllocatedArtefactsInner.md)
- [PostContactOpeningBalances](docs/Model/PostContactOpeningBalances.md)
- [PostContactOpeningBalancesContactOpeningBalance](docs/Model/PostContactOpeningBalancesContactOpeningBalance.md)
- [PostContactPayments](docs/Model/PostContactPayments.md)
- [PostContactPaymentsContactPayment](docs/Model/PostContactPaymentsContactPayment.md)
- [PostContactPaymentsContactPaymentAllocatedArtefactsInner](docs/Model/PostContactPaymentsContactPaymentAllocatedArtefactsInner.md)
- [PostContactPaymentsContactPaymentPaymentOnAccount](docs/Model/PostContactPaymentsContactPaymentPaymentOnAccount.md)
- [PostContactPersons](docs/Model/PostContactPersons.md)
- [PostContactPersonsContactPerson](docs/Model/PostContactPersonsContactPerson.md)
- [PostContacts](docs/Model/PostContacts.md)
- [PostContactsContact](docs/Model/PostContactsContact.md)
- [PostContactsContactMainContactPerson](docs/Model/PostContactsContactMainContactPerson.md)
- [PostContactsContactTaxTreatment](docs/Model/PostContactsContactTaxTreatment.md)
- [PostHostedArtefactPaymentSettings](docs/Model/PostHostedArtefactPaymentSettings.md)
- [PostHostedArtefactPaymentSettingsHostedArtefactPaymentSetting](docs/Model/PostHostedArtefactPaymentSettingsHostedArtefactPaymentSetting.md)
- [PostJournalCodes](docs/Model/PostJournalCodes.md)
- [PostJournalCodesJournalCode](docs/Model/PostJournalCodesJournalCode.md)
- [PostJournals](docs/Model/PostJournals.md)
- [PostJournalsJournal](docs/Model/PostJournalsJournal.md)
- [PostJournalsJournalJournalCode](docs/Model/PostJournalsJournalJournalCode.md)
- [PostJournalsJournalJournalLinesInner](docs/Model/PostJournalsJournalJournalLinesInner.md)
- [PostLedgerAccountOpeningBalances](docs/Model/PostLedgerAccountOpeningBalances.md)
- [PostLedgerAccountOpeningBalancesLedgerAccountOpeningBalance](docs/Model/PostLedgerAccountOpeningBalancesLedgerAccountOpeningBalance.md)
- [PostLedgerAccounts](docs/Model/PostLedgerAccounts.md)
- [PostLedgerAccountsLedgerAccount](docs/Model/PostLedgerAccountsLedgerAccount.md)
- [PostMigrationTaxReturns](docs/Model/PostMigrationTaxReturns.md)
- [PostMigrationTaxReturnsMigrationTaxReturn](docs/Model/PostMigrationTaxReturnsMigrationTaxReturn.md)
- [PostMigrationTaxReturnsMigrationTaxReturnGb](docs/Model/PostMigrationTaxReturnsMigrationTaxReturnGb.md)
- [PostMigrationTaxReturnsMigrationTaxReturnIe](docs/Model/PostMigrationTaxReturnsMigrationTaxReturnIe.md)
- [PostOpeningBalanceJournals](docs/Model/PostOpeningBalanceJournals.md)
- [PostOpeningBalanceJournalsOpeningBalanceJournal](docs/Model/PostOpeningBalanceJournalsOpeningBalanceJournal.md)
- [PostOpeningBalanceJournalsOpeningBalanceJournalJournalLinesInner](docs/Model/PostOpeningBalanceJournalsOpeningBalanceJournalJournalLinesInner.md)
- [PostOtherPayments](docs/Model/PostOtherPayments.md)
- [PostOtherPaymentsOtherPayment](docs/Model/PostOtherPaymentsOtherPayment.md)
- [PostOtherPaymentsOtherPaymentPaymentLinesInner](docs/Model/PostOtherPaymentsOtherPaymentPaymentLinesInner.md)
- [PostProductSalesPriceTypes](docs/Model/PostProductSalesPriceTypes.md)
- [PostProductSalesPriceTypesProductSalesPriceType](docs/Model/PostProductSalesPriceTypesProductSalesPriceType.md)
- [PostProducts](docs/Model/PostProducts.md)
- [PostProductsProduct](docs/Model/PostProductsProduct.md)
- [PostProductsProductSalesPricesInner](docs/Model/PostProductsProductSalesPricesInner.md)
- [PostPurchaseCorrectiveInvoices](docs/Model/PostPurchaseCorrectiveInvoices.md)
- [PostPurchaseCorrectiveInvoicesPurchaseCorrectiveInvoice](docs/Model/PostPurchaseCorrectiveInvoicesPurchaseCorrectiveInvoice.md)
- [PostPurchaseCorrectiveInvoicesPurchaseCorrectiveInvoiceInvoiceLinesInner](docs/Model/PostPurchaseCorrectiveInvoicesPurchaseCorrectiveInvoiceInvoiceLinesInner.md)
- [PostPurchaseCorrectiveInvoicesPurchaseCorrectiveInvoiceTaxAnalysisInner](docs/Model/PostPurchaseCorrectiveInvoicesPurchaseCorrectiveInvoiceTaxAnalysisInner.md)
- [PostPurchaseCreditNotes](docs/Model/PostPurchaseCreditNotes.md)
- [PostPurchaseCreditNotesPurchaseCreditNote](docs/Model/PostPurchaseCreditNotesPurchaseCreditNote.md)
- [PostPurchaseCreditNotesPurchaseCreditNoteCreditNoteLinesInner](docs/Model/PostPurchaseCreditNotesPurchaseCreditNoteCreditNoteLinesInner.md)
- [PostPurchaseInvoices](docs/Model/PostPurchaseInvoices.md)
- [PostPurchaseInvoicesPurchaseInvoice](docs/Model/PostPurchaseInvoicesPurchaseInvoice.md)
- [PostPurchaseInvoicesPurchaseInvoiceInvoiceLinesInner](docs/Model/PostPurchaseInvoicesPurchaseInvoiceInvoiceLinesInner.md)
- [PostPurchaseQuickEntries](docs/Model/PostPurchaseQuickEntries.md)
- [PostPurchaseQuickEntriesPurchaseQuickEntry](docs/Model/PostPurchaseQuickEntriesPurchaseQuickEntry.md)
- [PostPurchaseQuickEntriesPurchaseQuickEntryAnalysisTypeCategoriesInner](docs/Model/PostPurchaseQuickEntriesPurchaseQuickEntryAnalysisTypeCategoriesInner.md)
- [PostSalesCorrectiveInvoices](docs/Model/PostSalesCorrectiveInvoices.md)
- [PostSalesCorrectiveInvoicesSalesCorrectiveInvoice](docs/Model/PostSalesCorrectiveInvoicesSalesCorrectiveInvoice.md)
- [PostSalesCorrectiveInvoicesSalesCorrectiveInvoiceInvoiceLinesInner](docs/Model/PostSalesCorrectiveInvoicesSalesCorrectiveInvoiceInvoiceLinesInner.md)
- [PostSalesCorrectiveInvoicesSalesCorrectiveInvoiceMainAddress](docs/Model/PostSalesCorrectiveInvoicesSalesCorrectiveInvoiceMainAddress.md)
- [PostSalesCreditNotes](docs/Model/PostSalesCreditNotes.md)
- [PostSalesCreditNotesSalesCreditNote](docs/Model/PostSalesCreditNotesSalesCreditNote.md)
- [PostSalesCreditNotesSalesCreditNoteCreditNoteLinesInner](docs/Model/PostSalesCreditNotesSalesCreditNoteCreditNoteLinesInner.md)
- [PostSalesEstimates](docs/Model/PostSalesEstimates.md)
- [PostSalesEstimatesSalesEstimate](docs/Model/PostSalesEstimatesSalesEstimate.md)
- [PostSalesEstimatesSalesEstimateEstimateLinesInner](docs/Model/PostSalesEstimatesSalesEstimateEstimateLinesInner.md)
- [PostSalesInvoices](docs/Model/PostSalesInvoices.md)
- [PostSalesInvoicesSalesInvoice](docs/Model/PostSalesInvoicesSalesInvoice.md)
- [PostSalesInvoicesSalesInvoiceRecurringInvoice](docs/Model/PostSalesInvoicesSalesInvoiceRecurringInvoice.md)
- [PostSalesQuickEntries](docs/Model/PostSalesQuickEntries.md)
- [PostSalesQuickEntriesSalesQuickEntry](docs/Model/PostSalesQuickEntriesSalesQuickEntry.md)
- [PostSalesQuotes](docs/Model/PostSalesQuotes.md)
- [PostSalesQuotesSalesQuote](docs/Model/PostSalesQuotesSalesQuote.md)
- [PostServiceRateTypes](docs/Model/PostServiceRateTypes.md)
- [PostServiceRateTypesServiceRateType](docs/Model/PostServiceRateTypesServiceRateType.md)
- [PostServices](docs/Model/PostServices.md)
- [PostServicesService](docs/Model/PostServicesService.md)
- [PostServicesServiceSalesRatesInner](docs/Model/PostServicesServiceSalesRatesInner.md)
- [PostStockItems](docs/Model/PostStockItems.md)
- [PostStockItemsStockItem](docs/Model/PostStockItemsStockItem.md)
- [PostStockMovements](docs/Model/PostStockMovements.md)
- [PostStockMovementsStockMovement](docs/Model/PostStockMovementsStockMovement.md)
- [PostTaxRates](docs/Model/PostTaxRates.md)
- [PostTaxRatesTaxRate](docs/Model/PostTaxRatesTaxRate.md)
- [PostTaxRatesTaxRateComponentTaxRateInner](docs/Model/PostTaxRatesTaxRateComponentTaxRateInner.md)
- [PrintContactDetails](docs/Model/PrintContactDetails.md)
- [PrintStatements](docs/Model/PrintStatements.md)
- [Product](docs/Model/Product.md)
- [ProductSalesPriceType](docs/Model/ProductSalesPriceType.md)
- [ProfitAnalysis](docs/Model/ProfitAnalysis.md)
- [ProfitBreakdown](docs/Model/ProfitBreakdown.md)
- [PurchaseCorrectiveInvoice](docs/Model/PurchaseCorrectiveInvoice.md)
- [PurchaseCreditNote](docs/Model/PurchaseCreditNote.md)
- [PurchaseCreditNoteLineItem](docs/Model/PurchaseCreditNoteLineItem.md)
- [PurchaseInvoice](docs/Model/PurchaseInvoice.md)
- [PurchaseInvoiceLineItem](docs/Model/PurchaseInvoiceLineItem.md)
- [PurchaseQuickEntry](docs/Model/PurchaseQuickEntry.md)
- [PutAddresses](docs/Model/PutAddresses.md)
- [PutAddressesAddress](docs/Model/PutAddressesAddress.md)
- [PutAnalysisTypeCategories](docs/Model/PutAnalysisTypeCategories.md)
- [PutAnalysisTypes](docs/Model/PutAnalysisTypes.md)
- [PutAnalysisTypesAnalysisType](docs/Model/PutAnalysisTypesAnalysisType.md)
- [PutAttachments](docs/Model/PutAttachments.md)
- [PutAttachmentsAttachment](docs/Model/PutAttachmentsAttachment.md)
- [PutBankAccounts](docs/Model/PutBankAccounts.md)
- [PutBankAccountsBankAccount](docs/Model/PutBankAccountsBankAccount.md)
- [PutBankAccountsBankAccountBankAccountDetails](docs/Model/PutBankAccountsBankAccountBankAccountDetails.md)
- [PutBankOpeningBalances](docs/Model/PutBankOpeningBalances.md)
- [PutBankOpeningBalancesBankOpeningBalance](docs/Model/PutBankOpeningBalancesBankOpeningBalance.md)
- [PutBankReconciliations](docs/Model/PutBankReconciliations.md)
- [PutBankReconciliationsBankReconciliation](docs/Model/PutBankReconciliationsBankReconciliation.md)
- [PutBankTransfers](docs/Model/PutBankTransfers.md)
- [PutBankTransfersBankTransfer](docs/Model/PutBankTransfersBankTransfer.md)
- [PutBusinessExchangeRates](docs/Model/PutBusinessExchangeRates.md)
- [PutBusinessExchangeRatesBusinessExchangeRate](docs/Model/PutBusinessExchangeRatesBusinessExchangeRate.md)
- [PutBusinessSettings](docs/Model/PutBusinessSettings.md)
- [PutBusinessSettingsBusinessSettings](docs/Model/PutBusinessSettingsBusinessSettings.md)
- [PutBusinessSettingsBusinessSettingsDefaultLedgerAccounts](docs/Model/PutBusinessSettingsBusinessSettingsDefaultLedgerAccounts.md)
- [PutCisSettings](docs/Model/PutCisSettings.md)
- [PutCisSettingsCisSettings](docs/Model/PutCisSettingsCisSettings.md)
- [PutContactAllocations](docs/Model/PutContactAllocations.md)
- [PutContactAllocationsContactAllocation](docs/Model/PutContactAllocationsContactAllocation.md)
- [PutContactOpeningBalances](docs/Model/PutContactOpeningBalances.md)
- [PutContactOpeningBalancesContactOpeningBalance](docs/Model/PutContactOpeningBalancesContactOpeningBalance.md)
- [PutContactPayments](docs/Model/PutContactPayments.md)
- [PutContactPaymentsContactPayment](docs/Model/PutContactPaymentsContactPayment.md)
- [PutContactPersons](docs/Model/PutContactPersons.md)
- [PutContactPersonsContactPerson](docs/Model/PutContactPersonsContactPerson.md)
- [PutContacts](docs/Model/PutContacts.md)
- [PutContactsContact](docs/Model/PutContactsContact.md)
- [PutDatevSettings](docs/Model/PutDatevSettings.md)
- [PutDatevSettingsDatevSettings](docs/Model/PutDatevSettingsDatevSettings.md)
- [PutEmailSettings](docs/Model/PutEmailSettings.md)
- [PutEmailSettingsEmailSettings](docs/Model/PutEmailSettingsEmailSettings.md)
- [PutEmailSettingsEmailSettingsDefaultMessagesInner](docs/Model/PutEmailSettingsEmailSettingsDefaultMessagesInner.md)
- [PutFinancialSettings](docs/Model/PutFinancialSettings.md)
- [PutFinancialSettingsFinancialSettings](docs/Model/PutFinancialSettingsFinancialSettings.md)
- [PutInvoiceSettings](docs/Model/PutInvoiceSettings.md)
- [PutInvoiceSettingsInvoiceSettings](docs/Model/PutInvoiceSettingsInvoiceSettings.md)
- [PutInvoiceSettingsInvoiceSettingsDocumentHeadings](docs/Model/PutInvoiceSettingsInvoiceSettingsDocumentHeadings.md)
- [PutInvoiceSettingsInvoiceSettingsFooterDetails](docs/Model/PutInvoiceSettingsInvoiceSettingsFooterDetails.md)
- [PutInvoiceSettingsInvoiceSettingsLineItemTitles](docs/Model/PutInvoiceSettingsInvoiceSettingsLineItemTitles.md)
- [PutInvoiceSettingsInvoiceSettingsPrintContactDetails](docs/Model/PutInvoiceSettingsInvoiceSettingsPrintContactDetails.md)
- [PutInvoiceSettingsInvoiceSettingsPrintStatements](docs/Model/PutInvoiceSettingsInvoiceSettingsPrintStatements.md)
- [PutJournalCodes](docs/Model/PutJournalCodes.md)
- [PutJournalCodesJournalCode](docs/Model/PutJournalCodesJournalCode.md)
- [PutLedgerAccountOpeningBalances](docs/Model/PutLedgerAccountOpeningBalances.md)
- [PutLedgerAccountOpeningBalancesLedgerAccountOpeningBalance](docs/Model/PutLedgerAccountOpeningBalancesLedgerAccountOpeningBalance.md)
- [PutLedgerAccounts](docs/Model/PutLedgerAccounts.md)
- [PutLedgerAccountsLedgerAccount](docs/Model/PutLedgerAccountsLedgerAccount.md)
- [PutMigrations](docs/Model/PutMigrations.md)
- [PutMigrationsMigrations](docs/Model/PutMigrationsMigrations.md)
- [PutOtherPayments](docs/Model/PutOtherPayments.md)
- [PutOtherPaymentsOtherPayment](docs/Model/PutOtherPaymentsOtherPayment.md)
- [PutOtherPaymentsOtherPaymentPaymentLinesInner](docs/Model/PutOtherPaymentsOtherPaymentPaymentLinesInner.md)
- [PutProductSalesPriceTypes](docs/Model/PutProductSalesPriceTypes.md)
- [PutProductSalesPriceTypesProductSalesPriceType](docs/Model/PutProductSalesPriceTypesProductSalesPriceType.md)
- [PutProducts](docs/Model/PutProducts.md)
- [PutProductsProduct](docs/Model/PutProductsProduct.md)
- [PutPurchaseCorrectiveInvoices](docs/Model/PutPurchaseCorrectiveInvoices.md)
- [PutPurchaseCreditNotes](docs/Model/PutPurchaseCreditNotes.md)
- [PutPurchaseCreditNotesPurchaseCreditNote](docs/Model/PutPurchaseCreditNotesPurchaseCreditNote.md)
- [PutPurchaseCreditNotesPurchaseCreditNoteCreditNoteLinesInner](docs/Model/PutPurchaseCreditNotesPurchaseCreditNoteCreditNoteLinesInner.md)
- [PutPurchaseInvoices](docs/Model/PutPurchaseInvoices.md)
- [PutPurchaseInvoicesPurchaseInvoice](docs/Model/PutPurchaseInvoicesPurchaseInvoice.md)
- [PutPurchaseInvoicesPurchaseInvoiceInvoiceLinesInner](docs/Model/PutPurchaseInvoicesPurchaseInvoiceInvoiceLinesInner.md)
- [PutPurchaseQuickEntries](docs/Model/PutPurchaseQuickEntries.md)
- [PutPurchaseQuickEntriesPurchaseQuickEntry](docs/Model/PutPurchaseQuickEntriesPurchaseQuickEntry.md)
- [PutSalesCorrectiveInvoices](docs/Model/PutSalesCorrectiveInvoices.md)
- [PutSalesCreditNotes](docs/Model/PutSalesCreditNotes.md)
- [PutSalesCreditNotesSalesCreditNote](docs/Model/PutSalesCreditNotesSalesCreditNote.md)
- [PutSalesCreditNotesSalesCreditNoteCreditNoteLinesInner](docs/Model/PutSalesCreditNotesSalesCreditNoteCreditNoteLinesInner.md)
- [PutSalesEstimates](docs/Model/PutSalesEstimates.md)
- [PutSalesEstimatesSalesEstimate](docs/Model/PutSalesEstimatesSalesEstimate.md)
- [PutSalesEstimatesSalesEstimateEstimateLinesInner](docs/Model/PutSalesEstimatesSalesEstimateEstimateLinesInner.md)
- [PutSalesInvoices](docs/Model/PutSalesInvoices.md)
- [PutSalesInvoicesSalesInvoice](docs/Model/PutSalesInvoicesSalesInvoice.md)
- [PutSalesQuickEntries](docs/Model/PutSalesQuickEntries.md)
- [PutSalesQuickEntriesSalesQuickEntry](docs/Model/PutSalesQuickEntriesSalesQuickEntry.md)
- [PutSalesQuotes](docs/Model/PutSalesQuotes.md)
- [PutSalesQuotesSalesQuote](docs/Model/PutSalesQuotesSalesQuote.md)
- [PutServiceRateTypes](docs/Model/PutServiceRateTypes.md)
- [PutServiceRateTypesServiceRateType](docs/Model/PutServiceRateTypesServiceRateType.md)
- [PutServices](docs/Model/PutServices.md)
- [PutServicesService](docs/Model/PutServicesService.md)
- [PutStockItems](docs/Model/PutStockItems.md)
- [PutStockItemsStockItem](docs/Model/PutStockItemsStockItem.md)
- [PutStockMovements](docs/Model/PutStockMovements.md)
- [PutStockMovementsStockMovement](docs/Model/PutStockMovementsStockMovement.md)
- [PutTaxProfiles](docs/Model/PutTaxProfiles.md)
- [PutTaxProfilesTaxProfile](docs/Model/PutTaxProfilesTaxProfile.md)
- [PutTaxProfilesTaxProfileAddressRegion](docs/Model/PutTaxProfilesTaxProfileAddressRegion.md)
- [PutTaxRates](docs/Model/PutTaxRates.md)
- [PutTaxRatesTaxRate](docs/Model/PutTaxRatesTaxRate.md)
- [QuickEntry](docs/Model/QuickEntry.md)
- [QuoteStatus](docs/Model/QuoteStatus.md)
- [Rate](docs/Model/Rate.md)
- [RecurringSalesInvoice](docs/Model/RecurringSalesInvoice.md)
- [SalesArtefactAddress](docs/Model/SalesArtefactAddress.md)
- [SalesCorrectiveInvoice](docs/Model/SalesCorrectiveInvoice.md)
- [SalesCreditNote](docs/Model/SalesCreditNote.md)
- [SalesCreditNoteLineItem](docs/Model/SalesCreditNoteLineItem.md)
- [SalesEstimate](docs/Model/SalesEstimate.md)
- [SalesInvoice](docs/Model/SalesInvoice.md)
- [SalesInvoiceLineItem](docs/Model/SalesInvoiceLineItem.md)
- [SalesInvoiceQuoteEstimate](docs/Model/SalesInvoiceQuoteEstimate.md)
- [SalesPrice](docs/Model/SalesPrice.md)
- [SalesQuote](docs/Model/SalesQuote.md)
- [SalesQuoteLineItem](docs/Model/SalesQuoteLineItem.md)
- [Service](docs/Model/Service.md)
- [ServiceRateType](docs/Model/ServiceRateType.md)
- [StockItem](docs/Model/StockItem.md)
- [StockMovement](docs/Model/StockMovement.md)
- [TaxBreakdown](docs/Model/TaxBreakdown.md)
- [TaxOffice](docs/Model/TaxOffice.md)
- [TaxProfile](docs/Model/TaxProfile.md)
- [TaxRate](docs/Model/TaxRate.md)
- [TaxRatePercentage](docs/Model/TaxRatePercentage.md)
- [TaxScheme](docs/Model/TaxScheme.md)
- [TaxType](docs/Model/TaxType.md)
- [Transaction](docs/Model/Transaction.md)
- [TransactionOrigin](docs/Model/TransactionOrigin.md)
- [UnallocatedArtefact](docs/Model/UnallocatedArtefact.md)
- [UnpostedTransaction](docs/Model/UnpostedTransaction.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `3.1`
    - Package version: `2024.09.03`
    - Generator version: `7.12.0-SNAPSHOT`
- Build package: `org.openapitools.codegen.languages.PhpNextgenClientCodegen`
