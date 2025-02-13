# ContactPerson

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**legacy_id** | **int** | The legacy ID for the item | [optional] 
**id** | **string** | The unique identifier for the item | [optional] 
**displayed_as** | **string** | The name of the resource | [optional] 
**path** | **string** | The API path for the resource | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was created | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was last updated | [optional] 
**deleted_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was deleted | [optional] 
**contact_person_types** | [**\Swagger\Client\Model\ContactPersonType[]**](ContactPersonType.md) | The contact person types for the contact person. Get possible types by retrieving &lt;a href&#x3D;\&quot;https://developer.sage.com/accounting/reference/contacts/#operation/getContactPersonTypes\&quot;&gt;   all available contact person types &lt;/a&gt;. | [optional] 
**name** | **string** | The name of the contact person | [optional] 
**job_title** | **string** | The job title of the contact person | [optional] 
**telephone** | **string** | The telephone number of the contact person | [optional] 
**mobile** | **string** | The mobile number of the contact person | [optional] 
**email** | **string** | The email address of the contact person | [optional] 
**fax** | **string** | The fax number of the contact person | [optional] 
**is_main_contact** | **bool** | Indicates whether this is the main contact person. Per contact, only one main contact can be selected. | [optional] 
**address** | [**\Swagger\Client\Model\Base**](Base.md) | The address of the contact person | [optional] 
**is_preferred_contact** | **bool** | Indicates whether this contact person is a preferred contact | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


