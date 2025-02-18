# # PutPurchaseInvoicesPurchaseInvoiceInvoiceLinesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The description for the invoice line | [optional]
**ledgerAccountId** | **string** | The ID of the Ledger Account. | [optional]
**quantity** | **float** | The quantity for the invoice line | [optional]
**unitPrice** | **float** | The unit price for the invoice line | [optional]
**isPurchaseForResale** | **bool** | Identifies whether the line item is for resale. (Ireland Only) | [optional]
**analysisTypeCategories** | **string[]** | The analysis types information | [optional]
**productId** | **string** | The ID of the Product. | [optional]
**serviceId** | **string** | The ID of the Service. | [optional]
**tradeOfAsset** | **bool** | Whether the line item is marked as trade of asset. | [optional]
**netAmount** | **float** | The net amount for the invoice line | [optional]
**taxRateId** | **string** | The ID of the Tax Rate. | [optional]
**taxAmount** | **float** | The tax amount for the invoice line\&quot;. This attribute is required in v3.1, unless the tax rate is of a \&quot;zero\&quot;, \&quot;exempt\&quot; or \&quot;no_tax\&quot; type. Then the tax_amount is infered as 0.0. In v3, this attribute is optional, but you should still set, as it defaults to 0.0 in any case. This is not what you want for tax rates with a percentage &gt; 0.0. | [optional]
**totalAmount** | **float** | The total amount for the invoice line | [optional]
**baseCurrencyUnitPrice** | **float** | The unit price for the invoice line in base currency | [optional]
**unitPriceIncludesTax** | **bool** | Defines whether the unit price includes tax | [optional]
**baseCurrencyNetAmount** | **float** | The net amount for the invoice line in base currency | [optional]
**baseCurrencyTaxAmount** | **float** | The tax amount for the invoice line in base currency | [optional]
**baseCurrencyTotalAmount** | **float** | The total amount for the invoice line in base currency | [optional]
**euGoodsServicesTypeId** | **string** | The ID of the EU Goods Services Type. | [optional]
**gstAmount** | **float** | The gst or hst tax amount for the invoice line | [optional]
**pstAmount** | **float** | The pst or qst tax amount for the invoice line | [optional]
**taxRecoverable** | **bool** | Indicates if the invoice line is tax recoverable or not | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
