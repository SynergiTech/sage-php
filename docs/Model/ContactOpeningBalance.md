# # ContactOpeningBalance

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier for the item | [optional]
**displayedAs** | **string** | The name of the resource | [optional]
**path** | **string** | The API path for the resource | [optional]
**createdAt** | **\DateTime** | The datetime when the item was created | [optional]
**updatedAt** | **\DateTime** | The datetime when the item was last updated | [optional]
**transaction** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**transactionType** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**deletedAt** | **\DateTime** | The datetime when the item was deleted | [optional]
**contactOpeningBalanceType** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**contact** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**date** | **\DateTime** | The date of the opening balance | [optional]
**reference** | **string** | The reference for the opening balance | [optional]
**details** | **string** | A description of the opening balance | [optional]
**netAmount** | **float** | The net amount of the opening balance | [optional]
**taxRate** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**taxAmount** | **float** | The tax amount of the opening balance | [optional]
**taxBreakdown** | [**\SynergiTech\Sage\Model\TaxBreakdown[]**](TaxBreakdown.md) | The tax breakdown for the opening balance | [optional]
**totalAmount** | **float** | The total amount of the opening balance | [optional]
**currency** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**exchangeRate** | **float** | The exchange rate for the opening balance | [optional]
**baseCurrencyNetAmount** | **float** | The net amount of the opening balance in base currency | [optional]
**baseCurrencyTaxAmount** | **float** | The tax amount of the opening balance in base currency | [optional]
**baseCurrencyTaxBreakdown** | [**\SynergiTech\Sage\Model\TaxBreakdown[]**](TaxBreakdown.md) | The tax breakdown for the opening balance in base currency | [optional]
**baseCurrencyTotalAmount** | **float** | The total amount of the opening balance in base currency | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
