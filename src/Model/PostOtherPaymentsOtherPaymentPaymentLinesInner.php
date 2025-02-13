<?php
/**
 * PostOtherPaymentsOtherPaymentPaymentLinesInner
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
 * PostOtherPaymentsOtherPaymentPaymentLinesInner Class Doc Comment
 *
 * @package  SynergiTech\Sage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class PostOtherPaymentsOtherPaymentPaymentLinesInner implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'postOtherPayments_other_payment_payment_lines_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'ledgerAccountId' => 'string',
        'totalAmount' => 'float',
        'details' => 'string',
        'taxRateId' => 'string',
        'netAmount' => 'float',
        'taxAmount' => 'float',
        'isPurchaseForResale' => 'bool',
        'tradeOfAsset' => 'bool',
        'gstAmount' => 'float',
        'pstAmount' => 'float',
        'taxRecoverable' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'ledgerAccountId' => null,
        'totalAmount' => 'double',
        'details' => null,
        'taxRateId' => null,
        'netAmount' => 'double',
        'taxAmount' => 'double',
        'isPurchaseForResale' => null,
        'tradeOfAsset' => null,
        'gstAmount' => 'double',
        'pstAmount' => 'double',
        'taxRecoverable' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'ledgerAccountId' => false,
        'totalAmount' => false,
        'details' => false,
        'taxRateId' => false,
        'netAmount' => false,
        'taxAmount' => false,
        'isPurchaseForResale' => false,
        'tradeOfAsset' => false,
        'gstAmount' => false,
        'pstAmount' => false,
        'taxRecoverable' => false
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
        'ledgerAccountId' => 'ledger_account_id',
        'totalAmount' => 'total_amount',
        'details' => 'details',
        'taxRateId' => 'tax_rate_id',
        'netAmount' => 'net_amount',
        'taxAmount' => 'tax_amount',
        'isPurchaseForResale' => 'is_purchase_for_resale',
        'tradeOfAsset' => 'trade_of_asset',
        'gstAmount' => 'gst_amount',
        'pstAmount' => 'pst_amount',
        'taxRecoverable' => 'tax_recoverable'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'ledgerAccountId' => 'setLedgerAccountId',
        'totalAmount' => 'setTotalAmount',
        'details' => 'setDetails',
        'taxRateId' => 'setTaxRateId',
        'netAmount' => 'setNetAmount',
        'taxAmount' => 'setTaxAmount',
        'isPurchaseForResale' => 'setIsPurchaseForResale',
        'tradeOfAsset' => 'setTradeOfAsset',
        'gstAmount' => 'setGstAmount',
        'pstAmount' => 'setPstAmount',
        'taxRecoverable' => 'setTaxRecoverable'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'ledgerAccountId' => 'getLedgerAccountId',
        'totalAmount' => 'getTotalAmount',
        'details' => 'getDetails',
        'taxRateId' => 'getTaxRateId',
        'netAmount' => 'getNetAmount',
        'taxAmount' => 'getTaxAmount',
        'isPurchaseForResale' => 'getIsPurchaseForResale',
        'tradeOfAsset' => 'getTradeOfAsset',
        'gstAmount' => 'getGstAmount',
        'pstAmount' => 'getPstAmount',
        'taxRecoverable' => 'getTaxRecoverable'
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
        $this->setIfExists('ledgerAccountId', $data ?? [], null);
        $this->setIfExists('totalAmount', $data ?? [], null);
        $this->setIfExists('details', $data ?? [], null);
        $this->setIfExists('taxRateId', $data ?? [], null);
        $this->setIfExists('netAmount', $data ?? [], null);
        $this->setIfExists('taxAmount', $data ?? [], null);
        $this->setIfExists('isPurchaseForResale', $data ?? [], null);
        $this->setIfExists('tradeOfAsset', $data ?? [], null);
        $this->setIfExists('gstAmount', $data ?? [], null);
        $this->setIfExists('pstAmount', $data ?? [], null);
        $this->setIfExists('taxRecoverable', $data ?? [], null);
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

        if ($this->container['ledgerAccountId'] === null) {
            $invalidProperties[] = "'ledgerAccountId' can't be null";
        }
        if ($this->container['totalAmount'] === null) {
            $invalidProperties[] = "'totalAmount' can't be null";
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
     * Gets ledgerAccountId
     *
     * @return string
     */
    public function getLedgerAccountId(): string
    {
        return $this->container['ledgerAccountId'];
    }

    /**
     * Sets ledgerAccountId
     *
     * @param string $ledgerAccountId The ID of the Ledger Account.
     *
     * @return $this
     */
    public function setLedgerAccountId(string $ledgerAccountId): static
    {
        if (is_null($ledgerAccountId)) {
            throw new InvalidArgumentException('non-nullable ledgerAccountId cannot be null');
        }
        $this->container['ledgerAccountId'] = $ledgerAccountId;

        return $this;
    }

    /**
     * Gets totalAmount
     *
     * @return float
     */
    public function getTotalAmount(): float
    {
        return $this->container['totalAmount'];
    }

    /**
     * Sets totalAmount
     *
     * @param float $totalAmount The total amount of the payment line
     *
     * @return $this
     */
    public function setTotalAmount(float $totalAmount): static
    {
        if (is_null($totalAmount)) {
            throw new InvalidArgumentException('non-nullable totalAmount cannot be null');
        }
        $this->container['totalAmount'] = $totalAmount;

        return $this;
    }

    /**
     * Gets details
     *
     * @return string|null
     */
    public function getDetails(): ?string
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param string|null $details The details of the payment line
     *
     * @return $this
     */
    public function setDetails(?string $details): static
    {
        if (is_null($details)) {
            throw new InvalidArgumentException('non-nullable details cannot be null');
        }
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets taxRateId
     *
     * @return string|null
     */
    public function getTaxRateId(): ?string
    {
        return $this->container['taxRateId'];
    }

    /**
     * Sets taxRateId
     *
     * @param string|null $taxRateId The ID of the Tax Rate.
     *
     * @return $this
     */
    public function setTaxRateId(?string $taxRateId): static
    {
        if (is_null($taxRateId)) {
            throw new InvalidArgumentException('non-nullable taxRateId cannot be null');
        }
        $this->container['taxRateId'] = $taxRateId;

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
     * @param float|null $netAmount The net amount of the payment line
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
     * @param float|null $taxAmount The tax amount of the payment line
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
     * Gets isPurchaseForResale
     *
     * @return bool|null
     */
    public function getIsPurchaseForResale(): ?bool
    {
        return $this->container['isPurchaseForResale'];
    }

    /**
     * Sets isPurchaseForResale
     *
     * @param bool|null $isPurchaseForResale Identifies whether the line item is for resale. (Ireland only)
     *
     * @return $this
     */
    public function setIsPurchaseForResale(?bool $isPurchaseForResale): static
    {
        if (is_null($isPurchaseForResale)) {
            throw new InvalidArgumentException('non-nullable isPurchaseForResale cannot be null');
        }
        $this->container['isPurchaseForResale'] = $isPurchaseForResale;

        return $this;
    }

    /**
     * Gets tradeOfAsset
     *
     * @return bool|null
     */
    public function getTradeOfAsset(): ?bool
    {
        return $this->container['tradeOfAsset'];
    }

    /**
     * Sets tradeOfAsset
     *
     * @param bool|null $tradeOfAsset Whether the line item is marked as trade of asset.
     *
     * @return $this
     */
    public function setTradeOfAsset(?bool $tradeOfAsset): static
    {
        if (is_null($tradeOfAsset)) {
            throw new InvalidArgumentException('non-nullable tradeOfAsset cannot be null');
        }
        $this->container['tradeOfAsset'] = $tradeOfAsset;

        return $this;
    }

    /**
     * Gets gstAmount
     *
     * @return float|null
     */
    public function getGstAmount(): ?float
    {
        return $this->container['gstAmount'];
    }

    /**
     * Sets gstAmount
     *
     * @param float|null $gstAmount The gst or hst tax amount for the other payment
     *
     * @return $this
     */
    public function setGstAmount(?float $gstAmount): static
    {
        if (is_null($gstAmount)) {
            throw new InvalidArgumentException('non-nullable gstAmount cannot be null');
        }
        $this->container['gstAmount'] = $gstAmount;

        return $this;
    }

    /**
     * Gets pstAmount
     *
     * @return float|null
     */
    public function getPstAmount(): ?float
    {
        return $this->container['pstAmount'];
    }

    /**
     * Sets pstAmount
     *
     * @param float|null $pstAmount The pst or qst tax amount for the other payment
     *
     * @return $this
     */
    public function setPstAmount(?float $pstAmount): static
    {
        if (is_null($pstAmount)) {
            throw new InvalidArgumentException('non-nullable pstAmount cannot be null');
        }
        $this->container['pstAmount'] = $pstAmount;

        return $this;
    }

    /**
     * Gets taxRecoverable
     *
     * @return bool|null
     */
    public function getTaxRecoverable(): ?bool
    {
        return $this->container['taxRecoverable'];
    }

    /**
     * Sets taxRecoverable
     *
     * @param bool|null $taxRecoverable Indicates if the other payment is tax recoverable or not
     *
     * @return $this
     */
    public function setTaxRecoverable(?bool $taxRecoverable): static
    {
        if (is_null($taxRecoverable)) {
            throw new InvalidArgumentException('non-nullable taxRecoverable cannot be null');
        }
        $this->container['taxRecoverable'] = $taxRecoverable;

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


