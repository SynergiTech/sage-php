<?php
/**
 * PostContactsContactTaxTreatment
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
 * PostContactsContactTaxTreatment Class Doc Comment
 *
 * @package  SynergiTech\Sage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class PostContactsContactTaxTreatment implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'postContacts_contact_tax_treatment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'homeTax' => 'bool',
        'euTaxRegistered' => 'bool',
        'euNotTaxRegistered' => 'bool',
        'restOfWorldTax' => 'bool',
        'isImporter' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'homeTax' => null,
        'euTaxRegistered' => null,
        'euNotTaxRegistered' => null,
        'restOfWorldTax' => null,
        'isImporter' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'homeTax' => false,
        'euTaxRegistered' => false,
        'euNotTaxRegistered' => false,
        'restOfWorldTax' => false,
        'isImporter' => false
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
        'homeTax' => 'home_tax',
        'euTaxRegistered' => 'eu_tax_registered',
        'euNotTaxRegistered' => 'eu_not_tax_registered',
        'restOfWorldTax' => 'rest_of_world_tax',
        'isImporter' => 'is_importer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'homeTax' => 'setHomeTax',
        'euTaxRegistered' => 'setEuTaxRegistered',
        'euNotTaxRegistered' => 'setEuNotTaxRegistered',
        'restOfWorldTax' => 'setRestOfWorldTax',
        'isImporter' => 'setIsImporter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'homeTax' => 'getHomeTax',
        'euTaxRegistered' => 'getEuTaxRegistered',
        'euNotTaxRegistered' => 'getEuNotTaxRegistered',
        'restOfWorldTax' => 'getRestOfWorldTax',
        'isImporter' => 'getIsImporter'
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
        $this->setIfExists('homeTax', $data ?? [], null);
        $this->setIfExists('euTaxRegistered', $data ?? [], null);
        $this->setIfExists('euNotTaxRegistered', $data ?? [], null);
        $this->setIfExists('restOfWorldTax', $data ?? [], null);
        $this->setIfExists('isImporter', $data ?? [], null);
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
     * Gets homeTax
     *
     * @return bool|null
     */
    public function getHomeTax(): ?bool
    {
        return $this->container['homeTax'];
    }

    /**
     * Sets homeTax
     *
     * @param bool|null $homeTax Indicates a contact where home country tax rules should be applied
     *
     * @return $this
     */
    public function setHomeTax(?bool $homeTax): static
    {
        if (is_null($homeTax)) {
            throw new InvalidArgumentException('non-nullable homeTax cannot be null');
        }
        $this->container['homeTax'] = $homeTax;

        return $this;
    }

    /**
     * Gets euTaxRegistered
     *
     * @return bool|null
     */
    public function getEuTaxRegistered(): ?bool
    {
        return $this->container['euTaxRegistered'];
    }

    /**
     * Sets euTaxRegistered
     *
     * @param bool|null $euTaxRegistered Indicates a contact where EC tax rules should be applied
     *
     * @return $this
     */
    public function setEuTaxRegistered(?bool $euTaxRegistered): static
    {
        if (is_null($euTaxRegistered)) {
            throw new InvalidArgumentException('non-nullable euTaxRegistered cannot be null');
        }
        $this->container['euTaxRegistered'] = $euTaxRegistered;

        return $this;
    }

    /**
     * Gets euNotTaxRegistered
     *
     * @return bool|null
     */
    public function getEuNotTaxRegistered(): ?bool
    {
        return $this->container['euNotTaxRegistered'];
    }

    /**
     * Sets euNotTaxRegistered
     *
     * @param bool|null $euNotTaxRegistered Indicates an EU contact without a tax number - home tax rules should be applied
     *
     * @return $this
     */
    public function setEuNotTaxRegistered(?bool $euNotTaxRegistered): static
    {
        if (is_null($euNotTaxRegistered)) {
            throw new InvalidArgumentException('non-nullable euNotTaxRegistered cannot be null');
        }
        $this->container['euNotTaxRegistered'] = $euNotTaxRegistered;

        return $this;
    }

    /**
     * Gets restOfWorldTax
     *
     * @return bool|null
     */
    public function getRestOfWorldTax(): ?bool
    {
        return $this->container['restOfWorldTax'];
    }

    /**
     * Sets restOfWorldTax
     *
     * @param bool|null $restOfWorldTax Indicates a contact where rest of world tax rules should be applied
     *
     * @return $this
     */
    public function setRestOfWorldTax(?bool $restOfWorldTax): static
    {
        if (is_null($restOfWorldTax)) {
            throw new InvalidArgumentException('non-nullable restOfWorldTax cannot be null');
        }
        $this->container['restOfWorldTax'] = $restOfWorldTax;

        return $this;
    }

    /**
     * Gets isImporter
     *
     * @return bool|null
     */
    public function getIsImporter(): ?bool
    {
        return $this->container['isImporter'];
    }

    /**
     * Sets isImporter
     *
     * @param bool|null $isImporter Indicates a contact where import rules should be appliedOnly used for suppliers and FR, ES, IE and UK businesses
     *
     * @return $this
     */
    public function setIsImporter(?bool $isImporter): static
    {
        if (is_null($isImporter)) {
            throw new InvalidArgumentException('non-nullable isImporter cannot be null');
        }
        $this->container['isImporter'] = $isImporter;

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


