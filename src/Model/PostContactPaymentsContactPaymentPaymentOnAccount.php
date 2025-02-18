<?php
/**
 * PostContactPaymentsContactPaymentPaymentOnAccount
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
 * PostContactPaymentsContactPaymentPaymentOnAccount Class Doc Comment
 *
 * @package  SynergiTech\Sage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class PostContactPaymentsContactPaymentPaymentOnAccount implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'postContactPayments_contact_payment_payment_on_account';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'contactName' => 'string',
        'contactReference' => 'string',
        'contactId' => 'string',
        'date' => '\DateTime',
        'reference' => 'string',
        'netAmount' => 'float',
        'taxAmount' => 'float',
        'totalAmount' => 'float',
        'outstandingAmount' => 'float',
        'currencyId' => 'string',
        'exchangeRate' => 'float',
        'baseCurrencyNetAmount' => 'float',
        'baseCurrencyTaxAmount' => 'float',
        'baseCurrencyTotalAmount' => 'float',
        'baseCurrencyOutstandingAmount' => 'float',
        'statusId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'contactName' => null,
        'contactReference' => null,
        'contactId' => null,
        'date' => 'date',
        'reference' => null,
        'netAmount' => 'double',
        'taxAmount' => 'double',
        'totalAmount' => 'double',
        'outstandingAmount' => 'double',
        'currencyId' => null,
        'exchangeRate' => 'double',
        'baseCurrencyNetAmount' => 'double',
        'baseCurrencyTaxAmount' => 'double',
        'baseCurrencyTotalAmount' => 'double',
        'baseCurrencyOutstandingAmount' => 'double',
        'statusId' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'contactName' => false,
        'contactReference' => false,
        'contactId' => false,
        'date' => false,
        'reference' => false,
        'netAmount' => false,
        'taxAmount' => false,
        'totalAmount' => false,
        'outstandingAmount' => false,
        'currencyId' => false,
        'exchangeRate' => false,
        'baseCurrencyNetAmount' => false,
        'baseCurrencyTaxAmount' => false,
        'baseCurrencyTotalAmount' => false,
        'baseCurrencyOutstandingAmount' => false,
        'statusId' => false
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
        'contactName' => 'contact_name',
        'contactReference' => 'contact_reference',
        'contactId' => 'contact_id',
        'date' => 'date',
        'reference' => 'reference',
        'netAmount' => 'net_amount',
        'taxAmount' => 'tax_amount',
        'totalAmount' => 'total_amount',
        'outstandingAmount' => 'outstanding_amount',
        'currencyId' => 'currency_id',
        'exchangeRate' => 'exchange_rate',
        'baseCurrencyNetAmount' => 'base_currency_net_amount',
        'baseCurrencyTaxAmount' => 'base_currency_tax_amount',
        'baseCurrencyTotalAmount' => 'base_currency_total_amount',
        'baseCurrencyOutstandingAmount' => 'base_currency_outstanding_amount',
        'statusId' => 'status_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'contactName' => 'setContactName',
        'contactReference' => 'setContactReference',
        'contactId' => 'setContactId',
        'date' => 'setDate',
        'reference' => 'setReference',
        'netAmount' => 'setNetAmount',
        'taxAmount' => 'setTaxAmount',
        'totalAmount' => 'setTotalAmount',
        'outstandingAmount' => 'setOutstandingAmount',
        'currencyId' => 'setCurrencyId',
        'exchangeRate' => 'setExchangeRate',
        'baseCurrencyNetAmount' => 'setBaseCurrencyNetAmount',
        'baseCurrencyTaxAmount' => 'setBaseCurrencyTaxAmount',
        'baseCurrencyTotalAmount' => 'setBaseCurrencyTotalAmount',
        'baseCurrencyOutstandingAmount' => 'setBaseCurrencyOutstandingAmount',
        'statusId' => 'setStatusId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'contactName' => 'getContactName',
        'contactReference' => 'getContactReference',
        'contactId' => 'getContactId',
        'date' => 'getDate',
        'reference' => 'getReference',
        'netAmount' => 'getNetAmount',
        'taxAmount' => 'getTaxAmount',
        'totalAmount' => 'getTotalAmount',
        'outstandingAmount' => 'getOutstandingAmount',
        'currencyId' => 'getCurrencyId',
        'exchangeRate' => 'getExchangeRate',
        'baseCurrencyNetAmount' => 'getBaseCurrencyNetAmount',
        'baseCurrencyTaxAmount' => 'getBaseCurrencyTaxAmount',
        'baseCurrencyTotalAmount' => 'getBaseCurrencyTotalAmount',
        'baseCurrencyOutstandingAmount' => 'getBaseCurrencyOutstandingAmount',
        'statusId' => 'getStatusId'
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
        $this->setIfExists('contactName', $data ?? [], null);
        $this->setIfExists('contactReference', $data ?? [], null);
        $this->setIfExists('contactId', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('netAmount', $data ?? [], null);
        $this->setIfExists('taxAmount', $data ?? [], null);
        $this->setIfExists('totalAmount', $data ?? [], null);
        $this->setIfExists('outstandingAmount', $data ?? [], null);
        $this->setIfExists('currencyId', $data ?? [], null);
        $this->setIfExists('exchangeRate', $data ?? [], null);
        $this->setIfExists('baseCurrencyNetAmount', $data ?? [], null);
        $this->setIfExists('baseCurrencyTaxAmount', $data ?? [], null);
        $this->setIfExists('baseCurrencyTotalAmount', $data ?? [], null);
        $this->setIfExists('baseCurrencyOutstandingAmount', $data ?? [], null);
        $this->setIfExists('statusId', $data ?? [], null);
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
     * @param string|null $contactName The name of the contact when the payment on account was created
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
     * @param string|null $contactReference The reference of the contact when the payment on account was created
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
     * @param string|null $contactId The ID of the Contact.
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
     * @param \DateTime|null $date The date of the payment on account
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
     * @param string|null $reference The reference for the payment on account
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
     * @param float|null $netAmount The net amount of the payment on account
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
     * @param float|null $taxAmount The tax amount of the payment on account
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
     * @param float|null $totalAmount The total amount of the payment on account
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
     * Gets outstandingAmount
     *
     * @return float|null
     */
    public function getOutstandingAmount(): ?float
    {
        return $this->container['outstandingAmount'];
    }

    /**
     * Sets outstandingAmount
     *
     * @param float|null $outstandingAmount The outstanding amount of the payment on account
     *
     * @return $this
     */
    public function setOutstandingAmount(?float $outstandingAmount): static
    {
        if (is_null($outstandingAmount)) {
            throw new InvalidArgumentException('non-nullable outstandingAmount cannot be null');
        }
        $this->container['outstandingAmount'] = $outstandingAmount;

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
     * @param float|null $exchangeRate The exchange rate for the payment on account
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
     * @param float|null $baseCurrencyNetAmount The net amount of the payment on account in base currency
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
     * @param float|null $baseCurrencyTaxAmount The tax amount of the payment on account in base currency
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
     * @param float|null $baseCurrencyTotalAmount The total amount of the payment on account in base currency
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
     * Gets baseCurrencyOutstandingAmount
     *
     * @return float|null
     */
    public function getBaseCurrencyOutstandingAmount(): ?float
    {
        return $this->container['baseCurrencyOutstandingAmount'];
    }

    /**
     * Sets baseCurrencyOutstandingAmount
     *
     * @param float|null $baseCurrencyOutstandingAmount The outstanding amount of the payment on account in base currency
     *
     * @return $this
     */
    public function setBaseCurrencyOutstandingAmount(?float $baseCurrencyOutstandingAmount): static
    {
        if (is_null($baseCurrencyOutstandingAmount)) {
            throw new InvalidArgumentException('non-nullable baseCurrencyOutstandingAmount cannot be null');
        }
        $this->container['baseCurrencyOutstandingAmount'] = $baseCurrencyOutstandingAmount;

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


