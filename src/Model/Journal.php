<?php
/**
 * Journal
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
 * Journal Class Doc Comment
 *
 * @description ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area &#x60;Journals&#x60;: Full Access
 * @package  SynergiTech\Sage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Journal implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Journal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'legacyId' => 'int',
        'id' => 'string',
        'displayedAs' => 'string',
        'path' => 'string',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'transaction' => '\SynergiTech\Sage\Model\Base',
        'transactionType' => '\SynergiTech\Sage\Model\Base',
        'deletedAt' => '\DateTime',
        'date' => '\DateTime',
        'reference' => 'string',
        'description' => 'string',
        'total' => 'float',
        'journalCode' => '\SynergiTech\Sage\Model\JournalCode',
        'journalLines' => '\SynergiTech\Sage\Model\JournalLine[]',
        'migrated' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'legacyId' => 'int32',
        'id' => null,
        'displayedAs' => null,
        'path' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'transaction' => null,
        'transactionType' => null,
        'deletedAt' => 'date-time',
        'date' => 'date',
        'reference' => null,
        'description' => null,
        'total' => 'double',
        'journalCode' => null,
        'journalLines' => null,
        'migrated' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'legacyId' => false,
        'id' => false,
        'displayedAs' => false,
        'path' => false,
        'createdAt' => false,
        'updatedAt' => false,
        'transaction' => false,
        'transactionType' => false,
        'deletedAt' => false,
        'date' => false,
        'reference' => false,
        'description' => false,
        'total' => false,
        'journalCode' => false,
        'journalLines' => false,
        'migrated' => false
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
        'legacyId' => 'legacy_id',
        'id' => 'id',
        'displayedAs' => 'displayed_as',
        'path' => '$path',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
        'transaction' => 'transaction',
        'transactionType' => 'transaction_type',
        'deletedAt' => 'deleted_at',
        'date' => 'date',
        'reference' => 'reference',
        'description' => 'description',
        'total' => 'total',
        'journalCode' => 'journal_code',
        'journalLines' => 'journal_lines',
        'migrated' => 'migrated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'legacyId' => 'setLegacyId',
        'id' => 'setId',
        'displayedAs' => 'setDisplayedAs',
        'path' => 'setPath',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'transaction' => 'setTransaction',
        'transactionType' => 'setTransactionType',
        'deletedAt' => 'setDeletedAt',
        'date' => 'setDate',
        'reference' => 'setReference',
        'description' => 'setDescription',
        'total' => 'setTotal',
        'journalCode' => 'setJournalCode',
        'journalLines' => 'setJournalLines',
        'migrated' => 'setMigrated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'legacyId' => 'getLegacyId',
        'id' => 'getId',
        'displayedAs' => 'getDisplayedAs',
        'path' => 'getPath',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'transaction' => 'getTransaction',
        'transactionType' => 'getTransactionType',
        'deletedAt' => 'getDeletedAt',
        'date' => 'getDate',
        'reference' => 'getReference',
        'description' => 'getDescription',
        'total' => 'getTotal',
        'journalCode' => 'getJournalCode',
        'journalLines' => 'getJournalLines',
        'migrated' => 'getMigrated'
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
        $this->setIfExists('legacyId', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('displayedAs', $data ?? [], null);
        $this->setIfExists('path', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('updatedAt', $data ?? [], null);
        $this->setIfExists('transaction', $data ?? [], null);
        $this->setIfExists('transactionType', $data ?? [], null);
        $this->setIfExists('deletedAt', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('total', $data ?? [], null);
        $this->setIfExists('journalCode', $data ?? [], null);
        $this->setIfExists('journalLines', $data ?? [], null);
        $this->setIfExists('migrated', $data ?? [], null);
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

        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) > 255)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 200)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 200.";
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
     * Gets legacyId
     *
     * @return int|null
     */
    public function getLegacyId(): ?int
    {
        return $this->container['legacyId'];
    }

    /**
     * Sets legacyId
     *
     * @param int|null $legacyId The legacy ID for the item
     *
     * @return $this
     */
    public function setLegacyId(?int $legacyId): static
    {
        if (is_null($legacyId)) {
            throw new InvalidArgumentException('non-nullable legacyId cannot be null');
        }
        $this->container['legacyId'] = $legacyId;

        return $this;
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
     * Gets transaction
     *
     * @return \SynergiTech\Sage\Model\Base|null
     */
    public function getTransaction(): ?\SynergiTech\Sage\Model\Base
    {
        return $this->container['transaction'];
    }

    /**
     * Sets transaction
     *
     * @param \SynergiTech\Sage\Model\Base|null $transaction transaction
     *
     * @return $this
     */
    public function setTransaction(?\SynergiTech\Sage\Model\Base $transaction): static
    {
        if (is_null($transaction)) {
            throw new InvalidArgumentException('non-nullable transaction cannot be null');
        }
        $this->container['transaction'] = $transaction;

        return $this;
    }

    /**
     * Gets transactionType
     *
     * @return \SynergiTech\Sage\Model\Base|null
     */
    public function getTransactionType(): ?\SynergiTech\Sage\Model\Base
    {
        return $this->container['transactionType'];
    }

    /**
     * Sets transactionType
     *
     * @param \SynergiTech\Sage\Model\Base|null $transactionType transactionType
     *
     * @return $this
     */
    public function setTransactionType(?\SynergiTech\Sage\Model\Base $transactionType): static
    {
        if (is_null($transactionType)) {
            throw new InvalidArgumentException('non-nullable transactionType cannot be null');
        }
        $this->container['transactionType'] = $transactionType;

        return $this;
    }

    /**
     * Gets deletedAt
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->container['deletedAt'];
    }

    /**
     * Sets deletedAt
     *
     * @param \DateTime|null $deletedAt The datetime when the item was deleted
     *
     * @return $this
     */
    public function setDeletedAt(?\DateTime $deletedAt): static
    {
        if (is_null($deletedAt)) {
            throw new InvalidArgumentException('non-nullable deletedAt cannot be null');
        }
        $this->container['deletedAt'] = $deletedAt;

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
     * @param \DateTime|null $date The date of the journal
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
     * @param string|null $reference A reference for the journal
     *
     * @return $this
     */
    public function setReference(?string $reference): static
    {
        if (is_null($reference)) {
            throw new InvalidArgumentException('non-nullable reference cannot be null');
        }
        if ((mb_strlen($reference) > 255)) {
            throw new InvalidArgumentException('invalid length for $reference when calling Journal., must be smaller than or equal to 255.');
        }

        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description A description of the journal
     *
     * @return $this
     */
    public function setDescription(?string $description): static
    {
        if (is_null($description)) {
            throw new InvalidArgumentException('non-nullable description cannot be null');
        }
        if ((mb_strlen($description) > 200)) {
            throw new InvalidArgumentException('invalid length for $description when calling Journal., must be smaller than or equal to 200.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets total
     *
     * @return float|null
     */
    public function getTotal(): ?float
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param float|null $total The total for the journal
     *
     * @return $this
     */
    public function setTotal(?float $total): static
    {
        if (is_null($total)) {
            throw new InvalidArgumentException('non-nullable total cannot be null');
        }
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets journalCode
     *
     * @return \SynergiTech\Sage\Model\JournalCode|null
     */
    public function getJournalCode(): ?\SynergiTech\Sage\Model\JournalCode
    {
        return $this->container['journalCode'];
    }

    /**
     * Sets journalCode
     *
     * @param \SynergiTech\Sage\Model\JournalCode|null $journalCode journalCode
     *
     * @return $this
     */
    public function setJournalCode(?\SynergiTech\Sage\Model\JournalCode $journalCode): static
    {
        if (is_null($journalCode)) {
            throw new InvalidArgumentException('non-nullable journalCode cannot be null');
        }
        $this->container['journalCode'] = $journalCode;

        return $this;
    }

    /**
     * Gets journalLines
     *
     * @return \SynergiTech\Sage\Model\JournalLine[]|null
     */
    public function getJournalLines(): ?array
    {
        return $this->container['journalLines'];
    }

    /**
     * Sets journalLines
     *
     * @param \SynergiTech\Sage\Model\JournalLine[]|null $journalLines The journal lines
     *
     * @return $this
     */
    public function setJournalLines(?array $journalLines): static
    {
        if (is_null($journalLines)) {
            throw new InvalidArgumentException('non-nullable journalLines cannot be null');
        }
        $this->container['journalLines'] = $journalLines;

        return $this;
    }

    /**
     * Gets migrated
     *
     * @return bool|null
     */
    public function getMigrated(): ?bool
    {
        return $this->container['migrated'];
    }

    /**
     * Sets migrated
     *
     * @param bool|null $migrated Indicates if the journal was migrated from another system.
     *
     * @return $this
     */
    public function setMigrated(?bool $migrated): static
    {
        if (is_null($migrated)) {
            throw new InvalidArgumentException('non-nullable migrated cannot be null');
        }
        $this->container['migrated'] = $migrated;

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


