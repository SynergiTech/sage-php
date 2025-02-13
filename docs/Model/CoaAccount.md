# # CoaAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**legacyId** | **int** | The legacy ID for the item | [optional]
**id** | **string** | The unique identifier for the item | [optional]
**displayedAs** | **string** | The name of the resource | [optional]
**path** | **string** | The API path for the resource | [optional]
**createdAt** | **\DateTime** | The datetime when the item was created | [optional]
**updatedAt** | **\DateTime** | The datetime when the item was last updated | [optional]
**ledgerAccountGroup** | [**\SynergiTech\Sage\Model\CoaGroupType**](CoaGroupType.md) |  | [optional]
**name** | **string** | The name for the COA account | [optional]
**controlName** | **string** | The system control name for the COA account.  System control names are used in Accounting to identify the correct ledger account for booking taxes etc. | [optional]
**nominalCode** | **int** | The nominal code of the COA account | [optional]
**ledgerAccountType** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**ledgerAccountClassification** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**taxRate** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**fixedTaxRate** | **bool** | Indicates whether the default tax rate is fixed or may be changed per transaction | [optional]
**cisMaterials** | **bool** | Indicates whether the COA account is flagged for CIS Materials | [optional]
**cisLabour** | **bool** | Indicates whether the COA account is flagged for CIS Labour | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
