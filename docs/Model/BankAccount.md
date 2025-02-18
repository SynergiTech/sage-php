# # BankAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier for the item | [optional]
**displayedAs** | **string** | The name of the resource | [optional]
**path** | **string** | The API path for the resource | [optional]
**createdAt** | **\DateTime** | The datetime when the item was created | [optional]
**updatedAt** | **\DateTime** | The datetime when the item was last updated | [optional]
**deletedAt** | **\DateTime** | The datetime when the item was deleted | [optional]
**bankAccountDetails** | [**\SynergiTech\Sage\Model\BankAccountDetails**](BankAccountDetails.md) |  | [optional]
**ledgerAccount** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**bankAccountType** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**balance** | **float** | The bank account balance | [optional]
**mainAddress** | [**\SynergiTech\Sage\Model\Address**](Address.md) |  | [optional]
**mainContactPerson** | [**\SynergiTech\Sage\Model\BankAccountContact**](BankAccountContact.md) |  | [optional]
**nominalCode** | **int** | The nominal code of the bank account | [optional]
**editable** | **bool** | Indicates whether or not the bank account can be edited | [optional]
**deletable** | **bool** | Indicates whether or not the bank account can be deleted | [optional]
**journalCode** | [**\SynergiTech\Sage\Model\JournalCode**](JournalCode.md) |  | [optional]
**defaultPaymentMethod** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**gifiCode** | **int** | The GIFI code of the bank ledger account&#39;  GIFI is short for The General Index of Financial Information and it lets the CRA validate tax information electronically instead of manually. Information from financial statements is categorized under the appropriate 4-digit-long GIFI code and entered on corporate income tax returns. GIFI is needed when filing a T2 income tax return.  _Canada only_ | [optional]
**isActive** | **bool** | Indicates whether the Bank account is active or inactive. | [optional]
**currency** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
