# # ContactPerson

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier for the item | [optional]
**displayedAs** | **string** | The name of the resource | [optional]
**path** | **string** | The API path for the resource | [optional]
**createdAt** | **\DateTime** | The datetime when the item was created | [optional]
**updatedAt** | **\DateTime** | The datetime when the item was last updated | [optional]
**deletedAt** | **\DateTime** | The datetime when the item was deleted | [optional]
**contactPersonTypes** | [**\SynergiTech\Sage\Model\ContactPersonType[]**](ContactPersonType.md) | The contact person types for the contact person. Get possible types by retrieving &lt;a href&#x3D;\&quot;https://developer.sage.com/accounting/reference/contacts/#operation/getContactPersonTypes\&quot;&gt;   all available contact person types &lt;/a&gt;. | [optional]
**name** | **string** | The name of the contact person | [optional]
**jobTitle** | **string** | The job title of the contact person | [optional]
**telephone** | **string** | The telephone number of the contact person | [optional]
**mobile** | **string** | The mobile number of the contact person | [optional]
**email** | **string** | The email address of the contact person | [optional]
**fax** | **string** | The fax number of the contact person | [optional]
**isMainContact** | **bool** | Indicates whether this is the main contact person. Per contact, only one main contact can be selected. | [optional]
**address** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**isPreferredContact** | **bool** | Indicates whether this contact person is a preferred contact | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
