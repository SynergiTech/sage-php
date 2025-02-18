<?php
/**
 * PutProductsProduct
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
 * PutProductsProduct Class Doc Comment
 *
 * @package  SynergiTech\Sage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class PutProductsProduct implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'putProducts_product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'description' => 'string',
        'salesLedgerAccountId' => 'string',
        'purchaseLedgerAccountId' => 'string',
        'itemCode' => 'string',
        'notes' => 'string',
        'salesTaxRateId' => 'string',
        'usualSupplierId' => 'string',
        'purchaseTaxRateId' => 'string',
        'costPrice' => 'float',
        'sourceGuid' => 'string',
        'purchaseDescription' => 'string',
        'active' => 'bool',
        'catalogItemTypeId' => 'string',
        'salesPrices' => '\SynergiTech\Sage\Model\PostProductsProductSalesPricesInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'description' => null,
        'salesLedgerAccountId' => null,
        'purchaseLedgerAccountId' => null,
        'itemCode' => null,
        'notes' => null,
        'salesTaxRateId' => null,
        'usualSupplierId' => null,
        'purchaseTaxRateId' => null,
        'costPrice' => 'double',
        'sourceGuid' => null,
        'purchaseDescription' => null,
        'active' => null,
        'catalogItemTypeId' => null,
        'salesPrices' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'description' => false,
        'salesLedgerAccountId' => false,
        'purchaseLedgerAccountId' => false,
        'itemCode' => false,
        'notes' => false,
        'salesTaxRateId' => false,
        'usualSupplierId' => false,
        'purchaseTaxRateId' => false,
        'costPrice' => false,
        'sourceGuid' => false,
        'purchaseDescription' => false,
        'active' => false,
        'catalogItemTypeId' => false,
        'salesPrices' => false
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
        'description' => 'description',
        'salesLedgerAccountId' => 'sales_ledger_account_id',
        'purchaseLedgerAccountId' => 'purchase_ledger_account_id',
        'itemCode' => 'item_code',
        'notes' => 'notes',
        'salesTaxRateId' => 'sales_tax_rate_id',
        'usualSupplierId' => 'usual_supplier_id',
        'purchaseTaxRateId' => 'purchase_tax_rate_id',
        'costPrice' => 'cost_price',
        'sourceGuid' => 'source_guid',
        'purchaseDescription' => 'purchase_description',
        'active' => 'active',
        'catalogItemTypeId' => 'catalog_item_type_id',
        'salesPrices' => 'sales_prices'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'description' => 'setDescription',
        'salesLedgerAccountId' => 'setSalesLedgerAccountId',
        'purchaseLedgerAccountId' => 'setPurchaseLedgerAccountId',
        'itemCode' => 'setItemCode',
        'notes' => 'setNotes',
        'salesTaxRateId' => 'setSalesTaxRateId',
        'usualSupplierId' => 'setUsualSupplierId',
        'purchaseTaxRateId' => 'setPurchaseTaxRateId',
        'costPrice' => 'setCostPrice',
        'sourceGuid' => 'setSourceGuid',
        'purchaseDescription' => 'setPurchaseDescription',
        'active' => 'setActive',
        'catalogItemTypeId' => 'setCatalogItemTypeId',
        'salesPrices' => 'setSalesPrices'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'description' => 'getDescription',
        'salesLedgerAccountId' => 'getSalesLedgerAccountId',
        'purchaseLedgerAccountId' => 'getPurchaseLedgerAccountId',
        'itemCode' => 'getItemCode',
        'notes' => 'getNotes',
        'salesTaxRateId' => 'getSalesTaxRateId',
        'usualSupplierId' => 'getUsualSupplierId',
        'purchaseTaxRateId' => 'getPurchaseTaxRateId',
        'costPrice' => 'getCostPrice',
        'sourceGuid' => 'getSourceGuid',
        'purchaseDescription' => 'getPurchaseDescription',
        'active' => 'getActive',
        'catalogItemTypeId' => 'getCatalogItemTypeId',
        'salesPrices' => 'getSalesPrices'
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
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('salesLedgerAccountId', $data ?? [], null);
        $this->setIfExists('purchaseLedgerAccountId', $data ?? [], null);
        $this->setIfExists('itemCode', $data ?? [], null);
        $this->setIfExists('notes', $data ?? [], null);
        $this->setIfExists('salesTaxRateId', $data ?? [], null);
        $this->setIfExists('usualSupplierId', $data ?? [], null);
        $this->setIfExists('purchaseTaxRateId', $data ?? [], null);
        $this->setIfExists('costPrice', $data ?? [], null);
        $this->setIfExists('sourceGuid', $data ?? [], null);
        $this->setIfExists('purchaseDescription', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('catalogItemTypeId', $data ?? [], null);
        $this->setIfExists('salesPrices', $data ?? [], null);
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
     * @param string|null $description The product description
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
     * Gets salesLedgerAccountId
     *
     * @return string|null
     */
    public function getSalesLedgerAccountId(): ?string
    {
        return $this->container['salesLedgerAccountId'];
    }

    /**
     * Sets salesLedgerAccountId
     *
     * @param string|null $salesLedgerAccountId The sales ledger account for the product
     *
     * @return $this
     */
    public function setSalesLedgerAccountId(?string $salesLedgerAccountId): static
    {
        if (is_null($salesLedgerAccountId)) {
            throw new InvalidArgumentException('non-nullable salesLedgerAccountId cannot be null');
        }
        $this->container['salesLedgerAccountId'] = $salesLedgerAccountId;

        return $this;
    }

    /**
     * Gets purchaseLedgerAccountId
     *
     * @return string|null
     */
    public function getPurchaseLedgerAccountId(): ?string
    {
        return $this->container['purchaseLedgerAccountId'];
    }

    /**
     * Sets purchaseLedgerAccountId
     *
     * @param string|null $purchaseLedgerAccountId The purchase ledger account for the product
     *
     * @return $this
     */
    public function setPurchaseLedgerAccountId(?string $purchaseLedgerAccountId): static
    {
        if (is_null($purchaseLedgerAccountId)) {
            throw new InvalidArgumentException('non-nullable purchaseLedgerAccountId cannot be null');
        }
        $this->container['purchaseLedgerAccountId'] = $purchaseLedgerAccountId;

        return $this;
    }

    /**
     * Gets itemCode
     *
     * @return string|null
     */
    public function getItemCode(): ?string
    {
        return $this->container['itemCode'];
    }

    /**
     * Sets itemCode
     *
     * @param string|null $itemCode The item code for the product
     *
     * @return $this
     */
    public function setItemCode(?string $itemCode): static
    {
        if (is_null($itemCode)) {
            throw new InvalidArgumentException('non-nullable itemCode cannot be null');
        }
        $this->container['itemCode'] = $itemCode;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes(): ?string
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes The notes for the product
     *
     * @return $this
     */
    public function setNotes(?string $notes): static
    {
        if (is_null($notes)) {
            throw new InvalidArgumentException('non-nullable notes cannot be null');
        }
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets salesTaxRateId
     *
     * @return string|null
     */
    public function getSalesTaxRateId(): ?string
    {
        return $this->container['salesTaxRateId'];
    }

    /**
     * Sets salesTaxRateId
     *
     * @param string|null $salesTaxRateId The ID of the Sales Tax Rate.
     *
     * @return $this
     */
    public function setSalesTaxRateId(?string $salesTaxRateId): static
    {
        if (is_null($salesTaxRateId)) {
            throw new InvalidArgumentException('non-nullable salesTaxRateId cannot be null');
        }
        $this->container['salesTaxRateId'] = $salesTaxRateId;

        return $this;
    }

    /**
     * Gets usualSupplierId
     *
     * @return string|null
     */
    public function getUsualSupplierId(): ?string
    {
        return $this->container['usualSupplierId'];
    }

    /**
     * Sets usualSupplierId
     *
     * @param string|null $usualSupplierId The ID of the Usual Supplier.
     *
     * @return $this
     */
    public function setUsualSupplierId(?string $usualSupplierId): static
    {
        if (is_null($usualSupplierId)) {
            throw new InvalidArgumentException('non-nullable usualSupplierId cannot be null');
        }
        $this->container['usualSupplierId'] = $usualSupplierId;

        return $this;
    }

    /**
     * Gets purchaseTaxRateId
     *
     * @return string|null
     */
    public function getPurchaseTaxRateId(): ?string
    {
        return $this->container['purchaseTaxRateId'];
    }

    /**
     * Sets purchaseTaxRateId
     *
     * @param string|null $purchaseTaxRateId The ID of the Purchase Tax Rate.
     *
     * @return $this
     */
    public function setPurchaseTaxRateId(?string $purchaseTaxRateId): static
    {
        if (is_null($purchaseTaxRateId)) {
            throw new InvalidArgumentException('non-nullable purchaseTaxRateId cannot be null');
        }
        $this->container['purchaseTaxRateId'] = $purchaseTaxRateId;

        return $this;
    }

    /**
     * Gets costPrice
     *
     * @return float|null
     */
    public function getCostPrice(): ?float
    {
        return $this->container['costPrice'];
    }

    /**
     * Sets costPrice
     *
     * @param float|null $costPrice The cost price of the product
     *
     * @return $this
     */
    public function setCostPrice(?float $costPrice): static
    {
        if (is_null($costPrice)) {
            throw new InvalidArgumentException('non-nullable costPrice cannot be null');
        }
        $this->container['costPrice'] = $costPrice;

        return $this;
    }

    /**
     * Gets sourceGuid
     *
     * @return string|null
     */
    public function getSourceGuid(): ?string
    {
        return $this->container['sourceGuid'];
    }

    /**
     * Sets sourceGuid
     *
     * @param string|null $sourceGuid Used when importing products from external sources
     *
     * @return $this
     */
    public function setSourceGuid(?string $sourceGuid): static
    {
        if (is_null($sourceGuid)) {
            throw new InvalidArgumentException('non-nullable sourceGuid cannot be null');
        }
        $this->container['sourceGuid'] = $sourceGuid;

        return $this;
    }

    /**
     * Gets purchaseDescription
     *
     * @return string|null
     */
    public function getPurchaseDescription(): ?string
    {
        return $this->container['purchaseDescription'];
    }

    /**
     * Sets purchaseDescription
     *
     * @param string|null $purchaseDescription The product purchase description
     *
     * @return $this
     */
    public function setPurchaseDescription(?string $purchaseDescription): static
    {
        if (is_null($purchaseDescription)) {
            throw new InvalidArgumentException('non-nullable purchaseDescription cannot be null');
        }
        $this->container['purchaseDescription'] = $purchaseDescription;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active Indicates whether the product is active
     *
     * @return $this
     */
    public function setActive(?bool $active): static
    {
        if (is_null($active)) {
            throw new InvalidArgumentException('non-nullable active cannot be null');
        }
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets catalogItemTypeId
     *
     * @return string|null
     */
    public function getCatalogItemTypeId(): ?string
    {
        return $this->container['catalogItemTypeId'];
    }

    /**
     * Sets catalogItemTypeId
     *
     * @param string|null $catalogItemTypeId The ID of the Catalog Item Type.
     *
     * @return $this
     */
    public function setCatalogItemTypeId(?string $catalogItemTypeId): static
    {
        if (is_null($catalogItemTypeId)) {
            throw new InvalidArgumentException('non-nullable catalogItemTypeId cannot be null');
        }
        $this->container['catalogItemTypeId'] = $catalogItemTypeId;

        return $this;
    }

    /**
     * Gets salesPrices
     *
     * @return \SynergiTech\Sage\Model\PostProductsProductSalesPricesInner[]|null
     */
    public function getSalesPrices(): ?array
    {
        return $this->container['salesPrices'];
    }

    /**
     * Sets salesPrices
     *
     * @param \SynergiTech\Sage\Model\PostProductsProductSalesPricesInner[]|null $salesPrices salesPrices
     *
     * @return $this
     */
    public function setSalesPrices(?array $salesPrices): static
    {
        if (is_null($salesPrices)) {
            throw new InvalidArgumentException('non-nullable salesPrices cannot be null');
        }
        $this->container['salesPrices'] = $salesPrices;

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


