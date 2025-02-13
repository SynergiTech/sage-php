<?php
/**
 * PutSalesCreditNotesSalesCreditNoteCreditNoteLines
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Sage One - Accounts - v3 UKI
 *
 * Documentation of the Sage Business Cloud Accounting API.
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.43
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * PutSalesCreditNotesSalesCreditNoteCreditNoteLines Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PutSalesCreditNotesSalesCreditNoteCreditNoteLines implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'putSalesCreditNotes_sales_credit_note_credit_note_lines';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'description' => 'string',
        'ledger_account_id' => 'string',
        'unit_price' => 'double',
        'product_id' => 'string',
        'service_id' => 'string',
        'trade_of_asset' => 'bool',
        'quantity' => 'double',
        'net_amount' => 'double',
        'tax_rate_id' => 'string',
        'tax_amount' => 'double',
        'total_amount' => 'double',
        'base_currency_unit_price' => 'double',
        'unit_price_includes_tax' => 'bool',
        'base_currency_net_amount' => 'double',
        'base_currency_tax_amount' => 'double',
        'base_currency_total_amount' => 'double',
        'eu_goods_services_type_id' => 'string',
        'discount_amount' => 'double',
        'base_currency_discount_amount' => 'double',
        'discount_percentage' => 'double',
        'eu_sales_description_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'description' => null,
        'ledger_account_id' => null,
        'unit_price' => 'double',
        'product_id' => null,
        'service_id' => null,
        'trade_of_asset' => null,
        'quantity' => 'double',
        'net_amount' => 'double',
        'tax_rate_id' => null,
        'tax_amount' => 'double',
        'total_amount' => 'double',
        'base_currency_unit_price' => 'double',
        'unit_price_includes_tax' => null,
        'base_currency_net_amount' => 'double',
        'base_currency_tax_amount' => 'double',
        'base_currency_total_amount' => 'double',
        'eu_goods_services_type_id' => null,
        'discount_amount' => 'double',
        'base_currency_discount_amount' => 'double',
        'discount_percentage' => 'double',
        'eu_sales_description_id' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'description' => 'description',
        'ledger_account_id' => 'ledger_account_id',
        'unit_price' => 'unit_price',
        'product_id' => 'product_id',
        'service_id' => 'service_id',
        'trade_of_asset' => 'trade_of_asset',
        'quantity' => 'quantity',
        'net_amount' => 'net_amount',
        'tax_rate_id' => 'tax_rate_id',
        'tax_amount' => 'tax_amount',
        'total_amount' => 'total_amount',
        'base_currency_unit_price' => 'base_currency_unit_price',
        'unit_price_includes_tax' => 'unit_price_includes_tax',
        'base_currency_net_amount' => 'base_currency_net_amount',
        'base_currency_tax_amount' => 'base_currency_tax_amount',
        'base_currency_total_amount' => 'base_currency_total_amount',
        'eu_goods_services_type_id' => 'eu_goods_services_type_id',
        'discount_amount' => 'discount_amount',
        'base_currency_discount_amount' => 'base_currency_discount_amount',
        'discount_percentage' => 'discount_percentage',
        'eu_sales_description_id' => 'eu_sales_description_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'ledger_account_id' => 'setLedgerAccountId',
        'unit_price' => 'setUnitPrice',
        'product_id' => 'setProductId',
        'service_id' => 'setServiceId',
        'trade_of_asset' => 'setTradeOfAsset',
        'quantity' => 'setQuantity',
        'net_amount' => 'setNetAmount',
        'tax_rate_id' => 'setTaxRateId',
        'tax_amount' => 'setTaxAmount',
        'total_amount' => 'setTotalAmount',
        'base_currency_unit_price' => 'setBaseCurrencyUnitPrice',
        'unit_price_includes_tax' => 'setUnitPriceIncludesTax',
        'base_currency_net_amount' => 'setBaseCurrencyNetAmount',
        'base_currency_tax_amount' => 'setBaseCurrencyTaxAmount',
        'base_currency_total_amount' => 'setBaseCurrencyTotalAmount',
        'eu_goods_services_type_id' => 'setEuGoodsServicesTypeId',
        'discount_amount' => 'setDiscountAmount',
        'base_currency_discount_amount' => 'setBaseCurrencyDiscountAmount',
        'discount_percentage' => 'setDiscountPercentage',
        'eu_sales_description_id' => 'setEuSalesDescriptionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'ledger_account_id' => 'getLedgerAccountId',
        'unit_price' => 'getUnitPrice',
        'product_id' => 'getProductId',
        'service_id' => 'getServiceId',
        'trade_of_asset' => 'getTradeOfAsset',
        'quantity' => 'getQuantity',
        'net_amount' => 'getNetAmount',
        'tax_rate_id' => 'getTaxRateId',
        'tax_amount' => 'getTaxAmount',
        'total_amount' => 'getTotalAmount',
        'base_currency_unit_price' => 'getBaseCurrencyUnitPrice',
        'unit_price_includes_tax' => 'getUnitPriceIncludesTax',
        'base_currency_net_amount' => 'getBaseCurrencyNetAmount',
        'base_currency_tax_amount' => 'getBaseCurrencyTaxAmount',
        'base_currency_total_amount' => 'getBaseCurrencyTotalAmount',
        'eu_goods_services_type_id' => 'getEuGoodsServicesTypeId',
        'discount_amount' => 'getDiscountAmount',
        'base_currency_discount_amount' => 'getBaseCurrencyDiscountAmount',
        'discount_percentage' => 'getDiscountPercentage',
        'eu_sales_description_id' => 'getEuSalesDescriptionId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['ledger_account_id'] = isset($data['ledger_account_id']) ? $data['ledger_account_id'] : null;
        $this->container['unit_price'] = isset($data['unit_price']) ? $data['unit_price'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['service_id'] = isset($data['service_id']) ? $data['service_id'] : null;
        $this->container['trade_of_asset'] = isset($data['trade_of_asset']) ? $data['trade_of_asset'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['net_amount'] = isset($data['net_amount']) ? $data['net_amount'] : null;
        $this->container['tax_rate_id'] = isset($data['tax_rate_id']) ? $data['tax_rate_id'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['base_currency_unit_price'] = isset($data['base_currency_unit_price']) ? $data['base_currency_unit_price'] : null;
        $this->container['unit_price_includes_tax'] = isset($data['unit_price_includes_tax']) ? $data['unit_price_includes_tax'] : null;
        $this->container['base_currency_net_amount'] = isset($data['base_currency_net_amount']) ? $data['base_currency_net_amount'] : null;
        $this->container['base_currency_tax_amount'] = isset($data['base_currency_tax_amount']) ? $data['base_currency_tax_amount'] : null;
        $this->container['base_currency_total_amount'] = isset($data['base_currency_total_amount']) ? $data['base_currency_total_amount'] : null;
        $this->container['eu_goods_services_type_id'] = isset($data['eu_goods_services_type_id']) ? $data['eu_goods_services_type_id'] : null;
        $this->container['discount_amount'] = isset($data['discount_amount']) ? $data['discount_amount'] : null;
        $this->container['base_currency_discount_amount'] = isset($data['base_currency_discount_amount']) ? $data['base_currency_discount_amount'] : null;
        $this->container['discount_percentage'] = isset($data['discount_percentage']) ? $data['discount_percentage'] : null;
        $this->container['eu_sales_description_id'] = isset($data['eu_sales_description_id']) ? $data['eu_sales_description_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
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
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description The description for the invoice line
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets ledger_account_id
     *
     * @return string
     */
    public function getLedgerAccountId()
    {
        return $this->container['ledger_account_id'];
    }

    /**
     * Sets ledger_account_id
     *
     * @param string $ledger_account_id The ID of the Ledger Account.
     *
     * @return $this
     */
    public function setLedgerAccountId($ledger_account_id)
    {
        $this->container['ledger_account_id'] = $ledger_account_id;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return double
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param double $unit_price The unit price for the invoice line
     *
     * @return $this
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string $product_id The ID of the Product.
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets service_id
     *
     * @return string
     */
    public function getServiceId()
    {
        return $this->container['service_id'];
    }

    /**
     * Sets service_id
     *
     * @param string $service_id The ID of the Service.
     *
     * @return $this
     */
    public function setServiceId($service_id)
    {
        $this->container['service_id'] = $service_id;

        return $this;
    }

    /**
     * Gets trade_of_asset
     *
     * @return bool
     */
    public function getTradeOfAsset()
    {
        return $this->container['trade_of_asset'];
    }

    /**
     * Sets trade_of_asset
     *
     * @param bool $trade_of_asset Whether the line item is marked as trade of asset.
     *
     * @return $this
     */
    public function setTradeOfAsset($trade_of_asset)
    {
        $this->container['trade_of_asset'] = $trade_of_asset;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return double
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param double $quantity The quantity for the invoice line
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets net_amount
     *
     * @return double
     */
    public function getNetAmount()
    {
        return $this->container['net_amount'];
    }

    /**
     * Sets net_amount
     *
     * @param double $net_amount The net amount for the invoice line
     *
     * @return $this
     */
    public function setNetAmount($net_amount)
    {
        $this->container['net_amount'] = $net_amount;

        return $this;
    }

    /**
     * Gets tax_rate_id
     *
     * @return string
     */
    public function getTaxRateId()
    {
        return $this->container['tax_rate_id'];
    }

    /**
     * Sets tax_rate_id
     *
     * @param string $tax_rate_id The ID of the Tax Rate.
     *
     * @return $this
     */
    public function setTaxRateId($tax_rate_id)
    {
        $this->container['tax_rate_id'] = $tax_rate_id;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return double
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param double $tax_amount The tax amount for the invoice line\". This attribute is required in v3.1, unless the tax rate is of a \"zero\", \"exempt\" or \"no_tax\" type. Then the tax_amount is infered as 0.0. In v3, this attribute is optional, but you should still set, as it defaults to 0.0 in any case. This is not what you want for tax rates with a percentage > 0.0.
     *
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return double
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param double $total_amount The total amount for the invoice line
     *
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets base_currency_unit_price
     *
     * @return double
     */
    public function getBaseCurrencyUnitPrice()
    {
        return $this->container['base_currency_unit_price'];
    }

    /**
     * Sets base_currency_unit_price
     *
     * @param double $base_currency_unit_price The unit price for the invoice line in base currency
     *
     * @return $this
     */
    public function setBaseCurrencyUnitPrice($base_currency_unit_price)
    {
        $this->container['base_currency_unit_price'] = $base_currency_unit_price;

        return $this;
    }

    /**
     * Gets unit_price_includes_tax
     *
     * @return bool
     */
    public function getUnitPriceIncludesTax()
    {
        return $this->container['unit_price_includes_tax'];
    }

    /**
     * Sets unit_price_includes_tax
     *
     * @param bool $unit_price_includes_tax Defines whether the unit price includes tax
     *
     * @return $this
     */
    public function setUnitPriceIncludesTax($unit_price_includes_tax)
    {
        $this->container['unit_price_includes_tax'] = $unit_price_includes_tax;

        return $this;
    }

    /**
     * Gets base_currency_net_amount
     *
     * @return double
     */
    public function getBaseCurrencyNetAmount()
    {
        return $this->container['base_currency_net_amount'];
    }

    /**
     * Sets base_currency_net_amount
     *
     * @param double $base_currency_net_amount The net amount for the invoice line in base currency
     *
     * @return $this
     */
    public function setBaseCurrencyNetAmount($base_currency_net_amount)
    {
        $this->container['base_currency_net_amount'] = $base_currency_net_amount;

        return $this;
    }

    /**
     * Gets base_currency_tax_amount
     *
     * @return double
     */
    public function getBaseCurrencyTaxAmount()
    {
        return $this->container['base_currency_tax_amount'];
    }

    /**
     * Sets base_currency_tax_amount
     *
     * @param double $base_currency_tax_amount The tax amount for the invoice line in base currency
     *
     * @return $this
     */
    public function setBaseCurrencyTaxAmount($base_currency_tax_amount)
    {
        $this->container['base_currency_tax_amount'] = $base_currency_tax_amount;

        return $this;
    }

    /**
     * Gets base_currency_total_amount
     *
     * @return double
     */
    public function getBaseCurrencyTotalAmount()
    {
        return $this->container['base_currency_total_amount'];
    }

    /**
     * Sets base_currency_total_amount
     *
     * @param double $base_currency_total_amount The total amount for the invoice line in base currency
     *
     * @return $this
     */
    public function setBaseCurrencyTotalAmount($base_currency_total_amount)
    {
        $this->container['base_currency_total_amount'] = $base_currency_total_amount;

        return $this;
    }

    /**
     * Gets eu_goods_services_type_id
     *
     * @return string
     */
    public function getEuGoodsServicesTypeId()
    {
        return $this->container['eu_goods_services_type_id'];
    }

    /**
     * Sets eu_goods_services_type_id
     *
     * @param string $eu_goods_services_type_id The ID of the EU Goods Services Type.
     *
     * @return $this
     */
    public function setEuGoodsServicesTypeId($eu_goods_services_type_id)
    {
        $this->container['eu_goods_services_type_id'] = $eu_goods_services_type_id;

        return $this;
    }

    /**
     * Gets discount_amount
     *
     * @return double
     */
    public function getDiscountAmount()
    {
        return $this->container['discount_amount'];
    }

    /**
     * Sets discount_amount
     *
     * @param double $discount_amount The discount amount for the invoice line
     *
     * @return $this
     */
    public function setDiscountAmount($discount_amount)
    {
        $this->container['discount_amount'] = $discount_amount;

        return $this;
    }

    /**
     * Gets base_currency_discount_amount
     *
     * @return double
     */
    public function getBaseCurrencyDiscountAmount()
    {
        return $this->container['base_currency_discount_amount'];
    }

    /**
     * Sets base_currency_discount_amount
     *
     * @param double $base_currency_discount_amount The discount amount for the invoice line in base currency
     *
     * @return $this
     */
    public function setBaseCurrencyDiscountAmount($base_currency_discount_amount)
    {
        $this->container['base_currency_discount_amount'] = $base_currency_discount_amount;

        return $this;
    }

    /**
     * Gets discount_percentage
     *
     * @return double
     */
    public function getDiscountPercentage()
    {
        return $this->container['discount_percentage'];
    }

    /**
     * Sets discount_percentage
     *
     * @param double $discount_percentage The discount percentage for the invoice line
     *
     * @return $this
     */
    public function setDiscountPercentage($discount_percentage)
    {
        $this->container['discount_percentage'] = $discount_percentage;

        return $this;
    }

    /**
     * Gets eu_sales_description_id
     *
     * @return string
     */
    public function getEuSalesDescriptionId()
    {
        return $this->container['eu_sales_description_id'];
    }

    /**
     * Sets eu_sales_description_id
     *
     * @param string $eu_sales_description_id The ID of the EU Sales Description.
     *
     * @return $this
     */
    public function setEuSalesDescriptionId($eu_sales_description_id)
    {
        $this->container['eu_sales_description_id'] = $eu_sales_description_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


