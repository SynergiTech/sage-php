<?php
/**
 * JournalLine
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
 * JournalLine Class Doc Comment
 *
 * @package  SynergiTech\Sage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class JournalLine implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'JournalLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'ledgerAccount' => '\SynergiTech\Sage\Model\LedgerAccount',
        'details' => 'string',
        'debit' => 'float',
        'credit' => 'float',
        'analysisTypeCategories' => '\SynergiTech\Sage\Model\AnalysisTypeLineItem[]',
        'includeOnTaxReturn' => 'bool',
        'taxReconciled' => 'bool',
        'cleared' => 'bool',
        'bankReconciled' => 'bool',
        'journalLineForeignCurrency' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'ledgerAccount' => null,
        'details' => null,
        'debit' => 'double',
        'credit' => 'double',
        'analysisTypeCategories' => null,
        'includeOnTaxReturn' => null,
        'taxReconciled' => null,
        'cleared' => null,
        'bankReconciled' => null,
        'journalLineForeignCurrency' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'ledgerAccount' => false,
        'details' => false,
        'debit' => false,
        'credit' => false,
        'analysisTypeCategories' => false,
        'includeOnTaxReturn' => false,
        'taxReconciled' => false,
        'cleared' => false,
        'bankReconciled' => false,
        'journalLineForeignCurrency' => false
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
        'id' => 'id',
        'ledgerAccount' => 'ledger_account',
        'details' => 'details',
        'debit' => 'debit',
        'credit' => 'credit',
        'analysisTypeCategories' => 'analysis_type_categories',
        'includeOnTaxReturn' => 'include_on_tax_return',
        'taxReconciled' => 'tax_reconciled',
        'cleared' => 'cleared',
        'bankReconciled' => 'bank_reconciled',
        'journalLineForeignCurrency' => 'journal_line_foreign_currency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'ledgerAccount' => 'setLedgerAccount',
        'details' => 'setDetails',
        'debit' => 'setDebit',
        'credit' => 'setCredit',
        'analysisTypeCategories' => 'setAnalysisTypeCategories',
        'includeOnTaxReturn' => 'setIncludeOnTaxReturn',
        'taxReconciled' => 'setTaxReconciled',
        'cleared' => 'setCleared',
        'bankReconciled' => 'setBankReconciled',
        'journalLineForeignCurrency' => 'setJournalLineForeignCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'ledgerAccount' => 'getLedgerAccount',
        'details' => 'getDetails',
        'debit' => 'getDebit',
        'credit' => 'getCredit',
        'analysisTypeCategories' => 'getAnalysisTypeCategories',
        'includeOnTaxReturn' => 'getIncludeOnTaxReturn',
        'taxReconciled' => 'getTaxReconciled',
        'cleared' => 'getCleared',
        'bankReconciled' => 'getBankReconciled',
        'journalLineForeignCurrency' => 'getJournalLineForeignCurrency'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('ledgerAccount', $data ?? [], null);
        $this->setIfExists('details', $data ?? [], null);
        $this->setIfExists('debit', $data ?? [], null);
        $this->setIfExists('credit', $data ?? [], null);
        $this->setIfExists('analysisTypeCategories', $data ?? [], null);
        $this->setIfExists('includeOnTaxReturn', $data ?? [], null);
        $this->setIfExists('taxReconciled', $data ?? [], null);
        $this->setIfExists('cleared', $data ?? [], null);
        $this->setIfExists('bankReconciled', $data ?? [], null);
        $this->setIfExists('journalLineForeignCurrency', $data ?? [], null);
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
     * Gets id
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The unique identifier for the item
     *
     * @return $this
     */
    public function setId(?string $id): static
    {
        if (is_null($id)) {
            throw new InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets ledgerAccount
     *
     * @return \SynergiTech\Sage\Model\LedgerAccount|null
     */
    public function getLedgerAccount(): ?\SynergiTech\Sage\Model\LedgerAccount
    {
        return $this->container['ledgerAccount'];
    }

    /**
     * Sets ledgerAccount
     *
     * @param \SynergiTech\Sage\Model\LedgerAccount|null $ledgerAccount ledgerAccount
     *
     * @return $this
     */
    public function setLedgerAccount(?\SynergiTech\Sage\Model\LedgerAccount $ledgerAccount): static
    {
        if (is_null($ledgerAccount)) {
            throw new InvalidArgumentException('non-nullable ledgerAccount cannot be null');
        }
        $this->container['ledgerAccount'] = $ledgerAccount;

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
     * @param string|null $details A description of the journal line
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
     * Gets debit
     *
     * @return float|null
     */
    public function getDebit(): ?float
    {
        return $this->container['debit'];
    }

    /**
     * Sets debit
     *
     * @param float|null $debit The debit amount of the journal line
     *
     * @return $this
     */
    public function setDebit(?float $debit): static
    {
        if (is_null($debit)) {
            throw new InvalidArgumentException('non-nullable debit cannot be null');
        }
        $this->container['debit'] = $debit;

        return $this;
    }

    /**
     * Gets credit
     *
     * @return float|null
     */
    public function getCredit(): ?float
    {
        return $this->container['credit'];
    }

    /**
     * Sets credit
     *
     * @param float|null $credit The credit amount of the journal line
     *
     * @return $this
     */
    public function setCredit(?float $credit): static
    {
        if (is_null($credit)) {
            throw new InvalidArgumentException('non-nullable credit cannot be null');
        }
        $this->container['credit'] = $credit;

        return $this;
    }

    /**
     * Gets analysisTypeCategories
     *
     * @return \SynergiTech\Sage\Model\AnalysisTypeLineItem[]|null
     */
    public function getAnalysisTypeCategories(): ?array
    {
        return $this->container['analysisTypeCategories'];
    }

    /**
     * Sets analysisTypeCategories
     *
     * @param \SynergiTech\Sage\Model\AnalysisTypeLineItem[]|null $analysisTypeCategories The analysis types information
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
     * Gets includeOnTaxReturn
     *
     * @return bool|null
     */
    public function getIncludeOnTaxReturn(): ?bool
    {
        return $this->container['includeOnTaxReturn'];
    }

    /**
     * Sets includeOnTaxReturn
     *
     * @param bool|null $includeOnTaxReturn Indicates whether the journal line should affect the tax return
     *
     * @return $this
     */
    public function setIncludeOnTaxReturn(?bool $includeOnTaxReturn): static
    {
        if (is_null($includeOnTaxReturn)) {
            throw new InvalidArgumentException('non-nullable includeOnTaxReturn cannot be null');
        }
        $this->container['includeOnTaxReturn'] = $includeOnTaxReturn;

        return $this;
    }

    /**
     * Gets taxReconciled
     *
     * @return bool|null
     */
    public function getTaxReconciled(): ?bool
    {
        return $this->container['taxReconciled'];
    }

    /**
     * Sets taxReconciled
     *
     * @param bool|null $taxReconciled Indicates if the journal line is tax reconciled or not.
     *
     * @return $this
     */
    public function setTaxReconciled(?bool $taxReconciled): static
    {
        if (is_null($taxReconciled)) {
            throw new InvalidArgumentException('non-nullable taxReconciled cannot be null');
        }
        $this->container['taxReconciled'] = $taxReconciled;

        return $this;
    }

    /**
     * Gets cleared
     *
     * @return bool|null
     */
    public function getCleared(): ?bool
    {
        return $this->container['cleared'];
    }

    /**
     * Sets cleared
     *
     * @param bool|null $cleared Indicates if the journal line is cleared or not.  Will be true when a journal item has been matched with a bank feed or statement.
     *
     * @return $this
     */
    public function setCleared(?bool $cleared): static
    {
        if (is_null($cleared)) {
            throw new InvalidArgumentException('non-nullable cleared cannot be null');
        }
        $this->container['cleared'] = $cleared;

        return $this;
    }

    /**
     * Gets bankReconciled
     *
     * @return bool|null
     */
    public function getBankReconciled(): ?bool
    {
        return $this->container['bankReconciled'];
    }

    /**
     * Sets bankReconciled
     *
     * @param bool|null $bankReconciled Indicates if the journal line is bank reconciled or not.
     *
     * @return $this
     */
    public function setBankReconciled(?bool $bankReconciled): static
    {
        if (is_null($bankReconciled)) {
            throw new InvalidArgumentException('non-nullable bankReconciled cannot be null');
        }
        $this->container['bankReconciled'] = $bankReconciled;

        return $this;
    }

    /**
     * Gets journalLineForeignCurrency
     *
     * @return string|null
     */
    public function getJournalLineForeignCurrency(): ?string
    {
        return $this->container['journalLineForeignCurrency'];
    }

    /**
     * Sets journalLineForeignCurrency
     *
     * @param string|null $journalLineForeignCurrency Indicates if the journal line is with a foreign currency bank account.
     *
     * @return $this
     */
    public function setJournalLineForeignCurrency(?string $journalLineForeignCurrency): static
    {
        if (is_null($journalLineForeignCurrency)) {
            throw new InvalidArgumentException('non-nullable journalLineForeignCurrency cannot be null');
        }
        $this->container['journalLineForeignCurrency'] = $journalLineForeignCurrency;

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


