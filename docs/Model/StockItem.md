# StockItem

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
**deletable** | **bool** | Indicates whether the stock item can be deleted | [optional] 
**deactivatable** | **bool** | Indicates whether the stock item can be deactivated | [optional] 
**used_on_recurring_invoice** | **bool** | Indicates whether the stock item has been used on a recurring invoice | [optional] 
**item_code** | **string** | The item code for the stock item | [optional] 
**description** | **string** | The stock item description | [optional] 
**notes** | **string** | The notes for the stock item | [optional] 
**sales_ledger_account** | [**\Swagger\Client\Model\Base**](Base.md) | The sales ledger account for the stock item | [optional] 
**sales_tax_rate** | [**\Swagger\Client\Model\Base**](Base.md) | The sales tax rate for the stock item | [optional] 
**purchase_ledger_account** | [**\Swagger\Client\Model\Base**](Base.md) | The purchase ledger account for the stock item | [optional] 
**usual_supplier** | [**\Swagger\Client\Model\Contact**](Contact.md) | The usual supplier for the stock item | [optional] 
**purchase_tax_rate** | [**\Swagger\Client\Model\Base**](Base.md) | The purchase tax rate for the stock item | [optional] 
**cost_price** | **double** | The cost price of the stock item | [optional] 
**sales_prices** | [**\Swagger\Client\Model\SalesPrice[]**](SalesPrice.md) | The sales prices for the stock item | [optional] 
**source_guid** | **string** | Used when importing stock items from external sources | [optional] 
**purchase_description** | **string** | The stock item purchase description | [optional] 
**reorder_level** | **double** | The reorder level for the stock item | [optional] 
**reorder_quantity** | **double** | The reorder quantity for the stock item | [optional] 
**location** | **string** | The location for the stock item | [optional] 
**barcode** | **string** | The barcode for the stock item | [optional] 
**supplier_part_number** | **string** | The supplier part number for stock item | [optional] 
**weight** | **double** | The weight of stock item | [optional] 
**measurement_unit** | **string** | The unit of measure of weight for stock item | [optional] 
**weight_converted** | **double** | The weight of stock item converted to the lowest unit of measurement | [optional] 
**active** | **bool** | Indicates whether the stock item is active | [optional] 
**quantity_in_stock** | **double** | The current quantity of the stock item held by the business | [optional] 
**last_cost_price** | **double** | The most recent &#39;purchase invoice&#39; or &#39;adjustment in&#39; price | [optional] 
**last_cost_price_stock_value** | **double** | The value of the current stock in terms of the last cost price | [optional] 
**average_cost_price** | **double** | The average price across all purchases of this stock item | [optional] 
**average_cost_price_stock_value** | **double** | The value of the current stock in terms of the average cost price | [optional] 
**cost_price_last_updated** | [**\DateTime**](\DateTime.md) | The date on which the last cost price was last updated | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


