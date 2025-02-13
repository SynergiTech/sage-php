# TaxProfile

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**legacy_id** | **int** | The legacy ID for the item | [optional] 
**id** | **string** | The unique identifier for the item | [optional] 
**displayed_as** | **string** | The name of the resource | [optional] 
**path** | **string** | The API path for the resource | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was created | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was last updated | [optional] 
**tax_type** | [**\Swagger\Client\Model\Base**](Base.md) | The tax type | [optional] 
**tax_number** | **string** | The tax number | [optional] 
**tax_number_suffix** | **string** | The tax number suffix | [optional] 
**collect_tax** | **bool** | Indicates whether tax is collected for this tax type | [optional] 
**tax_return_frequency** | [**\Swagger\Client\Model\Base**](Base.md) | The tax return frequency | [optional] 
**address_region** | [**\Swagger\Client\Model\AddressRegion**](AddressRegion.md) | The address region associated with the tax profile. Note: GST/HST is for all regions. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


