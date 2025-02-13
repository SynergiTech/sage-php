<?php
/**
 * PutSalesEstimatesSalesEstimateEstimateLinesInner
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
 * PutSalesEstimatesSalesEstimateEstimateLinesInner Class Doc Comment
 *
 * @package  SynergiTech\Sage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class PutSalesEstimatesSalesEstimateEstimateLinesInner implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'putSalesEstimates_sales_estimate_estimate_lines_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'description' => 'string',
        'ledgerAccountId' => 'string',
        'quantity' => 'float',
        'unitPrice' => 'float',
        'productId' => 'string',
        'serviceId' => 'string',
        'tradeOfAsset' => 'bool',
        'netAmount' => 'float',
        'taxRateId' => 'string',
        'taxAmount' => 'float',
        'totalAmount' => 'float',
        'baseCurrencyUnitPrice' => 'float',
        'unitPriceIncludesTax' => 'bool',
        'baseCurrencyNetAmount' => 'float',
        'baseCurrencyTaxAmount' => 'float',
        'baseCurrencyTotalAmount' => 'float',
        'euGoodsServicesTypeId' => 'string',
        'discountAmount' => 'float',
        'baseCurrencyDiscountAmount' => 'float',
        'discountPercentage' => 'float',
        'euSalesDescriptionId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'description' => null,
        'ledgerAccountId' => null,
        'quantity' => 'double',
        'unitPrice' => 'double',
        'productId' => null,
        'serviceId' => null,
        'tradeOfAsset' => null,
        'netAmount' => 'double',
        'taxRateId' => null,
        'taxAmount' => 'double',
        'totalAmount' => 'double',
        'baseCurrencyUnitPrice' => 'double',
        'unitPriceIncludesTax' => null,
        'baseCurrencyNetAmount' => 'double',
        'baseCurrencyTaxAmount' => 'double',
        'baseCurrencyTotalAmount' => 'double',
        'euGoodsServicesTypeId' => null,
        'discountAmount' => 'double',
        'baseCurrencyDiscountAmount' => 'double',
        'discountPercentage' => 'double',
        'euSalesDescriptionId' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'description' => false,
        'ledgerAccountId' => false,
        'quantity' => false,
        'unitPrice' => false,
        'productId' => false,
        'serviceId' => false,
        'tradeOfAsset' => false,
        'netAmount' => false,
        'taxRateId' => false,
        'taxAmount' => false,
        'totalAmount' => false,
        'baseCurrencyUnitPrice' => false,
        'unitPriceIncludesTax' => false,
        'baseCurrencyNetAmount' => false,
        'baseCurrencyTaxAmount' => false,
        'baseCurrencyTotalAmount' => false,
        'euGoodsServicesTypeId' => false,
        'discountAmount' => false,
        'baseCurrencyDiscountAmount' => false,
        'discountPercentage' => false,
        'euSalesDescriptionId' => false
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
        'ledgerAccountId' => 'ledger_account_id',
        'quantity' => 'quantity',
        'unitPrice' => 'unit_price',
        'productId' => 'product_id',
        'serviceId' => 'service_id',
        'tradeOfAsset' => 'trade_of_asset',
        'netAmount' => 'net_amount',
        'taxRateId' => 'tax_rate_id',
        'taxAmount' => 'tax_amount',
        'totalAmount' => 'total_amount',
        'baseCurrencyUnitPrice' => 'base_currency_unit_price',
        'unitPriceIncludesTax' => 'unit_price_includes_tax',
        'baseCurrencyNetAmount' => 'base_currency_net_amount',
        'baseCurrencyTaxAmount' => 'base_currency_tax_amount',
        'baseCurrencyTotalAmount' => 'base_currency_total_amount',
        'euGoodsServicesTypeId' => 'eu_goods_services_type_id',
        'discountAmount' => 'discount_amount',
        'baseCurrencyDiscountAmount' => 'base_currency_discount_amount',
        'discountPercentage' => 'discount_percentage',
        'euSalesDescriptionId' => 'eu_sales_description_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'description' => 'setDescription',
        'ledgerAccountId' => 'setLedgerAccountId',
        'quantity' => 'setQuantity',
        'unitPrice' => 'setUnitPrice',
        'productId' => 'setProductId',
        'serviceId' => 'setServiceId',
        'tradeOfAsset' => 'setTradeOfAsset',
        'netAmount' => 'setNetAmount',
        'taxRateId' => 'setTaxRateId',
        'taxAmount' => 'setTaxAmount',
        'totalAmount' => 'setTotalAmount',
        'baseCurrencyUnitPrice' => 'setBaseCurrencyUnitPrice',
        'unitPriceIncludesTax' => 'setUnitPriceIncludesTax',
        'baseCurrencyNetAmount' => 'setBaseCurrencyNetAmount',
        'baseCurrencyTaxAmount' => 'setBaseCurrencyTaxAmount',
        'baseCurrencyTotalAmount' => 'setBaseCurrencyTotalAmount',
        'euGoodsServicesTypeId' => 'setEuGoodsServicesTypeId',
        'discountAmount' => 'setDiscountAmount',
        'baseCurrencyDiscountAmount' => 'setBaseCurrencyDiscountAmount',
        'discountPercentage' => 'setDiscountPercentage',
        'euSalesDescriptionId' => 'setEuSalesDescriptionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'description' => 'getDescription',
        'ledgerAccountId' => 'getLedgerAccountId',
        'quantity' => 'getQuantity',
        'unitPrice' => 'getUnitPrice',
        'productId' => 'getProductId',
        'serviceId' => 'getServiceId',
        'tradeOfAsset' => 'getTradeOfAsset',
        'netAmount' => 'getNetAmount',
        'taxRateId' => 'getTaxRateId',
        'taxAmount' => 'getTaxAmount',
        'totalAmount' => 'getTotalAmount',
        'baseCurrencyUnitPrice' => 'getBaseCurrencyUnitPrice',
        'unitPriceIncludesTax' => 'getUnitPriceIncludesTax',
        'baseCurrencyNetAmount' => 'getBaseCurrencyNetAmount',
        'baseCurrencyTaxAmount' => 'getBaseCurrencyTaxAmount',
        'baseCurrencyTotalAmount' => 'getBaseCurrencyTotalAmount',
        'euGoodsServicesTypeId' => 'getEuGoodsServicesTypeId',
        'discountAmount' => 'getDiscountAmount',
        'baseCurrencyDiscountAmount' => 'getBaseCurrencyDiscountAmount',
        'discountPercentage' => 'getDiscountPercentage',
        'euSalesDescriptionId' => 'getEuSalesDescriptionId'
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
        $this->setIfExists('ledgerAccountId', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('unitPrice', $data ?? [], null);
        $this->setIfExists('productId', $data ?? [], null);
        $this->setIfExists('serviceId', $data ?? [], null);
        $this->setIfExists('tradeOfAsset', $data ?? [], null);
        $this->setIfExists('netAmount', $data ?? [], null);
        $this->setIfExists('taxRateId', $data ?? [], null);
        $this->setIfExists('taxAmount', $data ?? [], null);
        $this->setIfExists('totalAmount', $data ?? [], null);
        $this->setIfExists('baseCurrencyUnitPrice', $data ?? [], null);
        $this->setIfExists('unitPriceIncludesTax', $data ?? [], null);
        $this->setIfExists('baseCurrencyNetAmount', $data ?? [], null);
        $this->setIfExists('baseCurrencyTaxAmount', $data ?? [], null);
        $this->setIfExists('baseCurrencyTotalAmount', $data ?? [], null);
        $this->setIfExists('euGoodsServicesTypeId', $data ?? [], null);
        $this->setIfExists('discountAmount', $data ?? [], null);
        $this->setIfExists('baseCurrencyDiscountAmount', $data ?? [], null);
        $this->setIfExists('discountPercentage', $data ?? [], null);
        $this->setIfExists('euSalesDescriptionId', $data ?? [], null);
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
     * @param string|null $description The description for the quote line
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
     * Gets quantity
     *
     * @return float|null
     */
    public function getQuantity(): ?float
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float|null $quantity The quantity for the quote line
     *
     * @return $this
     */
    public function setQuantity(?float $quantity): static
    {
        if (is_null($quantity)) {
            throw new InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets unitPrice
     *
     * @return float|null
     */
    public function getUnitPrice(): ?float
    {
        return $this->container['unitPrice'];
    }

    /**
     * Sets unitPrice
     *
     * @param float|null $unitPrice The unit price for the quote line
     *
     * @return $this
     */
    public function setUnitPrice(?float $unitPrice): static
    {
        if (is_null($unitPrice)) {
            throw new InvalidArgumentException('non-nullable unitPrice cannot be null');
        }
        $this->container['unitPrice'] = $unitPrice;

        return $this;
    }

    /**
     * Gets productId
     *
     * @return string|null
     */
    public function getProductId(): ?string
    {
        return $this->container['productId'];
    }

    /**
     * Sets productId
     *
     * @param string|null $productId The ID of the Product.
     *
     * @return $this
     */
    public function setProductId(?string $productId): static
    {
        if (is_null($productId)) {
            throw new InvalidArgumentException('non-nullable productId cannot be null');
        }
        $this->container['productId'] = $productId;

        return $this;
    }

    /**
     * Gets serviceId
     *
     * @return string|null
     */
    public function getServiceId(): ?string
    {
        return $this->container['serviceId'];
    }

    /**
     * Sets serviceId
     *
     * @param string|null $serviceId The ID of the Service.
     *
     * @return $this
     */
    public function setServiceId(?string $serviceId): static
    {
        if (is_null($serviceId)) {
            throw new InvalidArgumentException('non-nullable serviceId cannot be null');
        }
        $this->container['serviceId'] = $serviceId;

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
     * @param float|null $netAmount The net amount for the quote line
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
     * @param float|null $taxAmount The tax amount for the quote line\". This attribute is required in v3.1, unless the tax rate is of a \"zero\", \"exempt\" or \"no_tax\" type. Then the tax_amount is infered as 0.0. In v3, this attribute is optional, but you should still set, as it defaults to 0.0 in any case. This is not what you want for tax rates with a percentage > 0.0.
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
     * @param float|null $totalAmount The total amount for the quote line
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
     * Gets baseCurrencyUnitPrice
     *
     * @return float|null
     */
    public function getBaseCurrencyUnitPrice(): ?float
    {
        return $this->container['baseCurrencyUnitPrice'];
    }

    /**
     * Sets baseCurrencyUnitPrice
     *
     * @param float|null $baseCurrencyUnitPrice The unit price for the quote line in base currency
     *
     * @return $this
     */
    public function setBaseCurrencyUnitPrice(?float $baseCurrencyUnitPrice): static
    {
        if (is_null($baseCurrencyUnitPrice)) {
            throw new InvalidArgumentException('non-nullable baseCurrencyUnitPrice cannot be null');
        }
        $this->container['baseCurrencyUnitPrice'] = $baseCurrencyUnitPrice;

        return $this;
    }

    /**
     * Gets unitPriceIncludesTax
     *
     * @return bool|null
     */
    public function getUnitPriceIncludesTax(): ?bool
    {
        return $this->container['unitPriceIncludesTax'];
    }

    /**
     * Sets unitPriceIncludesTax
     *
     * @param bool|null $unitPriceIncludesTax Defines whether the unit price includes tax
     *
     * @return $this
     */
    public function setUnitPriceIncludesTax(?bool $unitPriceIncludesTax): static
    {
        if (is_null($unitPriceIncludesTax)) {
            throw new InvalidArgumentException('non-nullable unitPriceIncludesTax cannot be null');
        }
        $this->container['unitPriceIncludesTax'] = $unitPriceIncludesTax;

        return $this;
    }

    /**
     * Gets baseCurrencyNetAmount
     *
     * @return float|null
     */
    public function getBaseCurrencyNetAmount(): ?float
    {
        return $this->container['baseCurrencyNetAmount'];
    }

    /**
     * Sets baseCurrencyNetAmount
     *
     * @param float|null $baseCurrencyNetAmount The net amount for the quote line in base currency
     *
     * @return $this
     */
    public function setBaseCurrencyNetAmount(?float $baseCurrencyNetAmount): static
    {
        if (is_null($baseCurrencyNetAmount)) {
            throw new InvalidArgumentException('non-nullable baseCurrencyNetAmount cannot be null');
        }
        $this->container['baseCurrencyNetAmount'] = $baseCurrencyNetAmount;

        return $this;
    }

    /**
     * Gets baseCurrencyTaxAmount
     *
     * @return float|null
     */
    public function getBaseCurrencyTaxAmount(): ?float
    {
        return $this->container['baseCurrencyTaxAmount'];
    }

    /**
     * Sets baseCurrencyTaxAmount
     *
     * @param float|null $baseCurrencyTaxAmount The tax amount for the quote line in base currency
     *
     * @return $this
     */
    public function setBaseCurrencyTaxAmount(?float $baseCurrencyTaxAmount): static
    {
        if (is_null($baseCurrencyTaxAmount)) {
            throw new InvalidArgumentException('non-nullable baseCurrencyTaxAmount cannot be null');
        }
        $this->container['baseCurrencyTaxAmount'] = $baseCurrencyTaxAmount;

        return $this;
    }

    /**
     * Gets baseCurrencyTotalAmount
     *
     * @return float|null
     */
    public function getBaseCurrencyTotalAmount(): ?float
    {
        return $this->container['baseCurrencyTotalAmount'];
    }

    /**
     * Sets baseCurrencyTotalAmount
     *
     * @param float|null $baseCurrencyTotalAmount The total amount for the quote line in base currency
     *
     * @return $this
     */
    public function setBaseCurrencyTotalAmount(?float $baseCurrencyTotalAmount): static
    {
        if (is_null($baseCurrencyTotalAmount)) {
            throw new InvalidArgumentException('non-nullable baseCurrencyTotalAmount cannot be null');
        }
        $this->container['baseCurrencyTotalAmount'] = $baseCurrencyTotalAmount;

        return $this;
    }

    /**
     * Gets euGoodsServicesTypeId
     *
     * @return string|null
     */
    public function getEuGoodsServicesTypeId(): ?string
    {
        return $this->container['euGoodsServicesTypeId'];
    }

    /**
     * Sets euGoodsServicesTypeId
     *
     * @param string|null $euGoodsServicesTypeId The ID of the EU Goods Services Type.
     *
     * @return $this
     */
    public function setEuGoodsServicesTypeId(?string $euGoodsServicesTypeId): static
    {
        if (is_null($euGoodsServicesTypeId)) {
            throw new InvalidArgumentException('non-nullable euGoodsServicesTypeId cannot be null');
        }
        $this->container['euGoodsServicesTypeId'] = $euGoodsServicesTypeId;

        return $this;
    }

    /**
     * Gets discountAmount
     *
     * @return float|null
     */
    public function getDiscountAmount(): ?float
    {
        return $this->container['discountAmount'];
    }

    /**
     * Sets discountAmount
     *
     * @param float|null $discountAmount The discount amount for the quote line
     *
     * @return $this
     */
    public function setDiscountAmount(?float $discountAmount): static
    {
        if (is_null($discountAmount)) {
            throw new InvalidArgumentException('non-nullable discountAmount cannot be null');
        }
        $this->container['discountAmount'] = $discountAmount;

        return $this;
    }

    /**
     * Gets baseCurrencyDiscountAmount
     *
     * @return float|null
     */
    public function getBaseCurrencyDiscountAmount(): ?float
    {
        return $this->container['baseCurrencyDiscountAmount'];
    }

    /**
     * Sets baseCurrencyDiscountAmount
     *
     * @param float|null $baseCurrencyDiscountAmount The discount amount for the quote line in base currency
     *
     * @return $this
     */
    public function setBaseCurrencyDiscountAmount(?float $baseCurrencyDiscountAmount): static
    {
        if (is_null($baseCurrencyDiscountAmount)) {
            throw new InvalidArgumentException('non-nullable baseCurrencyDiscountAmount cannot be null');
        }
        $this->container['baseCurrencyDiscountAmount'] = $baseCurrencyDiscountAmount;

        return $this;
    }

    /**
     * Gets discountPercentage
     *
     * @return float|null
     */
    public function getDiscountPercentage(): ?float
    {
        return $this->container['discountPercentage'];
    }

    /**
     * Sets discountPercentage
     *
     * @param float|null $discountPercentage The discount percentage for the quote line
     *
     * @return $this
     */
    public function setDiscountPercentage(?float $discountPercentage): static
    {
        if (is_null($discountPercentage)) {
            throw new InvalidArgumentException('non-nullable discountPercentage cannot be null');
        }
        $this->container['discountPercentage'] = $discountPercentage;

        return $this;
    }

    /**
     * Gets euSalesDescriptionId
     *
     * @return string|null
     */
    public function getEuSalesDescriptionId(): ?string
    {
        return $this->container['euSalesDescriptionId'];
    }

    /**
     * Sets euSalesDescriptionId
     *
     * @param string|null $euSalesDescriptionId The ID of the EU Sales Description.
     *
     * @return $this
     */
    public function setEuSalesDescriptionId(?string $euSalesDescriptionId): static
    {
        if (is_null($euSalesDescriptionId)) {
            throw new InvalidArgumentException('non-nullable euSalesDescriptionId cannot be null');
        }
        $this->container['euSalesDescriptionId'] = $euSalesDescriptionId;

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


