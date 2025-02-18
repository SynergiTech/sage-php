<?php
/**
 * PutInvoiceSettingsInvoiceSettingsDocumentHeadings
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
 * PutInvoiceSettingsInvoiceSettingsDocumentHeadings Class Doc Comment
 *
 * @package  SynergiTech\Sage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class PutInvoiceSettingsInvoiceSettingsDocumentHeadings implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'putInvoiceSettings_invoice_settings_document_headings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'salesInvoice' => 'string',
        'salesCreditNote' => 'string',
        'salesCorrectiveInvoice' => 'string',
        'salesQuote' => 'string',
        'salesEstimate' => 'string',
        'proForma' => 'string',
        'remittanceAdvice' => 'string',
        'statement' => 'string',
        'deliveryNote' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'salesInvoice' => null,
        'salesCreditNote' => null,
        'salesCorrectiveInvoice' => null,
        'salesQuote' => null,
        'salesEstimate' => null,
        'proForma' => null,
        'remittanceAdvice' => null,
        'statement' => null,
        'deliveryNote' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'salesInvoice' => false,
        'salesCreditNote' => false,
        'salesCorrectiveInvoice' => false,
        'salesQuote' => false,
        'salesEstimate' => false,
        'proForma' => false,
        'remittanceAdvice' => false,
        'statement' => false,
        'deliveryNote' => false
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
        'salesInvoice' => 'sales_invoice',
        'salesCreditNote' => 'sales_credit_note',
        'salesCorrectiveInvoice' => 'sales_corrective_invoice',
        'salesQuote' => 'sales_quote',
        'salesEstimate' => 'sales_estimate',
        'proForma' => 'pro_forma',
        'remittanceAdvice' => 'remittance_advice',
        'statement' => 'statement',
        'deliveryNote' => 'delivery_note'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'salesInvoice' => 'setSalesInvoice',
        'salesCreditNote' => 'setSalesCreditNote',
        'salesCorrectiveInvoice' => 'setSalesCorrectiveInvoice',
        'salesQuote' => 'setSalesQuote',
        'salesEstimate' => 'setSalesEstimate',
        'proForma' => 'setProForma',
        'remittanceAdvice' => 'setRemittanceAdvice',
        'statement' => 'setStatement',
        'deliveryNote' => 'setDeliveryNote'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'salesInvoice' => 'getSalesInvoice',
        'salesCreditNote' => 'getSalesCreditNote',
        'salesCorrectiveInvoice' => 'getSalesCorrectiveInvoice',
        'salesQuote' => 'getSalesQuote',
        'salesEstimate' => 'getSalesEstimate',
        'proForma' => 'getProForma',
        'remittanceAdvice' => 'getRemittanceAdvice',
        'statement' => 'getStatement',
        'deliveryNote' => 'getDeliveryNote'
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
        $this->setIfExists('salesInvoice', $data ?? [], null);
        $this->setIfExists('salesCreditNote', $data ?? [], null);
        $this->setIfExists('salesCorrectiveInvoice', $data ?? [], null);
        $this->setIfExists('salesQuote', $data ?? [], null);
        $this->setIfExists('salesEstimate', $data ?? [], null);
        $this->setIfExists('proForma', $data ?? [], null);
        $this->setIfExists('remittanceAdvice', $data ?? [], null);
        $this->setIfExists('statement', $data ?? [], null);
        $this->setIfExists('deliveryNote', $data ?? [], null);
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
     * Gets salesInvoice
     *
     * @return string|null
     */
    public function getSalesInvoice(): ?string
    {
        return $this->container['salesInvoice'];
    }

    /**
     * Sets salesInvoice
     *
     * @param string|null $salesInvoice The customisable sales invoice document header
     *
     * @return $this
     */
    public function setSalesInvoice(?string $salesInvoice): static
    {
        if (is_null($salesInvoice)) {
            throw new InvalidArgumentException('non-nullable salesInvoice cannot be null');
        }
        $this->container['salesInvoice'] = $salesInvoice;

        return $this;
    }

    /**
     * Gets salesCreditNote
     *
     * @return string|null
     */
    public function getSalesCreditNote(): ?string
    {
        return $this->container['salesCreditNote'];
    }

    /**
     * Sets salesCreditNote
     *
     * @param string|null $salesCreditNote The customisable sales credit note document header
     *
     * @return $this
     */
    public function setSalesCreditNote(?string $salesCreditNote): static
    {
        if (is_null($salesCreditNote)) {
            throw new InvalidArgumentException('non-nullable salesCreditNote cannot be null');
        }
        $this->container['salesCreditNote'] = $salesCreditNote;

        return $this;
    }

    /**
     * Gets salesCorrectiveInvoice
     *
     * @return string|null
     */
    public function getSalesCorrectiveInvoice(): ?string
    {
        return $this->container['salesCorrectiveInvoice'];
    }

    /**
     * Sets salesCorrectiveInvoice
     *
     * @param string|null $salesCorrectiveInvoice The customisable sales corrective invoice document header
     *
     * @return $this
     */
    public function setSalesCorrectiveInvoice(?string $salesCorrectiveInvoice): static
    {
        if (is_null($salesCorrectiveInvoice)) {
            throw new InvalidArgumentException('non-nullable salesCorrectiveInvoice cannot be null');
        }
        $this->container['salesCorrectiveInvoice'] = $salesCorrectiveInvoice;

        return $this;
    }

    /**
     * Gets salesQuote
     *
     * @return string|null
     */
    public function getSalesQuote(): ?string
    {
        return $this->container['salesQuote'];
    }

    /**
     * Sets salesQuote
     *
     * @param string|null $salesQuote The customisable sales quote document header
     *
     * @return $this
     */
    public function setSalesQuote(?string $salesQuote): static
    {
        if (is_null($salesQuote)) {
            throw new InvalidArgumentException('non-nullable salesQuote cannot be null');
        }
        $this->container['salesQuote'] = $salesQuote;

        return $this;
    }

    /**
     * Gets salesEstimate
     *
     * @return string|null
     */
    public function getSalesEstimate(): ?string
    {
        return $this->container['salesEstimate'];
    }

    /**
     * Sets salesEstimate
     *
     * @param string|null $salesEstimate The customisable sales estimate document header
     *
     * @return $this
     */
    public function setSalesEstimate(?string $salesEstimate): static
    {
        if (is_null($salesEstimate)) {
            throw new InvalidArgumentException('non-nullable salesEstimate cannot be null');
        }
        $this->container['salesEstimate'] = $salesEstimate;

        return $this;
    }

    /**
     * Gets proForma
     *
     * @return string|null
     */
    public function getProForma(): ?string
    {
        return $this->container['proForma'];
    }

    /**
     * Sets proForma
     *
     * @param string|null $proForma The customisable pro forma document header
     *
     * @return $this
     */
    public function setProForma(?string $proForma): static
    {
        if (is_null($proForma)) {
            throw new InvalidArgumentException('non-nullable proForma cannot be null');
        }
        $this->container['proForma'] = $proForma;

        return $this;
    }

    /**
     * Gets remittanceAdvice
     *
     * @return string|null
     */
    public function getRemittanceAdvice(): ?string
    {
        return $this->container['remittanceAdvice'];
    }

    /**
     * Sets remittanceAdvice
     *
     * @param string|null $remittanceAdvice The customisable remittance advice document header
     *
     * @return $this
     */
    public function setRemittanceAdvice(?string $remittanceAdvice): static
    {
        if (is_null($remittanceAdvice)) {
            throw new InvalidArgumentException('non-nullable remittanceAdvice cannot be null');
        }
        $this->container['remittanceAdvice'] = $remittanceAdvice;

        return $this;
    }

    /**
     * Gets statement
     *
     * @return string|null
     */
    public function getStatement(): ?string
    {
        return $this->container['statement'];
    }

    /**
     * Sets statement
     *
     * @param string|null $statement The customisable statement document header
     *
     * @return $this
     */
    public function setStatement(?string $statement): static
    {
        if (is_null($statement)) {
            throw new InvalidArgumentException('non-nullable statement cannot be null');
        }
        $this->container['statement'] = $statement;

        return $this;
    }

    /**
     * Gets deliveryNote
     *
     * @return string|null
     */
    public function getDeliveryNote(): ?string
    {
        return $this->container['deliveryNote'];
    }

    /**
     * Sets deliveryNote
     *
     * @param string|null $deliveryNote The customisable delivery note document header
     *
     * @return $this
     */
    public function setDeliveryNote(?string $deliveryNote): static
    {
        if (is_null($deliveryNote)) {
            throw new InvalidArgumentException('non-nullable deliveryNote cannot be null');
        }
        $this->container['deliveryNote'] = $deliveryNote;

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


