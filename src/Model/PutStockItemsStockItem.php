<?php
/**
 * PutStockItemsStockItem
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
 * PutStockItemsStockItem Class Doc Comment
 *
 * @package  SynergiTech\Sage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class PutStockItemsStockItem implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'putStockItems_stock_item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'itemCode' => 'string',
        'description' => 'string',
        'salesLedgerAccountId' => 'string',
        'purchaseLedgerAccountId' => 'string',
        'notes' => 'string',
        'salesTaxRateId' => 'string',
        'usualSupplierId' => 'string',
        'purchaseTaxRateId' => 'string',
        'costPrice' => 'float',
        'sourceGuid' => 'string',
        'purchaseDescription' => 'string',
        'reorderLevel' => 'float',
        'reorderQuantity' => 'float',
        'location' => 'string',
        'barcode' => 'string',
        'supplierPartNumber' => 'string',
        'weight' => 'float',
        'measurementUnit' => 'string',
        'weightConverted' => 'float',
        'active' => 'bool',
        'quantityInStock' => 'float',
        'lastCostPrice' => 'float',
        'lastCostPriceStockValue' => 'float',
        'averageCostPrice' => 'float',
        'averageCostPriceStockValue' => 'float',
        'costPriceLastUpdated' => '\DateTime',
        'salesPrices' => '\SynergiTech\Sage\Model\PostProductsProductSalesPricesInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'itemCode' => null,
        'description' => null,
        'salesLedgerAccountId' => null,
        'purchaseLedgerAccountId' => null,
        'notes' => null,
        'salesTaxRateId' => null,
        'usualSupplierId' => null,
        'purchaseTaxRateId' => null,
        'costPrice' => 'double',
        'sourceGuid' => null,
        'purchaseDescription' => null,
        'reorderLevel' => 'double',
        'reorderQuantity' => 'double',
        'location' => null,
        'barcode' => null,
        'supplierPartNumber' => null,
        'weight' => 'double',
        'measurementUnit' => null,
        'weightConverted' => 'double',
        'active' => null,
        'quantityInStock' => 'double',
        'lastCostPrice' => 'double',
        'lastCostPriceStockValue' => 'double',
        'averageCostPrice' => 'double',
        'averageCostPriceStockValue' => 'double',
        'costPriceLastUpdated' => 'date',
        'salesPrices' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'itemCode' => false,
        'description' => false,
        'salesLedgerAccountId' => false,
        'purchaseLedgerAccountId' => false,
        'notes' => false,
        'salesTaxRateId' => false,
        'usualSupplierId' => false,
        'purchaseTaxRateId' => false,
        'costPrice' => false,
        'sourceGuid' => false,
        'purchaseDescription' => false,
        'reorderLevel' => false,
        'reorderQuantity' => false,
        'location' => false,
        'barcode' => false,
        'supplierPartNumber' => false,
        'weight' => false,
        'measurementUnit' => false,
        'weightConverted' => false,
        'active' => false,
        'quantityInStock' => false,
        'lastCostPrice' => false,
        'lastCostPriceStockValue' => false,
        'averageCostPrice' => false,
        'averageCostPriceStockValue' => false,
        'costPriceLastUpdated' => false,
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
        'itemCode' => 'item_code',
        'description' => 'description',
        'salesLedgerAccountId' => 'sales_ledger_account_id',
        'purchaseLedgerAccountId' => 'purchase_ledger_account_id',
        'notes' => 'notes',
        'salesTaxRateId' => 'sales_tax_rate_id',
        'usualSupplierId' => 'usual_supplier_id',
        'purchaseTaxRateId' => 'purchase_tax_rate_id',
        'costPrice' => 'cost_price',
        'sourceGuid' => 'source_guid',
        'purchaseDescription' => 'purchase_description',
        'reorderLevel' => 'reorder_level',
        'reorderQuantity' => 'reorder_quantity',
        'location' => 'location',
        'barcode' => 'barcode',
        'supplierPartNumber' => 'supplier_part_number',
        'weight' => 'weight',
        'measurementUnit' => 'measurement_unit',
        'weightConverted' => 'weight_converted',
        'active' => 'active',
        'quantityInStock' => 'quantity_in_stock',
        'lastCostPrice' => 'last_cost_price',
        'lastCostPriceStockValue' => 'last_cost_price_stock_value',
        'averageCostPrice' => 'average_cost_price',
        'averageCostPriceStockValue' => 'average_cost_price_stock_value',
        'costPriceLastUpdated' => 'cost_price_last_updated',
        'salesPrices' => 'sales_prices'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'itemCode' => 'setItemCode',
        'description' => 'setDescription',
        'salesLedgerAccountId' => 'setSalesLedgerAccountId',
        'purchaseLedgerAccountId' => 'setPurchaseLedgerAccountId',
        'notes' => 'setNotes',
        'salesTaxRateId' => 'setSalesTaxRateId',
        'usualSupplierId' => 'setUsualSupplierId',
        'purchaseTaxRateId' => 'setPurchaseTaxRateId',
        'costPrice' => 'setCostPrice',
        'sourceGuid' => 'setSourceGuid',
        'purchaseDescription' => 'setPurchaseDescription',
        'reorderLevel' => 'setReorderLevel',
        'reorderQuantity' => 'setReorderQuantity',
        'location' => 'setLocation',
        'barcode' => 'setBarcode',
        'supplierPartNumber' => 'setSupplierPartNumber',
        'weight' => 'setWeight',
        'measurementUnit' => 'setMeasurementUnit',
        'weightConverted' => 'setWeightConverted',
        'active' => 'setActive',
        'quantityInStock' => 'setQuantityInStock',
        'lastCostPrice' => 'setLastCostPrice',
        'lastCostPriceStockValue' => 'setLastCostPriceStockValue',
        'averageCostPrice' => 'setAverageCostPrice',
        'averageCostPriceStockValue' => 'setAverageCostPriceStockValue',
        'costPriceLastUpdated' => 'setCostPriceLastUpdated',
        'salesPrices' => 'setSalesPrices'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'itemCode' => 'getItemCode',
        'description' => 'getDescription',
        'salesLedgerAccountId' => 'getSalesLedgerAccountId',
        'purchaseLedgerAccountId' => 'getPurchaseLedgerAccountId',
        'notes' => 'getNotes',
        'salesTaxRateId' => 'getSalesTaxRateId',
        'usualSupplierId' => 'getUsualSupplierId',
        'purchaseTaxRateId' => 'getPurchaseTaxRateId',
        'costPrice' => 'getCostPrice',
        'sourceGuid' => 'getSourceGuid',
        'purchaseDescription' => 'getPurchaseDescription',
        'reorderLevel' => 'getReorderLevel',
        'reorderQuantity' => 'getReorderQuantity',
        'location' => 'getLocation',
        'barcode' => 'getBarcode',
        'supplierPartNumber' => 'getSupplierPartNumber',
        'weight' => 'getWeight',
        'measurementUnit' => 'getMeasurementUnit',
        'weightConverted' => 'getWeightConverted',
        'active' => 'getActive',
        'quantityInStock' => 'getQuantityInStock',
        'lastCostPrice' => 'getLastCostPrice',
        'lastCostPriceStockValue' => 'getLastCostPriceStockValue',
        'averageCostPrice' => 'getAverageCostPrice',
        'averageCostPriceStockValue' => 'getAverageCostPriceStockValue',
        'costPriceLastUpdated' => 'getCostPriceLastUpdated',
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
        $this->setIfExists('itemCode', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('salesLedgerAccountId', $data ?? [], null);
        $this->setIfExists('purchaseLedgerAccountId', $data ?? [], null);
        $this->setIfExists('notes', $data ?? [], null);
        $this->setIfExists('salesTaxRateId', $data ?? [], null);
        $this->setIfExists('usualSupplierId', $data ?? [], null);
        $this->setIfExists('purchaseTaxRateId', $data ?? [], null);
        $this->setIfExists('costPrice', $data ?? [], null);
        $this->setIfExists('sourceGuid', $data ?? [], null);
        $this->setIfExists('purchaseDescription', $data ?? [], null);
        $this->setIfExists('reorderLevel', $data ?? [], null);
        $this->setIfExists('reorderQuantity', $data ?? [], null);
        $this->setIfExists('location', $data ?? [], null);
        $this->setIfExists('barcode', $data ?? [], null);
        $this->setIfExists('supplierPartNumber', $data ?? [], null);
        $this->setIfExists('weight', $data ?? [], null);
        $this->setIfExists('measurementUnit', $data ?? [], null);
        $this->setIfExists('weightConverted', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('quantityInStock', $data ?? [], null);
        $this->setIfExists('lastCostPrice', $data ?? [], null);
        $this->setIfExists('lastCostPriceStockValue', $data ?? [], null);
        $this->setIfExists('averageCostPrice', $data ?? [], null);
        $this->setIfExists('averageCostPriceStockValue', $data ?? [], null);
        $this->setIfExists('costPriceLastUpdated', $data ?? [], null);
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
     * @param string|null $itemCode The item code for the stock item
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
     * @param string|null $description The stock item description
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
     * @param string|null $salesLedgerAccountId The sales ledger account for the stock item
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
     * @param string|null $purchaseLedgerAccountId The purchase ledger account for the stock item
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
     * @param string|null $notes The notes for the stock item
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
     * @param float|null $costPrice The cost price of the stock item
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
     * @param string|null $sourceGuid Used when importing stock items from external sources
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
     * @param string|null $purchaseDescription The stock item purchase description
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
     * Gets reorderLevel
     *
     * @return float|null
     */
    public function getReorderLevel(): ?float
    {
        return $this->container['reorderLevel'];
    }

    /**
     * Sets reorderLevel
     *
     * @param float|null $reorderLevel The reorder level for the stock item
     *
     * @return $this
     */
    public function setReorderLevel(?float $reorderLevel): static
    {
        if (is_null($reorderLevel)) {
            throw new InvalidArgumentException('non-nullable reorderLevel cannot be null');
        }
        $this->container['reorderLevel'] = $reorderLevel;

        return $this;
    }

    /**
     * Gets reorderQuantity
     *
     * @return float|null
     */
    public function getReorderQuantity(): ?float
    {
        return $this->container['reorderQuantity'];
    }

    /**
     * Sets reorderQuantity
     *
     * @param float|null $reorderQuantity The reorder quantity for the stock item
     *
     * @return $this
     */
    public function setReorderQuantity(?float $reorderQuantity): static
    {
        if (is_null($reorderQuantity)) {
            throw new InvalidArgumentException('non-nullable reorderQuantity cannot be null');
        }
        $this->container['reorderQuantity'] = $reorderQuantity;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string|null $location The location for the stock item
     *
     * @return $this
     */
    public function setLocation(?string $location): static
    {
        if (is_null($location)) {
            throw new InvalidArgumentException('non-nullable location cannot be null');
        }
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets barcode
     *
     * @return string|null
     */
    public function getBarcode(): ?string
    {
        return $this->container['barcode'];
    }

    /**
     * Sets barcode
     *
     * @param string|null $barcode The barcode for the stock item
     *
     * @return $this
     */
    public function setBarcode(?string $barcode): static
    {
        if (is_null($barcode)) {
            throw new InvalidArgumentException('non-nullable barcode cannot be null');
        }
        $this->container['barcode'] = $barcode;

        return $this;
    }

    /**
     * Gets supplierPartNumber
     *
     * @return string|null
     */
    public function getSupplierPartNumber(): ?string
    {
        return $this->container['supplierPartNumber'];
    }

    /**
     * Sets supplierPartNumber
     *
     * @param string|null $supplierPartNumber The supplier part number for stock item
     *
     * @return $this
     */
    public function setSupplierPartNumber(?string $supplierPartNumber): static
    {
        if (is_null($supplierPartNumber)) {
            throw new InvalidArgumentException('non-nullable supplierPartNumber cannot be null');
        }
        $this->container['supplierPartNumber'] = $supplierPartNumber;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return float|null
     */
    public function getWeight(): ?float
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param float|null $weight The weight of stock item
     *
     * @return $this
     */
    public function setWeight(?float $weight): static
    {
        if (is_null($weight)) {
            throw new InvalidArgumentException('non-nullable weight cannot be null');
        }
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets measurementUnit
     *
     * @return string|null
     */
    public function getMeasurementUnit(): ?string
    {
        return $this->container['measurementUnit'];
    }

    /**
     * Sets measurementUnit
     *
     * @param string|null $measurementUnit The unit of measure of weight for stock item
     *
     * @return $this
     */
    public function setMeasurementUnit(?string $measurementUnit): static
    {
        if (is_null($measurementUnit)) {
            throw new InvalidArgumentException('non-nullable measurementUnit cannot be null');
        }
        $this->container['measurementUnit'] = $measurementUnit;

        return $this;
    }

    /**
     * Gets weightConverted
     *
     * @return float|null
     */
    public function getWeightConverted(): ?float
    {
        return $this->container['weightConverted'];
    }

    /**
     * Sets weightConverted
     *
     * @param float|null $weightConverted The weight of stock item converted to the lowest unit of measurement
     *
     * @return $this
     */
    public function setWeightConverted(?float $weightConverted): static
    {
        if (is_null($weightConverted)) {
            throw new InvalidArgumentException('non-nullable weightConverted cannot be null');
        }
        $this->container['weightConverted'] = $weightConverted;

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
     * @param bool|null $active Indicates whether the stock item is active
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
     * Gets quantityInStock
     *
     * @return float|null
     */
    public function getQuantityInStock(): ?float
    {
        return $this->container['quantityInStock'];
    }

    /**
     * Sets quantityInStock
     *
     * @param float|null $quantityInStock The current quantity of the stock item held by the business
     *
     * @return $this
     */
    public function setQuantityInStock(?float $quantityInStock): static
    {
        if (is_null($quantityInStock)) {
            throw new InvalidArgumentException('non-nullable quantityInStock cannot be null');
        }
        $this->container['quantityInStock'] = $quantityInStock;

        return $this;
    }

    /**
     * Gets lastCostPrice
     *
     * @return float|null
     */
    public function getLastCostPrice(): ?float
    {
        return $this->container['lastCostPrice'];
    }

    /**
     * Sets lastCostPrice
     *
     * @param float|null $lastCostPrice The most recent 'purchase invoice' or 'adjustment in' price
     *
     * @return $this
     */
    public function setLastCostPrice(?float $lastCostPrice): static
    {
        if (is_null($lastCostPrice)) {
            throw new InvalidArgumentException('non-nullable lastCostPrice cannot be null');
        }
        $this->container['lastCostPrice'] = $lastCostPrice;

        return $this;
    }

    /**
     * Gets lastCostPriceStockValue
     *
     * @return float|null
     */
    public function getLastCostPriceStockValue(): ?float
    {
        return $this->container['lastCostPriceStockValue'];
    }

    /**
     * Sets lastCostPriceStockValue
     *
     * @param float|null $lastCostPriceStockValue The value of the current stock in terms of the last cost price
     *
     * @return $this
     */
    public function setLastCostPriceStockValue(?float $lastCostPriceStockValue): static
    {
        if (is_null($lastCostPriceStockValue)) {
            throw new InvalidArgumentException('non-nullable lastCostPriceStockValue cannot be null');
        }
        $this->container['lastCostPriceStockValue'] = $lastCostPriceStockValue;

        return $this;
    }

    /**
     * Gets averageCostPrice
     *
     * @return float|null
     */
    public function getAverageCostPrice(): ?float
    {
        return $this->container['averageCostPrice'];
    }

    /**
     * Sets averageCostPrice
     *
     * @param float|null $averageCostPrice The average price across all purchases of this stock item
     *
     * @return $this
     */
    public function setAverageCostPrice(?float $averageCostPrice): static
    {
        if (is_null($averageCostPrice)) {
            throw new InvalidArgumentException('non-nullable averageCostPrice cannot be null');
        }
        $this->container['averageCostPrice'] = $averageCostPrice;

        return $this;
    }

    /**
     * Gets averageCostPriceStockValue
     *
     * @return float|null
     */
    public function getAverageCostPriceStockValue(): ?float
    {
        return $this->container['averageCostPriceStockValue'];
    }

    /**
     * Sets averageCostPriceStockValue
     *
     * @param float|null $averageCostPriceStockValue The value of the current stock in terms of the average cost price
     *
     * @return $this
     */
    public function setAverageCostPriceStockValue(?float $averageCostPriceStockValue): static
    {
        if (is_null($averageCostPriceStockValue)) {
            throw new InvalidArgumentException('non-nullable averageCostPriceStockValue cannot be null');
        }
        $this->container['averageCostPriceStockValue'] = $averageCostPriceStockValue;

        return $this;
    }

    /**
     * Gets costPriceLastUpdated
     *
     * @return \DateTime|null
     */
    public function getCostPriceLastUpdated(): ?\DateTime
    {
        return $this->container['costPriceLastUpdated'];
    }

    /**
     * Sets costPriceLastUpdated
     *
     * @param \DateTime|null $costPriceLastUpdated The date on which the last cost price was last updated
     *
     * @return $this
     */
    public function setCostPriceLastUpdated(?\DateTime $costPriceLastUpdated): static
    {
        if (is_null($costPriceLastUpdated)) {
            throw new InvalidArgumentException('non-nullable costPriceLastUpdated cannot be null');
        }
        $this->container['costPriceLastUpdated'] = $costPriceLastUpdated;

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


