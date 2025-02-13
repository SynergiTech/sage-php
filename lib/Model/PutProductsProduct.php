<?php
/**
 * PutProductsProduct
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
 * PutProductsProduct Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PutProductsProduct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'putProducts_product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'description' => 'string',
        'sales_ledger_account_id' => 'string',
        'purchase_ledger_account_id' => 'string',
        'item_code' => 'string',
        'notes' => 'string',
        'sales_tax_rate_id' => 'string',
        'usual_supplier_id' => 'string',
        'purchase_tax_rate_id' => 'string',
        'cost_price' => 'double',
        'source_guid' => 'string',
        'purchase_description' => 'string',
        'active' => 'bool',
        'catalog_item_type_id' => 'string',
        'sales_prices' => '\Swagger\Client\Model\PostProductsProductSalesPrices[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'description' => null,
        'sales_ledger_account_id' => null,
        'purchase_ledger_account_id' => null,
        'item_code' => null,
        'notes' => null,
        'sales_tax_rate_id' => null,
        'usual_supplier_id' => null,
        'purchase_tax_rate_id' => null,
        'cost_price' => 'double',
        'source_guid' => null,
        'purchase_description' => null,
        'active' => null,
        'catalog_item_type_id' => null,
        'sales_prices' => null
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
        'sales_ledger_account_id' => 'sales_ledger_account_id',
        'purchase_ledger_account_id' => 'purchase_ledger_account_id',
        'item_code' => 'item_code',
        'notes' => 'notes',
        'sales_tax_rate_id' => 'sales_tax_rate_id',
        'usual_supplier_id' => 'usual_supplier_id',
        'purchase_tax_rate_id' => 'purchase_tax_rate_id',
        'cost_price' => 'cost_price',
        'source_guid' => 'source_guid',
        'purchase_description' => 'purchase_description',
        'active' => 'active',
        'catalog_item_type_id' => 'catalog_item_type_id',
        'sales_prices' => 'sales_prices'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'sales_ledger_account_id' => 'setSalesLedgerAccountId',
        'purchase_ledger_account_id' => 'setPurchaseLedgerAccountId',
        'item_code' => 'setItemCode',
        'notes' => 'setNotes',
        'sales_tax_rate_id' => 'setSalesTaxRateId',
        'usual_supplier_id' => 'setUsualSupplierId',
        'purchase_tax_rate_id' => 'setPurchaseTaxRateId',
        'cost_price' => 'setCostPrice',
        'source_guid' => 'setSourceGuid',
        'purchase_description' => 'setPurchaseDescription',
        'active' => 'setActive',
        'catalog_item_type_id' => 'setCatalogItemTypeId',
        'sales_prices' => 'setSalesPrices'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'sales_ledger_account_id' => 'getSalesLedgerAccountId',
        'purchase_ledger_account_id' => 'getPurchaseLedgerAccountId',
        'item_code' => 'getItemCode',
        'notes' => 'getNotes',
        'sales_tax_rate_id' => 'getSalesTaxRateId',
        'usual_supplier_id' => 'getUsualSupplierId',
        'purchase_tax_rate_id' => 'getPurchaseTaxRateId',
        'cost_price' => 'getCostPrice',
        'source_guid' => 'getSourceGuid',
        'purchase_description' => 'getPurchaseDescription',
        'active' => 'getActive',
        'catalog_item_type_id' => 'getCatalogItemTypeId',
        'sales_prices' => 'getSalesPrices'
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
        $this->container['sales_ledger_account_id'] = isset($data['sales_ledger_account_id']) ? $data['sales_ledger_account_id'] : null;
        $this->container['purchase_ledger_account_id'] = isset($data['purchase_ledger_account_id']) ? $data['purchase_ledger_account_id'] : null;
        $this->container['item_code'] = isset($data['item_code']) ? $data['item_code'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['sales_tax_rate_id'] = isset($data['sales_tax_rate_id']) ? $data['sales_tax_rate_id'] : null;
        $this->container['usual_supplier_id'] = isset($data['usual_supplier_id']) ? $data['usual_supplier_id'] : null;
        $this->container['purchase_tax_rate_id'] = isset($data['purchase_tax_rate_id']) ? $data['purchase_tax_rate_id'] : null;
        $this->container['cost_price'] = isset($data['cost_price']) ? $data['cost_price'] : null;
        $this->container['source_guid'] = isset($data['source_guid']) ? $data['source_guid'] : null;
        $this->container['purchase_description'] = isset($data['purchase_description']) ? $data['purchase_description'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['catalog_item_type_id'] = isset($data['catalog_item_type_id']) ? $data['catalog_item_type_id'] : null;
        $this->container['sales_prices'] = isset($data['sales_prices']) ? $data['sales_prices'] : null;
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
     * @param string $description The product description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets sales_ledger_account_id
     *
     * @return string
     */
    public function getSalesLedgerAccountId()
    {
        return $this->container['sales_ledger_account_id'];
    }

    /**
     * Sets sales_ledger_account_id
     *
     * @param string $sales_ledger_account_id The sales ledger account for the product
     *
     * @return $this
     */
    public function setSalesLedgerAccountId($sales_ledger_account_id)
    {
        $this->container['sales_ledger_account_id'] = $sales_ledger_account_id;

        return $this;
    }

    /**
     * Gets purchase_ledger_account_id
     *
     * @return string
     */
    public function getPurchaseLedgerAccountId()
    {
        return $this->container['purchase_ledger_account_id'];
    }

    /**
     * Sets purchase_ledger_account_id
     *
     * @param string $purchase_ledger_account_id The purchase ledger account for the product
     *
     * @return $this
     */
    public function setPurchaseLedgerAccountId($purchase_ledger_account_id)
    {
        $this->container['purchase_ledger_account_id'] = $purchase_ledger_account_id;

        return $this;
    }

    /**
     * Gets item_code
     *
     * @return string
     */
    public function getItemCode()
    {
        return $this->container['item_code'];
    }

    /**
     * Sets item_code
     *
     * @param string $item_code The item code for the product
     *
     * @return $this
     */
    public function setItemCode($item_code)
    {
        $this->container['item_code'] = $item_code;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string $notes The notes for the product
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets sales_tax_rate_id
     *
     * @return string
     */
    public function getSalesTaxRateId()
    {
        return $this->container['sales_tax_rate_id'];
    }

    /**
     * Sets sales_tax_rate_id
     *
     * @param string $sales_tax_rate_id The ID of the Sales Tax Rate.
     *
     * @return $this
     */
    public function setSalesTaxRateId($sales_tax_rate_id)
    {
        $this->container['sales_tax_rate_id'] = $sales_tax_rate_id;

        return $this;
    }

    /**
     * Gets usual_supplier_id
     *
     * @return string
     */
    public function getUsualSupplierId()
    {
        return $this->container['usual_supplier_id'];
    }

    /**
     * Sets usual_supplier_id
     *
     * @param string $usual_supplier_id The ID of the Usual Supplier.
     *
     * @return $this
     */
    public function setUsualSupplierId($usual_supplier_id)
    {
        $this->container['usual_supplier_id'] = $usual_supplier_id;

        return $this;
    }

    /**
     * Gets purchase_tax_rate_id
     *
     * @return string
     */
    public function getPurchaseTaxRateId()
    {
        return $this->container['purchase_tax_rate_id'];
    }

    /**
     * Sets purchase_tax_rate_id
     *
     * @param string $purchase_tax_rate_id The ID of the Purchase Tax Rate.
     *
     * @return $this
     */
    public function setPurchaseTaxRateId($purchase_tax_rate_id)
    {
        $this->container['purchase_tax_rate_id'] = $purchase_tax_rate_id;

        return $this;
    }

    /**
     * Gets cost_price
     *
     * @return double
     */
    public function getCostPrice()
    {
        return $this->container['cost_price'];
    }

    /**
     * Sets cost_price
     *
     * @param double $cost_price The cost price of the product
     *
     * @return $this
     */
    public function setCostPrice($cost_price)
    {
        $this->container['cost_price'] = $cost_price;

        return $this;
    }

    /**
     * Gets source_guid
     *
     * @return string
     */
    public function getSourceGuid()
    {
        return $this->container['source_guid'];
    }

    /**
     * Sets source_guid
     *
     * @param string $source_guid Used when importing products from external sources
     *
     * @return $this
     */
    public function setSourceGuid($source_guid)
    {
        $this->container['source_guid'] = $source_guid;

        return $this;
    }

    /**
     * Gets purchase_description
     *
     * @return string
     */
    public function getPurchaseDescription()
    {
        return $this->container['purchase_description'];
    }

    /**
     * Sets purchase_description
     *
     * @param string $purchase_description The product purchase description
     *
     * @return $this
     */
    public function setPurchaseDescription($purchase_description)
    {
        $this->container['purchase_description'] = $purchase_description;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active Indicates whether the product is active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets catalog_item_type_id
     *
     * @return string
     */
    public function getCatalogItemTypeId()
    {
        return $this->container['catalog_item_type_id'];
    }

    /**
     * Sets catalog_item_type_id
     *
     * @param string $catalog_item_type_id The ID of the Catalog Item Type.
     *
     * @return $this
     */
    public function setCatalogItemTypeId($catalog_item_type_id)
    {
        $this->container['catalog_item_type_id'] = $catalog_item_type_id;

        return $this;
    }

    /**
     * Gets sales_prices
     *
     * @return \Swagger\Client\Model\PostProductsProductSalesPrices[]
     */
    public function getSalesPrices()
    {
        return $this->container['sales_prices'];
    }

    /**
     * Sets sales_prices
     *
     * @param \Swagger\Client\Model\PostProductsProductSalesPrices[] $sales_prices sales_prices
     *
     * @return $this
     */
    public function setSalesPrices($sales_prices)
    {
        $this->container['sales_prices'] = $sales_prices;

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


