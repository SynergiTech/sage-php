# # PostStockItemsStockItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**itemCode** | **string** | The item code for the stock item |
**description** | **string** | The stock item description |
**salesLedgerAccountId** | **string** | The sales ledger account for the stock item |
**purchaseLedgerAccountId** | **string** | The purchase ledger account for the stock item |
**notes** | **string** | The notes for the stock item | [optional]
**salesTaxRateId** | **string** | The ID of the Sales Tax Rate. | [optional]
**usualSupplierId** | **string** | The ID of the Usual Supplier. | [optional]
**purchaseTaxRateId** | **string** | The ID of the Purchase Tax Rate. | [optional]
**costPrice** | **float** | The cost price of the stock item | [optional]
**sourceGuid** | **string** | Used when importing stock items from external sources | [optional]
**purchaseDescription** | **string** | The stock item purchase description | [optional]
**reorderLevel** | **float** | The reorder level for the stock item | [optional]
**reorderQuantity** | **float** | The reorder quantity for the stock item | [optional]
**location** | **string** | The location for the stock item | [optional]
**barcode** | **string** | The barcode for the stock item | [optional]
**supplierPartNumber** | **string** | The supplier part number for stock item | [optional]
**weight** | **float** | The weight of stock item | [optional]
**measurementUnit** | **string** | The unit of measure of weight for stock item | [optional]
**weightConverted** | **float** | The weight of stock item converted to the lowest unit of measurement | [optional]
**active** | **bool** | Indicates whether the stock item is active | [optional]
**quantityInStock** | **float** | The current quantity of the stock item held by the business | [optional]
**lastCostPrice** | **float** | The most recent &#39;purchase invoice&#39; or &#39;adjustment in&#39; price | [optional]
**lastCostPriceStockValue** | **float** | The value of the current stock in terms of the last cost price | [optional]
**averageCostPrice** | **float** | The average price across all purchases of this stock item | [optional]
**averageCostPriceStockValue** | **float** | The value of the current stock in terms of the average cost price | [optional]
**costPriceLastUpdated** | **\DateTime** | The date on which the last cost price was last updated | [optional]
**salesPrices** | [**\SynergiTech\Sage\Model\PostProductsProductSalesPricesInner[]**](PostProductsProductSalesPricesInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
