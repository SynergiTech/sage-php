# # Product

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**legacyId** | **int** | The legacy ID for the item | [optional]
**id** | **string** | The unique identifier for the item | [optional]
**displayedAs** | **string** | The name of the resource | [optional]
**path** | **string** | The API path for the resource | [optional]
**createdAt** | **\DateTime** | The datetime when the item was created | [optional]
**updatedAt** | **\DateTime** | The datetime when the item was last updated | [optional]
**deletedAt** | **\DateTime** | The datetime when the item was deleted | [optional]
**deletable** | **bool** | Indicates whether the product can be deleted | [optional]
**deactivatable** | **bool** | Indicates whether the product can be deactivated | [optional]
**usedOnRecurringInvoice** | **bool** | Indicates whether the product has been used on a recurring invoice | [optional]
**itemCode** | **string** | The item code for the product | [optional]
**description** | **string** | The product description | [optional]
**notes** | **string** | The notes for the product | [optional]
**salesLedgerAccount** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**salesTaxRate** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**purchaseLedgerAccount** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**usualSupplier** | [**\SynergiTech\Sage\Model\Contact**](Contact.md) |  | [optional]
**purchaseTaxRate** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**costPrice** | **float** | The cost price of the product | [optional]
**salesPrices** | [**\SynergiTech\Sage\Model\SalesPrice[]**](SalesPrice.md) | The sales prices for the product | [optional]
**sourceGuid** | **string** | Used when importing products from external sources | [optional]
**purchaseDescription** | **string** | The product purchase description | [optional]
**active** | **bool** | Indicates whether the product is active | [optional]
**catalogItemType** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
