# PutAddressesAddress

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_type_id** | **string** | Defines the nature of the address (Shipping, Billing, Head Office etc.).&lt;br&gt;Start defaults to \&quot;Sales\&quot; for Customers and \&quot;Purchasing\&quot; for Vendors | [optional] 
**name** | **string** | The custom name of the address | [optional] 
**is_main_address** | **bool** | Specifies the address as the contact&#39;s main address. Only a single address can exist for a contact in Start so this is always true when returned by the API but cannot be seen in the UI | [optional] 
**address_line_1** | **string** | The first line of the address | [optional] 
**address_line_2** | **string** | The second line of the address | [optional] 
**city** | **string** | The address town/city | [optional] 
**postal_code** | **string** | The address postal code/zipcode | [optional] 
**country_id** | **string** | The ID of the Country. | [optional] 
**bank_account_id** | **string** | The related bank account of the address, if the address belongs to a bank account. | [optional] 
**contact_id** | **string** | The related contact of the address, if the address belongs to a contact. | [optional] 
**region** | **string** | The address state/province/region | [optional] 
**country_group_id** | **string** | The ID of the Country Group. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


