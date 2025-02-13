# Address

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
**created_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was created | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was last updated | [optional] 
**bank_account** | [**\Swagger\Client\Model\Base**](Base.md) | The related bank account of the address, if the address belongs to a bank account. | [optional] 
**contact** | [**\Swagger\Client\Model\Base**](Base.md) | The related contact of the address, if the address belongs to a contact. | [optional] 
**address_type** | [**\Swagger\Client\Model\Base**](Base.md) | Defines the nature of the address (Shipping, Billing, Head Office etc.).&lt;br&gt;Start defaults to \&quot;Sales\&quot; for Customers and \&quot;Purchasing\&quot; for Vendors | [optional] 
**name** | **string** | The custom name of the address | [optional] 
**region** | **string** | The address state/province/region | [optional] 
**country_group** | [**\Swagger\Client\Model\Base**](Base.md) | Country group allows countries to be filtered for selection.&lt;br&gt;Set it to e.g. EU if the address is within the EEC. | [optional] 
**is_main_address** | **bool** | Specifies the address as the contact&#39;s main address. Only a single address can exist for a contact in Start so this is always true when returned by the API but cannot be seen in the UI | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


