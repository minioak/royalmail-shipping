<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for requestedShipment Structs
 * Meta informations extracted from the WSDL
 * - documentation: schema to hold the details for the shipment
 * @subpackage Structs
 */
class RequestedShipment extends AbstractStructBase
{
    /**
     * The shipmentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $shipmentType;
    /**
     * The serviceOccurrence
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: A number indicating a position as in a sequence number. | An integer is a whole number (not a fraction) that can be positive, negative, or zero. Unlike floats, integers cannot have decimal places.
     * - base: xs:integer
     * @var int
     */
    public $serviceOccurrence;
    /**
     * The serviceType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $serviceType;
    /**
     * The serviceOffering
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\ServiceOfferingType
     */
    public $serviceOffering;
    /**
     * The serviceFormat
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\ServiceFormatType
     */
    public $serviceFormat;
    /**
     * The bfpoFormat
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\BFPOFormatType
     */
    public $bfpoFormat;
    /**
     * The serviceEnhancements
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\ServiceEnhancements
     */
    public $serviceEnhancements;
    /**
     * The signature
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - base: xs:boolean
     * - documentation: Boolean, or boolean logic, is a subset of algebra used for creating true/false statements. Boolean expressions use the operators AND, OR, XOR, and NOT to compare values and return a true or false result. Boolean values can also be
     * referred to as 'flags'.
     * @var bool
     */
    public $signature;
    /**
     * The shippingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - base: xs:date
     * - documentation: A date represents a period in time which could be a particular month, day, and year at which some event happened or will happen.
     * @var string
     */
    public $shippingDate;
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
     * The items
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\Items
     */
    public $items;
    /**
     * The departmentReference
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $departmentReference;
    /**
     * The customerReference
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $customerReference;
    /**
     * The senderReference
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $senderReference;
    /**
     * The safePlace
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: A comment is a sub-type of string which can be used as a note intended as an explanation, illustration, instruction, capture of an interaction or an annotation. This is free format text which can be input by the end user. | Simple
     * set of alphanumeric characters.
     * - maxLength: 4000 | 4000
     * - base: xs:string
     * @var string
     */
    public $safePlace;
    /**
     * The importerContact
     * Meta informations extracted from the WSDL
     * - documentation: schema to hold contact details of importer
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\Contact
     */
    public $importerContact;
    /**
     * The importerAddress
     * Meta informations extracted from the WSDL
     * - documentation: schema to hold address of importer
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\Address
     */
    public $importerAddress;
    /**
     * The exporterContact
     * Meta informations extracted from the WSDL
     * - documentation: schema to hold contact details of exporter
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\Contact
     */
    public $exporterContact;
    /**
     * The exporterAddress
     * Meta informations extracted from the WSDL
     * - documentation: schema to hold address of exporter
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\Address
     */
    public $exporterAddress;
    /**
     * The internationalInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\InternationalInfo
     */
    public $internationalInfo;
    /**
     * Constructor method for requestedShipment
     * @uses RequestedShipment::setShipmentType()
     * @uses RequestedShipment::setServiceOccurrence()
     * @uses RequestedShipment::setServiceType()
     * @uses RequestedShipment::setServiceOffering()
     * @uses RequestedShipment::setServiceFormat()
     * @uses RequestedShipment::setBfpoFormat()
     * @uses RequestedShipment::setServiceEnhancements()
     * @uses RequestedShipment::setSignature()
     * @uses RequestedShipment::setShippingDate()
     * @uses RequestedShipment::setRecipientContact()
     * @uses RequestedShipment::setRecipientAddress()
     * @uses RequestedShipment::setItems()
     * @uses RequestedShipment::setDepartmentReference()
     * @uses RequestedShipment::setCustomerReference()
     * @uses RequestedShipment::setSenderReference()
     * @uses RequestedShipment::setSafePlace()
     * @uses RequestedShipment::setImporterContact()
     * @uses RequestedShipment::setImporterAddress()
     * @uses RequestedShipment::setExporterContact()
     * @uses RequestedShipment::setExporterAddress()
     * @uses RequestedShipment::setInternationalInfo()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $shipmentType
     * @param int $serviceOccurrence
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $serviceType
     * @param \Minioak\Royalmail\Shipping\Structs\ServiceOfferingType $serviceOffering
     * @param \Minioak\Royalmail\Shipping\Structs\ServiceFormatType $serviceFormat
     * @param \Minioak\Royalmail\Shipping\Structs\BFPOFormatType $bfpoFormat
     * @param \Minioak\Royalmail\Shipping\Structs\ServiceEnhancements $serviceEnhancements
     * @param bool $signature
     * @param string $shippingDate
     * @param \Minioak\Royalmail\Shipping\Structs\Contact $recipientContact
     * @param \Minioak\Royalmail\Shipping\Structs\Address $recipientAddress
     * @param \Minioak\Royalmail\Shipping\Structs\Items $items
     * @param string $departmentReference
     * @param string $customerReference
     * @param string $senderReference
     * @param string $safePlace
     * @param \Minioak\Royalmail\Shipping\Structs\Contact $importerContact
     * @param \Minioak\Royalmail\Shipping\Structs\Address $importerAddress
     * @param \Minioak\Royalmail\Shipping\Structs\Contact $exporterContact
     * @param \Minioak\Royalmail\Shipping\Structs\Address $exporterAddress
     * @param \Minioak\Royalmail\Shipping\Structs\InternationalInfo $internationalInfo
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $shipmentType = null, $serviceOccurrence = null, \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $serviceType = null, \Minioak\Royalmail\Shipping\Structs\ServiceOfferingType $serviceOffering = null, \Minioak\Royalmail\Shipping\Structs\ServiceFormatType $serviceFormat = null, \Minioak\Royalmail\Shipping\Structs\BFPOFormatType $bfpoFormat = null, \Minioak\Royalmail\Shipping\Structs\ServiceEnhancements $serviceEnhancements = null, $signature = null, $shippingDate = null, \Minioak\Royalmail\Shipping\Structs\Contact $recipientContact = null, \Minioak\Royalmail\Shipping\Structs\Address $recipientAddress = null, \Minioak\Royalmail\Shipping\Structs\Items $items = null, $departmentReference = null, $customerReference = null, $senderReference = null, $safePlace = null, \Minioak\Royalmail\Shipping\Structs\Contact $importerContact = null, \Minioak\Royalmail\Shipping\Structs\Address $importerAddress = null, \Minioak\Royalmail\Shipping\Structs\Contact $exporterContact = null, \Minioak\Royalmail\Shipping\Structs\Address $exporterAddress = null, \Minioak\Royalmail\Shipping\Structs\InternationalInfo $internationalInfo = null)
    {
        $this
            ->setShipmentType($shipmentType)
            ->setServiceOccurrence($serviceOccurrence)
            ->setServiceType($serviceType)
            ->setServiceOffering($serviceOffering)
            ->setServiceFormat($serviceFormat)
            ->setBfpoFormat($bfpoFormat)
            ->setServiceEnhancements($serviceEnhancements)
            ->setSignature($signature)
            ->setShippingDate($shippingDate)
            ->setRecipientContact($recipientContact)
            ->setRecipientAddress($recipientAddress)
            ->setItems($items)
            ->setDepartmentReference($departmentReference)
            ->setCustomerReference($customerReference)
            ->setSenderReference($senderReference)
            ->setSafePlace($safePlace)
            ->setImporterContact($importerContact)
            ->setImporterAddress($importerAddress)
            ->setExporterContact($exporterContact)
            ->setExporterAddress($exporterAddress)
            ->setInternationalInfo($internationalInfo);
    }
    /**
     * Get shipmentType value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType|null
     */
    public function getShipmentType()
    {
        return $this->shipmentType;
    }
    /**
     * Set shipmentType value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $shipmentType
     * @return \Minioak\Royalmail\Shipping\Structs\RequestedShipment
     */
    public function setShipmentType(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $shipmentType = null)
    {
        $this->shipmentType = $shipmentType;
        return $this;
    }
    /**
     * Get serviceOccurrence value
     * @return int|null
     */
    public function getServiceOccurrence()
    {
        return $this->serviceOccurrence;
    }
    /**
     * Set serviceOccurrence value
     * @param int $serviceOccurrence
     * @return \Minioak\Royalmail\Shipping\Structs\RequestedShipment
     */
    public function setServiceOccurrence($serviceOccurrence = null)
    {
        // validation for constraint: int
        if (!is_null($serviceOccurrence) && !is_numeric($serviceOccurrence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($serviceOccurrence)), __LINE__);
        }
        $this->serviceOccurrence = $serviceOccurrence;
        return $this;
    }
    /**
     * Get serviceType value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType|null
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }
    /**
     * Set serviceType value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $serviceType
     * @return \Minioak\Royalmail\Shipping\Structs\RequestedShipment
     */
    public function setServiceType(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $serviceType = null)
    {
        $this->serviceType = $serviceType;
        return $this;
    }
    /**
     * Get serviceOffering value
     * @return \Minioak\Royalmail\Shipping\Structs\ServiceOfferingType|null
     */
    public function getServiceOffering()
    {
        return $this->serviceOffering;
    }
    /**
     * Set serviceOffering value
     * @param \Minioak\Royalmail\Shipping\Structs\ServiceOfferingType $serviceOffering
     * @return \Minioak\Royalmail\Shipping\Structs\RequestedShipment
     */
    public function setServiceOffering(\Minioak\Royalmail\Shipping\Structs\ServiceOfferingType $serviceOffering = null)
    {
        $this->serviceOffering = $serviceOffering;
        return $this;
    }
    /**
     * Get serviceFormat value
     * @return \Minioak\Royalmail\Shipping\Structs\ServiceFormatType|null
     */
    public function getServiceFormat()
    {
        return $this->serviceFormat;
    }
    /**
     * Set serviceFormat value
     * @param \Minioak\Royalmail\Shipping\Structs\ServiceFormatType $serviceFormat
     * @return \Minioak\Royalmail\Shipping\Structs\RequestedShipment
     */
    public function setServiceFormat(\Minioak\Royalmail\Shipping\Structs\ServiceFormatType $serviceFormat = null)
    {
        $this->serviceFormat = $serviceFormat;
        return $this;
    }
    /**
     * Get bfpoFormat value
     * @return \Minioak\Royalmail\Shipping\Structs\BFPOFormatType|null
     */
    public function getBfpoFormat()
    {
        return $this->bfpoFormat;
    }
    /**
     * Set bfpoFormat value
     * @param \Minioak\Royalmail\Shipping\Structs\BFPOFormatType $bfpoFormat
     * @return \Minioak\Royalmail\Shipping\Structs\RequestedShipment
     */
    public function setBfpoFormat(\Minioak\Royalmail\Shipping\Structs\BFPOFormatType $bfpoFormat = null)
    {
        $this->bfpoFormat = $bfpoFormat;
        return $this;
    }
    /**
     * Get serviceEnhancements value
     * @return \Minioak\Royalmail\Shipping\Structs\ServiceEnhancements|null
     */
    public function getServiceEnhancements()
    {
        return $this->serviceEnhancements;
    }
    /**
     * Set serviceEnhancements value
     * @param \Minioak\Royalmail\Shipping\Structs\ServiceEnhancements $serviceEnhancements
     * @return \Minioak\Royalmail\Shipping\Structs\RequestedShipment
     */
    public function setServiceEnhancements(\Minioak\Royalmail\Shipping\Structs\ServiceEnhancements $serviceEnhancements = null)
    {
        $this->serviceEnhancements = $serviceEnhancements;
        return $this;
    }
    /**
     * Get signature value
     * @return bool|null
     */
    public function getSignature()
    {
        return $this->signature;
    }
    /**
     * Set signature value
     * @param bool $signature
     * @return \Minioak\Royalmail\Shipping\Structs\RequestedShipment
     */
    public function setSignature($signature = null)
    {
        $this->signature = $signature;
        return $this;
    }
    /**
     * Get shippingDate value
     * @return string|null
     */
    public function getShippingDate()
    {
        return $this->shippingDate;
    }
    /**
     * Set shippingDate value
     * @param string $shippingDate
     * @return \Minioak\Royalmail\Shipping\Structs\RequestedShipment
     */
    public function setShippingDate($shippingDate = null)
    {
        // validation for constraint: string
        if (!is_null($shippingDate) && !is_string($shippingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingDate)), __LINE__);
        }
        $this->shippingDate = $shippingDate;
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
     * @return \Minioak\Royalmail\Shipping\Structs\RequestedShipment
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
     * @return \Minioak\Royalmail\Shipping\Structs\RequestedShipment
     */
    public function setRecipientAddress(\Minioak\Royalmail\Shipping\Structs\Address $recipientAddress = null)
    {
        $this->recipientAddress = $recipientAddress;
        return $this;
    }
    /**
     * Get items value
     * @return \Minioak\Royalmail\Shipping\Structs\Items|null
     */
    public function getItems()
    {
        return $this->items;
    }
    /**
     * Set items value
     * @param \Minioak\Royalmail\Shipping\Structs\Items $items
     * @return \Minioak\Royalmail\Shipping\Structs\RequestedShipment
     */
    public function setItems(\Minioak\Royalmail\Shipping\Structs\Items $items = null)
    {
        $this->items = $items;
        return $this;
    }
    /**
     * Get departmentReference value
     * @return string|null
     */
    public function getDepartmentReference()
    {
        return $this->departmentReference;
    }
    /**
     * Set departmentReference value
     * @param string $departmentReference
     * @return \Minioak\Royalmail\Shipping\Structs\RequestedShipment
     */
    public function setDepartmentReference($departmentReference = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($departmentReference) && strlen($departmentReference) > 1) || (is_array($departmentReference) && count($departmentReference) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($departmentReference) ? strlen($departmentReference) : count($departmentReference)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($departmentReference) && !is_string($departmentReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departmentReference)), __LINE__);
        }
        $this->departmentReference = $departmentReference;
        return $this;
    }
    /**
     * Get customerReference value
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }
    /**
     * Set customerReference value
     * @param string $customerReference
     * @return \Minioak\Royalmail\Shipping\Structs\RequestedShipment
     */
    public function setCustomerReference($customerReference = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($customerReference) && strlen($customerReference) > 1) || (is_array($customerReference) && count($customerReference) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($customerReference) ? strlen($customerReference) : count($customerReference)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($customerReference) && !is_string($customerReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerReference)), __LINE__);
        }
        $this->customerReference = $customerReference;
        return $this;
    }
    /**
     * Get senderReference value
     * @return string|null
     */
    public function getSenderReference()
    {
        return $this->senderReference;
    }
    /**
     * Set senderReference value
     * @param string $senderReference
     * @return \Minioak\Royalmail\Shipping\Structs\RequestedShipment
     */
    public function setSenderReference($senderReference = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($senderReference) && strlen($senderReference) > 1) || (is_array($senderReference) && count($senderReference) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($senderReference) ? strlen($senderReference) : count($senderReference)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($senderReference) && !is_string($senderReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderReference)), __LINE__);
        }
        $this->senderReference = $senderReference;
        return $this;
    }
    /**
     * Get safePlace value
     * @return string|null
     */
    public function getSafePlace()
    {
        return $this->safePlace;
    }
    /**
     * Set safePlace value
     * @param string $safePlace
     * @return \Minioak\Royalmail\Shipping\Structs\RequestedShipment
     */
    public function setSafePlace($safePlace = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($safePlace) && strlen($safePlace) > 1) || (is_array($safePlace) && count($safePlace) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($safePlace) ? strlen($safePlace) : count($safePlace)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($safePlace) && !is_string($safePlace)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($safePlace)), __LINE__);
        }
        $this->safePlace = $safePlace;
        return $this;
    }
    /**
     * Get importerContact value
     * @return \Minioak\Royalmail\Shipping\Structs\Contact|null
     */
    public function getImporterContact()
    {
        return $this->importerContact;
    }
    /**
     * Set importerContact value
     * @param \Minioak\Royalmail\Shipping\Structs\Contact $importerContact
     * @return \Minioak\Royalmail\Shipping\Structs\RequestedShipment
     */
    public function setImporterContact(\Minioak\Royalmail\Shipping\Structs\Contact $importerContact = null)
    {
        $this->importerContact = $importerContact;
        return $this;
    }
    /**
     * Get importerAddress value
     * @return \Minioak\Royalmail\Shipping\Structs\Address|null
     */
    public function getImporterAddress()
    {
        return $this->importerAddress;
    }
    /**
     * Set importerAddress value
     * @param \Minioak\Royalmail\Shipping\Structs\Address $importerAddress
     * @return \Minioak\Royalmail\Shipping\Structs\RequestedShipment
     */
    public function setImporterAddress(\Minioak\Royalmail\Shipping\Structs\Address $importerAddress = null)
    {
        $this->importerAddress = $importerAddress;
        return $this;
    }
    /**
     * Get exporterContact value
     * @return \Minioak\Royalmail\Shipping\Structs\Contact|null
     */
    public function getExporterContact()
    {
        return $this->exporterContact;
    }
    /**
     * Set exporterContact value
     * @param \Minioak\Royalmail\Shipping\Structs\Contact $exporterContact
     * @return \Minioak\Royalmail\Shipping\Structs\RequestedShipment
     */
    public function setExporterContact(\Minioak\Royalmail\Shipping\Structs\Contact $exporterContact = null)
    {
        $this->exporterContact = $exporterContact;
        return $this;
    }
    /**
     * Get exporterAddress value
     * @return \Minioak\Royalmail\Shipping\Structs\Address|null
     */
    public function getExporterAddress()
    {
        return $this->exporterAddress;
    }
    /**
     * Set exporterAddress value
     * @param \Minioak\Royalmail\Shipping\Structs\Address $exporterAddress
     * @return \Minioak\Royalmail\Shipping\Structs\RequestedShipment
     */
    public function setExporterAddress(\Minioak\Royalmail\Shipping\Structs\Address $exporterAddress = null)
    {
        $this->exporterAddress = $exporterAddress;
        return $this;
    }
    /**
     * Get internationalInfo value
     * @return \Minioak\Royalmail\Shipping\Structs\InternationalInfo|null
     */
    public function getInternationalInfo()
    {
        return $this->internationalInfo;
    }
    /**
     * Set internationalInfo value
     * @param \Minioak\Royalmail\Shipping\Structs\InternationalInfo $internationalInfo
     * @return \Minioak\Royalmail\Shipping\Structs\RequestedShipment
     */
    public function setInternationalInfo(\Minioak\Royalmail\Shipping\Structs\InternationalInfo $internationalInfo = null)
    {
        $this->internationalInfo = $internationalInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\RequestedShipment
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
