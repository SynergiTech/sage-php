# # ComponentTaxRate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**legacyId** | **int** | The legacy ID for the item | [optional]
**id** | **string** | The unique identifier for the item | [optional]
**displayedAs** | **string** | The name of the resource | [optional]
**path** | **string** | The API path for the resource | [optional]
**createdAt** | **\DateTime** | The datetime when the item was created | [optional]
**updatedAt** | **\DateTime** | The datetime when the item was last updated | [optional]
**name** | **string** | The name of the tax rate | [optional]
**agency** | **string** | The agency name (US Only) | [optional]
**percentage** | **float** | The current tax rate percentage | [optional]
**percentages** | [**\SynergiTech\Sage\Model\TaxRatePercentage[]**](TaxRatePercentage.md) | The tax rate percentage and date ranges they apply to | [optional]
**isVisible** | **bool** | Indicates whether the tax rate is displayed in the application | [optional]
**retailer** | **bool** | Indicates if tax rate is a retailer rate or not | [optional]
**editable** | **bool** | Indicates whether a tax rate can be edited | [optional]
**deletable** | **bool** | Indicates whether a tax rate can be deleted | [optional]
**isCombinedRate** | **bool** | Indicates whether the tax rate is made up of component tax rates | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
