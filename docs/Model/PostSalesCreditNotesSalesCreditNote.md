# # PostSalesCreditNotesSalesCreditNote

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contactId** | **string** | The contact the sales credit note relates to |
**date** | **\DateTime** | The date of the credit note |
**vatReverseCharge** | **bool** | Indicates whether Domestic Reverser Charge is applied to the artefact. Only used for a UK business. | [optional]
**destinationConsignment** | **bool** | Indicates whether consignment checkbox for destination VAT is checked on the artefact. Only used for an UK business, where destination VAT was enabled in the settings. | [optional]
**cisApplicableAmount** | **float** | The total amount of CIS deductible labour - only applicable in UK | [optional]
**baseCurrencyCisApplicableAmount** | **float** | The total amount of CIS deductible labour in the base currency - only applicable in UK | [optional]
**totalAfterCisDeduction** | **float** | The total of the artefact with the total of CIS deducted - only applicable in UK | [optional]
**baseCurrencyTotalAfterCisDeduction** | **float** | The total of the artefact with the total of CIS deducted in the base currency - only applicable in UK | [optional]
**creditNoteNumberPrefix** | **string** | The credit note number prefix | [optional]
**creditNoteNumber** | **string** | The generated credit note number | [optional]
**contactName** | **string** | The name of the contact when the credit note was created | [optional]
**contactReference** | **string** | The reference of the contact when the credit note was created | [optional]
**originalInvoiceDate** | **\DateTime** | The date of the original invoice | [optional]
**reference** | **string** | The reference for the credit note | [optional]
**notes** | **string** | credit note notes | [optional]
**termsAndConditions** | **string** | Credit note terms and conditions | [optional]
**shippingNetAmount** | **float** | The net shipping amount | [optional]
**shippingTaxRateId** | **string** | The ID of the Shipping Tax Rate. | [optional]
**shippingTaxAmount** | **float** | The tax shipping amount. NOTE: This is not required for POST/PUT requests as the shipping tax is calculated based on the shipping_net_amount and the shipping_tax_rate. | [optional]
**totalQuantity** | **float** | The total quantity of the credit note | [optional]
**shippingTotalAmount** | **float** | The total shipping amount | [optional]
**netAmount** | **float** | The net amount of the credit note | [optional]
**taxAmount** | **float** | The tax amount of the credit note | [optional]
**totalAmount** | **float** | The total amount of the credit note | [optional]
**currencyId** | **string** | The ID of the Currency. | [optional]
**exchangeRate** | **float** | The exchange rate for the credit note | [optional]
**inverseExchangeRate** | **float** | The inverse exchange rate for the credit note | [optional]
**baseCurrencyShippingNetAmount** | **float** | The net shipping amount in base currency | [optional]
**baseCurrencyShippingTaxAmount** | **float** | The tax shipping amount in base currency | [optional]
**baseCurrencyShippingTotalAmount** | **float** | The total shipping amount in base currency | [optional]
**totalDiscountAmount** | **float** | The discount amount on the credit note | [optional]
**baseCurrencyTotalDiscountAmount** | **float** | The discount amount on the credit note in base currency | [optional]
**baseCurrencyNetAmount** | **float** | The net amount of the credit note in base currency | [optional]
**baseCurrencyTaxAmount** | **float** | The tax amount of the credit note in base currency | [optional]
**baseCurrencyTotalAmount** | **float** | The total amount of the credit note in base currency | [optional]
**statusId** | **string** | The ID of the Status. | [optional]
**sent** | **bool** | Indicates whether the credit note has been sent | [optional]
**taxAddressRegionId** | **string** | The ID of the Tax Address Region. (Canada only) | [optional]
**withholdingTaxRate** | **float** | The withheld Tax Rate - only applicable in UK (CIS subcontractor tax rate) | [optional]
**withholdingTaxAmount** | **float** | The withheld Tax Amount - only applicable in UK (CIS subcontractor tax) | [optional]
**baseCurrencyWithholdingTaxAmount** | **float** | The withheld Tax Amount in the base currency - only applicable in UK (CIS subcontractor tax) | [optional]
**mainAddress** | [**\SynergiTech\Sage\Model\PostSalesCorrectiveInvoicesSalesCorrectiveInvoiceMainAddress**](PostSalesCorrectiveInvoicesSalesCorrectiveInvoiceMainAddress.md) |  | [optional]
**deliveryAddress** | [**\SynergiTech\Sage\Model\PostSalesCorrectiveInvoicesSalesCorrectiveInvoiceMainAddress**](PostSalesCorrectiveInvoicesSalesCorrectiveInvoiceMainAddress.md) |  | [optional]
**creditNoteLines** | [**\SynergiTech\Sage\Model\PostSalesCreditNotesSalesCreditNoteCreditNoteLinesInner[]**](PostSalesCreditNotesSalesCreditNoteCreditNoteLinesInner.md) | The credit note lines of the credit note |
**taxAnalysis** | [**\SynergiTech\Sage\Model\PostPurchaseCorrectiveInvoicesPurchaseCorrectiveInvoiceTaxAnalysisInner[]**](PostPurchaseCorrectiveInvoicesPurchaseCorrectiveInvoiceTaxAnalysisInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
