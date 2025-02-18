# # SalesQuote

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier for the item | [optional]
**displayedAs** | **string** | The name of the resource | [optional]
**path** | **string** | The API path for the resource | [optional]
**createdAt** | **\DateTime** | The datetime when the item was created | [optional]
**updatedAt** | **\DateTime** | The datetime when the item was last updated | [optional]
**links** | [**\SynergiTech\Sage\Model\Link[]**](Link.md) | Links for the resource | [optional]
**editable** | **bool** | Indicates whether artefact can be edited | [optional]
**vatReverseCharge** | **bool** | Indicates whether Domestic Reverser Charge is applied to the artefact. Only used for a UK business. | [optional]
**taxCalculationMethod** | **string** | The tax calculation method, if applicable, for this sales invoice, returns invoice, cash or retailer. | [optional]
**destinationConsignment** | **bool** | Indicates whether consignment checkbox for destination VAT is checked on the artefact. Only used for an UK business, where destination VAT was enabled in the settings. | [optional]
**destinationVatRatesInUse** | **bool** | Indicates whether destination vat rates are in use | [optional]
**contact** | [**\SynergiTech\Sage\Model\Contact**](Contact.md) |  | [optional]
**quoteNumberPrefix** | **string** | The quote number prefix | [optional]
**quoteNumber** | **string** | The generated quote number | [optional]
**contactName** | **string** | The name of the contact when the quote was created | [optional]
**contactReference** | **string** | The reference of the contact when the quote was created | [optional]
**date** | **\DateTime** | The date of the quote | [optional]
**expiryDate** | **\DateTime** | The expiry date of the quote | [optional]
**reference** | **string** | The reference for the quote | [optional]
**mainAddressFreeForm** | **string** | The free-form main address of the quote Note: An upper length limit of 500 characters is imposed conditionally and may not apply in every request. A hard upper limit of 65535 characters is imposed by the storage layer, though. | [optional]
**mainAddress** | [**\SynergiTech\Sage\Model\SalesArtefactAddress**](SalesArtefactAddress.md) |  | [optional]
**deliveryAddressFreeForm** | **string** | The free-form delivery address of the quote Note: An upper length limit of 500 characters is imposed conditionally and may not apply in every request. A hard upper limit of 65535 characters is imposed by the storage layer, though. | [optional]
**deliveryAddress** | [**\SynergiTech\Sage\Model\SalesArtefactAddress**](SalesArtefactAddress.md) |  | [optional]
**notes** | **string** | Quote notes | [optional]
**termsAndConditions** | **string** | Quote terms and conditions | [optional]
**shippingNetAmount** | **float** | The net shipping amount | [optional]
**shippingTaxRate** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**shippingTaxAmount** | **float** | The tax shipping amount. NOTE: This is not required for POST/PUT requests as the shipping tax is calculated based on the shipping_net_amount and the shipping_tax_rate. | [optional]
**shippingTaxBreakdown** | [**\SynergiTech\Sage\Model\TaxBreakdown[]**](TaxBreakdown.md) | The shipping tax breakdown for the quote | [optional]
**shippingTotalAmount** | **float** | The total shipping amount | [optional]
**netAmount** | **float** | The net amount of the quote | [optional]
**taxAmount** | **float** | The tax amount of the quote | [optional]
**totalAmount** | **float** | The total amount of the quote | [optional]
**currency** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**exchangeRate** | **float** | The exchange rate for the quote | [optional]
**inverseExchangeRate** | **float** | The inverse exchange rate for the quote | [optional]
**baseCurrencyShippingNetAmount** | **float** | The net shipping amount in base currency | [optional]
**baseCurrencyShippingTaxAmount** | **float** | The tax shipping amount in base currency | [optional]
**baseCurrencyShippingTaxBreakdown** | [**\SynergiTech\Sage\Model\TaxBreakdown[]**](TaxBreakdown.md) | The shipping tax breakdown for the  quote in base currency | [optional]
**baseCurrencyShippingTotalAmount** | **float** | The total shipping amount in base currency | [optional]
**totalQuantity** | **float** | The total quantity of the quote | [optional]
**totalDiscountAmount** | **float** | The discount amount on the  quote | [optional]
**baseCurrencyTotalDiscountAmount** | **float** | The discount amount on the  quote in base currency | [optional]
**baseCurrencyNetAmount** | **float** | The net amount of the quote in base currency | [optional]
**baseCurrencyTaxAmount** | **float** | The tax amount of the quote in base currency | [optional]
**baseCurrencyTotalAmount** | **float** | The total amount of the quote in base currency | [optional]
**paymentsAllocationsTotalAmount** | **float** | The total amount of all payments and allocations | [optional]
**paymentsAllocationsTotalDiscount** | **float** | The total discount of all payments and allocations | [optional]
**totalPaid** | **float** | The total paid amount of the quote including any payments, allocations and discounts | [optional]
**status** | [**\SynergiTech\Sage\Model\QuoteStatus**](QuoteStatus.md) |  | [optional]
**sent** | **bool** | Indicates whether the quote has been sent | [optional]
**sentByEmail** | **bool** | Indicates whether the quote has been emailed | [optional]
**quoteLines** | [**\SynergiTech\Sage\Model\SalesQuoteLineItem[]**](SalesQuoteLineItem.md) | The quote lines of the quote | [optional]
**taxAnalysis** | [**\SynergiTech\Sage\Model\ArtefactTaxAnalysis[]**](ArtefactTaxAnalysis.md) | The quote tax analysis | [optional]
**detailedTaxAnalysis** | [**\SynergiTech\Sage\Model\ArtefactDetailedTaxAnalysis**](ArtefactDetailedTaxAnalysis.md) |  | [optional]
**taxAddressRegion** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**withholdingTaxRate** | **float** | IRPF withheld Tax Rate (Spain only) | [optional]
**withholdingTaxAmount** | **float** | IRPF withheld Tax Amount (Spain only) | [optional]
**baseCurrencyWithholdingTaxAmount** | **float** | IRPF withheld Tax Amount (Spain only) in the base currency | [optional]
**profitAnalysis** | [**\SynergiTech\Sage\Model\ProfitAnalysis**](ProfitAnalysis.md) |  | [optional]
**taxReconciled** | **bool** | Indicates if the quote/estimate is tax reconciled or not. | [optional]
**invoice** | [**\SynergiTech\Sage\Model\Generic**](Generic.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
