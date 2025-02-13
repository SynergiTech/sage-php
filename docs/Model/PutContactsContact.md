# # PutContactsContact

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The contact&#39;s full name or business name | [optional]
**contactTypeIds** | **string[]** | The IDs of the Contact Types. | [optional]
**reference** | **string** | Unique reference for the contact | [optional]
**defaultSalesLedgerAccountId** | **string** | The ID of the Default Sales Ledger Account. | [optional]
**defaultSalesTaxRateId** | **string** | The ID of the Default Sales Tax Rate. | [optional]
**defaultPurchaseLedgerAccountId** | **string** | The ID of the Default Purchase Ledger Account. | [optional]
**taxNumber** | **string** | The VAT registration number of the contact. The format will be validated. | [optional]
**notes** | **string** | The notes for the contact | [optional]
**locale** | **string** | The locale for the contact | [optional]
**creditLimit** | **float** | Custom credit limit amount for the contact &lt;br&gt;&lt;i&gt;not applicable to Start&lt;/i&gt; | [optional]
**creditDays** | **int** | Custom credit days for the contact.&lt;br&gt; If returned as null in a GET response, you may want to GET /invoice_settings and use &#39;customer_credit_days&#39;/&#39;vendor_credit_days&#39; as default/fallback according to your use case. | [optional]
**creditTermsAndConditions** | **string** | Custom terms and conditions for the contact. If set will override global /invoice_settings default terms and conditions. &lt;br&gt;&lt;i&gt;Customers only&lt;/i&gt; | [optional]
**productSalesPriceTypeId** | **string** | The ID of the Product Sales Price Type. | [optional]
**sourceGuid** | **string** | Used when importing contacts from external sources | [optional]
**currencyId** | **string** | The ID of the Currency. | [optional]
**auxReference** | **string** | Auxiliary reference. Used for German \&quot;Kreditorennummer\&quot; and \&quot;Debitorennummer\&quot;. &lt;br&gt; &lt;a href&#x3D;\&quot;https://developer.sage.com/accounting/reference/settings/#tag/Datev-Settings\&quot;&gt;   See Datev Settings endpoint reference &lt;/a&gt; | [optional]
**registeredNumber** | **string** | The registered number of the contact&#39;s business. Only used for German businesses and represents the \&quot;Steuernummer\&quot; there (not the \&quot;USt-ID\&quot;). | [optional]
**taxCalculation** | **string** | &lt;b&gt;France:&lt;/b&gt; The tax calculation method used to define tax treatment &lt;i&gt;Vendors only&lt;/i&gt; &lt;br&gt; &lt;b&gt;Spain:&lt;/b&gt; Defines if contact is a retailer and tax is subject to Recargo de Equivalencia &lt;i&gt;Customers only&lt;/i&gt; &lt;b&gt;United Kingdom:&lt;/b&gt; Defines if contact tax treatment is domestic reverse charge &lt;i&gt;Customers &amp; Suppliers&lt;/i&gt; | [optional]
**auxiliaryAccount** | **string** | Auxiliary account - used when auxiliary accounting is enabled in business settings. &lt;br&gt;&lt;i&gt;Available only in Spain and France&lt;/i&gt; | [optional]
**destinationVatBlocking** | **bool** | Identifies a contact should be blocked due to destination vat | [optional]
**mainAddress** | [**\SynergiTech\Sage\Model\PostBankAccountsBankAccountMainAddress**](PostBankAccountsBankAccountMainAddress.md) |  | [optional]
**deliveryAddress** | [**\SynergiTech\Sage\Model\PostBankAccountsBankAccountMainAddress**](PostBankAccountsBankAccountMainAddress.md) |  | [optional]
**mainContactPerson** | [**\SynergiTech\Sage\Model\PostContactsContactMainContactPerson**](PostContactsContactMainContactPerson.md) |  | [optional]
**bankAccountDetails** | [**\SynergiTech\Sage\Model\PutBankAccountsBankAccountBankAccountDetails**](PutBankAccountsBankAccountBankAccountDetails.md) |  | [optional]
**taxTreatment** | [**\SynergiTech\Sage\Model\PostContactsContactTaxTreatment**](PostContactsContactTaxTreatment.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
