<?php
/**
 * OtherPayment
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
 * OtherPayment Class Doc Comment
 *
 * @description ### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area &#x60;Bank&#x60;: Restricted Access, Full Access
 * @package  SynergiTech\Sage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class OtherPayment implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'OtherPayment';

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
        'transaction' => '\SynergiTech\Sage\Model\Base',
        'transactionType' => '\SynergiTech\Sage\Model\Base',
        'deletedAt' => '\DateTime',
        'baseCurrencyTotalItcAmount' => 'float',
        'totalItcAmount' => 'float',
        'baseCurrencyTotalItrAmount' => 'float',
        'totalItrAmount' => 'float',
        'partRecoverable' => 'bool',
        'paymentMethod' => '\SynergiTech\Sage\Model\Base',
        'contact' => '\SynergiTech\Sage\Model\Base',
        'bankAccount' => '\SynergiTech\Sage\Model\Base',
        'taxAddressRegion' => '\SynergiTech\Sage\Model\Base',
        'date' => '\DateTime',
        'netAmount' => 'float',
        'taxAmount' => 'float',
        'totalAmount' => 'float',
        'reference' => 'string',
        'paymentLines' => '\SynergiTech\Sage\Model\OtherPaymentLineItem[]',
        'editable' => 'bool',
        'deletable' => 'bool',
        'withholdingTaxRate' => 'float',
        'withholdingTaxAmount' => 'float'
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
        'transaction' => null,
        'transactionType' => null,
        'deletedAt' => 'date-time',
        'baseCurrencyTotalItcAmount' => 'double',
        'totalItcAmount' => 'double',
        'baseCurrencyTotalItrAmount' => 'double',
        'totalItrAmount' => 'double',
        'partRecoverable' => null,
        'paymentMethod' => null,
        'contact' => null,
        'bankAccount' => null,
        'taxAddressRegion' => null,
        'date' => 'date',
        'netAmount' => 'double',
        'taxAmount' => 'double',
        'totalAmount' => 'double',
        'reference' => null,
        'paymentLines' => null,
        'editable' => null,
        'deletable' => null,
        'withholdingTaxRate' => 'double',
        'withholdingTaxAmount' => 'double'
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
        'transaction' => false,
        'transactionType' => false,
        'deletedAt' => false,
        'baseCurrencyTotalItcAmount' => false,
        'totalItcAmount' => false,
        'baseCurrencyTotalItrAmount' => false,
        'totalItrAmount' => false,
        'partRecoverable' => false,
        'paymentMethod' => false,
        'contact' => false,
        'bankAccount' => false,
        'taxAddressRegion' => false,
        'date' => false,
        'netAmount' => false,
        'taxAmount' => false,
        'totalAmount' => false,
        'reference' => false,
        'paymentLines' => false,
        'editable' => false,
        'deletable' => false,
        'withholdingTaxRate' => false,
        'withholdingTaxAmount' => false
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
        'transaction' => 'transaction',
        'transactionType' => 'transaction_type',
        'deletedAt' => 'deleted_at',
        'baseCurrencyTotalItcAmount' => 'base_currency_total_itc_amount',
        'totalItcAmount' => 'total_itc_amount',
        'baseCurrencyTotalItrAmount' => 'base_currency_total_itr_amount',
        'totalItrAmount' => 'total_itr_amount',
        'partRecoverable' => 'part_recoverable',
        'paymentMethod' => 'payment_method',
        'contact' => 'contact',
        'bankAccount' => 'bank_account',
        'taxAddressRegion' => 'tax_address_region',
        'date' => 'date',
        'netAmount' => 'net_amount',
        'taxAmount' => 'tax_amount',
        'totalAmount' => 'total_amount',
        'reference' => 'reference',
        'paymentLines' => 'payment_lines',
        'editable' => 'editable',
        'deletable' => 'deletable',
        'withholdingTaxRate' => 'withholding_tax_rate',
        'withholdingTaxAmount' => 'withholding_tax_amount'
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
        'transaction' => 'setTransaction',
        'transactionType' => 'setTransactionType',
        'deletedAt' => 'setDeletedAt',
        'baseCurrencyTotalItcAmount' => 'setBaseCurrencyTotalItcAmount',
        'totalItcAmount' => 'setTotalItcAmount',
        'baseCurrencyTotalItrAmount' => 'setBaseCurrencyTotalItrAmount',
        'totalItrAmount' => 'setTotalItrAmount',
        'partRecoverable' => 'setPartRecoverable',
        'paymentMethod' => 'setPaymentMethod',
        'contact' => 'setContact',
        'bankAccount' => 'setBankAccount',
        'taxAddressRegion' => 'setTaxAddressRegion',
        'date' => 'setDate',
        'netAmount' => 'setNetAmount',
        'taxAmount' => 'setTaxAmount',
        'totalAmount' => 'setTotalAmount',
        'reference' => 'setReference',
        'paymentLines' => 'setPaymentLines',
        'editable' => 'setEditable',
        'deletable' => 'setDeletable',
        'withholdingTaxRate' => 'setWithholdingTaxRate',
        'withholdingTaxAmount' => 'setWithholdingTaxAmount'
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
        'transaction' => 'getTransaction',
        'transactionType' => 'getTransactionType',
        'deletedAt' => 'getDeletedAt',
        'baseCurrencyTotalItcAmount' => 'getBaseCurrencyTotalItcAmount',
        'totalItcAmount' => 'getTotalItcAmount',
        'baseCurrencyTotalItrAmount' => 'getBaseCurrencyTotalItrAmount',
        'totalItrAmount' => 'getTotalItrAmount',
        'partRecoverable' => 'getPartRecoverable',
        'paymentMethod' => 'getPaymentMethod',
        'contact' => 'getContact',
        'bankAccount' => 'getBankAccount',
        'taxAddressRegion' => 'getTaxAddressRegion',
        'date' => 'getDate',
        'netAmount' => 'getNetAmount',
        'taxAmount' => 'getTaxAmount',
        'totalAmount' => 'getTotalAmount',
        'reference' => 'getReference',
        'paymentLines' => 'getPaymentLines',
        'editable' => 'getEditable',
        'deletable' => 'getDeletable',
        'withholdingTaxRate' => 'getWithholdingTaxRate',
        'withholdingTaxAmount' => 'getWithholdingTaxAmount'
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
        $this->setIfExists('transaction', $data ?? [], null);
        $this->setIfExists('transactionType', $data ?? [], null);
        $this->setIfExists('deletedAt', $data ?? [], null);
        $this->setIfExists('baseCurrencyTotalItcAmount', $data ?? [], null);
        $this->setIfExists('totalItcAmount', $data ?? [], null);
        $this->setIfExists('baseCurrencyTotalItrAmount', $data ?? [], null);
        $this->setIfExists('totalItrAmount', $data ?? [], null);
        $this->setIfExists('partRecoverable', $data ?? [], null);
        $this->setIfExists('paymentMethod', $data ?? [], null);
        $this->setIfExists('contact', $data ?? [], null);
        $this->setIfExists('bankAccount', $data ?? [], null);
        $this->setIfExists('taxAddressRegion', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('netAmount', $data ?? [], null);
        $this->setIfExists('taxAmount', $data ?? [], null);
        $this->setIfExists('totalAmount', $data ?? [], null);
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('paymentLines', $data ?? [], null);
        $this->setIfExists('editable', $data ?? [], null);
        $this->setIfExists('deletable', $data ?? [], null);
        $this->setIfExists('withholdingTaxRate', $data ?? [], null);
        $this->setIfExists('withholdingTaxAmount', $data ?? [], null);
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

        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) > 25)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 25.";
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
     * Gets baseCurrencyTotalItcAmount
     *
     * @return float|null
     */
    public function getBaseCurrencyTotalItcAmount(): ?float
    {
        return $this->container['baseCurrencyTotalItcAmount'];
    }

    /**
     * Sets baseCurrencyTotalItcAmount
     *
     * @param float|null $baseCurrencyTotalItcAmount The total amount of input tax credit in base currency for the                      Other Payment (Canada only)
     *
     * @return $this
     */
    public function setBaseCurrencyTotalItcAmount(?float $baseCurrencyTotalItcAmount): static
    {
        if (is_null($baseCurrencyTotalItcAmount)) {
            throw new InvalidArgumentException('non-nullable baseCurrencyTotalItcAmount cannot be null');
        }
        $this->container['baseCurrencyTotalItcAmount'] = $baseCurrencyTotalItcAmount;

        return $this;
    }

    /**
     * Gets totalItcAmount
     *
     * @return float|null
     */
    public function getTotalItcAmount(): ?float
    {
        return $this->container['totalItcAmount'];
    }

    /**
     * Sets totalItcAmount
     *
     * @param float|null $totalItcAmount The total amount of input tax credit for the Other Payment (Canada only)
     *
     * @return $this
     */
    public function setTotalItcAmount(?float $totalItcAmount): static
    {
        if (is_null($totalItcAmount)) {
            throw new InvalidArgumentException('non-nullable totalItcAmount cannot be null');
        }
        $this->container['totalItcAmount'] = $totalItcAmount;

        return $this;
    }

    /**
     * Gets baseCurrencyTotalItrAmount
     *
     * @return float|null
     */
    public function getBaseCurrencyTotalItrAmount(): ?float
    {
        return $this->container['baseCurrencyTotalItrAmount'];
    }

    /**
     * Sets baseCurrencyTotalItrAmount
     *
     * @param float|null $baseCurrencyTotalItrAmount The total amount of input tax refund in base currency for the                      Other Payment (Canada only)
     *
     * @return $this
     */
    public function setBaseCurrencyTotalItrAmount(?float $baseCurrencyTotalItrAmount): static
    {
        if (is_null($baseCurrencyTotalItrAmount)) {
            throw new InvalidArgumentException('non-nullable baseCurrencyTotalItrAmount cannot be null');
        }
        $this->container['baseCurrencyTotalItrAmount'] = $baseCurrencyTotalItrAmount;

        return $this;
    }

    /**
     * Gets totalItrAmount
     *
     * @return float|null
     */
    public function getTotalItrAmount(): ?float
    {
        return $this->container['totalItrAmount'];
    }

    /**
     * Sets totalItrAmount
     *
     * @param float|null $totalItrAmount The total amount of input tax refund for the Other Payment (Canada only)
     *
     * @return $this
     */
    public function setTotalItrAmount(?float $totalItrAmount): static
    {
        if (is_null($totalItrAmount)) {
            throw new InvalidArgumentException('non-nullable totalItrAmount cannot be null');
        }
        $this->container['totalItrAmount'] = $totalItrAmount;

        return $this;
    }

    /**
     * Gets partRecoverable
     *
     * @return bool|null
     */
    public function getPartRecoverable(): ?bool
    {
        return $this->container['partRecoverable'];
    }

    /**
     * Sets partRecoverable
     *
     * @param bool|null $partRecoverable Indicates if the Other Payment is part recoverable or not (Canada only)
     *
     * @return $this
     */
    public function setPartRecoverable(?bool $partRecoverable): static
    {
        if (is_null($partRecoverable)) {
            throw new InvalidArgumentException('non-nullable partRecoverable cannot be null');
        }
        $this->container['partRecoverable'] = $partRecoverable;

        return $this;
    }

    /**
     * Gets paymentMethod
     *
     * @return \SynergiTech\Sage\Model\Base|null
     */
    public function getPaymentMethod(): ?\SynergiTech\Sage\Model\Base
    {
        return $this->container['paymentMethod'];
    }

    /**
     * Sets paymentMethod
     *
     * @param \SynergiTech\Sage\Model\Base|null $paymentMethod paymentMethod
     *
     * @return $this
     */
    public function setPaymentMethod(?\SynergiTech\Sage\Model\Base $paymentMethod): static
    {
        if (is_null($paymentMethod)) {
            throw new InvalidArgumentException('non-nullable paymentMethod cannot be null');
        }
        $this->container['paymentMethod'] = $paymentMethod;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return \SynergiTech\Sage\Model\Base|null
     */
    public function getContact(): ?\SynergiTech\Sage\Model\Base
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \SynergiTech\Sage\Model\Base|null $contact contact
     *
     * @return $this
     */
    public function setContact(?\SynergiTech\Sage\Model\Base $contact): static
    {
        if (is_null($contact)) {
            throw new InvalidArgumentException('non-nullable contact cannot be null');
        }
        $this->container['contact'] = $contact;

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
     * Gets taxAddressRegion
     *
     * @return \SynergiTech\Sage\Model\Base|null
     */
    public function getTaxAddressRegion(): ?\SynergiTech\Sage\Model\Base
    {
        return $this->container['taxAddressRegion'];
    }

    /**
     * Sets taxAddressRegion
     *
     * @param \SynergiTech\Sage\Model\Base|null $taxAddressRegion taxAddressRegion
     *
     * @return $this
     */
    public function setTaxAddressRegion(?\SynergiTech\Sage\Model\Base $taxAddressRegion): static
    {
        if (is_null($taxAddressRegion)) {
            throw new InvalidArgumentException('non-nullable taxAddressRegion cannot be null');
        }
        $this->container['taxAddressRegion'] = $taxAddressRegion;

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
     * @param \DateTime|null $date The date of the payment
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
     * Gets netAmount
     *
     * @return float|null
     */
    public function getNetAmount(): ?float
    {
        return $this->container['netAmount'];
    }

    /**
     * Sets netAmount
     *
     * @param float|null $netAmount The net amount of the payment
     *
     * @return $this
     */
    public function setNetAmount(?float $netAmount): static
    {
        if (is_null($netAmount)) {
            throw new InvalidArgumentException('non-nullable netAmount cannot be null');
        }
        $this->container['netAmount'] = $netAmount;

        return $this;
    }

    /**
     * Gets taxAmount
     *
     * @return float|null
     */
    public function getTaxAmount(): ?float
    {
        return $this->container['taxAmount'];
    }

    /**
     * Sets taxAmount
     *
     * @param float|null $taxAmount The tax amount of the payment
     *
     * @return $this
     */
    public function setTaxAmount(?float $taxAmount): static
    {
        if (is_null($taxAmount)) {
            throw new InvalidArgumentException('non-nullable taxAmount cannot be null');
        }
        $this->container['taxAmount'] = $taxAmount;

        return $this;
    }

    /**
     * Gets totalAmount
     *
     * @return float|null
     */
    public function getTotalAmount(): ?float
    {
        return $this->container['totalAmount'];
    }

    /**
     * Sets totalAmount
     *
     * @param float|null $totalAmount The total amount of the payment
     *
     * @return $this
     */
    public function setTotalAmount(?float $totalAmount): static
    {
        if (is_null($totalAmount)) {
            throw new InvalidArgumentException('non-nullable totalAmount cannot be null');
        }
        $this->container['totalAmount'] = $totalAmount;

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
     * @param string|null $reference A reference of the payment Note: An upper length limit of 25 or 40 characters is imposed conditionally and may not apply in every request. A hard upper limit of 255 characters is imposed by the storage layer, though.
     *
     * @return $this
     */
    public function setReference(?string $reference): static
    {
        if (is_null($reference)) {
            throw new InvalidArgumentException('non-nullable reference cannot be null');
        }
        if ((mb_strlen($reference) > 25)) {
            throw new InvalidArgumentException('invalid length for $reference when calling OtherPayment., must be smaller than or equal to 25.');
        }

        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets paymentLines
     *
     * @return \SynergiTech\Sage\Model\OtherPaymentLineItem[]|null
     */
    public function getPaymentLines(): ?array
    {
        return $this->container['paymentLines'];
    }

    /**
     * Sets paymentLines
     *
     * @param \SynergiTech\Sage\Model\OtherPaymentLineItem[]|null $paymentLines The payment lines of the payment
     *
     * @return $this
     */
    public function setPaymentLines(?array $paymentLines): static
    {
        if (is_null($paymentLines)) {
            throw new InvalidArgumentException('non-nullable paymentLines cannot be null');
        }
        $this->container['paymentLines'] = $paymentLines;

        return $this;
    }

    /**
     * Gets editable
     *
     * @return bool|null
     */
    public function getEditable(): ?bool
    {
        return $this->container['editable'];
    }

    /**
     * Sets editable
     *
     * @param bool|null $editable Indicates whether or not the payment can be edited
     *
     * @return $this
     */
    public function setEditable(?bool $editable): static
    {
        if (is_null($editable)) {
            throw new InvalidArgumentException('non-nullable editable cannot be null');
        }
        $this->container['editable'] = $editable;

        return $this;
    }

    /**
     * Gets deletable
     *
     * @return bool|null
     */
    public function getDeletable(): ?bool
    {
        return $this->container['deletable'];
    }

    /**
     * Sets deletable
     *
     * @param bool|null $deletable Indicates whether or not the payment can be deleted
     *
     * @return $this
     */
    public function setDeletable(?bool $deletable): static
    {
        if (is_null($deletable)) {
            throw new InvalidArgumentException('non-nullable deletable cannot be null');
        }
        $this->container['deletable'] = $deletable;

        return $this;
    }

    /**
     * Gets withholdingTaxRate
     *
     * @return float|null
     */
    public function getWithholdingTaxRate(): ?float
    {
        return $this->container['withholdingTaxRate'];
    }

    /**
     * Sets withholdingTaxRate
     *
     * @param float|null $withholdingTaxRate IRPF withheld tax rate
     *
     * @return $this
     */
    public function setWithholdingTaxRate(?float $withholdingTaxRate): static
    {
        if (is_null($withholdingTaxRate)) {
            throw new InvalidArgumentException('non-nullable withholdingTaxRate cannot be null');
        }
        $this->container['withholdingTaxRate'] = $withholdingTaxRate;

        return $this;
    }

    /**
     * Gets withholdingTaxAmount
     *
     * @return float|null
     */
    public function getWithholdingTaxAmount(): ?float
    {
        return $this->container['withholdingTaxAmount'];
    }

    /**
     * Sets withholdingTaxAmount
     *
     * @param float|null $withholdingTaxAmount IRPF withheld tax amount
     *
     * @return $this
     */
    public function setWithholdingTaxAmount(?float $withholdingTaxAmount): static
    {
        if (is_null($withholdingTaxAmount)) {
            throw new InvalidArgumentException('non-nullable withholdingTaxAmount cannot be null');
        }
        $this->container['withholdingTaxAmount'] = $withholdingTaxAmount;

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


