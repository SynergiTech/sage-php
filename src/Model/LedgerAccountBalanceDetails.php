<?php
/**
 * LedgerAccountBalanceDetails
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
 * LedgerAccountBalanceDetails Class Doc Comment
 *
 * @package  SynergiTech\Sage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class LedgerAccountBalanceDetails implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'LedgerAccountBalanceDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'balance' => 'float',
        'creditOrDebit' => 'string',
        'credits' => 'float',
        'debits' => 'float',
        'fromDate' => 'string',
        'toDate' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'balance' => 'double',
        'creditOrDebit' => null,
        'credits' => 'double',
        'debits' => 'double',
        'fromDate' => null,
        'toDate' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'balance' => false,
        'creditOrDebit' => false,
        'credits' => false,
        'debits' => false,
        'fromDate' => false,
        'toDate' => false
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
        'balance' => 'balance',
        'creditOrDebit' => 'credit_or_debit',
        'credits' => 'credits',
        'debits' => 'debits',
        'fromDate' => 'from_date',
        'toDate' => 'to_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'balance' => 'setBalance',
        'creditOrDebit' => 'setCreditOrDebit',
        'credits' => 'setCredits',
        'debits' => 'setDebits',
        'fromDate' => 'setFromDate',
        'toDate' => 'setToDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'balance' => 'getBalance',
        'creditOrDebit' => 'getCreditOrDebit',
        'credits' => 'getCredits',
        'debits' => 'getDebits',
        'fromDate' => 'getFromDate',
        'toDate' => 'getToDate'
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
        $this->setIfExists('balance', $data ?? [], null);
        $this->setIfExists('creditOrDebit', $data ?? [], null);
        $this->setIfExists('credits', $data ?? [], null);
        $this->setIfExists('debits', $data ?? [], null);
        $this->setIfExists('fromDate', $data ?? [], null);
        $this->setIfExists('toDate', $data ?? [], null);
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
     * Gets balance
     *
     * @return float|null
     */
    public function getBalance(): ?float
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param float|null $balance The account balance
     *
     * @return $this
     */
    public function setBalance(?float $balance): static
    {
        if (is_null($balance)) {
            throw new InvalidArgumentException('non-nullable balance cannot be null');
        }
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets creditOrDebit
     *
     * @return string|null
     */
    public function getCreditOrDebit(): ?string
    {
        return $this->container['creditOrDebit'];
    }

    /**
     * Sets creditOrDebit
     *
     * @param string|null $creditOrDebit Is the balance a debit or credit
     *
     * @return $this
     */
    public function setCreditOrDebit(?string $creditOrDebit): static
    {
        if (is_null($creditOrDebit)) {
            throw new InvalidArgumentException('non-nullable creditOrDebit cannot be null');
        }
        $this->container['creditOrDebit'] = $creditOrDebit;

        return $this;
    }

    /**
     * Gets credits
     *
     * @return float|null
     */
    public function getCredits(): ?float
    {
        return $this->container['credits'];
    }

    /**
     * Sets credits
     *
     * @param float|null $credits The credit balance
     *
     * @return $this
     */
    public function setCredits(?float $credits): static
    {
        if (is_null($credits)) {
            throw new InvalidArgumentException('non-nullable credits cannot be null');
        }
        $this->container['credits'] = $credits;

        return $this;
    }

    /**
     * Gets debits
     *
     * @return float|null
     */
    public function getDebits(): ?float
    {
        return $this->container['debits'];
    }

    /**
     * Sets debits
     *
     * @param float|null $debits The debit balance
     *
     * @return $this
     */
    public function setDebits(?float $debits): static
    {
        if (is_null($debits)) {
            throw new InvalidArgumentException('non-nullable debits cannot be null');
        }
        $this->container['debits'] = $debits;

        return $this;
    }

    /**
     * Gets fromDate
     *
     * @return string|null
     */
    public function getFromDate(): ?string
    {
        return $this->container['fromDate'];
    }

    /**
     * Sets fromDate
     *
     * @param string|null $fromDate The from date filter
     *
     * @return $this
     */
    public function setFromDate(?string $fromDate): static
    {
        if (is_null($fromDate)) {
            throw new InvalidArgumentException('non-nullable fromDate cannot be null');
        }
        $this->container['fromDate'] = $fromDate;

        return $this;
    }

    /**
     * Gets toDate
     *
     * @return string|null
     */
    public function getToDate(): ?string
    {
        return $this->container['toDate'];
    }

    /**
     * Sets toDate
     *
     * @param string|null $toDate The to date filter
     *
     * @return $this
     */
    public function setToDate(?string $toDate): static
    {
        if (is_null($toDate)) {
            throw new InvalidArgumentException('non-nullable toDate cannot be null');
        }
        $this->container['toDate'] = $toDate;

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


