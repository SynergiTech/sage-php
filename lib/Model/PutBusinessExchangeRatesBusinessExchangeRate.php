<?php
/**
 * PutBusinessExchangeRatesBusinessExchangeRate
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
 * PutBusinessExchangeRatesBusinessExchangeRate Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PutBusinessExchangeRatesBusinessExchangeRate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'putBusinessExchangeRates_business_exchange_rate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'currency_id' => 'string',
        'rate' => 'double',
        'inverse_rate' => 'double',
        'base_currency_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'currency_id' => null,
        'rate' => 'double',
        'inverse_rate' => 'double',
        'base_currency_id' => null
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
        'currency_id' => 'currency_id',
        'rate' => 'rate',
        'inverse_rate' => 'inverse_rate',
        'base_currency_id' => 'base_currency_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currency_id' => 'setCurrencyId',
        'rate' => 'setRate',
        'inverse_rate' => 'setInverseRate',
        'base_currency_id' => 'setBaseCurrencyId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currency_id' => 'getCurrencyId',
        'rate' => 'getRate',
        'inverse_rate' => 'getInverseRate',
        'base_currency_id' => 'getBaseCurrencyId'
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
        $this->container['currency_id'] = isset($data['currency_id']) ? $data['currency_id'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['inverse_rate'] = isset($data['inverse_rate']) ? $data['inverse_rate'] : null;
        $this->container['base_currency_id'] = isset($data['base_currency_id']) ? $data['base_currency_id'] : null;
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
     * Gets currency_id
     *
     * @return string
     */
    public function getCurrencyId()
    {
        return $this->container['currency_id'];
    }

    /**
     * Sets currency_id
     *
     * @param string $currency_id The foreign currency
     *
     * @return $this
     */
    public function setCurrencyId($currency_id)
    {
        $this->container['currency_id'] = $currency_id;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return double
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param double $rate The exchange rate
     *
     * @return $this
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets inverse_rate
     *
     * @return double
     */
    public function getInverseRate()
    {
        return $this->container['inverse_rate'];
    }

    /**
     * Sets inverse_rate
     *
     * @param double $inverse_rate The inverse exchange rate
     *
     * @return $this
     */
    public function setInverseRate($inverse_rate)
    {
        $this->container['inverse_rate'] = $inverse_rate;

        return $this;
    }

    /**
     * Gets base_currency_id
     *
     * @return string
     */
    public function getBaseCurrencyId()
    {
        return $this->container['base_currency_id'];
    }

    /**
     * Sets base_currency_id
     *
     * @param string $base_currency_id The ID of the Base Currency.
     *
     * @return $this
     */
    public function setBaseCurrencyId($base_currency_id)
    {
        $this->container['base_currency_id'] = $base_currency_id;

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


