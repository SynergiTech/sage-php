<?php
/**
 * PurchaseCreditNoteLineItem
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
 * PurchaseCreditNoteLineItem Class Doc Comment
 *
 * @package  SynergiTech\Sage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class PurchaseCreditNoteLineItem implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PurchaseCreditNoteLineItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'displayedAs' => 'string',
        'isPurchaseForResale' => 'bool',
        'analysisTypeCategories' => '\SynergiTech\Sage\Model\AnalysisTypeLineItem[]',
        'description' => 'string',
        'product' => '\SynergiTech\Sage\Model\Product',
        'service' => '\SynergiTech\Sage\Model\Service',
        'ledgerAccount' => '\SynergiTech\Sage\Model\Base',
        'tradeOfAsset' => 'bool',
        'quantity' => 'float',
        'unitPrice' => 'float',
        'netAmount' => 'float',
        'taxRate' => '\SynergiTech\Sage\Model\Base',
        'taxAmount' => 'float',
        'taxBreakdown' => '\SynergiTech\Sage\Model\TaxBreakdown[]',
        'totalAmount' => 'float',
        'baseCurrencyUnitPrice' => 'float',
        'unitPriceIncludesTax' => 'bool',
        'baseCurrencyNetAmount' => 'float',
        'baseCurrencyTaxAmount' => 'float',
        'baseCurrencyTaxBreakdown' => '\SynergiTech\Sage\Model\TaxBreakdown[]',
        'baseCurrencyTotalAmount' => 'float',
        'euGoodsServicesType' => '\SynergiTech\Sage\Model\Base',
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
        'id' => null,
        'displayedAs' => null,
        'isPurchaseForResale' => null,
        'analysisTypeCategories' => null,
        'description' => null,
        'product' => null,
        'service' => null,
        'ledgerAccount' => null,
        'tradeOfAsset' => null,
        'quantity' => 'double',
        'unitPrice' => 'double',
        'netAmount' => 'double',
        'taxRate' => null,
        'taxAmount' => 'double',
        'taxBreakdown' => null,
        'totalAmount' => 'double',
        'baseCurrencyUnitPrice' => 'double',
        'unitPriceIncludesTax' => null,
        'baseCurrencyNetAmount' => 'double',
        'baseCurrencyTaxAmount' => 'double',
        'baseCurrencyTaxBreakdown' => null,
        'baseCurrencyTotalAmount' => 'double',
        'euGoodsServicesType' => null,
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
        'id' => false,
        'displayedAs' => false,
        'isPurchaseForResale' => false,
        'analysisTypeCategories' => false,
        'description' => false,
        'product' => false,
        'service' => false,
        'ledgerAccount' => false,
        'tradeOfAsset' => false,
        'quantity' => false,
        'unitPrice' => false,
        'netAmount' => false,
        'taxRate' => false,
        'taxAmount' => false,
        'taxBreakdown' => false,
        'totalAmount' => false,
        'baseCurrencyUnitPrice' => false,
        'unitPriceIncludesTax' => false,
        'baseCurrencyNetAmount' => false,
        'baseCurrencyTaxAmount' => false,
        'baseCurrencyTaxBreakdown' => false,
        'baseCurrencyTotalAmount' => false,
        'euGoodsServicesType' => false,
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
        'id' => 'id',
        'displayedAs' => 'displayed_as',
        'isPurchaseForResale' => 'is_purchase_for_resale',
        'analysisTypeCategories' => 'analysis_type_categories',
        'description' => 'description',
        'product' => 'product',
        'service' => 'service',
        'ledgerAccount' => 'ledger_account',
        'tradeOfAsset' => 'trade_of_asset',
        'quantity' => 'quantity',
        'unitPrice' => 'unit_price',
        'netAmount' => 'net_amount',
        'taxRate' => 'tax_rate',
        'taxAmount' => 'tax_amount',
        'taxBreakdown' => 'tax_breakdown',
        'totalAmount' => 'total_amount',
        'baseCurrencyUnitPrice' => 'base_currency_unit_price',
        'unitPriceIncludesTax' => 'unit_price_includes_tax',
        'baseCurrencyNetAmount' => 'base_currency_net_amount',
        'baseCurrencyTaxAmount' => 'base_currency_tax_amount',
        'baseCurrencyTaxBreakdown' => 'base_currency_tax_breakdown',
        'baseCurrencyTotalAmount' => 'base_currency_total_amount',
        'euGoodsServicesType' => 'eu_goods_services_type',
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
        'id' => 'setId',
        'displayedAs' => 'setDisplayedAs',
        'isPurchaseForResale' => 'setIsPurchaseForResale',
        'analysisTypeCategories' => 'setAnalysisTypeCategories',
        'description' => 'setDescription',
        'product' => 'setProduct',
        'service' => 'setService',
        'ledgerAccount' => 'setLedgerAccount',
        'tradeOfAsset' => 'setTradeOfAsset',
        'quantity' => 'setQuantity',
        'unitPrice' => 'setUnitPrice',
        'netAmount' => 'setNetAmount',
        'taxRate' => 'setTaxRate',
        'taxAmount' => 'setTaxAmount',
        'taxBreakdown' => 'setTaxBreakdown',
        'totalAmount' => 'setTotalAmount',
        'baseCurrencyUnitPrice' => 'setBaseCurrencyUnitPrice',
        'unitPriceIncludesTax' => 'setUnitPriceIncludesTax',
        'baseCurrencyNetAmount' => 'setBaseCurrencyNetAmount',
        'baseCurrencyTaxAmount' => 'setBaseCurrencyTaxAmount',
        'baseCurrencyTaxBreakdown' => 'setBaseCurrencyTaxBreakdown',
        'baseCurrencyTotalAmount' => 'setBaseCurrencyTotalAmount',
        'euGoodsServicesType' => 'setEuGoodsServicesType',
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
        'id' => 'getId',
        'displayedAs' => 'getDisplayedAs',
        'isPurchaseForResale' => 'getIsPurchaseForResale',
        'analysisTypeCategories' => 'getAnalysisTypeCategories',
        'description' => 'getDescription',
        'product' => 'getProduct',
        'service' => 'getService',
        'ledgerAccount' => 'getLedgerAccount',
        'tradeOfAsset' => 'getTradeOfAsset',
        'quantity' => 'getQuantity',
        'unitPrice' => 'getUnitPrice',
        'netAmount' => 'getNetAmount',
        'taxRate' => 'getTaxRate',
        'taxAmount' => 'getTaxAmount',
        'taxBreakdown' => 'getTaxBreakdown',
        'totalAmount' => 'getTotalAmount',
        'baseCurrencyUnitPrice' => 'getBaseCurrencyUnitPrice',
        'unitPriceIncludesTax' => 'getUnitPriceIncludesTax',
        'baseCurrencyNetAmount' => 'getBaseCurrencyNetAmount',
        'baseCurrencyTaxAmount' => 'getBaseCurrencyTaxAmount',
        'baseCurrencyTaxBreakdown' => 'getBaseCurrencyTaxBreakdown',
        'baseCurrencyTotalAmount' => 'getBaseCurrencyTotalAmount',
        'euGoodsServicesType' => 'getEuGoodsServicesType',
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('displayedAs', $data ?? [], null);
        $this->setIfExists('isPurchaseForResale', $data ?? [], null);
        $this->setIfExists('analysisTypeCategories', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('product', $data ?? [], null);
        $this->setIfExists('service', $data ?? [], null);
        $this->setIfExists('ledgerAccount', $data ?? [], null);
        $this->setIfExists('tradeOfAsset', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('unitPrice', $data ?? [], null);
        $this->setIfExists('netAmount', $data ?? [], null);
        $this->setIfExists('taxRate', $data ?? [], null);
        $this->setIfExists('taxAmount', $data ?? [], null);
        $this->setIfExists('taxBreakdown', $data ?? [], null);
        $this->setIfExists('totalAmount', $data ?? [], null);
        $this->setIfExists('baseCurrencyUnitPrice', $data ?? [], null);
        $this->setIfExists('unitPriceIncludesTax', $data ?? [], null);
        $this->setIfExists('baseCurrencyNetAmount', $data ?? [], null);
        $this->setIfExists('baseCurrencyTaxAmount', $data ?? [], null);
        $this->setIfExists('baseCurrencyTaxBreakdown', $data ?? [], null);
        $this->setIfExists('baseCurrencyTotalAmount', $data ?? [], null);
        $this->setIfExists('euGoodsServicesType', $data ?? [], null);
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
     * @param bool|null $isPurchaseForResale Identifies whether the line item is for resale. (Ireland Only)
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
     * Gets analysisTypeCategories
     *
     * @return \SynergiTech\Sage\Model\AnalysisTypeLineItem[]|null
     */
    public function getAnalysisTypeCategories(): ?array
    {
        return $this->container['analysisTypeCategories'];
    }

    /**
     * Sets analysisTypeCategories
     *
     * @param \SynergiTech\Sage\Model\AnalysisTypeLineItem[]|null $analysisTypeCategories The analysis types information
     *
     * @return $this
     */
    public function setAnalysisTypeCategories(?array $analysisTypeCategories): static
    {
        if (is_null($analysisTypeCategories)) {
            throw new InvalidArgumentException('non-nullable analysisTypeCategories cannot be null');
        }
        $this->container['analysisTypeCategories'] = $analysisTypeCategories;

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
     * @param string|null $description The description for the credit note line
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
     * Gets product
     *
     * @return \SynergiTech\Sage\Model\Product|null
     */
    public function getProduct(): ?\SynergiTech\Sage\Model\Product
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \SynergiTech\Sage\Model\Product|null $product product
     *
     * @return $this
     */
    public function setProduct(?\SynergiTech\Sage\Model\Product $product): static
    {
        if (is_null($product)) {
            throw new InvalidArgumentException('non-nullable product cannot be null');
        }
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets service
     *
     * @return \SynergiTech\Sage\Model\Service|null
     */
    public function getService(): ?\SynergiTech\Sage\Model\Service
    {
        return $this->container['service'];
    }

    /**
     * Sets service
     *
     * @param \SynergiTech\Sage\Model\Service|null $service service
     *
     * @return $this
     */
    public function setService(?\SynergiTech\Sage\Model\Service $service): static
    {
        if (is_null($service)) {
            throw new InvalidArgumentException('non-nullable service cannot be null');
        }
        $this->container['service'] = $service;

        return $this;
    }

    /**
     * Gets ledgerAccount
     *
     * @return \SynergiTech\Sage\Model\Base|null
     */
    public function getLedgerAccount(): ?\SynergiTech\Sage\Model\Base
    {
        return $this->container['ledgerAccount'];
    }

    /**
     * Sets ledgerAccount
     *
     * @param \SynergiTech\Sage\Model\Base|null $ledgerAccount ledgerAccount
     *
     * @return $this
     */
    public function setLedgerAccount(?\SynergiTech\Sage\Model\Base $ledgerAccount): static
    {
        if (is_null($ledgerAccount)) {
            throw new InvalidArgumentException('non-nullable ledgerAccount cannot be null');
        }
        $this->container['ledgerAccount'] = $ledgerAccount;

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
     * @param float|null $quantity The quantity for the credit note line
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
     * @param float|null $unitPrice The unit price for the credit note line
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
     * @param float|null $netAmount The net amount for the credit note line
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
     * Gets taxRate
     *
     * @return \SynergiTech\Sage\Model\Base|null
     */
    public function getTaxRate(): ?\SynergiTech\Sage\Model\Base
    {
        return $this->container['taxRate'];
    }

    /**
     * Sets taxRate
     *
     * @param \SynergiTech\Sage\Model\Base|null $taxRate taxRate
     *
     * @return $this
     */
    public function setTaxRate(?\SynergiTech\Sage\Model\Base $taxRate): static
    {
        if (is_null($taxRate)) {
            throw new InvalidArgumentException('non-nullable taxRate cannot be null');
        }
        $this->container['taxRate'] = $taxRate;

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
     * @param float|null $taxAmount The tax amount for the credit note line\". This attribute is required in v3.1, unless the tax rate is of a \"zero\", \"exempt\" or \"no_tax\" type. Then the tax_amount is infered as 0.0. In v3, this attribute is optional, but you should still set, as it defaults to 0.0 in any case. This is not what you want for tax rates with a percentage > 0.0.
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
     * Gets taxBreakdown
     *
     * @return \SynergiTech\Sage\Model\TaxBreakdown[]|null
     */
    public function getTaxBreakdown(): ?array
    {
        return $this->container['taxBreakdown'];
    }

    /**
     * Sets taxBreakdown
     *
     * @param \SynergiTech\Sage\Model\TaxBreakdown[]|null $taxBreakdown The tax breakdown for the credit note line
     *
     * @return $this
     */
    public function setTaxBreakdown(?array $taxBreakdown): static
    {
        if (is_null($taxBreakdown)) {
            throw new InvalidArgumentException('non-nullable taxBreakdown cannot be null');
        }
        $this->container['taxBreakdown'] = $taxBreakdown;

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
     * @param float|null $totalAmount The total amount for the credit note line
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
     * @param float|null $baseCurrencyUnitPrice The unit price for the credit note line in base currency
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
     * @param float|null $baseCurrencyNetAmount The net amount for the credit note line in base currency
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
     * @param float|null $baseCurrencyTaxAmount The tax amount for the credit note line in base currency
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
     * Gets baseCurrencyTaxBreakdown
     *
     * @return \SynergiTech\Sage\Model\TaxBreakdown[]|null
     */
    public function getBaseCurrencyTaxBreakdown(): ?array
    {
        return $this->container['baseCurrencyTaxBreakdown'];
    }

    /**
     * Sets baseCurrencyTaxBreakdown
     *
     * @param \SynergiTech\Sage\Model\TaxBreakdown[]|null $baseCurrencyTaxBreakdown The tax breakdown for the credit note line in base currency
     *
     * @return $this
     */
    public function setBaseCurrencyTaxBreakdown(?array $baseCurrencyTaxBreakdown): static
    {
        if (is_null($baseCurrencyTaxBreakdown)) {
            throw new InvalidArgumentException('non-nullable baseCurrencyTaxBreakdown cannot be null');
        }
        $this->container['baseCurrencyTaxBreakdown'] = $baseCurrencyTaxBreakdown;

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
     * @param float|null $baseCurrencyTotalAmount The total amount for the credit note line in base currency
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
     * Gets euGoodsServicesType
     *
     * @return \SynergiTech\Sage\Model\Base|null
     */
    public function getEuGoodsServicesType(): ?\SynergiTech\Sage\Model\Base
    {
        return $this->container['euGoodsServicesType'];
    }

    /**
     * Sets euGoodsServicesType
     *
     * @param \SynergiTech\Sage\Model\Base|null $euGoodsServicesType euGoodsServicesType
     *
     * @return $this
     */
    public function setEuGoodsServicesType(?\SynergiTech\Sage\Model\Base $euGoodsServicesType): static
    {
        if (is_null($euGoodsServicesType)) {
            throw new InvalidArgumentException('non-nullable euGoodsServicesType cannot be null');
        }
        $this->container['euGoodsServicesType'] = $euGoodsServicesType;

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
     * @param float|null $gstAmount The gst or hst tax amount for the credit note line
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
     * @param float|null $pstAmount The pst or qst tax amount for the credit note line
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
     * @param bool|null $taxRecoverable Indicates if the credit note line is tax recoverable or not
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


