<?php
/**
 * Attachment
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
 * Attachment Class Doc Comment
 *
 * @description ### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: &#x60;Sales&#x60;: Read Only, Restricted Access, Full Access * Area: &#x60;Purchases&#x60;: Read Only, Restricted Access, Full Access
 * @package  SynergiTech\Sage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Attachment implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Attachment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'displayedAs' => 'string',
        'path' => 'string',
        'deletedAt' => '\DateTime',
        'file' => 'string',
        'mimeType' => 'string',
        'description' => 'string',
        'fileExtension' => 'string',
        'transaction' => '\SynergiTech\Sage\Model\Base',
        'fileSize' => 'int',
        'fileName' => 'string',
        'filePath' => 'string',
        'attachmentContextType' => '\SynergiTech\Sage\Model\Base',
        'attachmentContext' => '\SynergiTech\Sage\Model\Base',
        'isPublic' => 'bool',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime'
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
        'deletedAt' => 'date-time',
        'file' => null,
        'mimeType' => null,
        'description' => null,
        'fileExtension' => null,
        'transaction' => null,
        'fileSize' => 'int32',
        'fileName' => null,
        'filePath' => null,
        'attachmentContextType' => null,
        'attachmentContext' => null,
        'isPublic' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time'
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
        'deletedAt' => false,
        'file' => false,
        'mimeType' => false,
        'description' => false,
        'fileExtension' => false,
        'transaction' => false,
        'fileSize' => false,
        'fileName' => false,
        'filePath' => false,
        'attachmentContextType' => false,
        'attachmentContext' => false,
        'isPublic' => false,
        'createdAt' => false,
        'updatedAt' => false
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
        'deletedAt' => 'deleted_at',
        'file' => 'file',
        'mimeType' => 'mime_type',
        'description' => 'description',
        'fileExtension' => 'file_extension',
        'transaction' => 'transaction',
        'fileSize' => 'file_size',
        'fileName' => 'file_name',
        'filePath' => '$file_path',
        'attachmentContextType' => 'attachment_context_type',
        'attachmentContext' => 'attachment_context',
        'isPublic' => 'is_public',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at'
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
        'deletedAt' => 'setDeletedAt',
        'file' => 'setFile',
        'mimeType' => 'setMimeType',
        'description' => 'setDescription',
        'fileExtension' => 'setFileExtension',
        'transaction' => 'setTransaction',
        'fileSize' => 'setFileSize',
        'fileName' => 'setFileName',
        'filePath' => 'setFilePath',
        'attachmentContextType' => 'setAttachmentContextType',
        'attachmentContext' => 'setAttachmentContext',
        'isPublic' => 'setIsPublic',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt'
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
        'deletedAt' => 'getDeletedAt',
        'file' => 'getFile',
        'mimeType' => 'getMimeType',
        'description' => 'getDescription',
        'fileExtension' => 'getFileExtension',
        'transaction' => 'getTransaction',
        'fileSize' => 'getFileSize',
        'fileName' => 'getFileName',
        'filePath' => 'getFilePath',
        'attachmentContextType' => 'getAttachmentContextType',
        'attachmentContext' => 'getAttachmentContext',
        'isPublic' => 'getIsPublic',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt'
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
        $this->setIfExists('deletedAt', $data ?? [], null);
        $this->setIfExists('file', $data ?? [], null);
        $this->setIfExists('mimeType', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('fileExtension', $data ?? [], null);
        $this->setIfExists('transaction', $data ?? [], null);
        $this->setIfExists('fileSize', $data ?? [], null);
        $this->setIfExists('fileName', $data ?? [], null);
        $this->setIfExists('filePath', $data ?? [], null);
        $this->setIfExists('attachmentContextType', $data ?? [], null);
        $this->setIfExists('attachmentContext', $data ?? [], null);
        $this->setIfExists('isPublic', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('updatedAt', $data ?? [], null);
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
     * Gets file
     *
     * @return string|null
     */
    public function getFile(): ?string
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param string|null $file The base64 encoded representation of the file
     *
     * @return $this
     */
    public function setFile(?string $file): static
    {
        if (is_null($file)) {
            throw new InvalidArgumentException('non-nullable file cannot be null');
        }
        $this->container['file'] = $file;

        return $this;
    }

    /**
     * Gets mimeType
     *
     * @return string|null
     */
    public function getMimeType(): ?string
    {
        return $this->container['mimeType'];
    }

    /**
     * Sets mimeType
     *
     * @param string|null $mimeType The mime type of the attachment
     *
     * @return $this
     */
    public function setMimeType(?string $mimeType): static
    {
        if (is_null($mimeType)) {
            throw new InvalidArgumentException('non-nullable mimeType cannot be null');
        }
        $this->container['mimeType'] = $mimeType;

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
     * @param string|null $description The description of the attachment
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
     * Gets fileExtension
     *
     * @return string|null
     */
    public function getFileExtension(): ?string
    {
        return $this->container['fileExtension'];
    }

    /**
     * Sets fileExtension
     *
     * @param string|null $fileExtension The file extension of the attachment
     *
     * @return $this
     */
    public function setFileExtension(?string $fileExtension): static
    {
        if (is_null($fileExtension)) {
            throw new InvalidArgumentException('non-nullable fileExtension cannot be null');
        }
        $this->container['fileExtension'] = $fileExtension;

        return $this;
    }

    /**
     * Gets transaction
     *
     * @return \SynergiTech\Sage\Model\Base|null
     */
    public function getTransaction(): ?\SynergiTech\Sage\Model\Base
    {
        return $this->container['transaction'];
    }

    /**
     * Sets transaction
     *
     * @param \SynergiTech\Sage\Model\Base|null $transaction transaction
     *
     * @return $this
     */
    public function setTransaction(?\SynergiTech\Sage\Model\Base $transaction): static
    {
        if (is_null($transaction)) {
            throw new InvalidArgumentException('non-nullable transaction cannot be null');
        }
        $this->container['transaction'] = $transaction;

        return $this;
    }

    /**
     * Gets fileSize
     *
     * @return int|null
     */
    public function getFileSize(): ?int
    {
        return $this->container['fileSize'];
    }

    /**
     * Sets fileSize
     *
     * @param int|null $fileSize The file size of the attachment in Bytes
     *
     * @return $this
     */
    public function setFileSize(?int $fileSize): static
    {
        if (is_null($fileSize)) {
            throw new InvalidArgumentException('non-nullable fileSize cannot be null');
        }
        $this->container['fileSize'] = $fileSize;

        return $this;
    }

    /**
     * Gets fileName
     *
     * @return string|null
     */
    public function getFileName(): ?string
    {
        return $this->container['fileName'];
    }

    /**
     * Sets fileName
     *
     * @param string|null $fileName The file name of the attachment
     *
     * @return $this
     */
    public function setFileName(?string $fileName): static
    {
        if (is_null($fileName)) {
            throw new InvalidArgumentException('non-nullable fileName cannot be null');
        }
        $this->container['fileName'] = $fileName;

        return $this;
    }

    /**
     * Gets filePath
     *
     * @return string|null
     */
    public function getFilePath(): ?string
    {
        return $this->container['filePath'];
    }

    /**
     * Sets filePath
     *
     * @param string|null $filePath The file path of the attachment
     *
     * @return $this
     */
    public function setFilePath(?string $filePath): static
    {
        if (is_null($filePath)) {
            throw new InvalidArgumentException('non-nullable filePath cannot be null');
        }
        $this->container['filePath'] = $filePath;

        return $this;
    }

    /**
     * Gets attachmentContextType
     *
     * @return \SynergiTech\Sage\Model\Base|null
     */
    public function getAttachmentContextType(): ?\SynergiTech\Sage\Model\Base
    {
        return $this->container['attachmentContextType'];
    }

    /**
     * Sets attachmentContextType
     *
     * @param \SynergiTech\Sage\Model\Base|null $attachmentContextType attachmentContextType
     *
     * @return $this
     */
    public function setAttachmentContextType(?\SynergiTech\Sage\Model\Base $attachmentContextType): static
    {
        if (is_null($attachmentContextType)) {
            throw new InvalidArgumentException('non-nullable attachmentContextType cannot be null');
        }
        $this->container['attachmentContextType'] = $attachmentContextType;

        return $this;
    }

    /**
     * Gets attachmentContext
     *
     * @return \SynergiTech\Sage\Model\Base|null
     */
    public function getAttachmentContext(): ?\SynergiTech\Sage\Model\Base
    {
        return $this->container['attachmentContext'];
    }

    /**
     * Sets attachmentContext
     *
     * @param \SynergiTech\Sage\Model\Base|null $attachmentContext attachmentContext
     *
     * @return $this
     */
    public function setAttachmentContext(?\SynergiTech\Sage\Model\Base $attachmentContext): static
    {
        if (is_null($attachmentContext)) {
            throw new InvalidArgumentException('non-nullable attachmentContext cannot be null');
        }
        $this->container['attachmentContext'] = $attachmentContext;

        return $this;
    }

    /**
     * Gets isPublic
     *
     * @return bool|null
     */
    public function getIsPublic(): ?bool
    {
        return $this->container['isPublic'];
    }

    /**
     * Sets isPublic
     *
     * @param bool|null $isPublic Flag to determine whether the attachment should be visible to customers
     *
     * @return $this
     */
    public function setIsPublic(?bool $isPublic): static
    {
        if (is_null($isPublic)) {
            throw new InvalidArgumentException('non-nullable isPublic cannot be null');
        }
        $this->container['isPublic'] = $isPublic;

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
     * @param \DateTime|null $createdAt The datetime when the attachment was created
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
     * @param \DateTime|null $updatedAt The datetime when the attachment was last updated
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


