# # PutOtherPaymentsOtherPayment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transactionTypeId** | **string** | The transaction type of the payment | [optional]
**date** | **\DateTime** | The date of the payment | [optional]
**totalAmount** | **float** | The total amount of the payment | [optional]
**baseCurrencyTotalItcAmount** | **float** | The total amount of input tax credit in base currency for the                      Other Payment (Canada only) | [optional]
**totalItcAmount** | **float** | The total amount of input tax credit for the Other Payment (Canada only) | [optional]
**baseCurrencyTotalItrAmount** | **float** | The total amount of input tax refund in base currency for the                      Other Payment (Canada only) | [optional]
**totalItrAmount** | **float** | The total amount of input tax refund for the Other Payment (Canada only) | [optional]
**partRecoverable** | **bool** | Indicates if the Other Payment is part recoverable or not (Canada only) | [optional]
**paymentMethodId** | **string** | The ID of the Payment Method. | [optional]
**contactId** | **string** | The ID of the Contact. | [optional]
**bankAccountId** | **string** | The ID of the Bank Account. | [optional]
**taxAddressRegionId** | **string** | The ID of the Tax Address Region. (Canada only) | [optional]
**netAmount** | **float** | The net amount of the payment | [optional]
**taxAmount** | **float** | The tax amount of the payment | [optional]
**reference** | **string** | A reference of the payment | [optional]
**withholdingTaxRate** | **float** | IRPF withheld tax rate | [optional]
**withholdingTaxAmount** | **float** | IRPF withheld tax amount | [optional]
**paymentLines** | [**\SynergiTech\Sage\Model\PutOtherPaymentsOtherPaymentPaymentLinesInner[]**](PutOtherPaymentsOtherPaymentPaymentLinesInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
