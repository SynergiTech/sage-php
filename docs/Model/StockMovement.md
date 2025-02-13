# StockMovement

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**legacy_id** | **int** | The legacy ID for the item | [optional] 
**id** | **string** | The unique identifier for the item | [optional] 
**displayed_as** | **string** | Display text for the stock movement | [optional] 
**path** | **string** | The API path for the resource | [optional] 
**links** | [**\Swagger\Client\Model\Link[]**](Link.md) | Links for the resource | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was created | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was last updated | [optional] 
**movement_number** | **string** | The movement number of the stock movement | [optional] 
**date** | [**\DateTime**](\DateTime.md) | The date the stock movement occurred | [optional] 
**cost_price** | **double** | The cost per unit of stock purchased | [optional] 
**quantity** | **double** | The quantity of the goods adjusted | [optional] 
**details** | **string** | The transaction details of the stock movement | [optional] 
**reference** | **string** | The reference of the stock movement | [optional] 
**stock_item** | [**\Swagger\Client\Model\StockItem**](StockItem.md) | The stock item of the stock movement | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


