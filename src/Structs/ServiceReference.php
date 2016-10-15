<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for serviceReference Structs
 * Meta informations extracted from the WSDL
 * - documentation: schema to hold details for service occurrence, service offering, service enhancements combinations
 * @subpackage Structs
 */
class ServiceReference extends AbstractStructBase
{
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
     * The serviceOffering
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\ServiceOfferingType
     */
    public $serviceOffering;
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
     * The serviceType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $serviceType;
    /**
     * Constructor method for serviceReference
     * @uses ServiceReference::setServiceOccurrence()
     * @uses ServiceReference::setServiceOffering()
     * @uses ServiceReference::setServiceEnhancements()
     * @uses ServiceReference::setSignature()
     * @uses ServiceReference::setServiceType()
     * @param int $serviceOccurrence
     * @param \Minioak\Royalmail\Shipping\Structs\ServiceOfferingType $serviceOffering
     * @param \Minioak\Royalmail\Shipping\Structs\ServiceEnhancements $serviceEnhancements
     * @param bool $signature
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $serviceType
     */
    public function __construct($serviceOccurrence = null, \Minioak\Royalmail\Shipping\Structs\ServiceOfferingType $serviceOffering = null, \Minioak\Royalmail\Shipping\Structs\ServiceEnhancements $serviceEnhancements = null, $signature = null, \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $serviceType = null)
    {
        $this
            ->setServiceOccurrence($serviceOccurrence)
            ->setServiceOffering($serviceOffering)
            ->setServiceEnhancements($serviceEnhancements)
            ->setSignature($signature)
            ->setServiceType($serviceType);
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
     * @return \Minioak\Royalmail\Shipping\Structs\ServiceReference
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
     * @return \Minioak\Royalmail\Shipping\Structs\ServiceReference
     */
    public function setServiceOffering(\Minioak\Royalmail\Shipping\Structs\ServiceOfferingType $serviceOffering = null)
    {
        $this->serviceOffering = $serviceOffering;
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
     * @return \Minioak\Royalmail\Shipping\Structs\ServiceReference
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
     * @return \Minioak\Royalmail\Shipping\Structs\ServiceReference
     */
    public function setSignature($signature = null)
    {
        $this->signature = $signature;
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
     * @return \Minioak\Royalmail\Shipping\Structs\ServiceReference
     */
    public function setServiceType(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $serviceType = null)
    {
        $this->serviceType = $serviceType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\ServiceReference
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
