# SalesArtefactAddress

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**legacy_id** | **int** | The legacy ID for the item | [optional] 
**id** | **string** | The unique identifier for the item | [optional] 
**displayed_as** | **string** | The name of the resource | [optional] 
**path** | **string** | The API path for the resource | [optional] 
**address_line_1** | **string** | The first line of the address | [optional] 
**address_line_2** | **string** | The second line of the address | [optional] 
**city** | **string** | The address town/city | [optional] 
**postal_code** | **string** | The address postal code/zipcode | [optional] 
**country** | [**\Swagger\Client\Model\Base**](Base.md) | The address country | [optional] 
**deleted_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was deleted | [optional] 
**address_type** | [**\Swagger\Client\Model\Base**](Base.md) | Defines the nature of the address (Shipping, Billing, Head Office etc.).&lt;br&gt;Start defaults to \&quot;Sales\&quot; for Customers and \&quot;Purchasing\&quot; for Vendors | [optional] 
**region** | **string** | The address state/province/region | [optional] 
**country_group** | [**\Swagger\Client\Model\Base**](Base.md) | Country group allows countries to be filtered for selection.&lt;br&gt;Set it to e.g. EU if the address is within the EEC. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


