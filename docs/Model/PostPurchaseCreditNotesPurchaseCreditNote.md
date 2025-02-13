# # PostPurchaseCreditNotesPurchaseCreditNote

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contactId** | **string** | The contact the purchase credit note relates to |
**date** | **\DateTime** | The date of the credit note |
**vatReverseCharge** | **bool** | Indicates whether Domestic Reverser Charge is applied to the artefact. Only used for a UK business. | [optional]
**postponedAccounting** | **bool** | Indicates whether postponed accounting rules are applied to the artefact. Only used for UK and IE accounting businesses, where the vendor is flagged as importer | [optional]
**vatExemptConsignment** | **bool** | Indicates whether vat exempt import is applied to the artefact. Only used for a UK business, where the artefact has the consignment checkbox selected. | [optional]
**cisApplicableAmount** | **float** | The total amount of CIS deductible labour - only applicable in UK | [optional]
**baseCurrencyCisApplicableAmount** | **float** | The total amount of CIS deductible labour in the base currency - only applicable in UK | [optional]
**totalAfterCisDeduction** | **float** | The total of the artefact with the total of CIS deducted - only applicable in UK | [optional]
**baseCurrencyTotalAfterCisDeduction** | **float** | The total of the artefact with the total of CIS deducted in the base currency - only applicable in UK | [optional]
**baseCurrencyTotalItcAmount** | **float** | The total amount of input tax credit in base currency for the                      purchase credit note (Canada only) | [optional]
**totalItcAmount** | **float** | The total amount of input tax credit for the purchase credit note (Canada only) | [optional]
**baseCurrencyTotalItrAmount** | **float** | The total amount of input tax refund in base currency for the                      purchase credit note (Canada only) | [optional]
**totalItrAmount** | **float** | The total amount of input tax refund for the purchase credit note (Canada only) | [optional]
**partRecoverable** | **bool** | Indicates if the purchase credit note is part recoverable or not (Canada only) | [optional]
**contactName** | **string** | The name of the contact when the credit note was created | [optional]
**contactReference** | **string** | The reference of the contact when the credit note was created | [optional]
**originalInvoiceDate** | **\DateTime** | The date of the original invoice | [optional]
**reference** | **string** | The reference for the credit note | [optional]
**vendorReference** | **string** | The vendor reference for the credit note | [optional]
**notes** | **string** | credit note notes | [optional]
**totalQuantity** | **float** | The total quantity of the credit note | [optional]
**netAmount** | **float** | The net amount of the credit note | [optional]
**taxAmount** | **float** | The tax amount of the credit note | [optional]
**totalAmount** | **float** | The total amount of the credit note | [optional]
**currencyId** | **string** | The ID of the Currency. | [optional]
**exchangeRate** | **float** | The exchange rate for the credit note | [optional]
**inverseExchangeRate** | **string** | The inverse exchange rate for the credit note | [optional]
**baseCurrencyNetAmount** | **float** | The net amount of the credit note in base currency | [optional]
**baseCurrencyTaxAmount** | **float** | The tax amount of the credit note in base currency | [optional]
**baseCurrencyTotalAmount** | **float** | The total amount of the credit note in base currency | [optional]
**statusId** | **string** | The ID of the Status. | [optional]
**taxAddressRegionId** | **string** | The ID of the Tax Address Region. (Canada only) | [optional]
**withholdingTaxRate** | **float** | The withheld Tax Rate - only applicable in UK (CIS subcontractor tax rate) | [optional]
**withholdingTaxAmount** | **float** | The withheld Tax Amount - only applicable in UK (CIS subcontractor tax) | [optional]
**baseCurrencyWithholdingTaxAmount** | **float** | The withheld Tax Amount in the base currency - only applicable in UK (CIS subcontractor tax) | [optional]
**creditNoteLines** | [**\SynergiTech\Sage\Model\PostPurchaseCreditNotesPurchaseCreditNoteCreditNoteLinesInner[]**](PostPurchaseCreditNotesPurchaseCreditNoteCreditNoteLinesInner.md) | The credit note lines of the credit note |
**taxAnalysis** | [**\SynergiTech\Sage\Model\PostPurchaseCorrectiveInvoicesPurchaseCorrectiveInvoiceTaxAnalysisInner[]**](PostPurchaseCorrectiveInvoicesPurchaseCorrectiveInvoiceTaxAnalysisInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
