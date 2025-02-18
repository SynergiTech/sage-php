<?php
/**
 * ContactPerson
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
 * ContactPerson Class Doc Comment
 *
 * @description ### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: &#x60;Contacts&#x60;: Restricted Access, Full Access
 * @package  SynergiTech\Sage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ContactPerson implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ContactPerson';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'displayedAs' => 'string',
        'path' => 'string',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'deletedAt' => '\DateTime',
        'contactPersonTypes' => '\SynergiTech\Sage\Model\ContactPersonType[]',
        'name' => 'string',
        'jobTitle' => 'string',
        'telephone' => 'string',
        'mobile' => 'string',
        'email' => 'string',
        'fax' => 'string',
        'isMainContact' => 'bool',
        'address' => '\SynergiTech\Sage\Model\Base',
        'isPreferredContact' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'displayedAs' => null,
        'path' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'deletedAt' => 'date-time',
        'contactPersonTypes' => null,
        'name' => null,
        'jobTitle' => null,
        'telephone' => null,
        'mobile' => null,
        'email' => null,
        'fax' => null,
        'isMainContact' => null,
        'address' => null,
        'isPreferredContact' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'displayedAs' => false,
        'path' => false,
        'createdAt' => false,
        'updatedAt' => false,
        'deletedAt' => false,
        'contactPersonTypes' => false,
        'name' => false,
        'jobTitle' => false,
        'telephone' => false,
        'mobile' => false,
        'email' => false,
        'fax' => false,
        'isMainContact' => false,
        'address' => false,
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
        'id' => 'id',
        'displayedAs' => 'displayed_as',
        'path' => '$path',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
        'deletedAt' => 'deleted_at',
        'contactPersonTypes' => 'contact_person_types',
        'name' => 'name',
        'jobTitle' => 'job_title',
        'telephone' => 'telephone',
        'mobile' => 'mobile',
        'email' => 'email',
        'fax' => 'fax',
        'isMainContact' => 'is_main_contact',
        'address' => 'address',
        'isPreferredContact' => 'is_preferred_contact'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'displayedAs' => 'setDisplayedAs',
        'path' => 'setPath',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'deletedAt' => 'setDeletedAt',
        'contactPersonTypes' => 'setContactPersonTypes',
        'name' => 'setName',
        'jobTitle' => 'setJobTitle',
        'telephone' => 'setTelephone',
        'mobile' => 'setMobile',
        'email' => 'setEmail',
        'fax' => 'setFax',
        'isMainContact' => 'setIsMainContact',
        'address' => 'setAddress',
        'isPreferredContact' => 'setIsPreferredContact'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'displayedAs' => 'getDisplayedAs',
        'path' => 'getPath',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'deletedAt' => 'getDeletedAt',
        'contactPersonTypes' => 'getContactPersonTypes',
        'name' => 'getName',
        'jobTitle' => 'getJobTitle',
        'telephone' => 'getTelephone',
        'mobile' => 'getMobile',
        'email' => 'getEmail',
        'fax' => 'getFax',
        'isMainContact' => 'getIsMainContact',
        'address' => 'getAddress',
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('displayedAs', $data ?? [], null);
        $this->setIfExists('path', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('updatedAt', $data ?? [], null);
        $this->setIfExists('deletedAt', $data ?? [], null);
        $this->setIfExists('contactPersonTypes', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('jobTitle', $data ?? [], null);
        $this->setIfExists('telephone', $data ?? [], null);
        $this->setIfExists('mobile', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('fax', $data ?? [], null);
        $this->setIfExists('isMainContact', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
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

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 50)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['jobTitle']) && (mb_strlen($this->container['jobTitle']) > 50)) {
            $invalidProperties[] = "invalid value for 'jobTitle', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['telephone']) && (mb_strlen($this->container['telephone']) > 50)) {
            $invalidProperties[] = "invalid value for 'telephone', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['mobile']) && (mb_strlen($this->container['mobile']) > 50)) {
            $invalidProperties[] = "invalid value for 'mobile', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 100)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['fax']) && (mb_strlen($this->container['fax']) > 50)) {
            $invalidProperties[] = "invalid value for 'fax', the character length must be smaller than or equal to 50.";
        }

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
     * Gets path
     *
     * @return string|null
     */
    public function getPath(): ?string
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string|null $path The API path for the resource
     *
     * @return $this
     */
    public function setPath(?string $path): static
    {
        if (is_null($path)) {
            throw new InvalidArgumentException('non-nullable path cannot be null');
        }
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime|null $createdAt The datetime when the item was created
     *
     * @return $this
     */
    public function setCreatedAt(?\DateTime $createdAt): static
    {
        if (is_null($createdAt)) {
            throw new InvalidArgumentException('non-nullable createdAt cannot be null');
        }
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime|null $updatedAt The datetime when the item was last updated
     *
     * @return $this
     */
    public function setUpdatedAt(?\DateTime $updatedAt): static
    {
        if (is_null($updatedAt)) {
            throw new InvalidArgumentException('non-nullable updatedAt cannot be null');
        }
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets deletedAt
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->container['deletedAt'];
    }

    /**
     * Sets deletedAt
     *
     * @param \DateTime|null $deletedAt The datetime when the item was deleted
     *
     * @return $this
     */
    public function setDeletedAt(?\DateTime $deletedAt): static
    {
        if (is_null($deletedAt)) {
            throw new InvalidArgumentException('non-nullable deletedAt cannot be null');
        }
        $this->container['deletedAt'] = $deletedAt;

        return $this;
    }

    /**
     * Gets contactPersonTypes
     *
     * @return \SynergiTech\Sage\Model\ContactPersonType[]|null
     */
    public function getContactPersonTypes(): ?array
    {
        return $this->container['contactPersonTypes'];
    }

    /**
     * Sets contactPersonTypes
     *
     * @param \SynergiTech\Sage\Model\ContactPersonType[]|null $contactPersonTypes The contact person types for the contact person. Get possible types by retrieving <a href=\"https://developer.sage.com/accounting/reference/contacts/#operation/getContactPersonTypes\">   all available contact person types </a>.
     *
     * @return $this
     */
    public function setContactPersonTypes(?array $contactPersonTypes): static
    {
        if (is_null($contactPersonTypes)) {
            throw new InvalidArgumentException('non-nullable contactPersonTypes cannot be null');
        }
        $this->container['contactPersonTypes'] = $contactPersonTypes;

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
        if ((mb_strlen($name) > 50)) {
            throw new InvalidArgumentException('invalid length for $name when calling ContactPerson., must be smaller than or equal to 50.');
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
        if ((mb_strlen($jobTitle) > 50)) {
            throw new InvalidArgumentException('invalid length for $jobTitle when calling ContactPerson., must be smaller than or equal to 50.');
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
        if ((mb_strlen($telephone) > 50)) {
            throw new InvalidArgumentException('invalid length for $telephone when calling ContactPerson., must be smaller than or equal to 50.');
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
        if ((mb_strlen($mobile) > 50)) {
            throw new InvalidArgumentException('invalid length for $mobile when calling ContactPerson., must be smaller than or equal to 50.');
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
        if ((mb_strlen($email) > 100)) {
            throw new InvalidArgumentException('invalid length for $email when calling ContactPerson., must be smaller than or equal to 100.');
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
        if ((mb_strlen($fax) > 50)) {
            throw new InvalidArgumentException('invalid length for $fax when calling ContactPerson., must be smaller than or equal to 50.');
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
     * Gets address
     *
     * @return \SynergiTech\Sage\Model\Base|null
     */
    public function getAddress(): ?\SynergiTech\Sage\Model\Base
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \SynergiTech\Sage\Model\Base|null $address address
     *
     * @return $this
     */
    public function setAddress(?\SynergiTech\Sage\Model\Base $address): static
    {
        if (is_null($address)) {
            throw new InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

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


