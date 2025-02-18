<?php
/**
 * BankReconciliation
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
 * BankReconciliation Class Doc Comment
 *
 * @description ### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area &#x60;Bank&#x60;: Full Access
 * @package  SynergiTech\Sage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class BankReconciliation implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'BankReconciliation';

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
        'bankAccount' => '\SynergiTech\Sage\Model\Base',
        'statementDate' => '\DateTime',
        'statementEndBalance' => 'float',
        'reference' => 'string',
        'totalReceived' => 'float',
        'totalPaid' => 'float',
        'startingBalance' => 'float',
        'closingBalance' => 'float',
        'reconciledBalance' => 'float',
        'balanceDifference' => 'float',
        'status' => '\SynergiTech\Sage\Model\BankReconciliationStatus'
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
        'bankAccount' => null,
        'statementDate' => 'date',
        'statementEndBalance' => 'double',
        'reference' => null,
        'totalReceived' => 'double',
        'totalPaid' => 'double',
        'startingBalance' => 'double',
        'closingBalance' => 'double',
        'reconciledBalance' => 'double',
        'balanceDifference' => 'double',
        'status' => null
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
        'bankAccount' => false,
        'statementDate' => false,
        'statementEndBalance' => false,
        'reference' => false,
        'totalReceived' => false,
        'totalPaid' => false,
        'startingBalance' => false,
        'closingBalance' => false,
        'reconciledBalance' => false,
        'balanceDifference' => false,
        'status' => false
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
        'bankAccount' => 'bank_account',
        'statementDate' => 'statement_date',
        'statementEndBalance' => 'statement_end_balance',
        'reference' => 'reference',
        'totalReceived' => 'total_received',
        'totalPaid' => 'total_paid',
        'startingBalance' => 'starting_balance',
        'closingBalance' => 'closing_balance',
        'reconciledBalance' => 'reconciled_balance',
        'balanceDifference' => 'balance_difference',
        'status' => 'status'
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
        'bankAccount' => 'setBankAccount',
        'statementDate' => 'setStatementDate',
        'statementEndBalance' => 'setStatementEndBalance',
        'reference' => 'setReference',
        'totalReceived' => 'setTotalReceived',
        'totalPaid' => 'setTotalPaid',
        'startingBalance' => 'setStartingBalance',
        'closingBalance' => 'setClosingBalance',
        'reconciledBalance' => 'setReconciledBalance',
        'balanceDifference' => 'setBalanceDifference',
        'status' => 'setStatus'
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
        'bankAccount' => 'getBankAccount',
        'statementDate' => 'getStatementDate',
        'statementEndBalance' => 'getStatementEndBalance',
        'reference' => 'getReference',
        'totalReceived' => 'getTotalReceived',
        'totalPaid' => 'getTotalPaid',
        'startingBalance' => 'getStartingBalance',
        'closingBalance' => 'getClosingBalance',
        'reconciledBalance' => 'getReconciledBalance',
        'balanceDifference' => 'getBalanceDifference',
        'status' => 'getStatus'
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
        $this->setIfExists('bankAccount', $data ?? [], null);
        $this->setIfExists('statementDate', $data ?? [], null);
        $this->setIfExists('statementEndBalance', $data ?? [], null);
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('totalReceived', $data ?? [], null);
        $this->setIfExists('totalPaid', $data ?? [], null);
        $this->setIfExists('startingBalance', $data ?? [], null);
        $this->setIfExists('closingBalance', $data ?? [], null);
        $this->setIfExists('reconciledBalance', $data ?? [], null);
        $this->setIfExists('balanceDifference', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
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
     * Gets bankAccount
     *
     * @return \SynergiTech\Sage\Model\Base|null
     */
    public function getBankAccount(): ?\SynergiTech\Sage\Model\Base
    {
        return $this->container['bankAccount'];
    }

    /**
     * Sets bankAccount
     *
     * @param \SynergiTech\Sage\Model\Base|null $bankAccount bankAccount
     *
     * @return $this
     */
    public function setBankAccount(?\SynergiTech\Sage\Model\Base $bankAccount): static
    {
        if (is_null($bankAccount)) {
            throw new InvalidArgumentException('non-nullable bankAccount cannot be null');
        }
        $this->container['bankAccount'] = $bankAccount;

        return $this;
    }

    /**
     * Gets statementDate
     *
     * @return \DateTime|null
     */
    public function getStatementDate(): ?\DateTime
    {
        return $this->container['statementDate'];
    }

    /**
     * Sets statementDate
     *
     * @param \DateTime|null $statementDate The date of the bank reconciliation
     *
     * @return $this
     */
    public function setStatementDate(?\DateTime $statementDate): static
    {
        if (is_null($statementDate)) {
            throw new InvalidArgumentException('non-nullable statementDate cannot be null');
        }
        $this->container['statementDate'] = $statementDate;

        return $this;
    }

    /**
     * Gets statementEndBalance
     *
     * @return float|null
     */
    public function getStatementEndBalance(): ?float
    {
        return $this->container['statementEndBalance'];
    }

    /**
     * Sets statementEndBalance
     *
     * @param float|null $statementEndBalance The statement end balance for the reconciliation
     *
     * @return $this
     */
    public function setStatementEndBalance(?float $statementEndBalance): static
    {
        if (is_null($statementEndBalance)) {
            throw new InvalidArgumentException('non-nullable statementEndBalance cannot be null');
        }
        $this->container['statementEndBalance'] = $statementEndBalance;

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
     * @param string|null $reference A reference for the bank reconciliation
     *
     * @return $this
     */
    public function setReference(?string $reference): static
    {
        if (is_null($reference)) {
            throw new InvalidArgumentException('non-nullable reference cannot be null');
        }
        if ((mb_strlen($reference) > 255)) {
            throw new InvalidArgumentException('invalid length for $reference when calling BankReconciliation., must be smaller than or equal to 255.');
        }

        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets totalReceived
     *
     * @return float|null
     */
    public function getTotalReceived(): ?float
    {
        return $this->container['totalReceived'];
    }

    /**
     * Sets totalReceived
     *
     * @param float|null $totalReceived The total amount received
     *
     * @return $this
     */
    public function setTotalReceived(?float $totalReceived): static
    {
        if (is_null($totalReceived)) {
            throw new InvalidArgumentException('non-nullable totalReceived cannot be null');
        }
        $this->container['totalReceived'] = $totalReceived;

        return $this;
    }

    /**
     * Gets totalPaid
     *
     * @return float|null
     */
    public function getTotalPaid(): ?float
    {
        return $this->container['totalPaid'];
    }

    /**
     * Sets totalPaid
     *
     * @param float|null $totalPaid The total amount paid
     *
     * @return $this
     */
    public function setTotalPaid(?float $totalPaid): static
    {
        if (is_null($totalPaid)) {
            throw new InvalidArgumentException('non-nullable totalPaid cannot be null');
        }
        $this->container['totalPaid'] = $totalPaid;

        return $this;
    }

    /**
     * Gets startingBalance
     *
     * @return float|null
     */
    public function getStartingBalance(): ?float
    {
        return $this->container['startingBalance'];
    }

    /**
     * Sets startingBalance
     *
     * @param float|null $startingBalance The starting balance of the bank reconciliation
     *
     * @return $this
     */
    public function setStartingBalance(?float $startingBalance): static
    {
        if (is_null($startingBalance)) {
            throw new InvalidArgumentException('non-nullable startingBalance cannot be null');
        }
        $this->container['startingBalance'] = $startingBalance;

        return $this;
    }

    /**
     * Gets closingBalance
     *
     * @return float|null
     */
    public function getClosingBalance(): ?float
    {
        return $this->container['closingBalance'];
    }

    /**
     * Sets closingBalance
     *
     * @param float|null $closingBalance The closing balance of the bank reconciliation
     *
     * @return $this
     */
    public function setClosingBalance(?float $closingBalance): static
    {
        if (is_null($closingBalance)) {
            throw new InvalidArgumentException('non-nullable closingBalance cannot be null');
        }
        $this->container['closingBalance'] = $closingBalance;

        return $this;
    }

    /**
     * Gets reconciledBalance
     *
     * @return float|null
     */
    public function getReconciledBalance(): ?float
    {
        return $this->container['reconciledBalance'];
    }

    /**
     * Sets reconciledBalance
     *
     * @param float|null $reconciledBalance The reconciled balance of the bank reconciliation
     *
     * @return $this
     */
    public function setReconciledBalance(?float $reconciledBalance): static
    {
        if (is_null($reconciledBalance)) {
            throw new InvalidArgumentException('non-nullable reconciledBalance cannot be null');
        }
        $this->container['reconciledBalance'] = $reconciledBalance;

        return $this;
    }

    /**
     * Gets balanceDifference
     *
     * @return float|null
     */
    public function getBalanceDifference(): ?float
    {
        return $this->container['balanceDifference'];
    }

    /**
     * Sets balanceDifference
     *
     * @param float|null $balanceDifference The difference between the statement end balance and the reconciled balance
     *
     * @return $this
     */
    public function setBalanceDifference(?float $balanceDifference): static
    {
        if (is_null($balanceDifference)) {
            throw new InvalidArgumentException('non-nullable balanceDifference cannot be null');
        }
        $this->container['balanceDifference'] = $balanceDifference;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \SynergiTech\Sage\Model\BankReconciliationStatus|null
     */
    public function getStatus(): ?\SynergiTech\Sage\Model\BankReconciliationStatus
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \SynergiTech\Sage\Model\BankReconciliationStatus|null $status status
     *
     * @return $this
     */
    public function setStatus(?\SynergiTech\Sage\Model\BankReconciliationStatus $status): static
    {
        if (is_null($status)) {
            throw new InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

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


