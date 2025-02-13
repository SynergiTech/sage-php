<?php
/**
 * QuickEntry
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Sage One - Accounts - v3 UKI
 *
 * Documentation of the Sage Business Cloud Accounting API.
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.43
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * QuickEntry Class Doc Comment
 *
 * @category Class
 * @description ### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area &#x60;Sales&#x60;: Full Access, Restricted Access
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QuickEntry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'QuickEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'legacy_id' => 'int',
        'id' => 'string',
        'displayed_as' => 'string',
        'path' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'transaction' => '\Swagger\Client\Model\Base',
        'transaction_type' => '\Swagger\Client\Model\Base',
        'deleted_at' => '\DateTime',
        'quick_entry_type' => '\Swagger\Client\Model\Base',
        'contact_name' => 'string',
        'contact_reference' => 'string',
        'contact' => '\Swagger\Client\Model\Base',
        'date' => '\DateTime',
        'reference' => 'string',
        'ledger_account' => '\Swagger\Client\Model\Base',
        'details' => 'string',
        'net_amount' => 'double',
        'tax_rate' => '\Swagger\Client\Model\Base',
        'tax_amount' => 'double',
        'tax_breakdown' => '\Swagger\Client\Model\TaxBreakdown[]',
        'total_amount' => 'double',
        'outstanding_amount' => 'double',
        'currency' => '\Swagger\Client\Model\Base',
        'exchange_rate' => 'double',
        'inverse_exchange_rate' => 'double',
        'base_currency_net_amount' => 'double',
        'base_currency_tax_amount' => 'double',
        'base_currency_tax_breakdown' => '\Swagger\Client\Model\TaxBreakdown[]',
        'base_currency_total_amount' => 'double',
        'base_currency_outstanding_amount' => 'double',
        'status' => '\Swagger\Client\Model\Base',
        'payments_allocations' => '\Swagger\Client\Model\PaymentAllocation[]',
        'tax_address_region' => '\Swagger\Client\Model\Base',
        'migrated' => 'bool',
        'trade_of_asset' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'legacy_id' => 'int32',
        'id' => null,
        'displayed_as' => null,
        'path' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'transaction' => null,
        'transaction_type' => null,
        'deleted_at' => 'date-time',
        'quick_entry_type' => null,
        'contact_name' => null,
        'contact_reference' => null,
        'contact' => null,
        'date' => 'date',
        'reference' => null,
        'ledger_account' => null,
        'details' => null,
        'net_amount' => 'double',
        'tax_rate' => null,
        'tax_amount' => 'double',
        'tax_breakdown' => null,
        'total_amount' => 'double',
        'outstanding_amount' => 'double',
        'currency' => null,
        'exchange_rate' => 'double',
        'inverse_exchange_rate' => 'double',
        'base_currency_net_amount' => 'double',
        'base_currency_tax_amount' => 'double',
        'base_currency_tax_breakdown' => null,
        'base_currency_total_amount' => 'double',
        'base_currency_outstanding_amount' => 'double',
        'status' => null,
        'payments_allocations' => null,
        'tax_address_region' => null,
        'migrated' => null,
        'trade_of_asset' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'legacy_id' => 'legacy_id',
        'id' => 'id',
        'displayed_as' => 'displayed_as',
        'path' => '$path',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'transaction' => 'transaction',
        'transaction_type' => 'transaction_type',
        'deleted_at' => 'deleted_at',
        'quick_entry_type' => 'quick_entry_type',
        'contact_name' => 'contact_name',
        'contact_reference' => 'contact_reference',
        'contact' => 'contact',
        'date' => 'date',
        'reference' => 'reference',
        'ledger_account' => 'ledger_account',
        'details' => 'details',
        'net_amount' => 'net_amount',
        'tax_rate' => 'tax_rate',
        'tax_amount' => 'tax_amount',
        'tax_breakdown' => 'tax_breakdown',
        'total_amount' => 'total_amount',
        'outstanding_amount' => 'outstanding_amount',
        'currency' => 'currency',
        'exchange_rate' => 'exchange_rate',
        'inverse_exchange_rate' => 'inverse_exchange_rate',
        'base_currency_net_amount' => 'base_currency_net_amount',
        'base_currency_tax_amount' => 'base_currency_tax_amount',
        'base_currency_tax_breakdown' => 'base_currency_tax_breakdown',
        'base_currency_total_amount' => 'base_currency_total_amount',
        'base_currency_outstanding_amount' => 'base_currency_outstanding_amount',
        'status' => 'status',
        'payments_allocations' => 'payments_allocations',
        'tax_address_region' => 'tax_address_region',
        'migrated' => 'migrated',
        'trade_of_asset' => 'trade_of_asset'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'legacy_id' => 'setLegacyId',
        'id' => 'setId',
        'displayed_as' => 'setDisplayedAs',
        'path' => 'setPath',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'transaction' => 'setTransaction',
        'transaction_type' => 'setTransactionType',
        'deleted_at' => 'setDeletedAt',
        'quick_entry_type' => 'setQuickEntryType',
        'contact_name' => 'setContactName',
        'contact_reference' => 'setContactReference',
        'contact' => 'setContact',
        'date' => 'setDate',
        'reference' => 'setReference',
        'ledger_account' => 'setLedgerAccount',
        'details' => 'setDetails',
        'net_amount' => 'setNetAmount',
        'tax_rate' => 'setTaxRate',
        'tax_amount' => 'setTaxAmount',
        'tax_breakdown' => 'setTaxBreakdown',
        'total_amount' => 'setTotalAmount',
        'outstanding_amount' => 'setOutstandingAmount',
        'currency' => 'setCurrency',
        'exchange_rate' => 'setExchangeRate',
        'inverse_exchange_rate' => 'setInverseExchangeRate',
        'base_currency_net_amount' => 'setBaseCurrencyNetAmount',
        'base_currency_tax_amount' => 'setBaseCurrencyTaxAmount',
        'base_currency_tax_breakdown' => 'setBaseCurrencyTaxBreakdown',
        'base_currency_total_amount' => 'setBaseCurrencyTotalAmount',
        'base_currency_outstanding_amount' => 'setBaseCurrencyOutstandingAmount',
        'status' => 'setStatus',
        'payments_allocations' => 'setPaymentsAllocations',
        'tax_address_region' => 'setTaxAddressRegion',
        'migrated' => 'setMigrated',
        'trade_of_asset' => 'setTradeOfAsset'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'legacy_id' => 'getLegacyId',
        'id' => 'getId',
        'displayed_as' => 'getDisplayedAs',
        'path' => 'getPath',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'transaction' => 'getTransaction',
        'transaction_type' => 'getTransactionType',
        'deleted_at' => 'getDeletedAt',
        'quick_entry_type' => 'getQuickEntryType',
        'contact_name' => 'getContactName',
        'contact_reference' => 'getContactReference',
        'contact' => 'getContact',
        'date' => 'getDate',
        'reference' => 'getReference',
        'ledger_account' => 'getLedgerAccount',
        'details' => 'getDetails',
        'net_amount' => 'getNetAmount',
        'tax_rate' => 'getTaxRate',
        'tax_amount' => 'getTaxAmount',
        'tax_breakdown' => 'getTaxBreakdown',
        'total_amount' => 'getTotalAmount',
        'outstanding_amount' => 'getOutstandingAmount',
        'currency' => 'getCurrency',
        'exchange_rate' => 'getExchangeRate',
        'inverse_exchange_rate' => 'getInverseExchangeRate',
        'base_currency_net_amount' => 'getBaseCurrencyNetAmount',
        'base_currency_tax_amount' => 'getBaseCurrencyTaxAmount',
        'base_currency_tax_breakdown' => 'getBaseCurrencyTaxBreakdown',
        'base_currency_total_amount' => 'getBaseCurrencyTotalAmount',
        'base_currency_outstanding_amount' => 'getBaseCurrencyOutstandingAmount',
        'status' => 'getStatus',
        'payments_allocations' => 'getPaymentsAllocations',
        'tax_address_region' => 'getTaxAddressRegion',
        'migrated' => 'getMigrated',
        'trade_of_asset' => 'getTradeOfAsset'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['legacy_id'] = isset($data['legacy_id']) ? $data['legacy_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['displayed_as'] = isset($data['displayed_as']) ? $data['displayed_as'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['transaction'] = isset($data['transaction']) ? $data['transaction'] : null;
        $this->container['transaction_type'] = isset($data['transaction_type']) ? $data['transaction_type'] : null;
        $this->container['deleted_at'] = isset($data['deleted_at']) ? $data['deleted_at'] : null;
        $this->container['quick_entry_type'] = isset($data['quick_entry_type']) ? $data['quick_entry_type'] : null;
        $this->container['contact_name'] = isset($data['contact_name']) ? $data['contact_name'] : null;
        $this->container['contact_reference'] = isset($data['contact_reference']) ? $data['contact_reference'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['ledger_account'] = isset($data['ledger_account']) ? $data['ledger_account'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['net_amount'] = isset($data['net_amount']) ? $data['net_amount'] : null;
        $this->container['tax_rate'] = isset($data['tax_rate']) ? $data['tax_rate'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        $this->container['tax_breakdown'] = isset($data['tax_breakdown']) ? $data['tax_breakdown'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['outstanding_amount'] = isset($data['outstanding_amount']) ? $data['outstanding_amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['exchange_rate'] = isset($data['exchange_rate']) ? $data['exchange_rate'] : null;
        $this->container['inverse_exchange_rate'] = isset($data['inverse_exchange_rate']) ? $data['inverse_exchange_rate'] : null;
        $this->container['base_currency_net_amount'] = isset($data['base_currency_net_amount']) ? $data['base_currency_net_amount'] : null;
        $this->container['base_currency_tax_amount'] = isset($data['base_currency_tax_amount']) ? $data['base_currency_tax_amount'] : null;
        $this->container['base_currency_tax_breakdown'] = isset($data['base_currency_tax_breakdown']) ? $data['base_currency_tax_breakdown'] : null;
        $this->container['base_currency_total_amount'] = isset($data['base_currency_total_amount']) ? $data['base_currency_total_amount'] : null;
        $this->container['base_currency_outstanding_amount'] = isset($data['base_currency_outstanding_amount']) ? $data['base_currency_outstanding_amount'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['payments_allocations'] = isset($data['payments_allocations']) ? $data['payments_allocations'] : null;
        $this->container['tax_address_region'] = isset($data['tax_address_region']) ? $data['tax_address_region'] : null;
        $this->container['migrated'] = isset($data['migrated']) ? $data['migrated'] : null;
        $this->container['trade_of_asset'] = isset($data['trade_of_asset']) ? $data['trade_of_asset'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['contact_name']) && (mb_strlen($this->container['contact_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'contact_name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['contact_reference']) && (mb_strlen($this->container['contact_reference']) > 255)) {
            $invalidProperties[] = "invalid value for 'contact_reference', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) > 25)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['details']) && (mb_strlen($this->container['details']) > 255)) {
            $invalidProperties[] = "invalid value for 'details', the character length must be smaller than or equal to 255.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets legacy_id
     *
     * @return int
     */
    public function getLegacyId()
    {
        return $this->container['legacy_id'];
    }

    /**
     * Sets legacy_id
     *
     * @param int $legacy_id The legacy ID for the item
     *
     * @return $this
     */
    public function setLegacyId($legacy_id)
    {
        $this->container['legacy_id'] = $legacy_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The unique identifier for the item
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets displayed_as
     *
     * @return string
     */
    public function getDisplayedAs()
    {
        return $this->container['displayed_as'];
    }

    /**
     * Sets displayed_as
     *
     * @param string $displayed_as The name of the resource
     *
     * @return $this
     */
    public function setDisplayedAs($displayed_as)
    {
        $this->container['displayed_as'] = $displayed_as;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path The API path for the resource
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at The datetime when the item was created
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at The datetime when the item was last updated
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets transaction
     *
     * @return \Swagger\Client\Model\Base
     */
    public function getTransaction()
    {
        return $this->container['transaction'];
    }

    /**
     * Sets transaction
     *
     * @param \Swagger\Client\Model\Base $transaction The transaction for the item
     *
     * @return $this
     */
    public function setTransaction($transaction)
    {
        $this->container['transaction'] = $transaction;

        return $this;
    }

    /**
     * Gets transaction_type
     *
     * @return \Swagger\Client\Model\Base
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type
     *
     * @param \Swagger\Client\Model\Base $transaction_type The transaction type of the item
     *
     * @return $this
     */
    public function setTransactionType($transaction_type)
    {
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Gets deleted_at
     *
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->container['deleted_at'];
    }

    /**
     * Sets deleted_at
     *
     * @param \DateTime $deleted_at The datetime when the item was deleted
     *
     * @return $this
     */
    public function setDeletedAt($deleted_at)
    {
        $this->container['deleted_at'] = $deleted_at;

        return $this;
    }

    /**
     * Gets quick_entry_type
     *
     * @return \Swagger\Client\Model\Base
     */
    public function getQuickEntryType()
    {
        return $this->container['quick_entry_type'];
    }

    /**
     * Sets quick_entry_type
     *
     * @param \Swagger\Client\Model\Base $quick_entry_type The type of quick entry e.g. invoice or credit note
     *
     * @return $this
     */
    public function setQuickEntryType($quick_entry_type)
    {
        $this->container['quick_entry_type'] = $quick_entry_type;

        return $this;
    }

    /**
     * Gets contact_name
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->container['contact_name'];
    }

    /**
     * Sets contact_name
     *
     * @param string $contact_name The name of the contact when the quick entry was created
     *
     * @return $this
     */
    public function setContactName($contact_name)
    {
        if (!is_null($contact_name) && (mb_strlen($contact_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $contact_name when calling QuickEntry., must be smaller than or equal to 255.');
        }

        $this->container['contact_name'] = $contact_name;

        return $this;
    }

    /**
     * Gets contact_reference
     *
     * @return string
     */
    public function getContactReference()
    {
        return $this->container['contact_reference'];
    }

    /**
     * Sets contact_reference
     *
     * @param string $contact_reference The reference of the contact when the quick entry was created
     *
     * @return $this
     */
    public function setContactReference($contact_reference)
    {
        if (!is_null($contact_reference) && (mb_strlen($contact_reference) > 255)) {
            throw new \InvalidArgumentException('invalid length for $contact_reference when calling QuickEntry., must be smaller than or equal to 255.');
        }

        $this->container['contact_reference'] = $contact_reference;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return \Swagger\Client\Model\Base
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \Swagger\Client\Model\Base $contact The contact the quick entry relates to
     *
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date The date of the quick entry
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference The reference for the quick entry
     *
     * @return $this
     */
    public function setReference($reference)
    {
        if (!is_null($reference) && (mb_strlen($reference) > 25)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling QuickEntry., must be smaller than or equal to 25.');
        }

        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets ledger_account
     *
     * @return \Swagger\Client\Model\Base
     */
    public function getLedgerAccount()
    {
        return $this->container['ledger_account'];
    }

    /**
     * Sets ledger_account
     *
     * @param \Swagger\Client\Model\Base $ledger_account The associated ledger account
     *
     * @return $this
     */
    public function setLedgerAccount($ledger_account)
    {
        $this->container['ledger_account'] = $ledger_account;

        return $this;
    }

    /**
     * Gets details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param string $details A description of the quick entry
     *
     * @return $this
     */
    public function setDetails($details)
    {
        if (!is_null($details) && (mb_strlen($details) > 255)) {
            throw new \InvalidArgumentException('invalid length for $details when calling QuickEntry., must be smaller than or equal to 255.');
        }

        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets net_amount
     *
     * @return double
     */
    public function getNetAmount()
    {
        return $this->container['net_amount'];
    }

    /**
     * Sets net_amount
     *
     * @param double $net_amount The net amount of the quick entry
     *
     * @return $this
     */
    public function setNetAmount($net_amount)
    {
        $this->container['net_amount'] = $net_amount;

        return $this;
    }

    /**
     * Gets tax_rate
     *
     * @return \Swagger\Client\Model\Base
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     *
     * @param \Swagger\Client\Model\Base $tax_rate The tax rate for the quick entry
     *
     * @return $this
     */
    public function setTaxRate($tax_rate)
    {
        $this->container['tax_rate'] = $tax_rate;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return double
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param double $tax_amount The tax amount of the quick entry
     *
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets tax_breakdown
     *
     * @return \Swagger\Client\Model\TaxBreakdown[]
     */
    public function getTaxBreakdown()
    {
        return $this->container['tax_breakdown'];
    }

    /**
     * Sets tax_breakdown
     *
     * @param \Swagger\Client\Model\TaxBreakdown[] $tax_breakdown The tax breakdown for the quick entry
     *
     * @return $this
     */
    public function setTaxBreakdown($tax_breakdown)
    {
        $this->container['tax_breakdown'] = $tax_breakdown;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return double
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param double $total_amount The total amount of the quick entry
     *
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets outstanding_amount
     *
     * @return double
     */
    public function getOutstandingAmount()
    {
        return $this->container['outstanding_amount'];
    }

    /**
     * Sets outstanding_amount
     *
     * @param double $outstanding_amount The outstanding amount of the quick entry
     *
     * @return $this
     */
    public function setOutstandingAmount($outstanding_amount)
    {
        $this->container['outstanding_amount'] = $outstanding_amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \Swagger\Client\Model\Base
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Swagger\Client\Model\Base $currency The currency for the quick entry
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets exchange_rate
     *
     * @return double
     */
    public function getExchangeRate()
    {
        return $this->container['exchange_rate'];
    }

    /**
     * Sets exchange_rate
     *
     * @param double $exchange_rate The exchange rate for the quick entry
     *
     * @return $this
     */
    public function setExchangeRate($exchange_rate)
    {
        $this->container['exchange_rate'] = $exchange_rate;

        return $this;
    }

    /**
     * Gets inverse_exchange_rate
     *
     * @return double
     */
    public function getInverseExchangeRate()
    {
        return $this->container['inverse_exchange_rate'];
    }

    /**
     * Sets inverse_exchange_rate
     *
     * @param double $inverse_exchange_rate The inverse exchange rate for the quick entry
     *
     * @return $this
     */
    public function setInverseExchangeRate($inverse_exchange_rate)
    {
        $this->container['inverse_exchange_rate'] = $inverse_exchange_rate;

        return $this;
    }

    /**
     * Gets base_currency_net_amount
     *
     * @return double
     */
    public function getBaseCurrencyNetAmount()
    {
        return $this->container['base_currency_net_amount'];
    }

    /**
     * Sets base_currency_net_amount
     *
     * @param double $base_currency_net_amount The net amount of the quick entry in base currency
     *
     * @return $this
     */
    public function setBaseCurrencyNetAmount($base_currency_net_amount)
    {
        $this->container['base_currency_net_amount'] = $base_currency_net_amount;

        return $this;
    }

    /**
     * Gets base_currency_tax_amount
     *
     * @return double
     */
    public function getBaseCurrencyTaxAmount()
    {
        return $this->container['base_currency_tax_amount'];
    }

    /**
     * Sets base_currency_tax_amount
     *
     * @param double $base_currency_tax_amount The tax amount of the quick entry in base currency
     *
     * @return $this
     */
    public function setBaseCurrencyTaxAmount($base_currency_tax_amount)
    {
        $this->container['base_currency_tax_amount'] = $base_currency_tax_amount;

        return $this;
    }

    /**
     * Gets base_currency_tax_breakdown
     *
     * @return \Swagger\Client\Model\TaxBreakdown[]
     */
    public function getBaseCurrencyTaxBreakdown()
    {
        return $this->container['base_currency_tax_breakdown'];
    }

    /**
     * Sets base_currency_tax_breakdown
     *
     * @param \Swagger\Client\Model\TaxBreakdown[] $base_currency_tax_breakdown The tax breakdown for the quick entry in base currency
     *
     * @return $this
     */
    public function setBaseCurrencyTaxBreakdown($base_currency_tax_breakdown)
    {
        $this->container['base_currency_tax_breakdown'] = $base_currency_tax_breakdown;

        return $this;
    }

    /**
     * Gets base_currency_total_amount
     *
     * @return double
     */
    public function getBaseCurrencyTotalAmount()
    {
        return $this->container['base_currency_total_amount'];
    }

    /**
     * Sets base_currency_total_amount
     *
     * @param double $base_currency_total_amount The total amount of the quick entry in base currency
     *
     * @return $this
     */
    public function setBaseCurrencyTotalAmount($base_currency_total_amount)
    {
        $this->container['base_currency_total_amount'] = $base_currency_total_amount;

        return $this;
    }

    /**
     * Gets base_currency_outstanding_amount
     *
     * @return double
     */
    public function getBaseCurrencyOutstandingAmount()
    {
        return $this->container['base_currency_outstanding_amount'];
    }

    /**
     * Sets base_currency_outstanding_amount
     *
     * @param double $base_currency_outstanding_amount The outstanding amount of the quick entry in base currency
     *
     * @return $this
     */
    public function setBaseCurrencyOutstandingAmount($base_currency_outstanding_amount)
    {
        $this->container['base_currency_outstanding_amount'] = $base_currency_outstanding_amount;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Swagger\Client\Model\Base
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Swagger\Client\Model\Base $status The status of the quick entry
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets payments_allocations
     *
     * @return \Swagger\Client\Model\PaymentAllocation[]
     */
    public function getPaymentsAllocations()
    {
        return $this->container['payments_allocations'];
    }

    /**
     * Sets payments_allocations
     *
     * @param \Swagger\Client\Model\PaymentAllocation[] $payments_allocations The associated payments and allocations
     *
     * @return $this
     */
    public function setPaymentsAllocations($payments_allocations)
    {
        $this->container['payments_allocations'] = $payments_allocations;

        return $this;
    }

    /**
     * Gets tax_address_region
     *
     * @return \Swagger\Client\Model\Base
     */
    public function getTaxAddressRegion()
    {
        return $this->container['tax_address_region'];
    }

    /**
     * Sets tax_address_region
     *
     * @param \Swagger\Client\Model\Base $tax_address_region The address region for tax purposes (Canada only)
     *
     * @return $this
     */
    public function setTaxAddressRegion($tax_address_region)
    {
        $this->container['tax_address_region'] = $tax_address_region;

        return $this;
    }

    /**
     * Gets migrated
     *
     * @return bool
     */
    public function getMigrated()
    {
        return $this->container['migrated'];
    }

    /**
     * Sets migrated
     *
     * @param bool $migrated Indicates if the quick entry was migrated from another system.
     *
     * @return $this
     */
    public function setMigrated($migrated)
    {
        $this->container['migrated'] = $migrated;

        return $this;
    }

    /**
     * Gets trade_of_asset
     *
     * @return bool
     */
    public function getTradeOfAsset()
    {
        return $this->container['trade_of_asset'];
    }

    /**
     * Sets trade_of_asset
     *
     * @param bool $trade_of_asset Whether the quick entry is marked as trade of asset.
     *
     * @return $this
     */
    public function setTradeOfAsset($trade_of_asset)
    {
        $this->container['trade_of_asset'] = $trade_of_asset;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


