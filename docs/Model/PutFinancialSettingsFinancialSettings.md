# # PutFinancialSettingsFinancialSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**yearEndDate** | **\DateTime** | The financial year end date of the business | [optional]
**yearEndLockdownDate** | **\DateTime** | The year end lockdown date of the business | [optional]
**accountingType** | **string** | Indicates the accounting type of a business, it can be accrual or cash based | [optional]
**accountsStartDate** | **\DateTime** | The accounts start date of the business | [optional]
**baseCurrencyId** | **string** | The ID of the Base Currency. | [optional]
**multiCurrencyEnabled** | **bool** | Indicates whether multi-currency is enabled for the business | [optional]
**useLiveExchangeRates** | **bool** | Indicates whether to use live or business defined exchange rates | [optional]
**mtdActivationStatus** | **string** | Indicates the UK Making Tax Digital for VAT activation status | [optional]
**mtdConnected** | **bool** | Indicates whether UK Making Tax Digital for VAT is currently connected | [optional]
**mtdAuthenticatedDate** | **\DateTime** | Indicates when a UK business enabled UK Making Tax Digital for VAT, nil if not enabled or non-uk | [optional]
**taxSchemeId** | **string** | The ID of the Tax Scheme. | [optional]
**taxReturnFrequencyId** | **string** | The ID of the Tax Return Frequency. | [optional]
**taxNumber** | **string** | The tax number | [optional]
**generalTaxNumber** | **string** | The number for various tax report submissions | [optional]
**taxOfficeId** | **string** | The ID of the Tax Office. | [optional]
**defaultIrpfRate** | **float** | The default IRPF rate | [optional]
**flatRateTaxPercentage** | **float** | The tax percentage that applies to flat rate tax schemes. | [optional]
**recoverablePercentage** | **float** | The partial recoverable tax rate (Canada only) | [optional]
**salesTaxCalculation** | **string** | The method of collection for tax on sales. Allowed values - \&quot;invoice\&quot;, \&quot;cash\&quot;. | [optional]
**purchaseTaxCalculation** | **string** | The method of collection for tax on purchases. Allowed values - \&quot;invoice\&quot;, \&quot;cash\&quot;. | [optional]
**postponedAccounting** | **bool** | Indicates whether to use postponed accounting or not | [optional]
**destinationVat** | **bool** | Indicates whether to use destination vat or not | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
