# # ContactPayment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**legacyId** | **int** | The legacy ID for the item | [optional]
**id** | **string** | The unique identifier for the item | [optional]
**displayedAs** | **string** | The name of the resource | [optional]
**path** | **string** | The API path for the resource | [optional]
**createdAt** | **\DateTime** | The datetime when the item was created | [optional]
**updatedAt** | **\DateTime** | The datetime when the item was last updated | [optional]
**links** | [**\SynergiTech\Sage\Model\Link[]**](Link.md) | Links for the resource | [optional]
**transaction** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**transactionType** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**deletedAt** | **\DateTime** | The datetime when the item was deleted | [optional]
**paymentMethod** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**contact** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**bankAccount** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**date** | **\DateTime** | The date the payment was made | [optional]
**netAmount** | **float** | The net amount of the payment | [optional]
**taxAmount** | **float** | The tax amount of the payment | [optional]
**totalAmount** | **float** | The total amount of the payment | [optional]
**currency** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**exchangeRate** | **float** | The exchange rate of the payment | [optional]
**baseCurrencyNetAmount** | **float** | The net amount of the payment in base currency | [optional]
**baseCurrencyTaxAmount** | **float** | The tax amount of the payment in base currency | [optional]
**baseCurrencyTotalAmount** | **float** | The total amount of the payment in base currency | [optional]
**baseCurrencyCurrencyCharge** | **float** | The currency conversion charges in base currency | [optional]
**reference** | **string** | A reference for the payment Note: An upper length limit of 25 or 40 characters is imposed conditionally and may not apply in every request. A hard upper limit of 255 characters is imposed by the storage layer, though. | [optional]
**allocatedArtefacts** | [**\SynergiTech\Sage\Model\AllocatedPaymentArtefact[]**](AllocatedPaymentArtefact.md) | The allocated artefacts | [optional]
**taxRate** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**paymentOnAccount** | [**\SynergiTech\Sage\Model\PaymentOnAccount**](PaymentOnAccount.md) |  | [optional]
**editable** | **bool** | Indicates whether payment can be edited | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
