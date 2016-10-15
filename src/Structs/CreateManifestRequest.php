<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createManifestRequest Structs
 * Meta informations extracted from the WSDL
 * - documentation: request to create a manifest for items with a status of printed. It is possible to create a manifest for | schema to hold request details for createManifest operation
 * - type: ns:createManifestRequest
 * @subpackage Structs
 */
class CreateManifestRequest extends BaseRequest
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
     * The yourDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: A comment is a sub-type of string which can be used as a note intended as an explanation, illustration, instruction, capture of an interaction or an annotation. This is free format text which can be input by the end user. | Simple
     * set of alphanumeric characters.
     * - maxLength: 4000 | 4000
     * - base: xs:string
     * @var string
     */
    public $yourDescription;
    /**
     * The yourReference
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $yourReference;
    /**
     * Constructor method for createManifestRequest
     * @uses CreateManifestRequest::setServiceOccurrence()
     * @uses CreateManifestRequest::setServiceOffering()
     * @uses CreateManifestRequest::setYourDescription()
     * @uses CreateManifestRequest::setYourReference()
     * @param int $serviceOccurrence
     * @param \Minioak\Royalmail\Shipping\Structs\ServiceOfferingType $serviceOffering
     * @param string $yourDescription
     * @param string $yourReference
     */
    public function __construct($serviceOccurrence = null, \Minioak\Royalmail\Shipping\Structs\ServiceOfferingType $serviceOffering = null, $yourDescription = null, $yourReference = null)
    {
        $this
            ->setServiceOccurrence($serviceOccurrence)
            ->setServiceOffering($serviceOffering)
            ->setYourDescription($yourDescription)
            ->setYourReference($yourReference);
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
     * @return \Minioak\Royalmail\Shipping\Structs\CreateManifestRequest
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
     * @return \Minioak\Royalmail\Shipping\Structs\CreateManifestRequest
     */
    public function setServiceOffering(\Minioak\Royalmail\Shipping\Structs\ServiceOfferingType $serviceOffering = null)
    {
        $this->serviceOffering = $serviceOffering;
        return $this;
    }
    /**
     * Get yourDescription value
     * @return string|null
     */
    public function getYourDescription()
    {
        return $this->yourDescription;
    }
    /**
     * Set yourDescription value
     * @param string $yourDescription
     * @return \Minioak\Royalmail\Shipping\Structs\CreateManifestRequest
     */
    public function setYourDescription($yourDescription = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($yourDescription) && strlen($yourDescription) > 1) || (is_array($yourDescription) && count($yourDescription) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($yourDescription) ? strlen($yourDescription) : count($yourDescription)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($yourDescription) && !is_string($yourDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($yourDescription)), __LINE__);
        }
        $this->yourDescription = $yourDescription;
        return $this;
    }
    /**
     * Get yourReference value
     * @return string|null
     */
    public function getYourReference()
    {
        return $this->yourReference;
    }
    /**
     * Set yourReference value
     * @param string $yourReference
     * @return \Minioak\Royalmail\Shipping\Structs\CreateManifestRequest
     */
    public function setYourReference($yourReference = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($yourReference) && strlen($yourReference) > 1) || (is_array($yourReference) && count($yourReference) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($yourReference) ? strlen($yourReference) : count($yourReference)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($yourReference) && !is_string($yourReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($yourReference)), __LINE__);
        }
        $this->yourReference = $yourReference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\CreateManifestRequest
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
