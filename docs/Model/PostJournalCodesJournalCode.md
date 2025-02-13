# PostJournalCodesJournalCode

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the journal code | 
**code** | **string** | The code of the journal code | 
**journal_code_type_id** | **string** | The journal code type of the journal code | 
**control_name** | **string** | The control name of the journal code  Control names are identifiers for a journal codes with a specific meaning. Some examples are &#x60;AC&#x60; for purchases, &#x60;VE&#x60; for sales, &#x60;OD&#x60; for other transactions and &#x60;REPBAL&#x60; for opening balances. | [optional] 
**reserved** | **bool** | Indicates whether the journal code is reserved.  Reserved journal codes cannot be deleted. A journal code is reserved when it has a control name. Please note that journal codes can also not be deleted when there is any journal that is using the code. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


