<?php
/**
 * GBBoxData
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
 * GBBoxData Class Doc Comment
 *
 * @package  SynergiTech\Sage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class GBBoxData implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GBBoxData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'box1' => 'float',
        'box2' => 'float',
        'box3' => 'float',
        'box4' => 'float',
        'box5' => 'float',
        'box6' => 'float',
        'box7' => 'float',
        'box8' => 'float',
        'box9' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'box1' => 'double',
        'box2' => 'double',
        'box3' => 'double',
        'box4' => 'double',
        'box5' => 'double',
        'box6' => 'double',
        'box7' => 'double',
        'box8' => 'double',
        'box9' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'box1' => false,
        'box2' => false,
        'box3' => false,
        'box4' => false,
        'box5' => false,
        'box6' => false,
        'box7' => false,
        'box8' => false,
        'box9' => false
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
        'box1' => 'box_1',
        'box2' => 'box_2',
        'box3' => 'box_3',
        'box4' => 'box_4',
        'box5' => 'box_5',
        'box6' => 'box_6',
        'box7' => 'box_7',
        'box8' => 'box_8',
        'box9' => 'box_9'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'box1' => 'setBox1',
        'box2' => 'setBox2',
        'box3' => 'setBox3',
        'box4' => 'setBox4',
        'box5' => 'setBox5',
        'box6' => 'setBox6',
        'box7' => 'setBox7',
        'box8' => 'setBox8',
        'box9' => 'setBox9'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'box1' => 'getBox1',
        'box2' => 'getBox2',
        'box3' => 'getBox3',
        'box4' => 'getBox4',
        'box5' => 'getBox5',
        'box6' => 'getBox6',
        'box7' => 'getBox7',
        'box8' => 'getBox8',
        'box9' => 'getBox9'
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
        $this->setIfExists('box1', $data ?? [], null);
        $this->setIfExists('box2', $data ?? [], null);
        $this->setIfExists('box3', $data ?? [], null);
        $this->setIfExists('box4', $data ?? [], null);
        $this->setIfExists('box5', $data ?? [], null);
        $this->setIfExists('box6', $data ?? [], null);
        $this->setIfExists('box7', $data ?? [], null);
        $this->setIfExists('box8', $data ?? [], null);
        $this->setIfExists('box9', $data ?? [], null);
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
     * Gets box1
     *
     * @return float|null
     */
    public function getBox1(): ?float
    {
        return $this->container['box1'];
    }

    /**
     * Sets box1
     *
     * @param float|null $box1 The value of box 1
     *
     * @return $this
     */
    public function setBox1(?float $box1): static
    {
        if (is_null($box1)) {
            throw new InvalidArgumentException('non-nullable box1 cannot be null');
        }
        $this->container['box1'] = $box1;

        return $this;
    }

    /**
     * Gets box2
     *
     * @return float|null
     */
    public function getBox2(): ?float
    {
        return $this->container['box2'];
    }

    /**
     * Sets box2
     *
     * @param float|null $box2 The value of box 2
     *
     * @return $this
     */
    public function setBox2(?float $box2): static
    {
        if (is_null($box2)) {
            throw new InvalidArgumentException('non-nullable box2 cannot be null');
        }
        $this->container['box2'] = $box2;

        return $this;
    }

    /**
     * Gets box3
     *
     * @return float|null
     */
    public function getBox3(): ?float
    {
        return $this->container['box3'];
    }

    /**
     * Sets box3
     *
     * @param float|null $box3 The value of box 3
     *
     * @return $this
     */
    public function setBox3(?float $box3): static
    {
        if (is_null($box3)) {
            throw new InvalidArgumentException('non-nullable box3 cannot be null');
        }
        $this->container['box3'] = $box3;

        return $this;
    }

    /**
     * Gets box4
     *
     * @return float|null
     */
    public function getBox4(): ?float
    {
        return $this->container['box4'];
    }

    /**
     * Sets box4
     *
     * @param float|null $box4 The value of box 4
     *
     * @return $this
     */
    public function setBox4(?float $box4): static
    {
        if (is_null($box4)) {
            throw new InvalidArgumentException('non-nullable box4 cannot be null');
        }
        $this->container['box4'] = $box4;

        return $this;
    }

    /**
     * Gets box5
     *
     * @return float|null
     */
    public function getBox5(): ?float
    {
        return $this->container['box5'];
    }

    /**
     * Sets box5
     *
     * @param float|null $box5 The value of box 5
     *
     * @return $this
     */
    public function setBox5(?float $box5): static
    {
        if (is_null($box5)) {
            throw new InvalidArgumentException('non-nullable box5 cannot be null');
        }
        $this->container['box5'] = $box5;

        return $this;
    }

    /**
     * Gets box6
     *
     * @return float|null
     */
    public function getBox6(): ?float
    {
        return $this->container['box6'];
    }

    /**
     * Sets box6
     *
     * @param float|null $box6 The value of box 6
     *
     * @return $this
     */
    public function setBox6(?float $box6): static
    {
        if (is_null($box6)) {
            throw new InvalidArgumentException('non-nullable box6 cannot be null');
        }
        $this->container['box6'] = $box6;

        return $this;
    }

    /**
     * Gets box7
     *
     * @return float|null
     */
    public function getBox7(): ?float
    {
        return $this->container['box7'];
    }

    /**
     * Sets box7
     *
     * @param float|null $box7 The value of box 7
     *
     * @return $this
     */
    public function setBox7(?float $box7): static
    {
        if (is_null($box7)) {
            throw new InvalidArgumentException('non-nullable box7 cannot be null');
        }
        $this->container['box7'] = $box7;

        return $this;
    }

    /**
     * Gets box8
     *
     * @return float|null
     */
    public function getBox8(): ?float
    {
        return $this->container['box8'];
    }

    /**
     * Sets box8
     *
     * @param float|null $box8 The value of box 8
     *
     * @return $this
     */
    public function setBox8(?float $box8): static
    {
        if (is_null($box8)) {
            throw new InvalidArgumentException('non-nullable box8 cannot be null');
        }
        $this->container['box8'] = $box8;

        return $this;
    }

    /**
     * Gets box9
     *
     * @return float|null
     */
    public function getBox9(): ?float
    {
        return $this->container['box9'];
    }

    /**
     * Sets box9
     *
     * @param float|null $box9 The value of box 9
     *
     * @return $this
     */
    public function setBox9(?float $box9): static
    {
        if (is_null($box9)) {
            throw new InvalidArgumentException('non-nullable box9 cannot be null');
        }
        $this->container['box9'] = $box9;

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


