<?php
/**
 * LiveExchangeRate
 *
 * PHP version 8.1
 *
 * @package  SynergiTech\Sage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Sage One - Accounts - v3 UKI
 *
 * Documentation of the Sage Business Cloud Accounting API.
 *
 * The version of the OpenAPI document: 1.0
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
 * LiveExchangeRate Class Doc Comment
 *
 * @description ### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸
 * @package  SynergiTech\Sage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class LiveExchangeRate implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'LiveExchangeRate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'displayedAs' => 'string',
        'path' => 'string',
        'rate' => 'float',
        'inverseRate' => 'float',
        'baseCurrency' => '\SynergiTech\Sage\Model\Base',
        'currency' => '\SynergiTech\Sage\Model\Base',
        'retrievedAt' => '\DateTime',
        'updatedAt' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'displayedAs' => null,
        'path' => null,
        'rate' => 'double',
        'inverseRate' => 'double',
        'baseCurrency' => null,
        'currency' => null,
        'retrievedAt' => 'date-time',
        'updatedAt' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'displayedAs' => false,
        'path' => false,
        'rate' => false,
        'inverseRate' => false,
        'baseCurrency' => false,
        'currency' => false,
        'retrievedAt' => false,
        'updatedAt' => false
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
        'displayedAs' => 'displayed_as',
        'path' => '$path',
        'rate' => 'rate',
        'inverseRate' => 'inverse_rate',
        'baseCurrency' => 'base_currency',
        'currency' => 'currency',
        'retrievedAt' => 'retrieved_at',
        'updatedAt' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'displayedAs' => 'setDisplayedAs',
        'path' => 'setPath',
        'rate' => 'setRate',
        'inverseRate' => 'setInverseRate',
        'baseCurrency' => 'setBaseCurrency',
        'currency' => 'setCurrency',
        'retrievedAt' => 'setRetrievedAt',
        'updatedAt' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'displayedAs' => 'getDisplayedAs',
        'path' => 'getPath',
        'rate' => 'getRate',
        'inverseRate' => 'getInverseRate',
        'baseCurrency' => 'getBaseCurrency',
        'currency' => 'getCurrency',
        'retrievedAt' => 'getRetrievedAt',
        'updatedAt' => 'getUpdatedAt'
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
        $this->setIfExists('displayedAs', $data ?? [], null);
        $this->setIfExists('path', $data ?? [], null);
        $this->setIfExists('rate', $data ?? [], null);
        $this->setIfExists('inverseRate', $data ?? [], null);
        $this->setIfExists('baseCurrency', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('retrievedAt', $data ?? [], null);
        $this->setIfExists('updatedAt', $data ?? [], null);
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
     * Gets displayedAs
     *
     * @return string|null
     */
    public function getDisplayedAs(): ?string
    {
        return $this->container['displayedAs'];
    }

    /**
     * Sets displayedAs
     *
     * @param string|null $displayedAs Display text for the item
     *
     * @return $this
     */
    public function setDisplayedAs(?string $displayedAs): static
    {
        if (is_null($displayedAs)) {
            throw new InvalidArgumentException('non-nullable displayedAs cannot be null');
        }
        $this->container['displayedAs'] = $displayedAs;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string|null
     */
    public function getPath(): ?string
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string|null $path The API path for the resource
     *
     * @return $this
     */
    public function setPath(?string $path): static
    {
        if (is_null($path)) {
            throw new InvalidArgumentException('non-nullable path cannot be null');
        }
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return float|null
     */
    public function getRate(): ?float
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param float|null $rate The exchange rate
     *
     * @return $this
     */
    public function setRate(?float $rate): static
    {
        if (is_null($rate)) {
            throw new InvalidArgumentException('non-nullable rate cannot be null');
        }
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets inverseRate
     *
     * @return float|null
     */
    public function getInverseRate(): ?float
    {
        return $this->container['inverseRate'];
    }

    /**
     * Sets inverseRate
     *
     * @param float|null $inverseRate The inverse exchange rate
     *
     * @return $this
     */
    public function setInverseRate(?float $inverseRate): static
    {
        if (is_null($inverseRate)) {
            throw new InvalidArgumentException('non-nullable inverseRate cannot be null');
        }
        $this->container['inverseRate'] = $inverseRate;

        return $this;
    }

    /**
     * Gets baseCurrency
     *
     * @return \SynergiTech\Sage\Model\Base|null
     */
    public function getBaseCurrency(): ?\SynergiTech\Sage\Model\Base
    {
        return $this->container['baseCurrency'];
    }

    /**
     * Sets baseCurrency
     *
     * @param \SynergiTech\Sage\Model\Base|null $baseCurrency baseCurrency
     *
     * @return $this
     */
    public function setBaseCurrency(?\SynergiTech\Sage\Model\Base $baseCurrency): static
    {
        if (is_null($baseCurrency)) {
            throw new InvalidArgumentException('non-nullable baseCurrency cannot be null');
        }
        $this->container['baseCurrency'] = $baseCurrency;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \SynergiTech\Sage\Model\Base|null
     */
    public function getCurrency(): ?\SynergiTech\Sage\Model\Base
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \SynergiTech\Sage\Model\Base|null $currency currency
     *
     * @return $this
     */
    public function setCurrency(?\SynergiTech\Sage\Model\Base $currency): static
    {
        if (is_null($currency)) {
            throw new InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets retrievedAt
     *
     * @return \DateTime|null
     */
    public function getRetrievedAt(): ?\DateTime
    {
        return $this->container['retrievedAt'];
    }

    /**
     * Sets retrievedAt
     *
     * @param \DateTime|null $retrievedAt retrievedAt
     *
     * @return $this
     */
    public function setRetrievedAt(?\DateTime $retrievedAt): static
    {
        if (is_null($retrievedAt)) {
            throw new InvalidArgumentException('non-nullable retrievedAt cannot be null');
        }
        $this->container['retrievedAt'] = $retrievedAt;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime|null $updatedAt updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt(?\DateTime $updatedAt): static
    {
        if (is_null($updatedAt)) {
            throw new InvalidArgumentException('non-nullable updatedAt cannot be null');
        }
        $this->container['updatedAt'] = $updatedAt;

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


