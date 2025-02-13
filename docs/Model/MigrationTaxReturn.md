# MigrationTaxReturn

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**legacy_id** | **int** | The legacy ID for the item | [optional] 
**id** | **string** | The unique identifier for the item | [optional] 
**displayed_as** | **string** | The name of the resource | [optional] 
**path** | **string** | The API path for the resource | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was created | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was last updated | [optional] 
**from_date** | [**\DateTime**](\DateTime.md) | The start date of the tax return | [optional] 
**to_date** | [**\DateTime**](\DateTime.md) | The end date of the tax return | [optional] 
**tax_return_frequency** | [**\Swagger\Client\Model\Base**](Base.md) | The tax return submission frequency | [optional] 
**total_amount** | **double** | The total of the tax return | [optional] 
**gb** | [**\Swagger\Client\Model\GBBoxData**](GBBoxData.md) | The tax return data | [optional] 
**ie** | [**\Swagger\Client\Model\IEBoxData**](IEBoxData.md) | The tax return data | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


