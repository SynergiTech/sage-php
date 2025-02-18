# # OtherPayment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier for the item | [optional]
**displayedAs** | **string** | The name of the resource | [optional]
**path** | **string** | The API path for the resource | [optional]
**createdAt** | **\DateTime** | The datetime when the item was created | [optional]
**updatedAt** | **\DateTime** | The datetime when the item was last updated | [optional]
**transaction** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**transactionType** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**deletedAt** | **\DateTime** | The datetime when the item was deleted | [optional]
**baseCurrencyTotalItcAmount** | **float** | The total amount of input tax credit in base currency for the                      Other Payment (Canada only) | [optional]
**totalItcAmount** | **float** | The total amount of input tax credit for the Other Payment (Canada only) | [optional]
**baseCurrencyTotalItrAmount** | **float** | The total amount of input tax refund in base currency for the                      Other Payment (Canada only) | [optional]
**totalItrAmount** | **float** | The total amount of input tax refund for the Other Payment (Canada only) | [optional]
**partRecoverable** | **bool** | Indicates if the Other Payment is part recoverable or not (Canada only) | [optional]
**paymentMethod** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**contact** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**bankAccount** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**taxAddressRegion** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**date** | **\DateTime** | The date of the payment | [optional]
**netAmount** | **float** | The net amount of the payment | [optional]
**taxAmount** | **float** | The tax amount of the payment | [optional]
**totalAmount** | **float** | The total amount of the payment | [optional]
**reference** | **string** | A reference of the payment Note: An upper length limit of 25 or 40 characters is imposed conditionally and may not apply in every request. A hard upper limit of 255 characters is imposed by the storage layer, though. | [optional]
**paymentLines** | [**\SynergiTech\Sage\Model\OtherPaymentLineItem[]**](OtherPaymentLineItem.md) | The payment lines of the payment | [optional]
**editable** | **bool** | Indicates whether or not the payment can be edited | [optional]
**deletable** | **bool** | Indicates whether or not the payment can be deleted | [optional]
**withholdingTaxRate** | **float** | IRPF withheld tax rate | [optional]
**withholdingTaxAmount** | **float** | IRPF withheld tax amount | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
