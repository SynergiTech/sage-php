# Product

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**legacy_id** | **int** | The legacy ID for the item | [optional] 
**id** | **string** | The unique identifier for the item | [optional] 
**displayed_as** | **string** | The name of the resource | [optional] 
**path** | **string** | The API path for the resource | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was created | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was last updated | [optional] 
**deleted_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was deleted | [optional] 
**deletable** | **bool** | Indicates whether the product can be deleted | [optional] 
**deactivatable** | **bool** | Indicates whether the product can be deactivated | [optional] 
**used_on_recurring_invoice** | **bool** | Indicates whether the product has been used on a recurring invoice | [optional] 
**item_code** | **string** | The item code for the product | [optional] 
**description** | **string** | The product description | [optional] 
**notes** | **string** | The notes for the product | [optional] 
**sales_ledger_account** | [**\Swagger\Client\Model\Base**](Base.md) | The sales ledger account for the product | [optional] 
**sales_tax_rate** | [**\Swagger\Client\Model\Base**](Base.md) | The sales tax rate for the product | [optional] 
**purchase_ledger_account** | [**\Swagger\Client\Model\Base**](Base.md) | The purchase ledger account for the product | [optional] 
**usual_supplier** | [**\Swagger\Client\Model\Contact**](Contact.md) | The usual supplier for the product | [optional] 
**purchase_tax_rate** | [**\Swagger\Client\Model\Base**](Base.md) | The purchase tax rate for the product | [optional] 
**cost_price** | **double** | The cost price of the product | [optional] 
**sales_prices** | [**\Swagger\Client\Model\SalesPrice[]**](SalesPrice.md) | The sales prices for the product | [optional] 
**source_guid** | **string** | Used when importing products from external sources | [optional] 
**purchase_description** | **string** | The product purchase description | [optional] 
**active** | **bool** | Indicates whether the product is active | [optional] 
**catalog_item_type** | [**\Swagger\Client\Model\Base**](Base.md) | Indicates what the product type is | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


