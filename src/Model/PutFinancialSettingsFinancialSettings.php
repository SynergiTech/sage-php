<?php
/**
 * PutFinancialSettingsFinancialSettings
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
 * PutFinancialSettingsFinancialSettings Class Doc Comment
 *
 * @package  SynergiTech\Sage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class PutFinancialSettingsFinancialSettings implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'putFinancialSettings_financial_settings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'yearEndDate' => '\DateTime',
        'yearEndLockdownDate' => '\DateTime',
        'accountingType' => 'string',
        'accountsStartDate' => '\DateTime',
        'baseCurrencyId' => 'string',
        'multiCurrencyEnabled' => 'bool',
        'useLiveExchangeRates' => 'bool',
        'mtdActivationStatus' => 'string',
        'mtdConnected' => 'bool',
        'mtdAuthenticatedDate' => '\DateTime',
        'taxSchemeId' => 'string',
        'taxReturnFrequencyId' => 'string',
        'taxNumber' => 'string',
        'generalTaxNumber' => 'string',
        'taxOfficeId' => 'string',
        'defaultIrpfRate' => 'float',
        'flatRateTaxPercentage' => 'float',
        'recoverablePercentage' => 'float',
        'salesTaxCalculation' => 'string',
        'purchaseTaxCalculation' => 'string',
        'postponedAccounting' => 'bool',
        'destinationVat' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'yearEndDate' => 'date',
        'yearEndLockdownDate' => 'date',
        'accountingType' => null,
        'accountsStartDate' => 'date',
        'baseCurrencyId' => null,
        'multiCurrencyEnabled' => null,
        'useLiveExchangeRates' => null,
        'mtdActivationStatus' => null,
        'mtdConnected' => null,
        'mtdAuthenticatedDate' => 'date',
        'taxSchemeId' => null,
        'taxReturnFrequencyId' => null,
        'taxNumber' => null,
        'generalTaxNumber' => null,
        'taxOfficeId' => null,
        'defaultIrpfRate' => 'double',
        'flatRateTaxPercentage' => 'double',
        'recoverablePercentage' => 'double',
        'salesTaxCalculation' => null,
        'purchaseTaxCalculation' => null,
        'postponedAccounting' => null,
        'destinationVat' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'yearEndDate' => false,
        'yearEndLockdownDate' => false,
        'accountingType' => false,
        'accountsStartDate' => false,
        'baseCurrencyId' => false,
        'multiCurrencyEnabled' => false,
        'useLiveExchangeRates' => false,
        'mtdActivationStatus' => false,
        'mtdConnected' => false,
        'mtdAuthenticatedDate' => false,
        'taxSchemeId' => false,
        'taxReturnFrequencyId' => false,
        'taxNumber' => false,
        'generalTaxNumber' => false,
        'taxOfficeId' => false,
        'defaultIrpfRate' => false,
        'flatRateTaxPercentage' => false,
        'recoverablePercentage' => false,
        'salesTaxCalculation' => false,
        'purchaseTaxCalculation' => false,
        'postponedAccounting' => false,
        'destinationVat' => false
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
        'yearEndDate' => 'year_end_date',
        'yearEndLockdownDate' => 'year_end_lockdown_date',
        'accountingType' => 'accounting_type',
        'accountsStartDate' => 'accounts_start_date',
        'baseCurrencyId' => 'base_currency_id',
        'multiCurrencyEnabled' => 'multi_currency_enabled',
        'useLiveExchangeRates' => 'use_live_exchange_rates',
        'mtdActivationStatus' => 'mtd_activation_status',
        'mtdConnected' => 'mtd_connected',
        'mtdAuthenticatedDate' => 'mtd_authenticated_date',
        'taxSchemeId' => 'tax_scheme_id',
        'taxReturnFrequencyId' => 'tax_return_frequency_id',
        'taxNumber' => 'tax_number',
        'generalTaxNumber' => 'general_tax_number',
        'taxOfficeId' => 'tax_office_id',
        'defaultIrpfRate' => 'default_irpf_rate',
        'flatRateTaxPercentage' => 'flat_rate_tax_percentage',
        'recoverablePercentage' => 'recoverable_percentage',
        'salesTaxCalculation' => 'sales_tax_calculation',
        'purchaseTaxCalculation' => 'purchase_tax_calculation',
        'postponedAccounting' => 'postponed_accounting',
        'destinationVat' => 'destination_vat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'yearEndDate' => 'setYearEndDate',
        'yearEndLockdownDate' => 'setYearEndLockdownDate',
        'accountingType' => 'setAccountingType',
        'accountsStartDate' => 'setAccountsStartDate',
        'baseCurrencyId' => 'setBaseCurrencyId',
        'multiCurrencyEnabled' => 'setMultiCurrencyEnabled',
        'useLiveExchangeRates' => 'setUseLiveExchangeRates',
        'mtdActivationStatus' => 'setMtdActivationStatus',
        'mtdConnected' => 'setMtdConnected',
        'mtdAuthenticatedDate' => 'setMtdAuthenticatedDate',
        'taxSchemeId' => 'setTaxSchemeId',
        'taxReturnFrequencyId' => 'setTaxReturnFrequencyId',
        'taxNumber' => 'setTaxNumber',
        'generalTaxNumber' => 'setGeneralTaxNumber',
        'taxOfficeId' => 'setTaxOfficeId',
        'defaultIrpfRate' => 'setDefaultIrpfRate',
        'flatRateTaxPercentage' => 'setFlatRateTaxPercentage',
        'recoverablePercentage' => 'setRecoverablePercentage',
        'salesTaxCalculation' => 'setSalesTaxCalculation',
        'purchaseTaxCalculation' => 'setPurchaseTaxCalculation',
        'postponedAccounting' => 'setPostponedAccounting',
        'destinationVat' => 'setDestinationVat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'yearEndDate' => 'getYearEndDate',
        'yearEndLockdownDate' => 'getYearEndLockdownDate',
        'accountingType' => 'getAccountingType',
        'accountsStartDate' => 'getAccountsStartDate',
        'baseCurrencyId' => 'getBaseCurrencyId',
        'multiCurrencyEnabled' => 'getMultiCurrencyEnabled',
        'useLiveExchangeRates' => 'getUseLiveExchangeRates',
        'mtdActivationStatus' => 'getMtdActivationStatus',
        'mtdConnected' => 'getMtdConnected',
        'mtdAuthenticatedDate' => 'getMtdAuthenticatedDate',
        'taxSchemeId' => 'getTaxSchemeId',
        'taxReturnFrequencyId' => 'getTaxReturnFrequencyId',
        'taxNumber' => 'getTaxNumber',
        'generalTaxNumber' => 'getGeneralTaxNumber',
        'taxOfficeId' => 'getTaxOfficeId',
        'defaultIrpfRate' => 'getDefaultIrpfRate',
        'flatRateTaxPercentage' => 'getFlatRateTaxPercentage',
        'recoverablePercentage' => 'getRecoverablePercentage',
        'salesTaxCalculation' => 'getSalesTaxCalculation',
        'purchaseTaxCalculation' => 'getPurchaseTaxCalculation',
        'postponedAccounting' => 'getPostponedAccounting',
        'destinationVat' => 'getDestinationVat'
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
        $this->setIfExists('yearEndDate', $data ?? [], null);
        $this->setIfExists('yearEndLockdownDate', $data ?? [], null);
        $this->setIfExists('accountingType', $data ?? [], null);
        $this->setIfExists('accountsStartDate', $data ?? [], null);
        $this->setIfExists('baseCurrencyId', $data ?? [], null);
        $this->setIfExists('multiCurrencyEnabled', $data ?? [], null);
        $this->setIfExists('useLiveExchangeRates', $data ?? [], null);
        $this->setIfExists('mtdActivationStatus', $data ?? [], null);
        $this->setIfExists('mtdConnected', $data ?? [], null);
        $this->setIfExists('mtdAuthenticatedDate', $data ?? [], null);
        $this->setIfExists('taxSchemeId', $data ?? [], null);
        $this->setIfExists('taxReturnFrequencyId', $data ?? [], null);
        $this->setIfExists('taxNumber', $data ?? [], null);
        $this->setIfExists('generalTaxNumber', $data ?? [], null);
        $this->setIfExists('taxOfficeId', $data ?? [], null);
        $this->setIfExists('defaultIrpfRate', $data ?? [], null);
        $this->setIfExists('flatRateTaxPercentage', $data ?? [], null);
        $this->setIfExists('recoverablePercentage', $data ?? [], null);
        $this->setIfExists('salesTaxCalculation', $data ?? [], null);
        $this->setIfExists('purchaseTaxCalculation', $data ?? [], null);
        $this->setIfExists('postponedAccounting', $data ?? [], null);
        $this->setIfExists('destinationVat', $data ?? [], null);
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
     * Gets yearEndDate
     *
     * @return \DateTime|null
     */
    public function getYearEndDate(): ?\DateTime
    {
        return $this->container['yearEndDate'];
    }

    /**
     * Sets yearEndDate
     *
     * @param \DateTime|null $yearEndDate The financial year end date of the business
     *
     * @return $this
     */
    public function setYearEndDate(?\DateTime $yearEndDate): static
    {
        if (is_null($yearEndDate)) {
            throw new InvalidArgumentException('non-nullable yearEndDate cannot be null');
        }
        $this->container['yearEndDate'] = $yearEndDate;

        return $this;
    }

    /**
     * Gets yearEndLockdownDate
     *
     * @return \DateTime|null
     */
    public function getYearEndLockdownDate(): ?\DateTime
    {
        return $this->container['yearEndLockdownDate'];
    }

    /**
     * Sets yearEndLockdownDate
     *
     * @param \DateTime|null $yearEndLockdownDate The year end lockdown date of the business
     *
     * @return $this
     */
    public function setYearEndLockdownDate(?\DateTime $yearEndLockdownDate): static
    {
        if (is_null($yearEndLockdownDate)) {
            throw new InvalidArgumentException('non-nullable yearEndLockdownDate cannot be null');
        }
        $this->container['yearEndLockdownDate'] = $yearEndLockdownDate;

        return $this;
    }

    /**
     * Gets accountingType
     *
     * @return string|null
     */
    public function getAccountingType(): ?string
    {
        return $this->container['accountingType'];
    }

    /**
     * Sets accountingType
     *
     * @param string|null $accountingType Indicates the accounting type of a business, it can be accrual or cash based
     *
     * @return $this
     */
    public function setAccountingType(?string $accountingType): static
    {
        if (is_null($accountingType)) {
            throw new InvalidArgumentException('non-nullable accountingType cannot be null');
        }
        $this->container['accountingType'] = $accountingType;

        return $this;
    }

    /**
     * Gets accountsStartDate
     *
     * @return \DateTime|null
     */
    public function getAccountsStartDate(): ?\DateTime
    {
        return $this->container['accountsStartDate'];
    }

    /**
     * Sets accountsStartDate
     *
     * @param \DateTime|null $accountsStartDate The accounts start date of the business
     *
     * @return $this
     */
    public function setAccountsStartDate(?\DateTime $accountsStartDate): static
    {
        if (is_null($accountsStartDate)) {
            throw new InvalidArgumentException('non-nullable accountsStartDate cannot be null');
        }
        $this->container['accountsStartDate'] = $accountsStartDate;

        return $this;
    }

    /**
     * Gets baseCurrencyId
     *
     * @return string|null
     */
    public function getBaseCurrencyId(): ?string
    {
        return $this->container['baseCurrencyId'];
    }

    /**
     * Sets baseCurrencyId
     *
     * @param string|null $baseCurrencyId The ID of the Base Currency.
     *
     * @return $this
     */
    public function setBaseCurrencyId(?string $baseCurrencyId): static
    {
        if (is_null($baseCurrencyId)) {
            throw new InvalidArgumentException('non-nullable baseCurrencyId cannot be null');
        }
        $this->container['baseCurrencyId'] = $baseCurrencyId;

        return $this;
    }

    /**
     * Gets multiCurrencyEnabled
     *
     * @return bool|null
     */
    public function getMultiCurrencyEnabled(): ?bool
    {
        return $this->container['multiCurrencyEnabled'];
    }

    /**
     * Sets multiCurrencyEnabled
     *
     * @param bool|null $multiCurrencyEnabled Indicates whether multi-currency is enabled for the business
     *
     * @return $this
     */
    public function setMultiCurrencyEnabled(?bool $multiCurrencyEnabled): static
    {
        if (is_null($multiCurrencyEnabled)) {
            throw new InvalidArgumentException('non-nullable multiCurrencyEnabled cannot be null');
        }
        $this->container['multiCurrencyEnabled'] = $multiCurrencyEnabled;

        return $this;
    }

    /**
     * Gets useLiveExchangeRates
     *
     * @return bool|null
     */
    public function getUseLiveExchangeRates(): ?bool
    {
        return $this->container['useLiveExchangeRates'];
    }

    /**
     * Sets useLiveExchangeRates
     *
     * @param bool|null $useLiveExchangeRates Indicates whether to use live or business defined exchange rates
     *
     * @return $this
     */
    public function setUseLiveExchangeRates(?bool $useLiveExchangeRates): static
    {
        if (is_null($useLiveExchangeRates)) {
            throw new InvalidArgumentException('non-nullable useLiveExchangeRates cannot be null');
        }
        $this->container['useLiveExchangeRates'] = $useLiveExchangeRates;

        return $this;
    }

    /**
     * Gets mtdActivationStatus
     *
     * @return string|null
     */
    public function getMtdActivationStatus(): ?string
    {
        return $this->container['mtdActivationStatus'];
    }

    /**
     * Sets mtdActivationStatus
     *
     * @param string|null $mtdActivationStatus Indicates the UK Making Tax Digital for VAT activation status
     *
     * @return $this
     */
    public function setMtdActivationStatus(?string $mtdActivationStatus): static
    {
        if (is_null($mtdActivationStatus)) {
            throw new InvalidArgumentException('non-nullable mtdActivationStatus cannot be null');
        }
        $this->container['mtdActivationStatus'] = $mtdActivationStatus;

        return $this;
    }

    /**
     * Gets mtdConnected
     *
     * @return bool|null
     */
    public function getMtdConnected(): ?bool
    {
        return $this->container['mtdConnected'];
    }

    /**
     * Sets mtdConnected
     *
     * @param bool|null $mtdConnected Indicates whether UK Making Tax Digital for VAT is currently connected
     *
     * @return $this
     */
    public function setMtdConnected(?bool $mtdConnected): static
    {
        if (is_null($mtdConnected)) {
            throw new InvalidArgumentException('non-nullable mtdConnected cannot be null');
        }
        $this->container['mtdConnected'] = $mtdConnected;

        return $this;
    }

    /**
     * Gets mtdAuthenticatedDate
     *
     * @return \DateTime|null
     */
    public function getMtdAuthenticatedDate(): ?\DateTime
    {
        return $this->container['mtdAuthenticatedDate'];
    }

    /**
     * Sets mtdAuthenticatedDate
     *
     * @param \DateTime|null $mtdAuthenticatedDate Indicates when a UK business enabled UK Making Tax Digital for VAT, nil if not enabled or non-uk
     *
     * @return $this
     */
    public function setMtdAuthenticatedDate(?\DateTime $mtdAuthenticatedDate): static
    {
        if (is_null($mtdAuthenticatedDate)) {
            throw new InvalidArgumentException('non-nullable mtdAuthenticatedDate cannot be null');
        }
        $this->container['mtdAuthenticatedDate'] = $mtdAuthenticatedDate;

        return $this;
    }

    /**
     * Gets taxSchemeId
     *
     * @return string|null
     */
    public function getTaxSchemeId(): ?string
    {
        return $this->container['taxSchemeId'];
    }

    /**
     * Sets taxSchemeId
     *
     * @param string|null $taxSchemeId The ID of the Tax Scheme.
     *
     * @return $this
     */
    public function setTaxSchemeId(?string $taxSchemeId): static
    {
        if (is_null($taxSchemeId)) {
            throw new InvalidArgumentException('non-nullable taxSchemeId cannot be null');
        }
        $this->container['taxSchemeId'] = $taxSchemeId;

        return $this;
    }

    /**
     * Gets taxReturnFrequencyId
     *
     * @return string|null
     */
    public function getTaxReturnFrequencyId(): ?string
    {
        return $this->container['taxReturnFrequencyId'];
    }

    /**
     * Sets taxReturnFrequencyId
     *
     * @param string|null $taxReturnFrequencyId The ID of the Tax Return Frequency.
     *
     * @return $this
     */
    public function setTaxReturnFrequencyId(?string $taxReturnFrequencyId): static
    {
        if (is_null($taxReturnFrequencyId)) {
            throw new InvalidArgumentException('non-nullable taxReturnFrequencyId cannot be null');
        }
        $this->container['taxReturnFrequencyId'] = $taxReturnFrequencyId;

        return $this;
    }

    /**
     * Gets taxNumber
     *
     * @return string|null
     */
    public function getTaxNumber(): ?string
    {
        return $this->container['taxNumber'];
    }

    /**
     * Sets taxNumber
     *
     * @param string|null $taxNumber The tax number
     *
     * @return $this
     */
    public function setTaxNumber(?string $taxNumber): static
    {
        if (is_null($taxNumber)) {
            throw new InvalidArgumentException('non-nullable taxNumber cannot be null');
        }
        $this->container['taxNumber'] = $taxNumber;

        return $this;
    }

    /**
     * Gets generalTaxNumber
     *
     * @return string|null
     */
    public function getGeneralTaxNumber(): ?string
    {
        return $this->container['generalTaxNumber'];
    }

    /**
     * Sets generalTaxNumber
     *
     * @param string|null $generalTaxNumber The number for various tax report submissions
     *
     * @return $this
     */
    public function setGeneralTaxNumber(?string $generalTaxNumber): static
    {
        if (is_null($generalTaxNumber)) {
            throw new InvalidArgumentException('non-nullable generalTaxNumber cannot be null');
        }
        $this->container['generalTaxNumber'] = $generalTaxNumber;

        return $this;
    }

    /**
     * Gets taxOfficeId
     *
     * @return string|null
     */
    public function getTaxOfficeId(): ?string
    {
        return $this->container['taxOfficeId'];
    }

    /**
     * Sets taxOfficeId
     *
     * @param string|null $taxOfficeId The ID of the Tax Office.
     *
     * @return $this
     */
    public function setTaxOfficeId(?string $taxOfficeId): static
    {
        if (is_null($taxOfficeId)) {
            throw new InvalidArgumentException('non-nullable taxOfficeId cannot be null');
        }
        $this->container['taxOfficeId'] = $taxOfficeId;

        return $this;
    }

    /**
     * Gets defaultIrpfRate
     *
     * @return float|null
     */
    public function getDefaultIrpfRate(): ?float
    {
        return $this->container['defaultIrpfRate'];
    }

    /**
     * Sets defaultIrpfRate
     *
     * @param float|null $defaultIrpfRate The default IRPF rate
     *
     * @return $this
     */
    public function setDefaultIrpfRate(?float $defaultIrpfRate): static
    {
        if (is_null($defaultIrpfRate)) {
            throw new InvalidArgumentException('non-nullable defaultIrpfRate cannot be null');
        }
        $this->container['defaultIrpfRate'] = $defaultIrpfRate;

        return $this;
    }

    /**
     * Gets flatRateTaxPercentage
     *
     * @return float|null
     */
    public function getFlatRateTaxPercentage(): ?float
    {
        return $this->container['flatRateTaxPercentage'];
    }

    /**
     * Sets flatRateTaxPercentage
     *
     * @param float|null $flatRateTaxPercentage The tax percentage that applies to flat rate tax schemes.
     *
     * @return $this
     */
    public function setFlatRateTaxPercentage(?float $flatRateTaxPercentage): static
    {
        if (is_null($flatRateTaxPercentage)) {
            throw new InvalidArgumentException('non-nullable flatRateTaxPercentage cannot be null');
        }
        $this->container['flatRateTaxPercentage'] = $flatRateTaxPercentage;

        return $this;
    }

    /**
     * Gets recoverablePercentage
     *
     * @return float|null
     */
    public function getRecoverablePercentage(): ?float
    {
        return $this->container['recoverablePercentage'];
    }

    /**
     * Sets recoverablePercentage
     *
     * @param float|null $recoverablePercentage The partial recoverable tax rate (Canada only)
     *
     * @return $this
     */
    public function setRecoverablePercentage(?float $recoverablePercentage): static
    {
        if (is_null($recoverablePercentage)) {
            throw new InvalidArgumentException('non-nullable recoverablePercentage cannot be null');
        }
        $this->container['recoverablePercentage'] = $recoverablePercentage;

        return $this;
    }

    /**
     * Gets salesTaxCalculation
     *
     * @return string|null
     */
    public function getSalesTaxCalculation(): ?string
    {
        return $this->container['salesTaxCalculation'];
    }

    /**
     * Sets salesTaxCalculation
     *
     * @param string|null $salesTaxCalculation The method of collection for tax on sales. Allowed values - \"invoice\", \"cash\".
     *
     * @return $this
     */
    public function setSalesTaxCalculation(?string $salesTaxCalculation): static
    {
        if (is_null($salesTaxCalculation)) {
            throw new InvalidArgumentException('non-nullable salesTaxCalculation cannot be null');
        }
        $this->container['salesTaxCalculation'] = $salesTaxCalculation;

        return $this;
    }

    /**
     * Gets purchaseTaxCalculation
     *
     * @return string|null
     */
    public function getPurchaseTaxCalculation(): ?string
    {
        return $this->container['purchaseTaxCalculation'];
    }

    /**
     * Sets purchaseTaxCalculation
     *
     * @param string|null $purchaseTaxCalculation The method of collection for tax on purchases. Allowed values - \"invoice\", \"cash\".
     *
     * @return $this
     */
    public function setPurchaseTaxCalculation(?string $purchaseTaxCalculation): static
    {
        if (is_null($purchaseTaxCalculation)) {
            throw new InvalidArgumentException('non-nullable purchaseTaxCalculation cannot be null');
        }
        $this->container['purchaseTaxCalculation'] = $purchaseTaxCalculation;

        return $this;
    }

    /**
     * Gets postponedAccounting
     *
     * @return bool|null
     */
    public function getPostponedAccounting(): ?bool
    {
        return $this->container['postponedAccounting'];
    }

    /**
     * Sets postponedAccounting
     *
     * @param bool|null $postponedAccounting Indicates whether to use postponed accounting or not
     *
     * @return $this
     */
    public function setPostponedAccounting(?bool $postponedAccounting): static
    {
        if (is_null($postponedAccounting)) {
            throw new InvalidArgumentException('non-nullable postponedAccounting cannot be null');
        }
        $this->container['postponedAccounting'] = $postponedAccounting;

        return $this;
    }

    /**
     * Gets destinationVat
     *
     * @return bool|null
     */
    public function getDestinationVat(): ?bool
    {
        return $this->container['destinationVat'];
    }

    /**
     * Sets destinationVat
     *
     * @param bool|null $destinationVat Indicates whether to use destination vat or not
     *
     * @return $this
     */
    public function setDestinationVat(?bool $destinationVat): static
    {
        if (is_null($destinationVat)) {
            throw new InvalidArgumentException('non-nullable destinationVat cannot be null');
        }
        $this->container['destinationVat'] = $destinationVat;

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


