# # Service

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
**deletable** | **bool** | Indicates whether the service can be deleted | [optional]
**deactivatable** | **bool** | Indicates whether the service can be deactivated | [optional]
**usedOnRecurringInvoice** | **bool** | Indicates whether the service has been used on a recurring invoice | [optional]
**itemCode** | **string** | The item code for the service | [optional]
**description** | **string** | The service description | [optional]
**notes** | **string** | The notes for the service | [optional]
**salesLedgerAccount** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**purchaseLedgerAccount** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**salesTaxRate** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**purchaseTaxRate** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**salesRates** | [**\SynergiTech\Sage\Model\Rate[]**](Rate.md) | The sales rates for the service | [optional]
**sourceGuid** | **string** | Used when importing services from external sources | [optional]
**purchaseDescription** | **string** | The service purchase description | [optional]
**usualSupplier** | [**\SynergiTech\Sage\Model\Contact**](Contact.md) |  | [optional]
**active** | **bool** | Indicates whether the service is active | [optional]
**costPrice** | **float** | The cost price of the service | [optional]
**ossService** | **bool** | Indicates whether the service is One Stop Shop | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
