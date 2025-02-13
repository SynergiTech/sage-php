# # OtherPaymentLineItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**legacyId** | **int** | The legacy ID for the item | [optional]
**id** | **string** | The unique identifier for the item | [optional]
**displayedAs** | **string** | The name of the resource | [optional]
**ledgerAccount** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**details** | **string** | The details of the payment line | [optional]
**taxRate** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**netAmount** | **float** | The net amount of the payment line | [optional]
**taxAmount** | **float** | The tax amount of the payment line | [optional]
**totalAmount** | **float** | The total amount of the payment line | [optional]
**taxBreakdown** | [**\SynergiTech\Sage\Model\TaxBreakdown[]**](TaxBreakdown.md) | The tax breakdown for the payment line | [optional]
**isPurchaseForResale** | **bool** | Identifies whether the line item is for resale. (Ireland only) | [optional]
**tradeOfAsset** | **bool** | Whether the line item is marked as trade of asset. | [optional]
**gstAmount** | **float** | The gst or hst tax amount for the other payment | [optional]
**pstAmount** | **float** | The pst or qst tax amount for the other payment | [optional]
**taxRecoverable** | **bool** | Indicates if the other payment is tax recoverable or not | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
