# PutStockItemsStockItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_code** | **string** | The item code for the stock item | [optional] 
**description** | **string** | The stock item description | [optional] 
**sales_ledger_account_id** | **string** | The sales ledger account for the stock item | [optional] 
**purchase_ledger_account_id** | **string** | The purchase ledger account for the stock item | [optional] 
**notes** | **string** | The notes for the stock item | [optional] 
**sales_tax_rate_id** | **string** | The ID of the Sales Tax Rate. | [optional] 
**usual_supplier_id** | **string** | The ID of the Usual Supplier. | [optional] 
**purchase_tax_rate_id** | **string** | The ID of the Purchase Tax Rate. | [optional] 
**cost_price** | **double** | The cost price of the stock item | [optional] 
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
**sales_prices** | [**\Swagger\Client\Model\PostProductsProductSalesPrices[]**](PostProductsProductSalesPrices.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


