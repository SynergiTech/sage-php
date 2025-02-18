<?php
/**
 * PutTaxProfilesTaxProfile
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
 * PutTaxProfilesTaxProfile Class Doc Comment
 *
 * @package  SynergiTech\Sage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class PutTaxProfilesTaxProfile implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'putTaxProfiles_tax_profile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'taxTypeId' => 'string',
        'taxNumber' => 'string',
        'taxNumberSuffix' => 'string',
        'collectTax' => 'bool',
        'taxReturnFrequencyId' => 'string',
        'addressRegion' => '\SynergiTech\Sage\Model\PutTaxProfilesTaxProfileAddressRegion'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'taxTypeId' => null,
        'taxNumber' => null,
        'taxNumberSuffix' => null,
        'collectTax' => null,
        'taxReturnFrequencyId' => null,
        'addressRegion' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'taxTypeId' => false,
        'taxNumber' => false,
        'taxNumberSuffix' => false,
        'collectTax' => false,
        'taxReturnFrequencyId' => false,
        'addressRegion' => false
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
        'taxTypeId' => 'tax_type_id',
        'taxNumber' => 'tax_number',
        'taxNumberSuffix' => 'tax_number_suffix',
        'collectTax' => 'collect_tax',
        'taxReturnFrequencyId' => 'tax_return_frequency_id',
        'addressRegion' => 'address_region'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'taxTypeId' => 'setTaxTypeId',
        'taxNumber' => 'setTaxNumber',
        'taxNumberSuffix' => 'setTaxNumberSuffix',
        'collectTax' => 'setCollectTax',
        'taxReturnFrequencyId' => 'setTaxReturnFrequencyId',
        'addressRegion' => 'setAddressRegion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'taxTypeId' => 'getTaxTypeId',
        'taxNumber' => 'getTaxNumber',
        'taxNumberSuffix' => 'getTaxNumberSuffix',
        'collectTax' => 'getCollectTax',
        'taxReturnFrequencyId' => 'getTaxReturnFrequencyId',
        'addressRegion' => 'getAddressRegion'
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
        $this->setIfExists('taxTypeId', $data ?? [], null);
        $this->setIfExists('taxNumber', $data ?? [], null);
        $this->setIfExists('taxNumberSuffix', $data ?? [], null);
        $this->setIfExists('collectTax', $data ?? [], null);
        $this->setIfExists('taxReturnFrequencyId', $data ?? [], null);
        $this->setIfExists('addressRegion', $data ?? [], null);
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
     * Gets taxTypeId
     *
     * @return string|null
     */
    public function getTaxTypeId(): ?string
    {
        return $this->container['taxTypeId'];
    }

    /**
     * Sets taxTypeId
     *
     * @param string|null $taxTypeId The ID of the Tax Type.
     *
     * @return $this
     */
    public function setTaxTypeId(?string $taxTypeId): static
    {
        if (is_null($taxTypeId)) {
            throw new InvalidArgumentException('non-nullable taxTypeId cannot be null');
        }
        $this->container['taxTypeId'] = $taxTypeId;

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
     * Gets taxNumberSuffix
     *
     * @return string|null
     */
    public function getTaxNumberSuffix(): ?string
    {
        return $this->container['taxNumberSuffix'];
    }

    /**
     * Sets taxNumberSuffix
     *
     * @param string|null $taxNumberSuffix The tax number suffix
     *
     * @return $this
     */
    public function setTaxNumberSuffix(?string $taxNumberSuffix): static
    {
        if (is_null($taxNumberSuffix)) {
            throw new InvalidArgumentException('non-nullable taxNumberSuffix cannot be null');
        }
        $this->container['taxNumberSuffix'] = $taxNumberSuffix;

        return $this;
    }

    /**
     * Gets collectTax
     *
     * @return bool|null
     */
    public function getCollectTax(): ?bool
    {
        return $this->container['collectTax'];
    }

    /**
     * Sets collectTax
     *
     * @param bool|null $collectTax Indicates whether tax is collected for this tax type
     *
     * @return $this
     */
    public function setCollectTax(?bool $collectTax): static
    {
        if (is_null($collectTax)) {
            throw new InvalidArgumentException('non-nullable collectTax cannot be null');
        }
        $this->container['collectTax'] = $collectTax;

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
     * Gets addressRegion
     *
     * @return \SynergiTech\Sage\Model\PutTaxProfilesTaxProfileAddressRegion|null
     */
    public function getAddressRegion(): ?\SynergiTech\Sage\Model\PutTaxProfilesTaxProfileAddressRegion
    {
        return $this->container['addressRegion'];
    }

    /**
     * Sets addressRegion
     *
     * @param \SynergiTech\Sage\Model\PutTaxProfilesTaxProfileAddressRegion|null $addressRegion addressRegion
     *
     * @return $this
     */
    public function setAddressRegion(?\SynergiTech\Sage\Model\PutTaxProfilesTaxProfileAddressRegion $addressRegion): static
    {
        if (is_null($addressRegion)) {
            throw new InvalidArgumentException('non-nullable addressRegion cannot be null');
        }
        $this->container['addressRegion'] = $addressRegion;

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


