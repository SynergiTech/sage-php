# ContactAllocation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**legacy_id** | **int** | The legacy ID for the item | [optional] 
**id** | **string** | The unique identifier for the item | [optional] 
**displayed_as** | **string** | The name of the resource | [optional] 
**path** | **string** | The API path for the resource | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was created | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was last updated | [optional] 
**links** | [**\Swagger\Client\Model\Link[]**](Link.md) | Links for the resource | [optional] 
**transaction** | [**\Swagger\Client\Model\Base**](Base.md) | The transaction for the item | [optional] 
**transaction_type** | [**\Swagger\Client\Model\Base**](Base.md) | The transaction type of the allocation | [optional] 
**deleted_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was deleted | [optional] 
**date** | [**\DateTime**](\DateTime.md) | The date the allocation was made | [optional] 
**contact** | [**\Swagger\Client\Model\Base**](Base.md) | The contact that the allocation relates to | [optional] 
**allocated_artefacts** | [**\Swagger\Client\Model\AllocatedArtefact[]**](AllocatedArtefact.md) | The payment lines of the payment | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


