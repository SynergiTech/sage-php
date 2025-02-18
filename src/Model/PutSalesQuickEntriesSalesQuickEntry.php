<?php
/**
 * PutSalesQuickEntriesSalesQuickEntry
 *
 * PHP version 8.1
 *
 * @package  SynergiTech\Sage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Sage Business Cloud Accounting - Accounts
 *
 * Documentation of the Sage Business Cloud Accounting API.
 *
 * The version of the OpenAPI document: 3.1
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SynergiTech\Sage\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use SynergiTech\Sage\ObjectSerializer;

/**
 * PutSalesQuickEntriesSalesQuickEntry Class Doc Comment
 *
 * @package  SynergiTech\Sage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class PutSalesQuickEntriesSalesQuickEntry implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'putSalesQuickEntries_sales_quick_entry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'quickEntryTypeId' => 'string',
        'date' => '\DateTime',
        'contactId' => 'string',
        'reference' => 'string',
        'ledgerAccountId' => 'string',
        'contactName' => 'string',
        'contactReference' => 'string',
        'details' => 'string',
        'netAmount' => 'float',
        'taxRateId' => 'string',
        'taxAmount' => 'float',
        'totalAmount' => 'float',
        'currencyId' => 'string',
        'exchangeRate' => 'float',
        'inverseExchangeRate' => 'float',
        'baseCurrencyNetAmount' => 'float',
        'baseCurrencyTaxAmount' => 'float',
        'baseCurrencyTotalAmount' => 'float',
        'statusId' => 'string',
        'taxAddressRegionId' => 'string',
        'tradeOfAsset' => 'bool',
        'analysisTypeCategories' => '\SynergiTech\Sage\Model\PostPurchaseQuickEntriesPurchaseQuickEntryAnalysisTypeCategoriesInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'quickEntryTypeId' => null,
        'date' => 'date',
        'contactId' => null,
        'reference' => null,
        'ledgerAccountId' => null,
        'contactName' => null,
        'contactReference' => null,
        'details' => null,
        'netAmount' => 'double',
        'taxRateId' => null,
        'taxAmount' => 'double',
        'totalAmount' => 'double',
        'currencyId' => null,
        'exchangeRate' => 'double',
        'inverseExchangeRate' => 'double',
        'baseCurrencyNetAmount' => 'double',
        'baseCurrencyTaxAmount' => 'double',
        'baseCurrencyTotalAmount' => 'double',
        'statusId' => null,
        'taxAddressRegionId' => null,
        'tradeOfAsset' => null,
        'analysisTypeCategories' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'quickEntryTypeId' => false,
        'date' => false,
        'contactId' => false,
        'reference' => false,
        'ledgerAccountId' => false,
        'contactName' => false,
        'contactReference' => false,
        'details' => false,
        'netAmount' => false,
        'taxRateId' => false,
        'taxAmount' => false,
        'totalAmount' => false,
        'currencyId' => false,
        'exchangeRate' => false,
        'inverseExchangeRate' => false,
        'baseCurrencyNetAmount' => false,
        'baseCurrencyTaxAmount' => false,
        'baseCurrencyTotalAmount' => false,
        'statusId' => false,
        'taxAddressRegionId' => false,
        'tradeOfAsset' => false,
        'analysisTypeCategories' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'quickEntryTypeId' => 'quick_entry_type_id',
        'date' => 'date',
        'contactId' => 'contact_id',
        'reference' => 'reference',
        'ledgerAccountId' => 'ledger_account_id',
        'contactName' => 'contact_name',
        'contactReference' => 'contact_reference',
        'details' => 'details',
        'netAmount' => 'net_amount',
        'taxRateId' => 'tax_rate_id',
        'taxAmount' => 'tax_amount',
        'totalAmount' => 'total_amount',
        'currencyId' => 'currency_id',
        'exchangeRate' => 'exchange_rate',
        'inverseExchangeRate' => 'inverse_exchange_rate',
        'baseCurrencyNetAmount' => 'base_currency_net_amount',
        'baseCurrencyTaxAmount' => 'base_currency_tax_amount',
        'baseCurrencyTotalAmount' => 'base_currency_total_amount',
        'statusId' => 'status_id',
        'taxAddressRegionId' => 'tax_address_region_id',
        'tradeOfAsset' => 'trade_of_asset',
        'analysisTypeCategories' => 'analysis_type_categories'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'quickEntryTypeId' => 'setQuickEntryTypeId',
        'date' => 'setDate',
        'contactId' => 'setContactId',
        'reference' => 'setReference',
        'ledgerAccountId' => 'setLedgerAccountId',
        'contactName' => 'setContactName',
        'contactReference' => 'setContactReference',
        'details' => 'setDetails',
        'netAmount' => 'setNetAmount',
        'taxRateId' => 'setTaxRateId',
        'taxAmount' => 'setTaxAmount',
        'totalAmount' => 'setTotalAmount',
        'currencyId' => 'setCurrencyId',
        'exchangeRate' => 'setExchangeRate',
        'inverseExchangeRate' => 'setInverseExchangeRate',
        'baseCurrencyNetAmount' => 'setBaseCurrencyNetAmount',
        'baseCurrencyTaxAmount' => 'setBaseCurrencyTaxAmount',
        'baseCurrencyTotalAmount' => 'setBaseCurrencyTotalAmount',
        'statusId' => 'setStatusId',
        'taxAddressRegionId' => 'setTaxAddressRegionId',
        'tradeOfAsset' => 'setTradeOfAsset',
        'analysisTypeCategories' => 'setAnalysisTypeCategories'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'quickEntryTypeId' => 'getQuickEntryTypeId',
        'date' => 'getDate',
        'contactId' => 'getContactId',
        'reference' => 'getReference',
        'ledgerAccountId' => 'getLedgerAccountId',
        'contactName' => 'getContactName',
        'contactReference' => 'getContactReference',
        'details' => 'getDetails',
        'netAmount' => 'getNetAmount',
        'taxRateId' => 'getTaxRateId',
        'taxAmount' => 'getTaxAmount',
        'totalAmount' => 'getTotalAmount',
        'currencyId' => 'getCurrencyId',
        'exchangeRate' => 'getExchangeRate',
        'inverseExchangeRate' => 'getInverseExchangeRate',
        'baseCurrencyNetAmount' => 'getBaseCurrencyNetAmount',
        'baseCurrencyTaxAmount' => 'getBaseCurrencyTaxAmount',
        'baseCurrencyTotalAmount' => 'getBaseCurrencyTotalAmount',
        'statusId' => 'getStatusId',
        'taxAddressRegionId' => 'getTaxAddressRegionId',
        'tradeOfAsset' => 'getTradeOfAsset',
        'analysisTypeCategories' => 'getAnalysisTypeCategories'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('quickEntryTypeId', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('contactId', $data ?? [], null);
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('ledgerAccountId', $data ?? [], null);
        $this->setIfExists('contactName', $data ?? [], null);
        $this->setIfExists('contactReference', $data ?? [], null);
        $this->setIfExists('details', $data ?? [], null);
        $this->setIfExists('netAmount', $data ?? [], null);
        $this->setIfExists('taxRateId', $data ?? [], null);
        $this->setIfExists('taxAmount', $data ?? [], null);
        $this->setIfExists('totalAmount', $data ?? [], null);
        $this->setIfExists('currencyId', $data ?? [], null);
        $this->setIfExists('exchangeRate', $data ?? [], null);
        $this->setIfExists('inverseExchangeRate', $data ?? [], null);
        $this->setIfExists('baseCurrencyNetAmount', $data ?? [], null);
        $this->setIfExists('baseCurrencyTaxAmount', $data ?? [], null);
        $this->setIfExists('baseCurrencyTotalAmount', $data ?? [], null);
        $this->setIfExists('statusId', $data ?? [], null);
        $this->setIfExists('taxAddressRegionId', $data ?? [], null);
        $this->setIfExists('tradeOfAsset', $data ?? [], null);
        $this->setIfExists('analysisTypeCategories', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets quickEntryTypeId
     *
     * @return string|null
     */
    public function getQuickEntryTypeId(): ?string
    {
        return $this->container['quickEntryTypeId'];
    }

    /**
     * Sets quickEntryTypeId
     *
     * @param string|null $quickEntryTypeId The type of quick entry e.g. invoice or credit note
     *
     * @return $this
     */
    public function setQuickEntryTypeId(?string $quickEntryTypeId): static
    {
        if (is_null($quickEntryTypeId)) {
            throw new InvalidArgumentException('non-nullable quickEntryTypeId cannot be null');
        }
        $this->container['quickEntryTypeId'] = $quickEntryTypeId;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime|null
     */
    public function getDate(): ?\DateTime
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime|null $date The date of the quick entry
     *
     * @return $this
     */
    public function setDate(?\DateTime $date): static
    {
        if (is_null($date)) {
            throw new InvalidArgumentException('non-nullable date cannot be null');
        }
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets contactId
     *
     * @return string|null
     */
    public function getContactId(): ?string
    {
        return $this->container['contactId'];
    }

    /**
     * Sets contactId
     *
     * @param string|null $contactId The contact the quick entry relates to
     *
     * @return $this
     */
    public function setContactId(?string $contactId): static
    {
        if (is_null($contactId)) {
            throw new InvalidArgumentException('non-nullable contactId cannot be null');
        }
        $this->container['contactId'] = $contactId;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference The reference for the quick entry
     *
     * @return $this
     */
    public function setReference(?string $reference): static
    {
        if (is_null($reference)) {
            throw new InvalidArgumentException('non-nullable reference cannot be null');
        }
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets ledgerAccountId
     *
     * @return string|null
     */
    public function getLedgerAccountId(): ?string
    {
        return $this->container['ledgerAccountId'];
    }

    /**
     * Sets ledgerAccountId
     *
     * @param string|null $ledgerAccountId The associated ledger account
     *
     * @return $this
     */
    public function setLedgerAccountId(?string $ledgerAccountId): static
    {
        if (is_null($ledgerAccountId)) {
            throw new InvalidArgumentException('non-nullable ledgerAccountId cannot be null');
        }
        $this->container['ledgerAccountId'] = $ledgerAccountId;

        return $this;
    }

    /**
     * Gets contactName
     *
     * @return string|null
     */
    public function getContactName(): ?string
    {
        return $this->container['contactName'];
    }

    /**
     * Sets contactName
     *
     * @param string|null $contactName The name of the contact when the quick entry was created
     *
     * @return $this
     */
    public function setContactName(?string $contactName): static
    {
        if (is_null($contactName)) {
            throw new InvalidArgumentException('non-nullable contactName cannot be null');
        }
        $this->container['contactName'] = $contactName;

        return $this;
    }

    /**
     * Gets contactReference
     *
     * @return string|null
     */
    public function getContactReference(): ?string
    {
        return $this->container['contactReference'];
    }

    /**
     * Sets contactReference
     *
     * @param string|null $contactReference The reference of the contact when the quick entry was created
     *
     * @return $this
     */
    public function setContactReference(?string $contactReference): static
    {
        if (is_null($contactReference)) {
            throw new InvalidArgumentException('non-nullable contactReference cannot be null');
        }
        $this->container['contactReference'] = $contactReference;

        return $this;
    }

    /**
     * Gets details
     *
     * @return string|null
     */
    public function getDetails(): ?string
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param string|null $details A description of the quick entry
     *
     * @return $this
     */
    public function setDetails(?string $details): static
    {
        if (is_null($details)) {
            throw new InvalidArgumentException('non-nullable details cannot be null');
        }
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets netAmount
     *
     * @return float|null
     */
    public function getNetAmount(): ?float
    {
        return $this->container['netAmount'];
    }

    /**
     * Sets netAmount
     *
     * @param float|null $netAmount The net amount of the quick entry
     *
     * @return $this
     */
    public function setNetAmount(?float $netAmount): static
    {
        if (is_null($netAmount)) {
            throw new InvalidArgumentException('non-nullable netAmount cannot be null');
        }
        $this->container['netAmount'] = $netAmount;

        return $this;
    }

    /**
     * Gets taxRateId
     *
     * @return string|null
     */
    public function getTaxRateId(): ?string
    {
        return $this->container['taxRateId'];
    }

    /**
     * Sets taxRateId
     *
     * @param string|null $taxRateId The ID of the Tax Rate.
     *
     * @return $this
     */
    public function setTaxRateId(?string $taxRateId): static
    {
        if (is_null($taxRateId)) {
            throw new InvalidArgumentException('non-nullable taxRateId cannot be null');
        }
        $this->container['taxRateId'] = $taxRateId;

        return $this;
    }

    /**
     * Gets taxAmount
     *
     * @return float|null
     */
    public function getTaxAmount(): ?float
    {
        return $this->container['taxAmount'];
    }

    /**
     * Sets taxAmount
     *
     * @param float|null $taxAmount The tax amount of the quick entry
     *
     * @return $this
     */
    public function setTaxAmount(?float $taxAmount): static
    {
        if (is_null($taxAmount)) {
            throw new InvalidArgumentException('non-nullable taxAmount cannot be null');
        }
        $this->container['taxAmount'] = $taxAmount;

        return $this;
    }

    /**
     * Gets totalAmount
     *
     * @return float|null
     */
    public function getTotalAmount(): ?float
    {
        return $this->container['totalAmount'];
    }

    /**
     * Sets totalAmount
     *
     * @param float|null $totalAmount The total amount of the quick entry
     *
     * @return $this
     */
    public function setTotalAmount(?float $totalAmount): static
    {
        if (is_null($totalAmount)) {
            throw new InvalidArgumentException('non-nullable totalAmount cannot be null');
        }
        $this->container['totalAmount'] = $totalAmount;

        return $this;
    }

    /**
     * Gets currencyId
     *
     * @return string|null
     */
    public function getCurrencyId(): ?string
    {
        return $this->container['currencyId'];
    }

    /**
     * Sets currencyId
     *
     * @param string|null $currencyId The ID of the Currency.
     *
     * @return $this
     */
    public function setCurrencyId(?string $currencyId): static
    {
        if (is_null($currencyId)) {
            throw new InvalidArgumentException('non-nullable currencyId cannot be null');
        }
        $this->container['currencyId'] = $currencyId;

        return $this;
    }

    /**
     * Gets exchangeRate
     *
     * @return float|null
     */
    public function getExchangeRate(): ?float
    {
        return $this->container['exchangeRate'];
    }

    /**
     * Sets exchangeRate
     *
     * @param float|null $exchangeRate The exchange rate for the quick entry
     *
     * @return $this
     */
    public function setExchangeRate(?float $exchangeRate): static
    {
        if (is_null($exchangeRate)) {
            throw new InvalidArgumentException('non-nullable exchangeRate cannot be null');
        }
        $this->container['exchangeRate'] = $exchangeRate;

        return $this;
    }

    /**
     * Gets inverseExchangeRate
     *
     * @return float|null
     */
    public function getInverseExchangeRate(): ?float
    {
        return $this->container['inverseExchangeRate'];
    }

    /**
     * Sets inverseExchangeRate
     *
     * @param float|null $inverseExchangeRate The inverse exchange rate for the quick entry
     *
     * @return $this
     */
    public function setInverseExchangeRate(?float $inverseExchangeRate): static
    {
        if (is_null($inverseExchangeRate)) {
            throw new InvalidArgumentException('non-nullable inverseExchangeRate cannot be null');
        }
        $this->container['inverseExchangeRate'] = $inverseExchangeRate;

        return $this;
    }

    /**
     * Gets baseCurrencyNetAmount
     *
     * @return float|null
     */
    public function getBaseCurrencyNetAmount(): ?float
    {
        return $this->container['baseCurrencyNetAmount'];
    }

    /**
     * Sets baseCurrencyNetAmount
     *
     * @param float|null $baseCurrencyNetAmount The net amount of the quick entry in base currency
     *
     * @return $this
     */
    public function setBaseCurrencyNetAmount(?float $baseCurrencyNetAmount): static
    {
        if (is_null($baseCurrencyNetAmount)) {
            throw new InvalidArgumentException('non-nullable baseCurrencyNetAmount cannot be null');
        }
        $this->container['baseCurrencyNetAmount'] = $baseCurrencyNetAmount;

        return $this;
    }

    /**
     * Gets baseCurrencyTaxAmount
     *
     * @return float|null
     */
    public function getBaseCurrencyTaxAmount(): ?float
    {
        return $this->container['baseCurrencyTaxAmount'];
    }

    /**
     * Sets baseCurrencyTaxAmount
     *
     * @param float|null $baseCurrencyTaxAmount The tax amount of the quick entry in base currency
     *
     * @return $this
     */
    public function setBaseCurrencyTaxAmount(?float $baseCurrencyTaxAmount): static
    {
        if (is_null($baseCurrencyTaxAmount)) {
            throw new InvalidArgumentException('non-nullable baseCurrencyTaxAmount cannot be null');
        }
        $this->container['baseCurrencyTaxAmount'] = $baseCurrencyTaxAmount;

        return $this;
    }

    /**
     * Gets baseCurrencyTotalAmount
     *
     * @return float|null
     */
    public function getBaseCurrencyTotalAmount(): ?float
    {
        return $this->container['baseCurrencyTotalAmount'];
    }

    /**
     * Sets baseCurrencyTotalAmount
     *
     * @param float|null $baseCurrencyTotalAmount The total amount of the quick entry in base currency
     *
     * @return $this
     */
    public function setBaseCurrencyTotalAmount(?float $baseCurrencyTotalAmount): static
    {
        if (is_null($baseCurrencyTotalAmount)) {
            throw new InvalidArgumentException('non-nullable baseCurrencyTotalAmount cannot be null');
        }
        $this->container['baseCurrencyTotalAmount'] = $baseCurrencyTotalAmount;

        return $this;
    }

    /**
     * Gets statusId
     *
     * @return string|null
     */
    public function getStatusId(): ?string
    {
        return $this->container['statusId'];
    }

    /**
     * Sets statusId
     *
     * @param string|null $statusId The ID of the Status.
     *
     * @return $this
     */
    public function setStatusId(?string $statusId): static
    {
        if (is_null($statusId)) {
            throw new InvalidArgumentException('non-nullable statusId cannot be null');
        }
        $this->container['statusId'] = $statusId;

        return $this;
    }

    /**
     * Gets taxAddressRegionId
     *
     * @return string|null
     */
    public function getTaxAddressRegionId(): ?string
    {
        return $this->container['taxAddressRegionId'];
    }

    /**
     * Sets taxAddressRegionId
     *
     * @param string|null $taxAddressRegionId The ID of the Tax Address Region. (Canada only)
     *
     * @return $this
     */
    public function setTaxAddressRegionId(?string $taxAddressRegionId): static
    {
        if (is_null($taxAddressRegionId)) {
            throw new InvalidArgumentException('non-nullable taxAddressRegionId cannot be null');
        }
        $this->container['taxAddressRegionId'] = $taxAddressRegionId;

        return $this;
    }

    /**
     * Gets tradeOfAsset
     *
     * @return bool|null
     */
    public function getTradeOfAsset(): ?bool
    {
        return $this->container['tradeOfAsset'];
    }

    /**
     * Sets tradeOfAsset
     *
     * @param bool|null $tradeOfAsset Whether the quick entry is marked as trade of asset.
     *
     * @return $this
     */
    public function setTradeOfAsset(?bool $tradeOfAsset): static
    {
        if (is_null($tradeOfAsset)) {
            throw new InvalidArgumentException('non-nullable tradeOfAsset cannot be null');
        }
        $this->container['tradeOfAsset'] = $tradeOfAsset;

        return $this;
    }

    /**
     * Gets analysisTypeCategories
     *
     * @return \SynergiTech\Sage\Model\PostPurchaseQuickEntriesPurchaseQuickEntryAnalysisTypeCategoriesInner[]|null
     */
    public function getAnalysisTypeCategories(): ?array
    {
        return $this->container['analysisTypeCategories'];
    }

    /**
     * Sets analysisTypeCategories
     *
     * @param \SynergiTech\Sage\Model\PostPurchaseQuickEntriesPurchaseQuickEntryAnalysisTypeCategoriesInner[]|null $analysisTypeCategories analysisTypeCategories
     *
     * @return $this
     */
    public function setAnalysisTypeCategories(?array $analysisTypeCategories): static
    {
        if (is_null($analysisTypeCategories)) {
            throw new InvalidArgumentException('non-nullable analysisTypeCategories cannot be null');
        }
        $this->container['analysisTypeCategories'] = $analysisTypeCategories;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
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
    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


