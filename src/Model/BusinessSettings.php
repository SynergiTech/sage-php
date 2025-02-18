<?php
/**
 * BusinessSettings
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
 * BusinessSettings Class Doc Comment
 *
 * @description ### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area &#x60;Settings&#x60;: Full Access
 * @package  SynergiTech\Sage
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class BusinessSettings implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'BusinessSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'path' => 'string',
        'siret' => 'string',
        'managementCentreMember' => 'bool',
        'rcsNumber' => 'string',
        'shareCapital' => 'float',
        'businessActivityType' => '\SynergiTech\Sage\Model\BusinessActivityType',
        'legalFormType' => '\SynergiTech\Sage\Model\LegalFormType',
        'auxiliaryAccountsVisible' => 'bool',
        'defaultLedgerAccounts' => '\SynergiTech\Sage\Model\DefaultLedgerAccounts',
        'businessType' => '\SynergiTech\Sage\Model\BusinessType',
        'countryOfRegistration' => '\SynergiTech\Sage\Model\Base',
        'businessCreatedAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'wizardComplete' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'path' => null,
        'siret' => null,
        'managementCentreMember' => null,
        'rcsNumber' => null,
        'shareCapital' => 'double',
        'businessActivityType' => null,
        'legalFormType' => null,
        'auxiliaryAccountsVisible' => null,
        'defaultLedgerAccounts' => null,
        'businessType' => null,
        'countryOfRegistration' => null,
        'businessCreatedAt' => 'date-time',
        'updatedAt' => 'date-time',
        'wizardComplete' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'path' => false,
        'siret' => false,
        'managementCentreMember' => false,
        'rcsNumber' => false,
        'shareCapital' => false,
        'businessActivityType' => false,
        'legalFormType' => false,
        'auxiliaryAccountsVisible' => false,
        'defaultLedgerAccounts' => false,
        'businessType' => false,
        'countryOfRegistration' => false,
        'businessCreatedAt' => false,
        'updatedAt' => false,
        'wizardComplete' => false
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
        'path' => '$path',
        'siret' => 'siret',
        'managementCentreMember' => 'management_centre_member',
        'rcsNumber' => 'rcs_number',
        'shareCapital' => 'share_capital',
        'businessActivityType' => 'business_activity_type',
        'legalFormType' => 'legal_form_type',
        'auxiliaryAccountsVisible' => 'auxiliary_accounts_visible',
        'defaultLedgerAccounts' => 'default_ledger_accounts',
        'businessType' => 'business_type',
        'countryOfRegistration' => 'country_of_registration',
        'businessCreatedAt' => 'business_created_at',
        'updatedAt' => 'updated_at',
        'wizardComplete' => 'wizard_complete'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'path' => 'setPath',
        'siret' => 'setSiret',
        'managementCentreMember' => 'setManagementCentreMember',
        'rcsNumber' => 'setRcsNumber',
        'shareCapital' => 'setShareCapital',
        'businessActivityType' => 'setBusinessActivityType',
        'legalFormType' => 'setLegalFormType',
        'auxiliaryAccountsVisible' => 'setAuxiliaryAccountsVisible',
        'defaultLedgerAccounts' => 'setDefaultLedgerAccounts',
        'businessType' => 'setBusinessType',
        'countryOfRegistration' => 'setCountryOfRegistration',
        'businessCreatedAt' => 'setBusinessCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'wizardComplete' => 'setWizardComplete'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'path' => 'getPath',
        'siret' => 'getSiret',
        'managementCentreMember' => 'getManagementCentreMember',
        'rcsNumber' => 'getRcsNumber',
        'shareCapital' => 'getShareCapital',
        'businessActivityType' => 'getBusinessActivityType',
        'legalFormType' => 'getLegalFormType',
        'auxiliaryAccountsVisible' => 'getAuxiliaryAccountsVisible',
        'defaultLedgerAccounts' => 'getDefaultLedgerAccounts',
        'businessType' => 'getBusinessType',
        'countryOfRegistration' => 'getCountryOfRegistration',
        'businessCreatedAt' => 'getBusinessCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'wizardComplete' => 'getWizardComplete'
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
        $this->setIfExists('path', $data ?? [], null);
        $this->setIfExists('siret', $data ?? [], null);
        $this->setIfExists('managementCentreMember', $data ?? [], null);
        $this->setIfExists('rcsNumber', $data ?? [], null);
        $this->setIfExists('shareCapital', $data ?? [], null);
        $this->setIfExists('businessActivityType', $data ?? [], null);
        $this->setIfExists('legalFormType', $data ?? [], null);
        $this->setIfExists('auxiliaryAccountsVisible', $data ?? [], null);
        $this->setIfExists('defaultLedgerAccounts', $data ?? [], null);
        $this->setIfExists('businessType', $data ?? [], null);
        $this->setIfExists('countryOfRegistration', $data ?? [], null);
        $this->setIfExists('businessCreatedAt', $data ?? [], null);
        $this->setIfExists('updatedAt', $data ?? [], null);
        $this->setIfExists('wizardComplete', $data ?? [], null);
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
     * @param string|null $path The path for the resource
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
     * Gets siret
     *
     * @return string|null
     */
    public function getSiret(): ?string
    {
        return $this->container['siret'];
    }

    /**
     * Sets siret
     *
     * @param string|null $siret SIRET Number (France only)
     *
     * @return $this
     */
    public function setSiret(?string $siret): static
    {
        if (is_null($siret)) {
            throw new InvalidArgumentException('non-nullable siret cannot be null');
        }
        $this->container['siret'] = $siret;

        return $this;
    }

    /**
     * Gets managementCentreMember
     *
     * @return bool|null
     */
    public function getManagementCentreMember(): ?bool
    {
        return $this->container['managementCentreMember'];
    }

    /**
     * Sets managementCentreMember
     *
     * @param bool|null $managementCentreMember Member of Approved Management Centres (France only)
     *
     * @return $this
     */
    public function setManagementCentreMember(?bool $managementCentreMember): static
    {
        if (is_null($managementCentreMember)) {
            throw new InvalidArgumentException('non-nullable managementCentreMember cannot be null');
        }
        $this->container['managementCentreMember'] = $managementCentreMember;

        return $this;
    }

    /**
     * Gets rcsNumber
     *
     * @return string|null
     */
    public function getRcsNumber(): ?string
    {
        return $this->container['rcsNumber'];
    }

    /**
     * Sets rcsNumber
     *
     * @param string|null $rcsNumber RCS Number (France only)
     *
     * @return $this
     */
    public function setRcsNumber(?string $rcsNumber): static
    {
        if (is_null($rcsNumber)) {
            throw new InvalidArgumentException('non-nullable rcsNumber cannot be null');
        }
        $this->container['rcsNumber'] = $rcsNumber;

        return $this;
    }

    /**
     * Gets shareCapital
     *
     * @return float|null
     */
    public function getShareCapital(): ?float
    {
        return $this->container['shareCapital'];
    }

    /**
     * Sets shareCapital
     *
     * @param float|null $shareCapital Share Capital (France only)
     *
     * @return $this
     */
    public function setShareCapital(?float $shareCapital): static
    {
        if (is_null($shareCapital)) {
            throw new InvalidArgumentException('non-nullable shareCapital cannot be null');
        }
        $this->container['shareCapital'] = $shareCapital;

        return $this;
    }

    /**
     * Gets businessActivityType
     *
     * @return \SynergiTech\Sage\Model\BusinessActivityType|null
     */
    public function getBusinessActivityType(): ?\SynergiTech\Sage\Model\BusinessActivityType
    {
        return $this->container['businessActivityType'];
    }

    /**
     * Sets businessActivityType
     *
     * @param \SynergiTech\Sage\Model\BusinessActivityType|null $businessActivityType businessActivityType
     *
     * @return $this
     */
    public function setBusinessActivityType(?\SynergiTech\Sage\Model\BusinessActivityType $businessActivityType): static
    {
        if (is_null($businessActivityType)) {
            throw new InvalidArgumentException('non-nullable businessActivityType cannot be null');
        }
        $this->container['businessActivityType'] = $businessActivityType;

        return $this;
    }

    /**
     * Gets legalFormType
     *
     * @return \SynergiTech\Sage\Model\LegalFormType|null
     */
    public function getLegalFormType(): ?\SynergiTech\Sage\Model\LegalFormType
    {
        return $this->container['legalFormType'];
    }

    /**
     * Sets legalFormType
     *
     * @param \SynergiTech\Sage\Model\LegalFormType|null $legalFormType legalFormType
     *
     * @return $this
     */
    public function setLegalFormType(?\SynergiTech\Sage\Model\LegalFormType $legalFormType): static
    {
        if (is_null($legalFormType)) {
            throw new InvalidArgumentException('non-nullable legalFormType cannot be null');
        }
        $this->container['legalFormType'] = $legalFormType;

        return $this;
    }

    /**
     * Gets auxiliaryAccountsVisible
     *
     * @return bool|null
     */
    public function getAuxiliaryAccountsVisible(): ?bool
    {
        return $this->container['auxiliaryAccountsVisible'];
    }

    /**
     * Sets auxiliaryAccountsVisible
     *
     * @param bool|null $auxiliaryAccountsVisible Auxiliary Accounts Visible (France & Spain only)
     *
     * @return $this
     */
    public function setAuxiliaryAccountsVisible(?bool $auxiliaryAccountsVisible): static
    {
        if (is_null($auxiliaryAccountsVisible)) {
            throw new InvalidArgumentException('non-nullable auxiliaryAccountsVisible cannot be null');
        }
        $this->container['auxiliaryAccountsVisible'] = $auxiliaryAccountsVisible;

        return $this;
    }

    /**
     * Gets defaultLedgerAccounts
     *
     * @return \SynergiTech\Sage\Model\DefaultLedgerAccounts|null
     */
    public function getDefaultLedgerAccounts(): ?\SynergiTech\Sage\Model\DefaultLedgerAccounts
    {
        return $this->container['defaultLedgerAccounts'];
    }

    /**
     * Sets defaultLedgerAccounts
     *
     * @param \SynergiTech\Sage\Model\DefaultLedgerAccounts|null $defaultLedgerAccounts defaultLedgerAccounts
     *
     * @return $this
     */
    public function setDefaultLedgerAccounts(?\SynergiTech\Sage\Model\DefaultLedgerAccounts $defaultLedgerAccounts): static
    {
        if (is_null($defaultLedgerAccounts)) {
            throw new InvalidArgumentException('non-nullable defaultLedgerAccounts cannot be null');
        }
        $this->container['defaultLedgerAccounts'] = $defaultLedgerAccounts;

        return $this;
    }

    /**
     * Gets businessType
     *
     * @return \SynergiTech\Sage\Model\BusinessType|null
     */
    public function getBusinessType(): ?\SynergiTech\Sage\Model\BusinessType
    {
        return $this->container['businessType'];
    }

    /**
     * Sets businessType
     *
     * @param \SynergiTech\Sage\Model\BusinessType|null $businessType businessType
     *
     * @return $this
     */
    public function setBusinessType(?\SynergiTech\Sage\Model\BusinessType $businessType): static
    {
        if (is_null($businessType)) {
            throw new InvalidArgumentException('non-nullable businessType cannot be null');
        }
        $this->container['businessType'] = $businessType;

        return $this;
    }

    /**
     * Gets countryOfRegistration
     *
     * @return \SynergiTech\Sage\Model\Base|null
     */
    public function getCountryOfRegistration(): ?\SynergiTech\Sage\Model\Base
    {
        return $this->container['countryOfRegistration'];
    }

    /**
     * Sets countryOfRegistration
     *
     * @param \SynergiTech\Sage\Model\Base|null $countryOfRegistration countryOfRegistration
     *
     * @return $this
     */
    public function setCountryOfRegistration(?\SynergiTech\Sage\Model\Base $countryOfRegistration): static
    {
        if (is_null($countryOfRegistration)) {
            throw new InvalidArgumentException('non-nullable countryOfRegistration cannot be null');
        }
        $this->container['countryOfRegistration'] = $countryOfRegistration;

        return $this;
    }

    /**
     * Gets businessCreatedAt
     *
     * @return \DateTime|null
     */
    public function getBusinessCreatedAt(): ?\DateTime
    {
        return $this->container['businessCreatedAt'];
    }

    /**
     * Sets businessCreatedAt
     *
     * @param \DateTime|null $businessCreatedAt The timestamp on which the business was created. This can be the timestamp of the initial creation or the latest business reset.
     *
     * @return $this
     */
    public function setBusinessCreatedAt(?\DateTime $businessCreatedAt): static
    {
        if (is_null($businessCreatedAt)) {
            throw new InvalidArgumentException('non-nullable businessCreatedAt cannot be null');
        }
        $this->container['businessCreatedAt'] = $businessCreatedAt;

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
     * Gets wizardComplete
     *
     * @return bool|null
     */
    public function getWizardComplete(): ?bool
    {
        return $this->container['wizardComplete'];
    }

    /**
     * Sets wizardComplete
     *
     * @param bool|null $wizardComplete Quick Start Wizard completion
     *
     * @return $this
     */
    public function setWizardComplete(?bool $wizardComplete): static
    {
        if (is_null($wizardComplete)) {
            throw new InvalidArgumentException('non-nullable wizardComplete cannot be null');
        }
        $this->container['wizardComplete'] = $wizardComplete;

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


