<?php
/**
 * PostPurchaseCorrectiveInvoicesPurchaseCorrectiveInvoiceTaxAnalysisInner
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
 * PostPurchaseCorrectiveInvoicesPurchaseCorrectiveInvoiceTaxAnalysisInner Class Doc Comment
 *
 * @package  SynergiTech\Sage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class PostPurchaseCorrectiveInvoicesPurchaseCorrectiveInvoiceTaxAnalysisInner implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'postPurchaseCorrectiveInvoices_purchase_corrective_invoice_tax_analysis_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'taxRateId' => 'string',
        'netAmount' => 'float',
        'taxAmount' => 'float',
        'totalAmount' => 'float',
        'goodsAmount' => 'float',
        'serviceAmount' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'taxRateId' => null,
        'netAmount' => 'double',
        'taxAmount' => 'double',
        'totalAmount' => 'double',
        'goodsAmount' => 'double',
        'serviceAmount' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'taxRateId' => false,
        'netAmount' => false,
        'taxAmount' => false,
        'totalAmount' => false,
        'goodsAmount' => false,
        'serviceAmount' => false
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
        'taxRateId' => 'tax_rate_id',
        'netAmount' => 'net_amount',
        'taxAmount' => 'tax_amount',
        'totalAmount' => 'total_amount',
        'goodsAmount' => 'goods_amount',
        'serviceAmount' => 'service_amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'taxRateId' => 'setTaxRateId',
        'netAmount' => 'setNetAmount',
        'taxAmount' => 'setTaxAmount',
        'totalAmount' => 'setTotalAmount',
        'goodsAmount' => 'setGoodsAmount',
        'serviceAmount' => 'setServiceAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'taxRateId' => 'getTaxRateId',
        'netAmount' => 'getNetAmount',
        'taxAmount' => 'getTaxAmount',
        'totalAmount' => 'getTotalAmount',
        'goodsAmount' => 'getGoodsAmount',
        'serviceAmount' => 'getServiceAmount'
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
        $this->setIfExists('taxRateId', $data ?? [], null);
        $this->setIfExists('netAmount', $data ?? [], null);
        $this->setIfExists('taxAmount', $data ?? [], null);
        $this->setIfExists('totalAmount', $data ?? [], null);
        $this->setIfExists('goodsAmount', $data ?? [], null);
        $this->setIfExists('serviceAmount', $data ?? [], null);
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
     * @param float|null $netAmount The net amount for the tax rate
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
     * @param float|null $taxAmount The tax amount for the tax rate
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
     * @param float|null $totalAmount The total amount for the tax rate
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
     * Gets goodsAmount
     *
     * @return float|null
     */
    public function getGoodsAmount(): ?float
    {
        return $this->container['goodsAmount'];
    }

    /**
     * Sets goodsAmount
     *
     * @param float|null $goodsAmount The total amount for the tax rate relating to goods
     *
     * @return $this
     */
    public function setGoodsAmount(?float $goodsAmount): static
    {
        if (is_null($goodsAmount)) {
            throw new InvalidArgumentException('non-nullable goodsAmount cannot be null');
        }
        $this->container['goodsAmount'] = $goodsAmount;

        return $this;
    }

    /**
     * Gets serviceAmount
     *
     * @return float|null
     */
    public function getServiceAmount(): ?float
    {
        return $this->container['serviceAmount'];
    }

    /**
     * Sets serviceAmount
     *
     * @param float|null $serviceAmount The total amount for the tax rate relating to services
     *
     * @return $this
     */
    public function setServiceAmount(?float $serviceAmount): static
    {
        if (is_null($serviceAmount)) {
            throw new InvalidArgumentException('non-nullable serviceAmount cannot be null');
        }
        $this->container['serviceAmount'] = $serviceAmount;

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


