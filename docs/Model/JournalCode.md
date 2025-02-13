# # JournalCode

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**legacyId** | **int** | The legacy ID for the item | [optional]
**id** | **string** | The unique identifier for the item | [optional]
**displayedAs** | **string** | The name of the resource | [optional]
**path** | **string** | The API path for the resource | [optional]
**createdAt** | **\DateTime** | The datetime when the item was created | [optional]
**updatedAt** | **\DateTime** | The datetime when the item was last updated | [optional]
**name** | **string** | The name of the journal code | [optional]
**code** | **string** | The code of the journal code | [optional]
**journalCodeType** | [**\SynergiTech\Sage\Model\JournalCodeType**](JournalCodeType.md) |  | [optional]
**controlName** | **string** | The control name of the journal code  Control names are identifiers for a journal codes with a specific meaning. Some examples are &#x60;AC&#x60; for purchases, &#x60;VE&#x60; for sales, &#x60;OD&#x60; for other transactions and &#x60;REPBAL&#x60; for opening balances. | [optional]
**reserved** | **bool** | Indicates whether the journal code is reserved.  Reserved journal codes cannot be deleted. A journal code is reserved when it has a control name. Please note that journal codes can also not be deleted when there is any journal that is using the code. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
