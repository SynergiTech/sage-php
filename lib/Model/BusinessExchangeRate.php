<?php
/**
 * BusinessExchangeRate
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
 * BusinessExchangeRate Class Doc Comment
 *
 * @category Class
 * @description ### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area &#x60;Settings&#x60;: Full Access
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BusinessExchangeRate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BusinessExchangeRate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'displayed_as' => 'string',
        'path' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'rate' => 'double',
        'inverse_rate' => 'double',
        'base_currency' => '\Swagger\Client\Model\Base',
        'currency' => '\Swagger\Client\Model\Base'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'displayed_as' => null,
        'path' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'rate' => 'double',
        'inverse_rate' => 'double',
        'base_currency' => null,
        'currency' => null
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
        'displayed_as' => 'displayed_as',
        'path' => '$path',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'rate' => 'rate',
        'inverse_rate' => 'inverse_rate',
        'base_currency' => 'base_currency',
        'currency' => 'currency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'displayed_as' => 'setDisplayedAs',
        'path' => 'setPath',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'rate' => 'setRate',
        'inverse_rate' => 'setInverseRate',
        'base_currency' => 'setBaseCurrency',
        'currency' => 'setCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'displayed_as' => 'getDisplayedAs',
        'path' => 'getPath',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'rate' => 'getRate',
        'inverse_rate' => 'getInverseRate',
        'base_currency' => 'getBaseCurrency',
        'currency' => 'getCurrency'
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
        $this->container['displayed_as'] = isset($data['displayed_as']) ? $data['displayed_as'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['inverse_rate'] = isset($data['inverse_rate']) ? $data['inverse_rate'] : null;
        $this->container['base_currency'] = isset($data['base_currency']) ? $data['base_currency'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
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
     * Gets displayed_as
     *
     * @return string
     */
    public function getDisplayedAs()
    {
        return $this->container['displayed_as'];
    }

    /**
     * Sets displayed_as
     *
     * @param string $displayed_as Display text for the item
     *
     * @return $this
     */
    public function setDisplayedAs($displayed_as)
    {
        $this->container['displayed_as'] = $displayed_as;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path The API path for the resource
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at The datetime when the item was created
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at The datetime when the item was last updated
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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
     * Gets base_currency
     *
     * @return \Swagger\Client\Model\Base
     */
    public function getBaseCurrency()
    {
        return $this->container['base_currency'];
    }

    /**
     * Sets base_currency
     *
     * @param \Swagger\Client\Model\Base $base_currency The base currency for the business
     *
     * @return $this
     */
    public function setBaseCurrency($base_currency)
    {
        $this->container['base_currency'] = $base_currency;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \Swagger\Client\Model\Base
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Swagger\Client\Model\Base $currency The foreign currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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


