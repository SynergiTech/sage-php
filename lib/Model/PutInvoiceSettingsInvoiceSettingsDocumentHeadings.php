<?php
/**
 * PutInvoiceSettingsInvoiceSettingsDocumentHeadings
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
 * PutInvoiceSettingsInvoiceSettingsDocumentHeadings Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PutInvoiceSettingsInvoiceSettingsDocumentHeadings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'putInvoiceSettings_invoice_settings_document_headings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sales_invoice' => 'string',
        'sales_credit_note' => 'string',
        'sales_corrective_invoice' => 'string',
        'sales_quote' => 'string',
        'sales_estimate' => 'string',
        'pro_forma' => 'string',
        'remittance_advice' => 'string',
        'statement' => 'string',
        'delivery_note' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sales_invoice' => null,
        'sales_credit_note' => null,
        'sales_corrective_invoice' => null,
        'sales_quote' => null,
        'sales_estimate' => null,
        'pro_forma' => null,
        'remittance_advice' => null,
        'statement' => null,
        'delivery_note' => null
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
        'sales_invoice' => 'sales_invoice',
        'sales_credit_note' => 'sales_credit_note',
        'sales_corrective_invoice' => 'sales_corrective_invoice',
        'sales_quote' => 'sales_quote',
        'sales_estimate' => 'sales_estimate',
        'pro_forma' => 'pro_forma',
        'remittance_advice' => 'remittance_advice',
        'statement' => 'statement',
        'delivery_note' => 'delivery_note'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sales_invoice' => 'setSalesInvoice',
        'sales_credit_note' => 'setSalesCreditNote',
        'sales_corrective_invoice' => 'setSalesCorrectiveInvoice',
        'sales_quote' => 'setSalesQuote',
        'sales_estimate' => 'setSalesEstimate',
        'pro_forma' => 'setProForma',
        'remittance_advice' => 'setRemittanceAdvice',
        'statement' => 'setStatement',
        'delivery_note' => 'setDeliveryNote'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sales_invoice' => 'getSalesInvoice',
        'sales_credit_note' => 'getSalesCreditNote',
        'sales_corrective_invoice' => 'getSalesCorrectiveInvoice',
        'sales_quote' => 'getSalesQuote',
        'sales_estimate' => 'getSalesEstimate',
        'pro_forma' => 'getProForma',
        'remittance_advice' => 'getRemittanceAdvice',
        'statement' => 'getStatement',
        'delivery_note' => 'getDeliveryNote'
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
        $this->container['sales_invoice'] = isset($data['sales_invoice']) ? $data['sales_invoice'] : null;
        $this->container['sales_credit_note'] = isset($data['sales_credit_note']) ? $data['sales_credit_note'] : null;
        $this->container['sales_corrective_invoice'] = isset($data['sales_corrective_invoice']) ? $data['sales_corrective_invoice'] : null;
        $this->container['sales_quote'] = isset($data['sales_quote']) ? $data['sales_quote'] : null;
        $this->container['sales_estimate'] = isset($data['sales_estimate']) ? $data['sales_estimate'] : null;
        $this->container['pro_forma'] = isset($data['pro_forma']) ? $data['pro_forma'] : null;
        $this->container['remittance_advice'] = isset($data['remittance_advice']) ? $data['remittance_advice'] : null;
        $this->container['statement'] = isset($data['statement']) ? $data['statement'] : null;
        $this->container['delivery_note'] = isset($data['delivery_note']) ? $data['delivery_note'] : null;
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
     * Gets sales_invoice
     *
     * @return string
     */
    public function getSalesInvoice()
    {
        return $this->container['sales_invoice'];
    }

    /**
     * Sets sales_invoice
     *
     * @param string $sales_invoice The customisable sales invoice document header
     *
     * @return $this
     */
    public function setSalesInvoice($sales_invoice)
    {
        $this->container['sales_invoice'] = $sales_invoice;

        return $this;
    }

    /**
     * Gets sales_credit_note
     *
     * @return string
     */
    public function getSalesCreditNote()
    {
        return $this->container['sales_credit_note'];
    }

    /**
     * Sets sales_credit_note
     *
     * @param string $sales_credit_note The customisable sales credit note document header
     *
     * @return $this
     */
    public function setSalesCreditNote($sales_credit_note)
    {
        $this->container['sales_credit_note'] = $sales_credit_note;

        return $this;
    }

    /**
     * Gets sales_corrective_invoice
     *
     * @return string
     */
    public function getSalesCorrectiveInvoice()
    {
        return $this->container['sales_corrective_invoice'];
    }

    /**
     * Sets sales_corrective_invoice
     *
     * @param string $sales_corrective_invoice The customisable sales corrective invoice document header
     *
     * @return $this
     */
    public function setSalesCorrectiveInvoice($sales_corrective_invoice)
    {
        $this->container['sales_corrective_invoice'] = $sales_corrective_invoice;

        return $this;
    }

    /**
     * Gets sales_quote
     *
     * @return string
     */
    public function getSalesQuote()
    {
        return $this->container['sales_quote'];
    }

    /**
     * Sets sales_quote
     *
     * @param string $sales_quote The customisable sales quote document header
     *
     * @return $this
     */
    public function setSalesQuote($sales_quote)
    {
        $this->container['sales_quote'] = $sales_quote;

        return $this;
    }

    /**
     * Gets sales_estimate
     *
     * @return string
     */
    public function getSalesEstimate()
    {
        return $this->container['sales_estimate'];
    }

    /**
     * Sets sales_estimate
     *
     * @param string $sales_estimate The customisable sales estimate document header
     *
     * @return $this
     */
    public function setSalesEstimate($sales_estimate)
    {
        $this->container['sales_estimate'] = $sales_estimate;

        return $this;
    }

    /**
     * Gets pro_forma
     *
     * @return string
     */
    public function getProForma()
    {
        return $this->container['pro_forma'];
    }

    /**
     * Sets pro_forma
     *
     * @param string $pro_forma The customisable pro forma document header
     *
     * @return $this
     */
    public function setProForma($pro_forma)
    {
        $this->container['pro_forma'] = $pro_forma;

        return $this;
    }

    /**
     * Gets remittance_advice
     *
     * @return string
     */
    public function getRemittanceAdvice()
    {
        return $this->container['remittance_advice'];
    }

    /**
     * Sets remittance_advice
     *
     * @param string $remittance_advice The customisable remittance advice document header
     *
     * @return $this
     */
    public function setRemittanceAdvice($remittance_advice)
    {
        $this->container['remittance_advice'] = $remittance_advice;

        return $this;
    }

    /**
     * Gets statement
     *
     * @return string
     */
    public function getStatement()
    {
        return $this->container['statement'];
    }

    /**
     * Sets statement
     *
     * @param string $statement The customisable statement document header
     *
     * @return $this
     */
    public function setStatement($statement)
    {
        $this->container['statement'] = $statement;

        return $this;
    }

    /**
     * Gets delivery_note
     *
     * @return string
     */
    public function getDeliveryNote()
    {
        return $this->container['delivery_note'];
    }

    /**
     * Sets delivery_note
     *
     * @param string $delivery_note The customisable delivery note document header
     *
     * @return $this
     */
    public function setDeliveryNote($delivery_note)
    {
        $this->container['delivery_note'] = $delivery_note;

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


