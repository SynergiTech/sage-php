# # PutPurchaseQuickEntriesPurchaseQuickEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**quickEntryTypeId** | **string** | The type of quick entry e.g. invoice or credit note | [optional]
**date** | **\DateTime** | The date of the quick entry | [optional]
**contactId** | **string** | The contact the quick entry relates to | [optional]
**reference** | **string** | The reference for the quick entry | [optional]
**ledgerAccountId** | **string** | The associated ledger account | [optional]
**contactName** | **string** | The name of the contact when the quick entry was created | [optional]
**contactReference** | **string** | The reference of the contact when the quick entry was created | [optional]
**details** | **string** | A description of the quick entry | [optional]
**netAmount** | **float** | The net amount of the quick entry | [optional]
**taxRateId** | **string** | The ID of the Tax Rate. | [optional]
**taxAmount** | **float** | The tax amount of the quick entry | [optional]
**totalAmount** | **float** | The total amount of the quick entry | [optional]
**currencyId** | **string** | The ID of the Currency. | [optional]
**exchangeRate** | **float** | The exchange rate for the quick entry | [optional]
**inverseExchangeRate** | **float** | The inverse exchange rate for the quick entry | [optional]
**baseCurrencyNetAmount** | **float** | The net amount of the quick entry in base currency | [optional]
**baseCurrencyTaxAmount** | **float** | The tax amount of the quick entry in base currency | [optional]
**baseCurrencyTotalAmount** | **float** | The total amount of the quick entry in base currency | [optional]
**statusId** | **string** | The ID of the Status. | [optional]
**taxAddressRegionId** | **string** | The ID of the Tax Address Region. (Canada only) | [optional]
**tradeOfAsset** | **bool** | Whether the quick entry is marked as trade of asset. | [optional]
**gstAmount** | **float** | The gst or hst tax amount for the purchase quick entry | [optional]
**pstAmount** | **float** | The pst or qst tax amount for the purchase quick entry | [optional]
**taxRecoverable** | **bool** | Indicates if the purchase quick entry is tax recoverable or not | [optional]
**analysisTypeCategories** | [**\SynergiTech\Sage\Model\PostPurchaseQuickEntriesPurchaseQuickEntryAnalysisTypeCategoriesInner[]**](PostPurchaseQuickEntriesPurchaseQuickEntryAnalysisTypeCategoriesInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
