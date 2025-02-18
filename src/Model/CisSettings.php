<?php
/**
 * CisSettings
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
 * CisSettings Class Doc Comment
 *
 * @description ### Endpoint Availability  * Accounting Plus:  🇬🇧,  * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start:  🇬🇧,   ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: &#x60;Settings&#x60;: Full Access
 * @package  SynergiTech\Sage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class CisSettings implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CisSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'path' => 'string',
        'uniqueTaxReference' => 'string',
        'contractor' => 'bool',
        'subcontractor' => 'bool',
        'accountsOfficeReference' => 'string',
        'payeReference' => 'string',
        'taxRate' => '\SynergiTech\Sage\Model\Base'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'path' => null,
        'uniqueTaxReference' => null,
        'contractor' => null,
        'subcontractor' => null,
        'accountsOfficeReference' => null,
        'payeReference' => null,
        'taxRate' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'path' => false,
        'uniqueTaxReference' => false,
        'contractor' => false,
        'subcontractor' => false,
        'accountsOfficeReference' => false,
        'payeReference' => false,
        'taxRate' => false
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
        'path' => '$path',
        'uniqueTaxReference' => 'unique_tax_reference',
        'contractor' => 'contractor',
        'subcontractor' => 'subcontractor',
        'accountsOfficeReference' => 'accounts_office_reference',
        'payeReference' => 'paye_reference',
        'taxRate' => 'tax_rate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'path' => 'setPath',
        'uniqueTaxReference' => 'setUniqueTaxReference',
        'contractor' => 'setContractor',
        'subcontractor' => 'setSubcontractor',
        'accountsOfficeReference' => 'setAccountsOfficeReference',
        'payeReference' => 'setPayeReference',
        'taxRate' => 'setTaxRate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'path' => 'getPath',
        'uniqueTaxReference' => 'getUniqueTaxReference',
        'contractor' => 'getContractor',
        'subcontractor' => 'getSubcontractor',
        'accountsOfficeReference' => 'getAccountsOfficeReference',
        'payeReference' => 'getPayeReference',
        'taxRate' => 'getTaxRate'
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
        $this->setIfExists('path', $data ?? [], null);
        $this->setIfExists('uniqueTaxReference', $data ?? [], null);
        $this->setIfExists('contractor', $data ?? [], null);
        $this->setIfExists('subcontractor', $data ?? [], null);
        $this->setIfExists('accountsOfficeReference', $data ?? [], null);
        $this->setIfExists('payeReference', $data ?? [], null);
        $this->setIfExists('taxRate', $data ?? [], null);
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

        if (!is_null($this->container['uniqueTaxReference']) && (mb_strlen($this->container['uniqueTaxReference']) > 10)) {
            $invalidProperties[] = "invalid value for 'uniqueTaxReference', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['accountsOfficeReference']) && (mb_strlen($this->container['accountsOfficeReference']) > 13)) {
            $invalidProperties[] = "invalid value for 'accountsOfficeReference', the character length must be smaller than or equal to 13.";
        }

        if (!is_null($this->container['payeReference']) && (mb_strlen($this->container['payeReference']) > 14)) {
            $invalidProperties[] = "invalid value for 'payeReference', the character length must be smaller than or equal to 14.";
        }

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
     * @param string|null $path The path for the resource
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
     * Gets uniqueTaxReference
     *
     * @return string|null
     */
    public function getUniqueTaxReference(): ?string
    {
        return $this->container['uniqueTaxReference'];
    }

    /**
     * Sets uniqueTaxReference
     *
     * @param string|null $uniqueTaxReference Unique Tax Reference, format should match ########## (10 digits) e.g. 1234567890
     *
     * @return $this
     */
    public function setUniqueTaxReference(?string $uniqueTaxReference): static
    {
        if (is_null($uniqueTaxReference)) {
            throw new InvalidArgumentException('non-nullable uniqueTaxReference cannot be null');
        }
        if ((mb_strlen($uniqueTaxReference) > 10)) {
            throw new InvalidArgumentException('invalid length for $uniqueTaxReference when calling CisSettings., must be smaller than or equal to 10.');
        }

        $this->container['uniqueTaxReference'] = $uniqueTaxReference;

        return $this;
    }

    /**
     * Gets contractor
     *
     * @return bool|null
     */
    public function getContractor(): ?bool
    {
        return $this->container['contractor'];
    }

    /**
     * Sets contractor
     *
     * @param bool|null $contractor Contractor status
     *
     * @return $this
     */
    public function setContractor(?bool $contractor): static
    {
        if (is_null($contractor)) {
            throw new InvalidArgumentException('non-nullable contractor cannot be null');
        }
        $this->container['contractor'] = $contractor;

        return $this;
    }

    /**
     * Gets subcontractor
     *
     * @return bool|null
     */
    public function getSubcontractor(): ?bool
    {
        return $this->container['subcontractor'];
    }

    /**
     * Sets subcontractor
     *
     * @param bool|null $subcontractor Subcontractor status
     *
     * @return $this
     */
    public function setSubcontractor(?bool $subcontractor): static
    {
        if (is_null($subcontractor)) {
            throw new InvalidArgumentException('non-nullable subcontractor cannot be null');
        }
        $this->container['subcontractor'] = $subcontractor;

        return $this;
    }

    /**
     * Gets accountsOfficeReference
     *
     * @return string|null
     */
    public function getAccountsOfficeReference(): ?string
    {
        return $this->container['accountsOfficeReference'];
    }

    /**
     * Sets accountsOfficeReference
     *
     * @param string|null $accountsOfficeReference Accounts Office Reference, format should match ###PX???????? e.g. 123PA1234567A or 123PA12345678
     *
     * @return $this
     */
    public function setAccountsOfficeReference(?string $accountsOfficeReference): static
    {
        if (is_null($accountsOfficeReference)) {
            throw new InvalidArgumentException('non-nullable accountsOfficeReference cannot be null');
        }
        if ((mb_strlen($accountsOfficeReference) > 13)) {
            throw new InvalidArgumentException('invalid length for $accountsOfficeReference when calling CisSettings., must be smaller than or equal to 13.');
        }

        $this->container['accountsOfficeReference'] = $accountsOfficeReference;

        return $this;
    }

    /**
     * Gets payeReference
     *
     * @return string|null
     */
    public function getPayeReference(): ?string
    {
        return $this->container['payeReference'];
    }

    /**
     * Sets payeReference
     *
     * @param string|null $payeReference PAYE Reference, format should match ###/X?##### e.g. 123/A45678 or 123/AB45678
     *
     * @return $this
     */
    public function setPayeReference(?string $payeReference): static
    {
        if (is_null($payeReference)) {
            throw new InvalidArgumentException('non-nullable payeReference cannot be null');
        }
        if ((mb_strlen($payeReference) > 14)) {
            throw new InvalidArgumentException('invalid length for $payeReference when calling CisSettings., must be smaller than or equal to 14.');
        }

        $this->container['payeReference'] = $payeReference;

        return $this;
    }

    /**
     * Gets taxRate
     *
     * @return \SynergiTech\Sage\Model\Base|null
     */
    public function getTaxRate(): ?\SynergiTech\Sage\Model\Base
    {
        return $this->container['taxRate'];
    }

    /**
     * Sets taxRate
     *
     * @param \SynergiTech\Sage\Model\Base|null $taxRate taxRate
     *
     * @return $this
     */
    public function setTaxRate(?\SynergiTech\Sage\Model\Base $taxRate): static
    {
        if (is_null($taxRate)) {
            throw new InvalidArgumentException('non-nullable taxRate cannot be null');
        }
        $this->container['taxRate'] = $taxRate;

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


