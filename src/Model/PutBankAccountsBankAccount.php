<?php
/**
 * PutBankAccountsBankAccount
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
 * PutBankAccountsBankAccount Class Doc Comment
 *
 * @package  SynergiTech\Sage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class PutBankAccountsBankAccount implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'putBankAccounts_bank_account';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'bankAccountTypeId' => 'string',
        'ledgerAccountId' => 'string',
        'nominalCode' => 'int',
        'defaultPaymentMethodId' => 'string',
        'gifiCode' => 'int',
        'isActive' => 'bool',
        'currencyId' => 'string',
        'bankAccountDetails' => '\SynergiTech\Sage\Model\PutBankAccountsBankAccountBankAccountDetails',
        'mainAddress' => '\SynergiTech\Sage\Model\PostBankAccountsBankAccountMainAddress',
        'mainContactPerson' => '\SynergiTech\Sage\Model\PostBankAccountsBankAccountMainContactPerson',
        'journalCode' => '\SynergiTech\Sage\Model\PostJournalsJournalJournalCode'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'bankAccountTypeId' => null,
        'ledgerAccountId' => null,
        'nominalCode' => 'int32',
        'defaultPaymentMethodId' => null,
        'gifiCode' => 'int32',
        'isActive' => null,
        'currencyId' => null,
        'bankAccountDetails' => null,
        'mainAddress' => null,
        'mainContactPerson' => null,
        'journalCode' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'bankAccountTypeId' => false,
        'ledgerAccountId' => false,
        'nominalCode' => false,
        'defaultPaymentMethodId' => false,
        'gifiCode' => false,
        'isActive' => false,
        'currencyId' => false,
        'bankAccountDetails' => false,
        'mainAddress' => false,
        'mainContactPerson' => false,
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
        'bankAccountTypeId' => 'bank_account_type_id',
        'ledgerAccountId' => 'ledger_account_id',
        'nominalCode' => 'nominal_code',
        'defaultPaymentMethodId' => 'default_payment_method_id',
        'gifiCode' => 'gifi_code',
        'isActive' => 'is_active',
        'currencyId' => 'currency_id',
        'bankAccountDetails' => 'bank_account_details',
        'mainAddress' => 'main_address',
        'mainContactPerson' => 'main_contact_person',
        'journalCode' => 'journal_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'bankAccountTypeId' => 'setBankAccountTypeId',
        'ledgerAccountId' => 'setLedgerAccountId',
        'nominalCode' => 'setNominalCode',
        'defaultPaymentMethodId' => 'setDefaultPaymentMethodId',
        'gifiCode' => 'setGifiCode',
        'isActive' => 'setIsActive',
        'currencyId' => 'setCurrencyId',
        'bankAccountDetails' => 'setBankAccountDetails',
        'mainAddress' => 'setMainAddress',
        'mainContactPerson' => 'setMainContactPerson',
        'journalCode' => 'setJournalCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'bankAccountTypeId' => 'getBankAccountTypeId',
        'ledgerAccountId' => 'getLedgerAccountId',
        'nominalCode' => 'getNominalCode',
        'defaultPaymentMethodId' => 'getDefaultPaymentMethodId',
        'gifiCode' => 'getGifiCode',
        'isActive' => 'getIsActive',
        'currencyId' => 'getCurrencyId',
        'bankAccountDetails' => 'getBankAccountDetails',
        'mainAddress' => 'getMainAddress',
        'mainContactPerson' => 'getMainContactPerson',
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
        $this->setIfExists('bankAccountTypeId', $data ?? [], null);
        $this->setIfExists('ledgerAccountId', $data ?? [], null);
        $this->setIfExists('nominalCode', $data ?? [], null);
        $this->setIfExists('defaultPaymentMethodId', $data ?? [], null);
        $this->setIfExists('gifiCode', $data ?? [], null);
        $this->setIfExists('isActive', $data ?? [], null);
        $this->setIfExists('currencyId', $data ?? [], null);
        $this->setIfExists('bankAccountDetails', $data ?? [], null);
        $this->setIfExists('mainAddress', $data ?? [], null);
        $this->setIfExists('mainContactPerson', $data ?? [], null);
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

        if (!is_null($this->container['nominalCode']) && ($this->container['nominalCode'] > 99999999)) {
            $invalidProperties[] = "invalid value for 'nominalCode', must be smaller than or equal to 99999999.";
        }

        if (!is_null($this->container['nominalCode']) && ($this->container['nominalCode'] < 1)) {
            $invalidProperties[] = "invalid value for 'nominalCode', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['gifiCode']) && ($this->container['gifiCode'] > 9999)) {
            $invalidProperties[] = "invalid value for 'gifiCode', must be smaller than or equal to 9999.";
        }

        if (!is_null($this->container['gifiCode']) && ($this->container['gifiCode'] < 1000)) {
            $invalidProperties[] = "invalid value for 'gifiCode', must be bigger than or equal to 1000.";
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
     * Gets bankAccountTypeId
     *
     * @return string|null
     */
    public function getBankAccountTypeId(): ?string
    {
        return $this->container['bankAccountTypeId'];
    }

    /**
     * Sets bankAccountTypeId
     *
     * @param string|null $bankAccountTypeId The bank account type for the bank account
     *
     * @return $this
     */
    public function setBankAccountTypeId(?string $bankAccountTypeId): static
    {
        if (is_null($bankAccountTypeId)) {
            throw new InvalidArgumentException('non-nullable bankAccountTypeId cannot be null');
        }
        $this->container['bankAccountTypeId'] = $bankAccountTypeId;

        return $this;
    }

    /**
     * Gets ledgerAccountId
     *
     * @return string|null
     */
    public function getLedgerAccountId(): ?string
    {
        return $this->container['ledgerAccountId'];
    }

    /**
     * Sets ledgerAccountId
     *
     * @param string|null $ledgerAccountId The ID of the Ledger Account.
     *
     * @return $this
     */
    public function setLedgerAccountId(?string $ledgerAccountId): static
    {
        if (is_null($ledgerAccountId)) {
            throw new InvalidArgumentException('non-nullable ledgerAccountId cannot be null');
        }
        $this->container['ledgerAccountId'] = $ledgerAccountId;

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
     * @param int|null $nominalCode The nominal code of the bank account
     *
     * @return $this
     */
    public function setNominalCode(?int $nominalCode): static
    {
        if (is_null($nominalCode)) {
            throw new InvalidArgumentException('non-nullable nominalCode cannot be null');
        }

        if (($nominalCode > 99999999)) {
            throw new InvalidArgumentException('invalid value for $nominalCode when calling PutBankAccountsBankAccount., must be smaller than or equal to 99999999.');
        }
        if (($nominalCode < 1)) {
            throw new InvalidArgumentException('invalid value for $nominalCode when calling PutBankAccountsBankAccount., must be bigger than or equal to 1.');
        }

        $this->container['nominalCode'] = $nominalCode;

        return $this;
    }

    /**
     * Gets defaultPaymentMethodId
     *
     * @return string|null
     */
    public function getDefaultPaymentMethodId(): ?string
    {
        return $this->container['defaultPaymentMethodId'];
    }

    /**
     * Sets defaultPaymentMethodId
     *
     * @param string|null $defaultPaymentMethodId The ID of the Default Payment Method.
     *
     * @return $this
     */
    public function setDefaultPaymentMethodId(?string $defaultPaymentMethodId): static
    {
        if (is_null($defaultPaymentMethodId)) {
            throw new InvalidArgumentException('non-nullable defaultPaymentMethodId cannot be null');
        }
        $this->container['defaultPaymentMethodId'] = $defaultPaymentMethodId;

        return $this;
    }

    /**
     * Gets gifiCode
     *
     * @return int|null
     */
    public function getGifiCode(): ?int
    {
        return $this->container['gifiCode'];
    }

    /**
     * Sets gifiCode
     *
     * @param int|null $gifiCode The GIFI code of the bank ledger account'  GIFI is short for The General Index of Financial Information and it lets the CRA validate tax information electronically instead of manually. Information from financial statements is categorized under the appropriate 4-digit-long GIFI code and entered on corporate income tax returns. GIFI is needed when filing a T2 income tax return.  _Canada only_
     *
     * @return $this
     */
    public function setGifiCode(?int $gifiCode): static
    {
        if (is_null($gifiCode)) {
            throw new InvalidArgumentException('non-nullable gifiCode cannot be null');
        }

        if (($gifiCode > 9999)) {
            throw new InvalidArgumentException('invalid value for $gifiCode when calling PutBankAccountsBankAccount., must be smaller than or equal to 9999.');
        }
        if (($gifiCode < 1000)) {
            throw new InvalidArgumentException('invalid value for $gifiCode when calling PutBankAccountsBankAccount., must be bigger than or equal to 1000.');
        }

        $this->container['gifiCode'] = $gifiCode;

        return $this;
    }

    /**
     * Gets isActive
     *
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->container['isActive'];
    }

    /**
     * Sets isActive
     *
     * @param bool|null $isActive Indicates whether the Bank account is active or inactive.
     *
     * @return $this
     */
    public function setIsActive(?bool $isActive): static
    {
        if (is_null($isActive)) {
            throw new InvalidArgumentException('non-nullable isActive cannot be null');
        }
        $this->container['isActive'] = $isActive;

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
     * Gets bankAccountDetails
     *
     * @return \SynergiTech\Sage\Model\PutBankAccountsBankAccountBankAccountDetails|null
     */
    public function getBankAccountDetails(): ?\SynergiTech\Sage\Model\PutBankAccountsBankAccountBankAccountDetails
    {
        return $this->container['bankAccountDetails'];
    }

    /**
     * Sets bankAccountDetails
     *
     * @param \SynergiTech\Sage\Model\PutBankAccountsBankAccountBankAccountDetails|null $bankAccountDetails bankAccountDetails
     *
     * @return $this
     */
    public function setBankAccountDetails(?\SynergiTech\Sage\Model\PutBankAccountsBankAccountBankAccountDetails $bankAccountDetails): static
    {
        if (is_null($bankAccountDetails)) {
            throw new InvalidArgumentException('non-nullable bankAccountDetails cannot be null');
        }
        $this->container['bankAccountDetails'] = $bankAccountDetails;

        return $this;
    }

    /**
     * Gets mainAddress
     *
     * @return \SynergiTech\Sage\Model\PostBankAccountsBankAccountMainAddress|null
     */
    public function getMainAddress(): ?\SynergiTech\Sage\Model\PostBankAccountsBankAccountMainAddress
    {
        return $this->container['mainAddress'];
    }

    /**
     * Sets mainAddress
     *
     * @param \SynergiTech\Sage\Model\PostBankAccountsBankAccountMainAddress|null $mainAddress mainAddress
     *
     * @return $this
     */
    public function setMainAddress(?\SynergiTech\Sage\Model\PostBankAccountsBankAccountMainAddress $mainAddress): static
    {
        if (is_null($mainAddress)) {
            throw new InvalidArgumentException('non-nullable mainAddress cannot be null');
        }
        $this->container['mainAddress'] = $mainAddress;

        return $this;
    }

    /**
     * Gets mainContactPerson
     *
     * @return \SynergiTech\Sage\Model\PostBankAccountsBankAccountMainContactPerson|null
     */
    public function getMainContactPerson(): ?\SynergiTech\Sage\Model\PostBankAccountsBankAccountMainContactPerson
    {
        return $this->container['mainContactPerson'];
    }

    /**
     * Sets mainContactPerson
     *
     * @param \SynergiTech\Sage\Model\PostBankAccountsBankAccountMainContactPerson|null $mainContactPerson mainContactPerson
     *
     * @return $this
     */
    public function setMainContactPerson(?\SynergiTech\Sage\Model\PostBankAccountsBankAccountMainContactPerson $mainContactPerson): static
    {
        if (is_null($mainContactPerson)) {
            throw new InvalidArgumentException('non-nullable mainContactPerson cannot be null');
        }
        $this->container['mainContactPerson'] = $mainContactPerson;

        return $this;
    }

    /**
     * Gets journalCode
     *
     * @return \SynergiTech\Sage\Model\PostJournalsJournalJournalCode|null
     */
    public function getJournalCode(): ?\SynergiTech\Sage\Model\PostJournalsJournalJournalCode
    {
        return $this->container['journalCode'];
    }

    /**
     * Sets journalCode
     *
     * @param \SynergiTech\Sage\Model\PostJournalsJournalJournalCode|null $journalCode journalCode
     *
     * @return $this
     */
    public function setJournalCode(?\SynergiTech\Sage\Model\PostJournalsJournalJournalCode $journalCode): static
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


