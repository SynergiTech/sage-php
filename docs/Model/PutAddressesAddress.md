# # PutAddressesAddress

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**addressTypeId** | **string** | Defines the nature of the address (Shipping, Billing, Head Office etc.).&lt;br&gt;Start defaults to \&quot;Sales\&quot; for Customers and \&quot;Purchasing\&quot; for Vendors | [optional]
**name** | **string** | The custom name of the address | [optional]
**isMainAddress** | **bool** | Specifies the address as the contact&#39;s main address. Only a single address can exist for a contact in Start so this is always true when returned by the API but cannot be seen in the UI | [optional]
**addressLine1** | **string** | The first line of the address | [optional]
**addressLine2** | **string** | The second line of the address | [optional]
**city** | **string** | The address town/city | [optional]
**postalCode** | **string** | The address postal code/zipcode | [optional]
**countryId** | **string** | The ID of the Country. | [optional]
**bankAccountId** | **string** | The related bank account of the address, if the address belongs to a bank account. | [optional]
**contactId** | **string** | The related contact of the address, if the address belongs to a contact. | [optional]
**region** | **string** | The address state/province/region | [optional]
**countryGroupId** | **string** | The ID of the Country Group. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
