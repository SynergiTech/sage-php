# TaxRate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**legacy_id** | **int** | The legacy ID for the item | [optional] 
**id** | **string** | The unique identifier for the item | [optional] 
**displayed_as** | **string** | The name of the resource | [optional] 
**path** | **string** | The API path for the resource | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was created | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was last updated | [optional] 
**name** | **string** | The name of the tax rate | [optional] 
**agency** | **string** | The agency name (US Only) | [optional] 
**percentage** | **double** | The current tax rate percentage | [optional] 
**percentages** | [**\Swagger\Client\Model\TaxRatePercentage[]**](TaxRatePercentage.md) | The tax rate percentage and date ranges they apply to | [optional] 
**is_visible** | **bool** | Indicates whether the tax rate is displayed in the application | [optional] 
**retailer** | **bool** | Indicates if tax rate is a retailer rate or not | [optional] 
**editable** | **bool** | Indicates whether a tax rate can be edited | [optional] 
**deletable** | **bool** | Indicates whether a tax rate can be deleted | [optional] 
**is_combined_rate** | **bool** | Indicates whether the tax rate is made up of component tax rates | [optional] 
**component_tax_rates** | [**\Swagger\Client\Model\ComponentTaxRate[]**](ComponentTaxRate.md) | The component tax rates which make up a combined rate | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


