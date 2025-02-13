# # PaymentAllocation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\SynergiTech\Sage\Model\Link[]**](Link.md) | Links for the resource | [optional]
**date** | **\DateTime** | The date for the payment/allocation | [optional]
**type** | **string** | The type of the payment/allocation | [optional]
**reference** | **string** | The reference for the payment/allocation | [optional]
**amount** | **float** | The allocated amount of the payment/allocation | [optional]
**discount** | **float** | The discount amount of the payment/allocation | [optional]
**stripeTransactionId** | **string** |  | [optional]
**contactAllocation** | [**\SynergiTech\Sage\Model\ContactAllocation**](ContactAllocation.md) |  | [optional]
**artefact** | [**\SynergiTech\Sage\Model\Generic**](Generic.md) |  | [optional]
**contactPayment** | [**\SynergiTech\Sage\Model\ContactPayment**](ContactPayment.md) |  | [optional]
**displayedAs** | **string** | Display text for the item | [optional]
**negativePayment** | **bool** | This is a negative payment | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
