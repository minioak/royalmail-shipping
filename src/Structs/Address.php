<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for address Structs
 * Meta informations extracted from the WSDL
 * - documentation: A postal address is a method of identifying a deliverable Location to the postal service.
 * - type: com:address
 * @subpackage Structs
 */
class Address extends AbstractStructBase
{
    /**
     * The addressUsageType
     * Meta informations extracted from the WSDL
     * - documentation: This denotes the function the address plays (i.e. it is a primary address, seasonal, etc).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\AddressUsageType[]
     */
    public $addressUsageType;
    /**
     * The domesticIndicator
     * Meta informations extracted from the WSDL
     * - documentation: This flag indicates whether the address is a UK domestic address or an international address. | Boolean, or boolean logic, is a subset of algebra used for creating true/false statements. Boolean expressions use the operators AND, OR,
     * XOR, and NOT to compare values and return a true or false result. Boolean values can also be referred to as 'flags'.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - base: xs:boolean
     * @var bool
     */
    public $domesticIndicator;
    /**
     * The buildingName
     * Meta informations extracted from the WSDL
     * - documentation: This is the vanity name for a building or house (i.e. Rowland Hill House). | A name is a sub-type of string and is word or a combination of words by which a person, place, or thing, a body or class, or any object of thought is
     * designated, called, or known. | Simple set of alphanumeric characters.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 64 | 4000
     * - base: xs:string
     * @var string
     */
    public $buildingName;
    /**
     * The buildingNumber
     * Meta informations extracted from the WSDL
     * - documentation: This is the allocated number identifying the location within the postcode. | An integer is a whole number (not a fraction) that can be positive, negative, or zero. Unlike floats, integers cannot have decimal places.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - base: xs:integer
     * @var int
     */
    public $buildingNumber;
    /**
     * The addressLine1
     * Meta informations extracted from the WSDL
     * - documentation: Generic line to hold address body (i.e. street name and number, direction, borough, etc). | A description is a sub-type of string and is statement in words that gives an account or descriptive representation of a thing. Descriptions
     * are only editable via an admin function and are for display and information purposes only for end users. | Simple set of alphanumeric characters.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 256 | 4000
     * - base: xs:string
     * @var string
     */
    public $addressLine1;
    /**
     * The addressLine2
     * Meta informations extracted from the WSDL
     * - documentation: Generic line to hold address body (i.e. street name and number, direction, borough, etc). | A description is a sub-type of string and is statement in words that gives an account or descriptive representation of a thing. Descriptions
     * are only editable via an admin function and are for display and information purposes only for end users. | Simple set of alphanumeric characters.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 256 | 4000
     * - base: xs:string
     * @var string
     */
    public $addressLine2;
    /**
     * The addressLine3
     * Meta informations extracted from the WSDL
     * - documentation: Generic line to hold address body (i.e. street name and number, direction, borough, etc). | A description is a sub-type of string and is statement in words that gives an account or descriptive representation of a thing. Descriptions
     * are only editable via an admin function and are for display and information purposes only for end users. | Simple set of alphanumeric characters.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 256 | 4000
     * - base: xs:string
     * @var string
     */
    public $addressLine3;
    /**
     * The addressLine4
     * Meta informations extracted from the WSDL
     * - documentation: Generic line to hold address body (i.e. street name and number, direction, borough, etc). | A description is a sub-type of string and is statement in words that gives an account or descriptive representation of a thing. Descriptions
     * are only editable via an admin function and are for display and information purposes only for end users. | Simple set of alphanumeric characters.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 256 | 4000
     * - base: xs:string
     * @var string
     */
    public $addressLine4;
    /**
     * The stateOrProvince
     * Meta informations extracted from the WSDL
     * - documentation: This is used specifically for international items only and is applicable for the US, Canada, Australia, etc.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\StateOrProvinceType
     */
    public $stateOrProvince;
    /**
     * The postTown
     * Meta informations extracted from the WSDL
     * - documentation: A town is a human settlement larger than a village but smaller than a city. | A name is a sub-type of string and is word or a combination of words by which a person, place, or thing, a body or class, or any object of thought is
     * designated, called, or known. | Simple set of alphanumeric characters.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 64 | 4000
     * - base: xs:string
     * @var string
     */
    public $postTown;
    /**
     * The county
     * Meta informations extracted from the WSDL
     * - documentation: A territorial division exercising administrative, judicial, and political functions.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\CountyType
     */
    public $county;
    /**
     * The postcode
     * Meta informations extracted from the WSDL
     * - documentation: A code created to abbreviate a series of postal addresses, that share location affinity, in order to facilitate mail collection, processing and delivery. | An identifier is a sub-type of string which serves as a means of
     * identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $postcode;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - documentation: A Country as recognised by the International Standards Organisation.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\CountryType
     */
    public $country;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - documentation: This is the state of the entity (i.e. it is active, approved, draft, inactive, etc).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\Status
     */
    public $status;
    /**
     * The audit
     * Meta informations extracted from the WSDL
     * - documentation: The audit type is appended to all business data constructs to ensure a standard way of capturing key data to track back users who have made changes to the data.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\Audit
     */
    public $audit;
    /**
     * Constructor method for address
     * @uses Address::setAddressUsageType()
     * @uses Address::setDomesticIndicator()
     * @uses Address::setBuildingName()
     * @uses Address::setBuildingNumber()
     * @uses Address::setAddressLine1()
     * @uses Address::setAddressLine2()
     * @uses Address::setAddressLine3()
     * @uses Address::setAddressLine4()
     * @uses Address::setStateOrProvince()
     * @uses Address::setPostTown()
     * @uses Address::setCounty()
     * @uses Address::setPostcode()
     * @uses Address::setCountry()
     * @uses Address::setStatus()
     * @uses Address::setAudit()
     * @param \Minioak\Royalmail\Shipping\Structs\AddressUsageType[] $addressUsageType
     * @param bool $domesticIndicator
     * @param string $buildingName
     * @param int $buildingNumber
     * @param string $addressLine1
     * @param string $addressLine2
     * @param string $addressLine3
     * @param string $addressLine4
     * @param \Minioak\Royalmail\Shipping\Structs\StateOrProvinceType $stateOrProvince
     * @param string $postTown
     * @param \Minioak\Royalmail\Shipping\Structs\CountyType $county
     * @param string $postcode
     * @param \Minioak\Royalmail\Shipping\Structs\CountryType $country
     * @param \Minioak\Royalmail\Shipping\Structs\Status $status
     * @param \Minioak\Royalmail\Shipping\Structs\Audit $audit
     */
    public function __construct(array $addressUsageType = array(), $domesticIndicator = null, $buildingName = null, $buildingNumber = null, $addressLine1 = null, $addressLine2 = null, $addressLine3 = null, $addressLine4 = null, \Minioak\Royalmail\Shipping\Structs\StateOrProvinceType $stateOrProvince = null, $postTown = null, \Minioak\Royalmail\Shipping\Structs\CountyType $county = null, $postcode = null, \Minioak\Royalmail\Shipping\Structs\CountryType $country = null, \Minioak\Royalmail\Shipping\Structs\Status $status = null, \Minioak\Royalmail\Shipping\Structs\Audit $audit = null)
    {
        $this
            ->setAddressUsageType($addressUsageType)
            ->setDomesticIndicator($domesticIndicator)
            ->setBuildingName($buildingName)
            ->setBuildingNumber($buildingNumber)
            ->setAddressLine1($addressLine1)
            ->setAddressLine2($addressLine2)
            ->setAddressLine3($addressLine3)
            ->setAddressLine4($addressLine4)
            ->setStateOrProvince($stateOrProvince)
            ->setPostTown($postTown)
            ->setCounty($county)
            ->setPostcode($postcode)
            ->setCountry($country)
            ->setStatus($status)
            ->setAudit($audit);
    }
    /**
     * Get addressUsageType value
     * @return \Minioak\Royalmail\Shipping\Structs\AddressUsageType[]|null
     */
    public function getAddressUsageType()
    {
        return $this->addressUsageType;
    }
    /**
     * Set addressUsageType value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\AddressUsageType[] $addressUsageType
     * @return \Minioak\Royalmail\Shipping\Structs\Address
     */
    public function setAddressUsageType(array $addressUsageType = array())
    {
        foreach ($addressUsageType as $addressAddressUsageTypeItem) {
            // validation for constraint: itemType
            if (!$addressAddressUsageTypeItem instanceof \Minioak\Royalmail\Shipping\Structs\AddressUsageType) {
                throw new \InvalidArgumentException(sprintf('The addressUsageType property can only contain items of \Minioak\Royalmail\Shipping\Structs\AddressUsageType, "%s" given', is_object($addressAddressUsageTypeItem) ? get_class($addressAddressUsageTypeItem) : gettype($addressAddressUsageTypeItem)), __LINE__);
            }
        }
        $this->addressUsageType = $addressUsageType;
        return $this;
    }
    /**
     * Add item to addressUsageType value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\AddressUsageType $item
     * @return \Minioak\Royalmail\Shipping\Structs\Address
     */
    public function addToAddressUsageType(\Minioak\Royalmail\Shipping\Structs\AddressUsageType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Minioak\Royalmail\Shipping\Structs\AddressUsageType) {
            throw new \InvalidArgumentException(sprintf('The addressUsageType property can only contain items of \Minioak\Royalmail\Shipping\Structs\AddressUsageType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->addressUsageType[] = $item;
        return $this;
    }
    /**
     * Get domesticIndicator value
     * @return bool|null
     */
    public function getDomesticIndicator()
    {
        return $this->domesticIndicator;
    }
    /**
     * Set domesticIndicator value
     * @param bool $domesticIndicator
     * @return \Minioak\Royalmail\Shipping\Structs\Address
     */
    public function setDomesticIndicator($domesticIndicator = null)
    {
        $this->domesticIndicator = $domesticIndicator;
        return $this;
    }
    /**
     * Get buildingName value
     * @return string|null
     */
    public function getBuildingName()
    {
        return $this->buildingName;
    }
    /**
     * Set buildingName value
     * @param string $buildingName
     * @return \Minioak\Royalmail\Shipping\Structs\Address
     */
    public function setBuildingName($buildingName = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($buildingName) && strlen($buildingName) > 1) || (is_array($buildingName) && count($buildingName) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($buildingName) ? strlen($buildingName) : count($buildingName)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($buildingName) && !is_string($buildingName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($buildingName)), __LINE__);
        }
        $this->buildingName = $buildingName;
        return $this;
    }
    /**
     * Get buildingNumber value
     * @return int|null
     */
    public function getBuildingNumber()
    {
        return $this->buildingNumber;
    }
    /**
     * Set buildingNumber value
     * @param int $buildingNumber
     * @return \Minioak\Royalmail\Shipping\Structs\Address
     */
    public function setBuildingNumber($buildingNumber = null)
    {
        // validation for constraint: int
        if (!is_null($buildingNumber) && !is_numeric($buildingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($buildingNumber)), __LINE__);
        }
        $this->buildingNumber = $buildingNumber;
        return $this;
    }
    /**
     * Get addressLine1 value
     * @return string|null
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }
    /**
     * Set addressLine1 value
     * @param string $addressLine1
     * @return \Minioak\Royalmail\Shipping\Structs\Address
     */
    public function setAddressLine1($addressLine1 = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($addressLine1) && strlen($addressLine1) > 1) || (is_array($addressLine1) && count($addressLine1) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($addressLine1) ? strlen($addressLine1) : count($addressLine1)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($addressLine1) && !is_string($addressLine1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addressLine1)), __LINE__);
        }
        $this->addressLine1 = $addressLine1;
        return $this;
    }
    /**
     * Get addressLine2 value
     * @return string|null
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
    }
    /**
     * Set addressLine2 value
     * @param string $addressLine2
     * @return \Minioak\Royalmail\Shipping\Structs\Address
     */
    public function setAddressLine2($addressLine2 = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($addressLine2) && strlen($addressLine2) > 1) || (is_array($addressLine2) && count($addressLine2) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($addressLine2) ? strlen($addressLine2) : count($addressLine2)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($addressLine2) && !is_string($addressLine2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addressLine2)), __LINE__);
        }
        $this->addressLine2 = $addressLine2;
        return $this;
    }
    /**
     * Get addressLine3 value
     * @return string|null
     */
    public function getAddressLine3()
    {
        return $this->addressLine3;
    }
    /**
     * Set addressLine3 value
     * @param string $addressLine3
     * @return \Minioak\Royalmail\Shipping\Structs\Address
     */
    public function setAddressLine3($addressLine3 = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($addressLine3) && strlen($addressLine3) > 1) || (is_array($addressLine3) && count($addressLine3) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($addressLine3) ? strlen($addressLine3) : count($addressLine3)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($addressLine3) && !is_string($addressLine3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addressLine3)), __LINE__);
        }
        $this->addressLine3 = $addressLine3;
        return $this;
    }
    /**
     * Get addressLine4 value
     * @return string|null
     */
    public function getAddressLine4()
    {
        return $this->addressLine4;
    }
    /**
     * Set addressLine4 value
     * @param string $addressLine4
     * @return \Minioak\Royalmail\Shipping\Structs\Address
     */
    public function setAddressLine4($addressLine4 = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($addressLine4) && strlen($addressLine4) > 1) || (is_array($addressLine4) && count($addressLine4) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($addressLine4) ? strlen($addressLine4) : count($addressLine4)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($addressLine4) && !is_string($addressLine4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addressLine4)), __LINE__);
        }
        $this->addressLine4 = $addressLine4;
        return $this;
    }
    /**
     * Get stateOrProvince value
     * @return \Minioak\Royalmail\Shipping\Structs\StateOrProvinceType|null
     */
    public function getStateOrProvince()
    {
        return $this->stateOrProvince;
    }
    /**
     * Set stateOrProvince value
     * @param \Minioak\Royalmail\Shipping\Structs\StateOrProvinceType $stateOrProvince
     * @return \Minioak\Royalmail\Shipping\Structs\Address
     */
    public function setStateOrProvince(\Minioak\Royalmail\Shipping\Structs\StateOrProvinceType $stateOrProvince = null)
    {
        $this->stateOrProvince = $stateOrProvince;
        return $this;
    }
    /**
     * Get postTown value
     * @return string|null
     */
    public function getPostTown()
    {
        return $this->postTown;
    }
    /**
     * Set postTown value
     * @param string $postTown
     * @return \Minioak\Royalmail\Shipping\Structs\Address
     */
    public function setPostTown($postTown = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($postTown) && strlen($postTown) > 1) || (is_array($postTown) && count($postTown) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($postTown) ? strlen($postTown) : count($postTown)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($postTown) && !is_string($postTown)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postTown)), __LINE__);
        }
        $this->postTown = $postTown;
        return $this;
    }
    /**
     * Get county value
     * @return \Minioak\Royalmail\Shipping\Structs\CountyType|null
     */
    public function getCounty()
    {
        return $this->county;
    }
    /**
     * Set county value
     * @param \Minioak\Royalmail\Shipping\Structs\CountyType $county
     * @return \Minioak\Royalmail\Shipping\Structs\Address
     */
    public function setCounty(\Minioak\Royalmail\Shipping\Structs\CountyType $county = null)
    {
        $this->county = $county;
        return $this;
    }
    /**
     * Get postcode value
     * @return string|null
     */
    public function getPostcode()
    {
        return $this->postcode;
    }
    /**
     * Set postcode value
     * @param string $postcode
     * @return \Minioak\Royalmail\Shipping\Structs\Address
     */
    public function setPostcode($postcode = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($postcode) && strlen($postcode) > 1) || (is_array($postcode) && count($postcode) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($postcode) ? strlen($postcode) : count($postcode)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($postcode) && !is_string($postcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postcode)), __LINE__);
        }
        $this->postcode = $postcode;
        return $this;
    }
    /**
     * Get country value
     * @return \Minioak\Royalmail\Shipping\Structs\CountryType|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param \Minioak\Royalmail\Shipping\Structs\CountryType $country
     * @return \Minioak\Royalmail\Shipping\Structs\Address
     */
    public function setCountry(\Minioak\Royalmail\Shipping\Structs\CountryType $country = null)
    {
        $this->country = $country;
        return $this;
    }
    /**
     * Get status value
     * @return \Minioak\Royalmail\Shipping\Structs\Status|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param \Minioak\Royalmail\Shipping\Structs\Status $status
     * @return \Minioak\Royalmail\Shipping\Structs\Address
     */
    public function setStatus(\Minioak\Royalmail\Shipping\Structs\Status $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get audit value
     * @return \Minioak\Royalmail\Shipping\Structs\Audit|null
     */
    public function getAudit()
    {
        return $this->audit;
    }
    /**
     * Set audit value
     * @param \Minioak\Royalmail\Shipping\Structs\Audit $audit
     * @return \Minioak\Royalmail\Shipping\Structs\Address
     */
    public function setAudit(\Minioak\Royalmail\Shipping\Structs\Audit $audit = null)
    {
        $this->audit = $audit;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\Address
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
