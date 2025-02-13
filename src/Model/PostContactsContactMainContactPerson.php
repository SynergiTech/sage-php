<?php
/**
 * PostContactsContactMainContactPerson
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
 * PostContactsContactMainContactPerson Class Doc Comment
 *
 * @package  SynergiTech\Sage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class PostContactsContactMainContactPerson implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'postContacts_contact_main_contact_person';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'contactPersonTypeIds' => 'string[]',
        'name' => 'string',
        'jobTitle' => 'string',
        'telephone' => 'string',
        'mobile' => 'string',
        'email' => 'string',
        'fax' => 'string',
        'isMainContact' => 'bool',
        'addressId' => 'string',
        'isPreferredContact' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'contactPersonTypeIds' => null,
        'name' => null,
        'jobTitle' => null,
        'telephone' => null,
        'mobile' => null,
        'email' => null,
        'fax' => null,
        'isMainContact' => null,
        'addressId' => null,
        'isPreferredContact' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'contactPersonTypeIds' => false,
        'name' => false,
        'jobTitle' => false,
        'telephone' => false,
        'mobile' => false,
        'email' => false,
        'fax' => false,
        'isMainContact' => false,
        'addressId' => false,
        'isPreferredContact' => false
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
        'contactPersonTypeIds' => 'contact_person_type_ids',
        'name' => 'name',
        'jobTitle' => 'job_title',
        'telephone' => 'telephone',
        'mobile' => 'mobile',
        'email' => 'email',
        'fax' => 'fax',
        'isMainContact' => 'is_main_contact',
        'addressId' => 'address_id',
        'isPreferredContact' => 'is_preferred_contact'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'contactPersonTypeIds' => 'setContactPersonTypeIds',
        'name' => 'setName',
        'jobTitle' => 'setJobTitle',
        'telephone' => 'setTelephone',
        'mobile' => 'setMobile',
        'email' => 'setEmail',
        'fax' => 'setFax',
        'isMainContact' => 'setIsMainContact',
        'addressId' => 'setAddressId',
        'isPreferredContact' => 'setIsPreferredContact'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'contactPersonTypeIds' => 'getContactPersonTypeIds',
        'name' => 'getName',
        'jobTitle' => 'getJobTitle',
        'telephone' => 'getTelephone',
        'mobile' => 'getMobile',
        'email' => 'getEmail',
        'fax' => 'getFax',
        'isMainContact' => 'getIsMainContact',
        'addressId' => 'getAddressId',
        'isPreferredContact' => 'getIsPreferredContact'
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
        $this->setIfExists('contactPersonTypeIds', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('jobTitle', $data ?? [], null);
        $this->setIfExists('telephone', $data ?? [], null);
        $this->setIfExists('mobile', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('fax', $data ?? [], null);
        $this->setIfExists('isMainContact', $data ?? [], null);
        $this->setIfExists('addressId', $data ?? [], null);
        $this->setIfExists('isPreferredContact', $data ?? [], null);
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
     * Gets contactPersonTypeIds
     *
     * @return string[]|null
     */
    public function getContactPersonTypeIds(): ?array
    {
        return $this->container['contactPersonTypeIds'];
    }

    /**
     * Sets contactPersonTypeIds
     *
     * @param string[]|null $contactPersonTypeIds The IDs of the Contact Person Types.
     *
     * @return $this
     */
    public function setContactPersonTypeIds(?array $contactPersonTypeIds): static
    {
        if (is_null($contactPersonTypeIds)) {
            throw new InvalidArgumentException('non-nullable contactPersonTypeIds cannot be null');
        }
        $this->container['contactPersonTypeIds'] = $contactPersonTypeIds;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the contact person
     *
     * @return $this
     */
    public function setName(?string $name): static
    {
        if (is_null($name)) {
            throw new InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets jobTitle
     *
     * @return string|null
     */
    public function getJobTitle(): ?string
    {
        return $this->container['jobTitle'];
    }

    /**
     * Sets jobTitle
     *
     * @param string|null $jobTitle The job title of the contact person
     *
     * @return $this
     */
    public function setJobTitle(?string $jobTitle): static
    {
        if (is_null($jobTitle)) {
            throw new InvalidArgumentException('non-nullable jobTitle cannot be null');
        }
        $this->container['jobTitle'] = $jobTitle;

        return $this;
    }

    /**
     * Gets telephone
     *
     * @return string|null
     */
    public function getTelephone(): ?string
    {
        return $this->container['telephone'];
    }

    /**
     * Sets telephone
     *
     * @param string|null $telephone The telephone number of the contact person
     *
     * @return $this
     */
    public function setTelephone(?string $telephone): static
    {
        if (is_null($telephone)) {
            throw new InvalidArgumentException('non-nullable telephone cannot be null');
        }
        $this->container['telephone'] = $telephone;

        return $this;
    }

    /**
     * Gets mobile
     *
     * @return string|null
     */
    public function getMobile(): ?string
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile
     *
     * @param string|null $mobile The mobile number of the contact person
     *
     * @return $this
     */
    public function setMobile(?string $mobile): static
    {
        if (is_null($mobile)) {
            throw new InvalidArgumentException('non-nullable mobile cannot be null');
        }
        $this->container['mobile'] = $mobile;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email The email address of the contact person
     *
     * @return $this
     */
    public function setEmail(?string $email): static
    {
        if (is_null($email)) {
            throw new InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return string|null
     */
    public function getFax(): ?string
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param string|null $fax The fax number of the contact person
     *
     * @return $this
     */
    public function setFax(?string $fax): static
    {
        if (is_null($fax)) {
            throw new InvalidArgumentException('non-nullable fax cannot be null');
        }
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets isMainContact
     *
     * @return bool|null
     */
    public function getIsMainContact(): ?bool
    {
        return $this->container['isMainContact'];
    }

    /**
     * Sets isMainContact
     *
     * @param bool|null $isMainContact Indicates whether this is the main contact person. Per contact, only one main contact can be selected.
     *
     * @return $this
     */
    public function setIsMainContact(?bool $isMainContact): static
    {
        if (is_null($isMainContact)) {
            throw new InvalidArgumentException('non-nullable isMainContact cannot be null');
        }
        $this->container['isMainContact'] = $isMainContact;

        return $this;
    }

    /**
     * Gets addressId
     *
     * @return string|null
     */
    public function getAddressId(): ?string
    {
        return $this->container['addressId'];
    }

    /**
     * Sets addressId
     *
     * @param string|null $addressId The ID of the Address.
     *
     * @return $this
     */
    public function setAddressId(?string $addressId): static
    {
        if (is_null($addressId)) {
            throw new InvalidArgumentException('non-nullable addressId cannot be null');
        }
        $this->container['addressId'] = $addressId;

        return $this;
    }

    /**
     * Gets isPreferredContact
     *
     * @return bool|null
     */
    public function getIsPreferredContact(): ?bool
    {
        return $this->container['isPreferredContact'];
    }

    /**
     * Sets isPreferredContact
     *
     * @param bool|null $isPreferredContact Indicates whether this contact person is a preferred contact
     *
     * @return $this
     */
    public function setIsPreferredContact(?bool $isPreferredContact): static
    {
        if (is_null($isPreferredContact)) {
            throw new InvalidArgumentException('non-nullable isPreferredContact cannot be null');
        }
        $this->container['isPreferredContact'] = $isPreferredContact;

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


