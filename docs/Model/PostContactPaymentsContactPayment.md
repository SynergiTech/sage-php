# # PostContactPaymentsContactPayment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transactionTypeId** | **string** | The transaction type of the payment |
**contactId** | **string** | The contact of the payment |
**bankAccountId** | **string** | The bank account of the payment |
**date** | **\DateTime** | The date the payment was made |
**totalAmount** | **float** | The total amount of the payment |
**paymentMethodId** | **string** | The ID of the Payment Method. | [optional]
**netAmount** | **float** | The net amount of the payment | [optional]
**taxAmount** | **float** | The tax amount of the payment | [optional]
**currencyId** | **string** | The ID of the Currency. | [optional]
**exchangeRate** | **float** | The exchange rate of the payment | [optional]
**baseCurrencyNetAmount** | **float** | The net amount of the payment in base currency | [optional]
**baseCurrencyTaxAmount** | **float** | The tax amount of the payment in base currency | [optional]
**baseCurrencyTotalAmount** | **float** | The total amount of the payment in base currency | [optional]
**baseCurrencyCurrencyCharge** | **float** | The currency conversion charges in base currency | [optional]
**reference** | **string** | A reference for the payment | [optional]
**taxRateId** | **string** | The ID of the Tax Rate. | [optional]
**allocatedArtefacts** | [**\SynergiTech\Sage\Model\PostContactPaymentsContactPaymentAllocatedArtefactsInner[]**](PostContactPaymentsContactPaymentAllocatedArtefactsInner.md) |  | [optional]
**paymentOnAccount** | [**\SynergiTech\Sage\Model\PostContactPaymentsContactPaymentPaymentOnAccount**](PostContactPaymentsContactPaymentPaymentOnAccount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
