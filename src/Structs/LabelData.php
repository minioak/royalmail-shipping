<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for labelData Structs
 * Meta informations extracted from the WSDL
 * - documentation: schema to hold details for the 2D Data Matrix
 * @subpackage Structs
 */
class LabelData extends AbstractStructBase
{
    /**
     * The upuCode
     * Meta informations extracted from the WSDL
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $upuCode;
    /**
     * The informationTypeID
     * Meta informations extracted from the WSDL
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $informationTypeID;
    /**
     * The versionID
     * Meta informations extracted from the WSDL
     * - base: xs:integer
     * - documentation: An integer is a whole number (not a fraction) that can be positive, negative, or zero. Unlike floats, integers cannot have decimal places.
     * @var int
     */
    public $versionID;
    /**
     * The format
     * Meta informations extracted from the WSDL
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $format;
    /**
     * The class
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $class;
    /**
     * The mailType
     * Meta informations extracted from the WSDL
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $mailType;
    /**
     * The itemID
     * Meta informations extracted from the WSDL
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $itemID;
    /**
     * The checkDigit
     * Meta informations extracted from the WSDL
     * - base: xs:integer
     * - documentation: An integer is a whole number (not a fraction) that can be positive, negative, or zero. Unlike floats, integers cannot have decimal places.
     * @var int
     */
    public $checkDigit;
    /**
     * The itemWeight
     * Meta informations extracted from the WSDL
     * - base: xs:integer
     * - documentation: An integer is a whole number (not a fraction) that can be positive, negative, or zero. Unlike floats, integers cannot have decimal places.
     * @var int
     */
    public $itemWeight;
    /**
     * The weightType
     * Meta informations extracted from the WSDL
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $weightType;
    /**
     * The product
     * Meta informations extracted from the WSDL
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $product;
    /**
     * The typeOfItem
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $typeOfItem;
    /**
     * The trackingNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $trackingNumber;
    /**
     * The destinationPostcodeDPS
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $destinationPostcodeDPS;
    /**
     * The returnToSenderPostcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $returnToSenderPostcode;
    /**
     * The requiredAtDelivery
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $requiredAtDelivery;
    /**
     * The reservedBIV
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $reservedBIV;
    /**
     * The reservedBIVK
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $reservedBIVK;
    /**
     * The spareCapacity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: A short description is a sub-type of string and is a shorter version of a description (see definition of description) and is used to summarise a longer description. Descriptions are only editable via an admin function and are for
     * display and information purposes only for end users | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $spareCapacity;
    /**
     * The buildingNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - base: xs:integer
     * - documentation: An integer is a whole number (not a fraction) that can be positive, negative, or zero. Unlike floats, integers cannot have decimal places.
     * @var int
     */
    public $buildingNumber;
    /**
     * The buildingName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: A name is a sub-type of string and is word or a combination of words by which a person, place, or thing, a body or class, or any object of thought is designated, called, or known. | Simple set of alphanumeric characters.
     * - maxLength: 64 | 4000
     * - base: xs:string
     * @var string
     */
    public $buildingName;
    /**
     * The dateOfShipment
     * Meta informations extracted from the WSDL
     * - base: xs:date
     * - documentation: A date represents a period in time which could be a particular month, day, and year at which some event happened or will happen.
     * @var string
     */
    public $dateOfShipment;
    /**
     * The recipientContact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\Contact
     */
    public $recipientContact;
    /**
     * The recipientAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\Address
     */
    public $recipientAddress;
    /**
     * Constructor method for labelData
     * @uses LabelData::setUpuCode()
     * @uses LabelData::setInformationTypeID()
     * @uses LabelData::setVersionID()
     * @uses LabelData::setFormat()
     * @uses LabelData::setClass()
     * @uses LabelData::setMailType()
     * @uses LabelData::setItemID()
     * @uses LabelData::setCheckDigit()
     * @uses LabelData::setItemWeight()
     * @uses LabelData::setWeightType()
     * @uses LabelData::setProduct()
     * @uses LabelData::setTypeOfItem()
     * @uses LabelData::setTrackingNumber()
     * @uses LabelData::setDestinationPostcodeDPS()
     * @uses LabelData::setReturnToSenderPostcode()
     * @uses LabelData::setRequiredAtDelivery()
     * @uses LabelData::setReservedBIV()
     * @uses LabelData::setReservedBIVK()
     * @uses LabelData::setSpareCapacity()
     * @uses LabelData::setBuildingNumber()
     * @uses LabelData::setBuildingName()
     * @uses LabelData::setDateOfShipment()
     * @uses LabelData::setRecipientContact()
     * @uses LabelData::setRecipientAddress()
     * @param string $upuCode
     * @param string $informationTypeID
     * @param int $versionID
     * @param string $format
     * @param string $class
     * @param string $mailType
     * @param string $itemID
     * @param int $checkDigit
     * @param int $itemWeight
     * @param string $weightType
     * @param string $product
     * @param string $typeOfItem
     * @param string $trackingNumber
     * @param string $destinationPostcodeDPS
     * @param string $returnToSenderPostcode
     * @param string $requiredAtDelivery
     * @param string $reservedBIV
     * @param string $reservedBIVK
     * @param string $spareCapacity
     * @param int $buildingNumber
     * @param string $buildingName
     * @param string $dateOfShipment
     * @param \Minioak\Royalmail\Shipping\Structs\Contact $recipientContact
     * @param \Minioak\Royalmail\Shipping\Structs\Address $recipientAddress
     */
    public function __construct($upuCode = null, $informationTypeID = null, $versionID = null, $format = null, $class = null, $mailType = null, $itemID = null, $checkDigit = null, $itemWeight = null, $weightType = null, $product = null, $typeOfItem = null, $trackingNumber = null, $destinationPostcodeDPS = null, $returnToSenderPostcode = null, $requiredAtDelivery = null, $reservedBIV = null, $reservedBIVK = null, $spareCapacity = null, $buildingNumber = null, $buildingName = null, $dateOfShipment = null, \Minioak\Royalmail\Shipping\Structs\Contact $recipientContact = null, \Minioak\Royalmail\Shipping\Structs\Address $recipientAddress = null)
    {
        $this
            ->setUpuCode($upuCode)
            ->setInformationTypeID($informationTypeID)
            ->setVersionID($versionID)
            ->setFormat($format)
            ->setClass($class)
            ->setMailType($mailType)
            ->setItemID($itemID)
            ->setCheckDigit($checkDigit)
            ->setItemWeight($itemWeight)
            ->setWeightType($weightType)
            ->setProduct($product)
            ->setTypeOfItem($typeOfItem)
            ->setTrackingNumber($trackingNumber)
            ->setDestinationPostcodeDPS($destinationPostcodeDPS)
            ->setReturnToSenderPostcode($returnToSenderPostcode)
            ->setRequiredAtDelivery($requiredAtDelivery)
            ->setReservedBIV($reservedBIV)
            ->setReservedBIVK($reservedBIVK)
            ->setSpareCapacity($spareCapacity)
            ->setBuildingNumber($buildingNumber)
            ->setBuildingName($buildingName)
            ->setDateOfShipment($dateOfShipment)
            ->setRecipientContact($recipientContact)
            ->setRecipientAddress($recipientAddress);
    }
    /**
     * Get upuCode value
     * @return string|null
     */
    public function getUpuCode()
    {
        return $this->upuCode;
    }
    /**
     * Set upuCode value
     * @param string $upuCode
     * @return \Minioak\Royalmail\Shipping\Structs\LabelData
     */
    public function setUpuCode($upuCode = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($upuCode) && strlen($upuCode) > 1) || (is_array($upuCode) && count($upuCode) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($upuCode) ? strlen($upuCode) : count($upuCode)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($upuCode) && !is_string($upuCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($upuCode)), __LINE__);
        }
        $this->upuCode = $upuCode;
        return $this;
    }
    /**
     * Get informationTypeID value
     * @return string|null
     */
    public function getInformationTypeID()
    {
        return $this->informationTypeID;
    }
    /**
     * Set informationTypeID value
     * @param string $informationTypeID
     * @return \Minioak\Royalmail\Shipping\Structs\LabelData
     */
    public function setInformationTypeID($informationTypeID = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($informationTypeID) && strlen($informationTypeID) > 1) || (is_array($informationTypeID) && count($informationTypeID) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($informationTypeID) ? strlen($informationTypeID) : count($informationTypeID)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($informationTypeID) && !is_string($informationTypeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($informationTypeID)), __LINE__);
        }
        $this->informationTypeID = $informationTypeID;
        return $this;
    }
    /**
     * Get versionID value
     * @return int|null
     */
    public function getVersionID()
    {
        return $this->versionID;
    }
    /**
     * Set versionID value
     * @param int $versionID
     * @return \Minioak\Royalmail\Shipping\Structs\LabelData
     */
    public function setVersionID($versionID = null)
    {
        // validation for constraint: int
        if (!is_null($versionID) && !is_numeric($versionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($versionID)), __LINE__);
        }
        $this->versionID = $versionID;
        return $this;
    }
    /**
     * Get format value
     * @return string|null
     */
    public function getFormat()
    {
        return $this->format;
    }
    /**
     * Set format value
     * @param string $format
     * @return \Minioak\Royalmail\Shipping\Structs\LabelData
     */
    public function setFormat($format = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($format) && strlen($format) > 1) || (is_array($format) && count($format) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($format) ? strlen($format) : count($format)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($format) && !is_string($format)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($format)), __LINE__);
        }
        $this->format = $format;
        return $this;
    }
    /**
     * Get class value
     * @return string|null
     */
    public function getClass()
    {
        return $this->class;
    }
    /**
     * Set class value
     * @param string $class
     * @return \Minioak\Royalmail\Shipping\Structs\LabelData
     */
    public function setClass($class = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($class) && strlen($class) > 1) || (is_array($class) && count($class) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($class) ? strlen($class) : count($class)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($class) && !is_string($class)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($class)), __LINE__);
        }
        $this->class = $class;
        return $this;
    }
    /**
     * Get mailType value
     * @return string|null
     */
    public function getMailType()
    {
        return $this->mailType;
    }
    /**
     * Set mailType value
     * @param string $mailType
     * @return \Minioak\Royalmail\Shipping\Structs\LabelData
     */
    public function setMailType($mailType = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($mailType) && strlen($mailType) > 1) || (is_array($mailType) && count($mailType) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($mailType) ? strlen($mailType) : count($mailType)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($mailType) && !is_string($mailType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mailType)), __LINE__);
        }
        $this->mailType = $mailType;
        return $this;
    }
    /**
     * Get itemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->itemID;
    }
    /**
     * Set itemID value
     * @param string $itemID
     * @return \Minioak\Royalmail\Shipping\Structs\LabelData
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($itemID) && strlen($itemID) > 1) || (is_array($itemID) && count($itemID) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($itemID) ? strlen($itemID) : count($itemID)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemID)), __LINE__);
        }
        $this->itemID = $itemID;
        return $this;
    }
    /**
     * Get checkDigit value
     * @return int|null
     */
    public function getCheckDigit()
    {
        return $this->checkDigit;
    }
    /**
     * Set checkDigit value
     * @param int $checkDigit
     * @return \Minioak\Royalmail\Shipping\Structs\LabelData
     */
    public function setCheckDigit($checkDigit = null)
    {
        // validation for constraint: int
        if (!is_null($checkDigit) && !is_numeric($checkDigit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($checkDigit)), __LINE__);
        }
        $this->checkDigit = $checkDigit;
        return $this;
    }
    /**
     * Get itemWeight value
     * @return int|null
     */
    public function getItemWeight()
    {
        return $this->itemWeight;
    }
    /**
     * Set itemWeight value
     * @param int $itemWeight
     * @return \Minioak\Royalmail\Shipping\Structs\LabelData
     */
    public function setItemWeight($itemWeight = null)
    {
        // validation for constraint: int
        if (!is_null($itemWeight) && !is_numeric($itemWeight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($itemWeight)), __LINE__);
        }
        $this->itemWeight = $itemWeight;
        return $this;
    }
    /**
     * Get weightType value
     * @return string|null
     */
    public function getWeightType()
    {
        return $this->weightType;
    }
    /**
     * Set weightType value
     * @param string $weightType
     * @return \Minioak\Royalmail\Shipping\Structs\LabelData
     */
    public function setWeightType($weightType = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($weightType) && strlen($weightType) > 1) || (is_array($weightType) && count($weightType) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($weightType) ? strlen($weightType) : count($weightType)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($weightType) && !is_string($weightType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($weightType)), __LINE__);
        }
        $this->weightType = $weightType;
        return $this;
    }
    /**
     * Get product value
     * @return string|null
     */
    public function getProduct()
    {
        return $this->product;
    }
    /**
     * Set product value
     * @param string $product
     * @return \Minioak\Royalmail\Shipping\Structs\LabelData
     */
    public function setProduct($product = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($product) && strlen($product) > 1) || (is_array($product) && count($product) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($product) ? strlen($product) : count($product)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($product) && !is_string($product)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($product)), __LINE__);
        }
        $this->product = $product;
        return $this;
    }
    /**
     * Get typeOfItem value
     * @return string|null
     */
    public function getTypeOfItem()
    {
        return $this->typeOfItem;
    }
    /**
     * Set typeOfItem value
     * @param string $typeOfItem
     * @return \Minioak\Royalmail\Shipping\Structs\LabelData
     */
    public function setTypeOfItem($typeOfItem = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($typeOfItem) && strlen($typeOfItem) > 1) || (is_array($typeOfItem) && count($typeOfItem) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($typeOfItem) ? strlen($typeOfItem) : count($typeOfItem)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($typeOfItem) && !is_string($typeOfItem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($typeOfItem)), __LINE__);
        }
        $this->typeOfItem = $typeOfItem;
        return $this;
    }
    /**
     * Get trackingNumber value
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }
    /**
     * Set trackingNumber value
     * @param string $trackingNumber
     * @return \Minioak\Royalmail\Shipping\Structs\LabelData
     */
    public function setTrackingNumber($trackingNumber = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($trackingNumber) && strlen($trackingNumber) > 1) || (is_array($trackingNumber) && count($trackingNumber) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($trackingNumber) ? strlen($trackingNumber) : count($trackingNumber)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($trackingNumber) && !is_string($trackingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trackingNumber)), __LINE__);
        }
        $this->trackingNumber = $trackingNumber;
        return $this;
    }
    /**
     * Get destinationPostcodeDPS value
     * @return string|null
     */
    public function getDestinationPostcodeDPS()
    {
        return $this->destinationPostcodeDPS;
    }
    /**
     * Set destinationPostcodeDPS value
     * @param string $destinationPostcodeDPS
     * @return \Minioak\Royalmail\Shipping\Structs\LabelData
     */
    public function setDestinationPostcodeDPS($destinationPostcodeDPS = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($destinationPostcodeDPS) && strlen($destinationPostcodeDPS) > 1) || (is_array($destinationPostcodeDPS) && count($destinationPostcodeDPS) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($destinationPostcodeDPS) ? strlen($destinationPostcodeDPS) : count($destinationPostcodeDPS)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($destinationPostcodeDPS) && !is_string($destinationPostcodeDPS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destinationPostcodeDPS)), __LINE__);
        }
        $this->destinationPostcodeDPS = $destinationPostcodeDPS;
        return $this;
    }
    /**
     * Get returnToSenderPostcode value
     * @return string|null
     */
    public function getReturnToSenderPostcode()
    {
        return $this->returnToSenderPostcode;
    }
    /**
     * Set returnToSenderPostcode value
     * @param string $returnToSenderPostcode
     * @return \Minioak\Royalmail\Shipping\Structs\LabelData
     */
    public function setReturnToSenderPostcode($returnToSenderPostcode = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($returnToSenderPostcode) && strlen($returnToSenderPostcode) > 1) || (is_array($returnToSenderPostcode) && count($returnToSenderPostcode) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($returnToSenderPostcode) ? strlen($returnToSenderPostcode) : count($returnToSenderPostcode)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($returnToSenderPostcode) && !is_string($returnToSenderPostcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnToSenderPostcode)), __LINE__);
        }
        $this->returnToSenderPostcode = $returnToSenderPostcode;
        return $this;
    }
    /**
     * Get requiredAtDelivery value
     * @return string|null
     */
    public function getRequiredAtDelivery()
    {
        return $this->requiredAtDelivery;
    }
    /**
     * Set requiredAtDelivery value
     * @param string $requiredAtDelivery
     * @return \Minioak\Royalmail\Shipping\Structs\LabelData
     */
    public function setRequiredAtDelivery($requiredAtDelivery = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($requiredAtDelivery) && strlen($requiredAtDelivery) > 1) || (is_array($requiredAtDelivery) && count($requiredAtDelivery) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($requiredAtDelivery) ? strlen($requiredAtDelivery) : count($requiredAtDelivery)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($requiredAtDelivery) && !is_string($requiredAtDelivery)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($requiredAtDelivery)), __LINE__);
        }
        $this->requiredAtDelivery = $requiredAtDelivery;
        return $this;
    }
    /**
     * Get reservedBIV value
     * @return string|null
     */
    public function getReservedBIV()
    {
        return $this->reservedBIV;
    }
    /**
     * Set reservedBIV value
     * @param string $reservedBIV
     * @return \Minioak\Royalmail\Shipping\Structs\LabelData
     */
    public function setReservedBIV($reservedBIV = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($reservedBIV) && strlen($reservedBIV) > 1) || (is_array($reservedBIV) && count($reservedBIV) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($reservedBIV) ? strlen($reservedBIV) : count($reservedBIV)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($reservedBIV) && !is_string($reservedBIV)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reservedBIV)), __LINE__);
        }
        $this->reservedBIV = $reservedBIV;
        return $this;
    }
    /**
     * Get reservedBIVK value
     * @return string|null
     */
    public function getReservedBIVK()
    {
        return $this->reservedBIVK;
    }
    /**
     * Set reservedBIVK value
     * @param string $reservedBIVK
     * @return \Minioak\Royalmail\Shipping\Structs\LabelData
     */
    public function setReservedBIVK($reservedBIVK = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($reservedBIVK) && strlen($reservedBIVK) > 1) || (is_array($reservedBIVK) && count($reservedBIVK) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($reservedBIVK) ? strlen($reservedBIVK) : count($reservedBIVK)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($reservedBIVK) && !is_string($reservedBIVK)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reservedBIVK)), __LINE__);
        }
        $this->reservedBIVK = $reservedBIVK;
        return $this;
    }
    /**
     * Get spareCapacity value
     * @return string|null
     */
    public function getSpareCapacity()
    {
        return $this->spareCapacity;
    }
    /**
     * Set spareCapacity value
     * @param string $spareCapacity
     * @return \Minioak\Royalmail\Shipping\Structs\LabelData
     */
    public function setSpareCapacity($spareCapacity = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($spareCapacity) && strlen($spareCapacity) > 1) || (is_array($spareCapacity) && count($spareCapacity) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($spareCapacity) ? strlen($spareCapacity) : count($spareCapacity)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($spareCapacity) && !is_string($spareCapacity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($spareCapacity)), __LINE__);
        }
        $this->spareCapacity = $spareCapacity;
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
     * @return \Minioak\Royalmail\Shipping\Structs\LabelData
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
     * @return \Minioak\Royalmail\Shipping\Structs\LabelData
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
     * Get dateOfShipment value
     * @return string|null
     */
    public function getDateOfShipment()
    {
        return $this->dateOfShipment;
    }
    /**
     * Set dateOfShipment value
     * @param string $dateOfShipment
     * @return \Minioak\Royalmail\Shipping\Structs\LabelData
     */
    public function setDateOfShipment($dateOfShipment = null)
    {
        // validation for constraint: string
        if (!is_null($dateOfShipment) && !is_string($dateOfShipment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateOfShipment)), __LINE__);
        }
        $this->dateOfShipment = $dateOfShipment;
        return $this;
    }
    /**
     * Get recipientContact value
     * @return \Minioak\Royalmail\Shipping\Structs\Contact|null
     */
    public function getRecipientContact()
    {
        return $this->recipientContact;
    }
    /**
     * Set recipientContact value
     * @param \Minioak\Royalmail\Shipping\Structs\Contact $recipientContact
     * @return \Minioak\Royalmail\Shipping\Structs\LabelData
     */
    public function setRecipientContact(\Minioak\Royalmail\Shipping\Structs\Contact $recipientContact = null)
    {
        $this->recipientContact = $recipientContact;
        return $this;
    }
    /**
     * Get recipientAddress value
     * @return \Minioak\Royalmail\Shipping\Structs\Address|null
     */
    public function getRecipientAddress()
    {
        return $this->recipientAddress;
    }
    /**
     * Set recipientAddress value
     * @param \Minioak\Royalmail\Shipping\Structs\Address $recipientAddress
     * @return \Minioak\Royalmail\Shipping\Structs\LabelData
     */
    public function setRecipientAddress(\Minioak\Royalmail\Shipping\Structs\Address $recipientAddress = null)
    {
        $this->recipientAddress = $recipientAddress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\LabelData
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
