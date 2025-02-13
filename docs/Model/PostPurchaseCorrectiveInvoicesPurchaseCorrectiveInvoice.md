# # PostPurchaseCorrectiveInvoicesPurchaseCorrectiveInvoice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vatReverseCharge** | **bool** | Indicates whether Domestic Reverser Charge is applied to the artefact. Only used for a UK business. | [optional]
**contactId** | **string** | The ID of the Contact. | [optional]
**contactName** | **string** | The name of the contact when the invoice was created | [optional]
**contactReference** | **string** | The reference of the contact when the invoice was created | [optional]
**date** | **\DateTime** | The date of the invoice | [optional]
**dueDate** | **\DateTime** | The due date of the invoice | [optional]
**reference** | **string** | The reference for the invoice | [optional]
**vendorReference** | **string** | The vendor reference for the invoice | [optional]
**notes** | **string** | Invoice notes | [optional]
**totalQuantity** | **float** | The total quantity of the invoice | [optional]
**netAmount** | **float** | The net amount of the invoice | [optional]
**taxAmount** | **float** | The tax amount of the invoice | [optional]
**totalAmount** | **float** | The total amount of the invoice | [optional]
**currencyId** | **string** | The ID of the Currency. | [optional]
**exchangeRate** | **float** | The exchange rate for the invoice | [optional]
**inverseExchangeRate** | **string** | The inverse exchange rate for the credit note | [optional]
**baseCurrencyNetAmount** | **float** | The net amount of the invoice in base currency | [optional]
**baseCurrencyTaxAmount** | **float** | The tax amount of the invoice in base currency | [optional]
**baseCurrencyTotalAmount** | **float** | The total amount of the invoice in base currency | [optional]
**statusId** | **string** | The ID of the Status. | [optional]
**withholdingTaxRate** | **float** | IRPF withheld Tax Rate (Spain only) | [optional]
**withholdingTaxAmount** | **float** | IRPF withheld Tax Amount (Spain only) | [optional]
**baseCurrencyWithholdingTaxAmount** | **float** | IRPF withheld Tax Amount (Spain only) in the base currency | [optional]
**originalInvoiceId** | **string** | The ID of the Original Invoice. (Spain only) | [optional]
**originalInvoiceNumber** | **string** | The number relating to the original invoice (Spain only) | [optional]
**originalInvoiceDate** | **string** | The Invoice date relating to the original invoice (Spain only) | [optional]
**invoiceLines** | [**\SynergiTech\Sage\Model\PostPurchaseCorrectiveInvoicesPurchaseCorrectiveInvoiceInvoiceLinesInner[]**](PostPurchaseCorrectiveInvoicesPurchaseCorrectiveInvoiceInvoiceLinesInner.md) |  | [optional]
**taxAnalysis** | [**\SynergiTech\Sage\Model\PostPurchaseCorrectiveInvoicesPurchaseCorrectiveInvoiceTaxAnalysisInner[]**](PostPurchaseCorrectiveInvoicesPurchaseCorrectiveInvoiceTaxAnalysisInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
