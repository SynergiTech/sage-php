<?php
/**
 * CoaAccount
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
 * CoaAccount Class Doc Comment
 *
 * @description ### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸
 * @package  SynergiTech\Sage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class CoaAccount implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CoaAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'displayedAs' => 'string',
        'path' => 'string',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'ledgerAccountGroup' => '\SynergiTech\Sage\Model\CoaGroupType',
        'name' => 'string',
        'controlName' => 'string',
        'nominalCode' => 'int',
        'ledgerAccountType' => '\SynergiTech\Sage\Model\Base',
        'ledgerAccountClassification' => '\SynergiTech\Sage\Model\Base',
        'taxRate' => '\SynergiTech\Sage\Model\Base',
        'fixedTaxRate' => 'bool',
        'cisMaterials' => 'bool',
        'cisLabour' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'displayedAs' => null,
        'path' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'ledgerAccountGroup' => null,
        'name' => null,
        'controlName' => null,
        'nominalCode' => 'int32',
        'ledgerAccountType' => null,
        'ledgerAccountClassification' => null,
        'taxRate' => null,
        'fixedTaxRate' => null,
        'cisMaterials' => null,
        'cisLabour' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'displayedAs' => false,
        'path' => false,
        'createdAt' => false,
        'updatedAt' => false,
        'ledgerAccountGroup' => false,
        'name' => false,
        'controlName' => false,
        'nominalCode' => false,
        'ledgerAccountType' => false,
        'ledgerAccountClassification' => false,
        'taxRate' => false,
        'fixedTaxRate' => false,
        'cisMaterials' => false,
        'cisLabour' => false
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
        'displayedAs' => 'displayed_as',
        'path' => '$path',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
        'ledgerAccountGroup' => 'ledger_account_group',
        'name' => 'name',
        'controlName' => 'control_name',
        'nominalCode' => 'nominal_code',
        'ledgerAccountType' => 'ledger_account_type',
        'ledgerAccountClassification' => 'ledger_account_classification',
        'taxRate' => 'tax_rate',
        'fixedTaxRate' => 'fixed_tax_rate',
        'cisMaterials' => 'cis_materials',
        'cisLabour' => 'cis_labour'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'displayedAs' => 'setDisplayedAs',
        'path' => 'setPath',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'ledgerAccountGroup' => 'setLedgerAccountGroup',
        'name' => 'setName',
        'controlName' => 'setControlName',
        'nominalCode' => 'setNominalCode',
        'ledgerAccountType' => 'setLedgerAccountType',
        'ledgerAccountClassification' => 'setLedgerAccountClassification',
        'taxRate' => 'setTaxRate',
        'fixedTaxRate' => 'setFixedTaxRate',
        'cisMaterials' => 'setCisMaterials',
        'cisLabour' => 'setCisLabour'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'displayedAs' => 'getDisplayedAs',
        'path' => 'getPath',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'ledgerAccountGroup' => 'getLedgerAccountGroup',
        'name' => 'getName',
        'controlName' => 'getControlName',
        'nominalCode' => 'getNominalCode',
        'ledgerAccountType' => 'getLedgerAccountType',
        'ledgerAccountClassification' => 'getLedgerAccountClassification',
        'taxRate' => 'getTaxRate',
        'fixedTaxRate' => 'getFixedTaxRate',
        'cisMaterials' => 'getCisMaterials',
        'cisLabour' => 'getCisLabour'
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
        $this->setIfExists('displayedAs', $data ?? [], null);
        $this->setIfExists('path', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('updatedAt', $data ?? [], null);
        $this->setIfExists('ledgerAccountGroup', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('controlName', $data ?? [], null);
        $this->setIfExists('nominalCode', $data ?? [], null);
        $this->setIfExists('ledgerAccountType', $data ?? [], null);
        $this->setIfExists('ledgerAccountClassification', $data ?? [], null);
        $this->setIfExists('taxRate', $data ?? [], null);
        $this->setIfExists('fixedTaxRate', $data ?? [], null);
        $this->setIfExists('cisMaterials', $data ?? [], null);
        $this->setIfExists('cisLabour', $data ?? [], null);
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

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 200)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['controlName']) && (mb_strlen($this->container['controlName']) > 50)) {
            $invalidProperties[] = "invalid value for 'controlName', the character length must be smaller than or equal to 50.";
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
     * @param string|null $displayedAs The name of the resource
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
     * Gets createdAt
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime|null $createdAt The datetime when the item was created
     *
     * @return $this
     */
    public function setCreatedAt(?\DateTime $createdAt): static
    {
        if (is_null($createdAt)) {
            throw new InvalidArgumentException('non-nullable createdAt cannot be null');
        }
        $this->container['createdAt'] = $createdAt;

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
     * @param \DateTime|null $updatedAt The datetime when the item was last updated
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
     * Gets ledgerAccountGroup
     *
     * @return \SynergiTech\Sage\Model\CoaGroupType|null
     */
    public function getLedgerAccountGroup(): ?\SynergiTech\Sage\Model\CoaGroupType
    {
        return $this->container['ledgerAccountGroup'];
    }

    /**
     * Sets ledgerAccountGroup
     *
     * @param \SynergiTech\Sage\Model\CoaGroupType|null $ledgerAccountGroup ledgerAccountGroup
     *
     * @return $this
     */
    public function setLedgerAccountGroup(?\SynergiTech\Sage\Model\CoaGroupType $ledgerAccountGroup): static
    {
        if (is_null($ledgerAccountGroup)) {
            throw new InvalidArgumentException('non-nullable ledgerAccountGroup cannot be null');
        }
        $this->container['ledgerAccountGroup'] = $ledgerAccountGroup;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name for the COA account
     *
     * @return $this
     */
    public function setName(?string $name): static
    {
        if (is_null($name)) {
            throw new InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 200)) {
            throw new InvalidArgumentException('invalid length for $name when calling CoaAccount., must be smaller than or equal to 200.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets controlName
     *
     * @return string|null
     */
    public function getControlName(): ?string
    {
        return $this->container['controlName'];
    }

    /**
     * Sets controlName
     *
     * @param string|null $controlName The system control name for the COA account.  System control names are used in Accounting to identify the correct ledger account for booking taxes etc.
     *
     * @return $this
     */
    public function setControlName(?string $controlName): static
    {
        if (is_null($controlName)) {
            throw new InvalidArgumentException('non-nullable controlName cannot be null');
        }
        if ((mb_strlen($controlName) > 50)) {
            throw new InvalidArgumentException('invalid length for $controlName when calling CoaAccount., must be smaller than or equal to 50.');
        }

        $this->container['controlName'] = $controlName;

        return $this;
    }

    /**
     * Gets nominalCode
     *
     * @return int|null
     */
    public function getNominalCode(): ?int
    {
        return $this->container['nominalCode'];
    }

    /**
     * Sets nominalCode
     *
     * @param int|null $nominalCode The nominal code of the COA account
     *
     * @return $this
     */
    public function setNominalCode(?int $nominalCode): static
    {
        if (is_null($nominalCode)) {
            throw new InvalidArgumentException('non-nullable nominalCode cannot be null');
        }
        $this->container['nominalCode'] = $nominalCode;

        return $this;
    }

    /**
     * Gets ledgerAccountType
     *
     * @return \SynergiTech\Sage\Model\Base|null
     */
    public function getLedgerAccountType(): ?\SynergiTech\Sage\Model\Base
    {
        return $this->container['ledgerAccountType'];
    }

    /**
     * Sets ledgerAccountType
     *
     * @param \SynergiTech\Sage\Model\Base|null $ledgerAccountType ledgerAccountType
     *
     * @return $this
     */
    public function setLedgerAccountType(?\SynergiTech\Sage\Model\Base $ledgerAccountType): static
    {
        if (is_null($ledgerAccountType)) {
            throw new InvalidArgumentException('non-nullable ledgerAccountType cannot be null');
        }
        $this->container['ledgerAccountType'] = $ledgerAccountType;

        return $this;
    }

    /**
     * Gets ledgerAccountClassification
     *
     * @return \SynergiTech\Sage\Model\Base|null
     */
    public function getLedgerAccountClassification(): ?\SynergiTech\Sage\Model\Base
    {
        return $this->container['ledgerAccountClassification'];
    }

    /**
     * Sets ledgerAccountClassification
     *
     * @param \SynergiTech\Sage\Model\Base|null $ledgerAccountClassification ledgerAccountClassification
     *
     * @return $this
     */
    public function setLedgerAccountClassification(?\SynergiTech\Sage\Model\Base $ledgerAccountClassification): static
    {
        if (is_null($ledgerAccountClassification)) {
            throw new InvalidArgumentException('non-nullable ledgerAccountClassification cannot be null');
        }
        $this->container['ledgerAccountClassification'] = $ledgerAccountClassification;

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
     * Gets fixedTaxRate
     *
     * @return bool|null
     */
    public function getFixedTaxRate(): ?bool
    {
        return $this->container['fixedTaxRate'];
    }

    /**
     * Sets fixedTaxRate
     *
     * @param bool|null $fixedTaxRate Indicates whether the default tax rate is fixed or may be changed per transaction
     *
     * @return $this
     */
    public function setFixedTaxRate(?bool $fixedTaxRate): static
    {
        if (is_null($fixedTaxRate)) {
            throw new InvalidArgumentException('non-nullable fixedTaxRate cannot be null');
        }
        $this->container['fixedTaxRate'] = $fixedTaxRate;

        return $this;
    }

    /**
     * Gets cisMaterials
     *
     * @return bool|null
     */
    public function getCisMaterials(): ?bool
    {
        return $this->container['cisMaterials'];
    }

    /**
     * Sets cisMaterials
     *
     * @param bool|null $cisMaterials Indicates whether the COA account is flagged for CIS Materials
     *
     * @return $this
     */
    public function setCisMaterials(?bool $cisMaterials): static
    {
        if (is_null($cisMaterials)) {
            throw new InvalidArgumentException('non-nullable cisMaterials cannot be null');
        }
        $this->container['cisMaterials'] = $cisMaterials;

        return $this;
    }

    /**
     * Gets cisLabour
     *
     * @return bool|null
     */
    public function getCisLabour(): ?bool
    {
        return $this->container['cisLabour'];
    }

    /**
     * Sets cisLabour
     *
     * @param bool|null $cisLabour Indicates whether the COA account is flagged for CIS Labour
     *
     * @return $this
     */
    public function setCisLabour(?bool $cisLabour): static
    {
        if (is_null($cisLabour)) {
            throw new InvalidArgumentException('non-nullable cisLabour cannot be null');
        }
        $this->container['cisLabour'] = $cisLabour;

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


