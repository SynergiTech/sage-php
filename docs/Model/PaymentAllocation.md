# PaymentAllocation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\Swagger\Client\Model\Link[]**](Link.md) | Links for the resource | [optional] 
**date** | [**\DateTime**](\DateTime.md) | The date for the payment/allocation | [optional] 
**type** | **string** | The type of the payment/allocation | [optional] 
**reference** | **string** | The reference for the payment/allocation | [optional] 
**amount** | **double** | The allocated amount of the payment/allocation | [optional] 
**discount** | **double** | The discount amount of the payment/allocation | [optional] 
**stripe_transaction_id** | **string** |  | [optional] 
**contact_allocation** | [**\Swagger\Client\Model\ContactAllocation**](ContactAllocation.md) | The related contact allocation | [optional] 
**artefact** | [**\Swagger\Client\Model\Generic**](Generic.md) | The artefact the allocation relates to | [optional] 
**contact_payment** | [**\Swagger\Client\Model\ContactPayment**](ContactPayment.md) | The related contact payment | [optional] 
**displayed_as** | **string** | Display text for the item | [optional] 
**negative_payment** | **bool** | This is a negative payment | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


