<?php
/**
 * LedgerEntry
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
 * LedgerEntry Class Doc Comment
 *
 * @description ### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area &#x60;Journals&#x60;: Read Only, Full Access
 * @package  SynergiTech\Sage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class LedgerEntry implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'LedgerEntry';

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
        'date' => '\DateTime',
        'credit' => 'float',
        'debit' => 'float',
        'ledgerAccount' => '\SynergiTech\Sage\Model\LedgerAccount',
        'transaction' => '\SynergiTech\Sage\Model\Transaction',
        'contact' => '\SynergiTech\Sage\Model\Contact',
        'deleted' => 'bool',
        'taxRate' => '\SynergiTech\Sage\Model\TaxRate',
        'description' => 'string',
        'journalCode' => '\SynergiTech\Sage\Model\JournalCode'
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
        'date' => 'date',
        'credit' => 'double',
        'debit' => 'double',
        'ledgerAccount' => null,
        'transaction' => null,
        'contact' => null,
        'deleted' => null,
        'taxRate' => null,
        'description' => null,
        'journalCode' => null
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
        'date' => false,
        'credit' => false,
        'debit' => false,
        'ledgerAccount' => false,
        'transaction' => false,
        'contact' => false,
        'deleted' => false,
        'taxRate' => false,
        'description' => false,
        'journalCode' => false
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
        'date' => 'date',
        'credit' => 'credit',
        'debit' => 'debit',
        'ledgerAccount' => 'ledger_account',
        'transaction' => 'transaction',
        'contact' => 'contact',
        'deleted' => 'deleted',
        'taxRate' => 'tax_rate',
        'description' => 'description',
        'journalCode' => 'journal_code'
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
        'date' => 'setDate',
        'credit' => 'setCredit',
        'debit' => 'setDebit',
        'ledgerAccount' => 'setLedgerAccount',
        'transaction' => 'setTransaction',
        'contact' => 'setContact',
        'deleted' => 'setDeleted',
        'taxRate' => 'setTaxRate',
        'description' => 'setDescription',
        'journalCode' => 'setJournalCode'
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
        'date' => 'getDate',
        'credit' => 'getCredit',
        'debit' => 'getDebit',
        'ledgerAccount' => 'getLedgerAccount',
        'transaction' => 'getTransaction',
        'contact' => 'getContact',
        'deleted' => 'getDeleted',
        'taxRate' => 'getTaxRate',
        'description' => 'getDescription',
        'journalCode' => 'getJournalCode'
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
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('credit', $data ?? [], null);
        $this->setIfExists('debit', $data ?? [], null);
        $this->setIfExists('ledgerAccount', $data ?? [], null);
        $this->setIfExists('transaction', $data ?? [], null);
        $this->setIfExists('contact', $data ?? [], null);
        $this->setIfExists('deleted', $data ?? [], null);
        $this->setIfExists('taxRate', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('journalCode', $data ?? [], null);
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
     * @param \DateTime|null $date The date of the ledger entry
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
     * @param float|null $credit The credit amount of the ledger entry
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
     * @param float|null $debit The debit amount of the ledger entry
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
     * Gets transaction
     *
     * @return \SynergiTech\Sage\Model\Transaction|null
     */
    public function getTransaction(): ?\SynergiTech\Sage\Model\Transaction
    {
        return $this->container['transaction'];
    }

    /**
     * Sets transaction
     *
     * @param \SynergiTech\Sage\Model\Transaction|null $transaction transaction
     *
     * @return $this
     */
    public function setTransaction(?\SynergiTech\Sage\Model\Transaction $transaction): static
    {
        if (is_null($transaction)) {
            throw new InvalidArgumentException('non-nullable transaction cannot be null');
        }
        $this->container['transaction'] = $transaction;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return \SynergiTech\Sage\Model\Contact|null
     */
    public function getContact(): ?\SynergiTech\Sage\Model\Contact
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \SynergiTech\Sage\Model\Contact|null $contact contact
     *
     * @return $this
     */
    public function setContact(?\SynergiTech\Sage\Model\Contact $contact): static
    {
        if (is_null($contact)) {
            throw new InvalidArgumentException('non-nullable contact cannot be null');
        }
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool|null
     */
    public function getDeleted(): ?bool
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool|null $deleted Indicates whether the ledger entry has been deleted or not
     *
     * @return $this
     */
    public function setDeleted(?bool $deleted): static
    {
        if (is_null($deleted)) {
            throw new InvalidArgumentException('non-nullable deleted cannot be null');
        }
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets taxRate
     *
     * @return \SynergiTech\Sage\Model\TaxRate|null
     */
    public function getTaxRate(): ?\SynergiTech\Sage\Model\TaxRate
    {
        return $this->container['taxRate'];
    }

    /**
     * Sets taxRate
     *
     * @param \SynergiTech\Sage\Model\TaxRate|null $taxRate taxRate
     *
     * @return $this
     */
    public function setTaxRate(?\SynergiTech\Sage\Model\TaxRate $taxRate): static
    {
        if (is_null($taxRate)) {
            throw new InvalidArgumentException('non-nullable taxRate cannot be null');
        }
        $this->container['taxRate'] = $taxRate;

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
     * @param string|null $description The ledger entry description
     *
     * @return $this
     */
    public function setDescription(?string $description): static
    {
        if (is_null($description)) {
            throw new InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

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


