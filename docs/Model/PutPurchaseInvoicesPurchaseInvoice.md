# # PutPurchaseInvoicesPurchaseInvoice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contactId** | **string** | The contact the purchase invoice relates to | [optional]
**date** | **\DateTime** | The date of the invoice | [optional]
**dueDate** | **\DateTime** | The due date of the invoice | [optional]
**vatReverseCharge** | **bool** | Indicates whether Domestic Reverser Charge is applied to the artefact. Only used for a UK business. | [optional]
**postponedAccounting** | **bool** | Indicates whether postponed accounting rules are applied to the artefact. Only used for UK and IE accounting businesses, where the vendor is flagged as importer | [optional]
**vatExemptConsignment** | **bool** | Indicates whether vat exempt import is applied to the artefact. Only used for a UK business, where the artefact has the consignment checkbox selected. | [optional]
**cisApplicableAmount** | **float** | The total amount of CIS deductible labour - only applicable in UK | [optional]
**baseCurrencyCisApplicableAmount** | **float** | The total amount of CIS deductible labour in the base currency - only applicable in UK | [optional]
**totalAfterCisDeduction** | **float** | The total of the artefact with the total of CIS deducted - only applicable in UK | [optional]
**baseCurrencyTotalAfterCisDeduction** | **float** | The total of the artefact with the total of CIS deducted in the base currency - only applicable in UK | [optional]
**baseCurrencyTotalItcAmount** | **float** | The total amount of input tax credit in base currency for the                      purchase invoice (Canada only) | [optional]
**totalItcAmount** | **float** | The total amount of input tax credit for the purchase invoice (Canada only) | [optional]
**baseCurrencyTotalItrAmount** | **float** | The total amount of input tax refund in base currency for the                      purchase invoice (Canada only) | [optional]
**totalItrAmount** | **float** | The total amount of input tax refund for the purchase invoice (Canada only) | [optional]
**partRecoverable** | **bool** | Indicates if the purchase invoice is part recoverable or not (Canada only) | [optional]
**contactName** | **string** | The name of the contact when the invoice was created | [optional]
**contactReference** | **string** | The reference of the contact when the invoice was created | [optional]
**reference** | **string** | The reference for the invoice | [optional]
**vendorReference** | **string** | The vendor reference for the invoice | [optional]
**notes** | **string** | Invoice notes | [optional]
**totalQuantity** | **float** | The total quantity of the invoice | [optional]
**netAmount** | **float** | The net amount of the invoice | [optional]
**taxAmount** | **float** | The tax amount of the invoice | [optional]
**totalAmount** | **float** | The total amount of the invoice | [optional]
**currencyId** | **string** | The ID of the Currency. | [optional]
**exchangeRate** | **float** | The exchange rate for the invoice | [optional]
**inverseExchangeRate** | **float** | The inverse exchange rate for the invoice | [optional]
**baseCurrencyNetAmount** | **float** | The net amount of the invoice in base currency | [optional]
**baseCurrencyTaxAmount** | **float** | The tax amount of the invoice in base currency | [optional]
**baseCurrencyTotalAmount** | **float** | The total amount of the invoice in base currency | [optional]
**statusId** | **string** | The ID of the Status. | [optional]
**taxAddressRegionId** | **string** | The ID of the Tax Address Region. (Canada only) | [optional]
**withholdingTaxRate** | **float** | The withheld Tax Rate - only applicable in UK (CIS subcontractor tax rate) and Spain (IRPF) | [optional]
**withholdingTaxAmount** | **float** | The withheld Tax Amount - only applicable in UK (CIS subcontractor tax) and Spain (IRPF) | [optional]
**baseCurrencyWithholdingTaxAmount** | **float** | The withheld Tax Amount in the base currency - only applicable in UK (CIS subcontractor tax) and Spain (IRPF) | [optional]
**invoiceLines** | [**\SynergiTech\Sage\Model\PutPurchaseInvoicesPurchaseInvoiceInvoiceLinesInner[]**](PutPurchaseInvoicesPurchaseInvoiceInvoiceLinesInner.md) |  | [optional]
**taxAnalysis** | [**\SynergiTech\Sage\Model\PostPurchaseCorrectiveInvoicesPurchaseCorrectiveInvoiceTaxAnalysisInner[]**](PostPurchaseCorrectiveInvoicesPurchaseCorrectiveInvoiceTaxAnalysisInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
