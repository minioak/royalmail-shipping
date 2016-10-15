<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for status Structs
 * Meta informations extracted from the WSDL
 * - documentation: This is the state of the entity (i.e. it is active, approved, draft, inactive, etc).
 * - type: com:status
 * @subpackage Structs
 */
class Status extends AbstractStructBase
{
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - documentation: This is the state of the reference data (i.e. it is active, approved, draft, inactive, etc).
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\StatusType
     */
    public $status;
    /**
     * The validFrom
     * Meta informations extracted from the WSDL
     * - documentation: The date at which the data becomes active. | dateTime represents a period in time which could be a particular month, day, and year at which some event happened or will happen but also includes a breakdown of time using hours,
     * minutes, seconds and milliseconds. A dateTime stamp is a common use for this data type so that a precise record of an event can be captured.
     * - maxOccurs: 1
     * - minOccurs: 1
     * - base: xs:dateTime
     * @var string
     */
    public $validFrom;
    /**
     * The validTo
     * Meta informations extracted from the WSDL
     * - documentation: The date at which the data is retired. | dateTime represents a period in time which could be a particular month, day, and year at which some event happened or will happen but also includes a breakdown of time using hours, minutes,
     * seconds and milliseconds. A dateTime stamp is a common use for this data type so that a precise record of an event can be captured.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - base: xs:dateTime
     * @var string
     */
    public $validTo;
    /**
     * Constructor method for status
     * @uses Status::setStatus()
     * @uses Status::setValidFrom()
     * @uses Status::setValidTo()
     * @param \Minioak\Royalmail\Shipping\Structs\StatusType $status
     * @param string $validFrom
     * @param string $validTo
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\StatusType $status = null, $validFrom = null, $validTo = null)
    {
        $this
            ->setStatus($status)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo);
    }
    /**
     * Get status value
     * @return \Minioak\Royalmail\Shipping\Structs\StatusType
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param \Minioak\Royalmail\Shipping\Structs\StatusType $status
     * @return \Minioak\Royalmail\Shipping\Structs\Status
     */
    public function setStatus(\Minioak\Royalmail\Shipping\Structs\StatusType $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get validFrom value
     * @return string
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \Minioak\Royalmail\Shipping\Structs\Status
     */
    public function setValidFrom($validFrom = null)
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($validFrom)), __LINE__);
        }
        $this->validFrom = $validFrom;
        return $this;
    }
    /**
     * Get validTo value
     * @return string|null
     */
    public function getValidTo()
    {
        return $this->validTo;
    }
    /**
     * Set validTo value
     * @param string $validTo
     * @return \Minioak\Royalmail\Shipping\Structs\Status
     */
    public function setValidTo($validTo = null)
    {
        // validation for constraint: string
        if (!is_null($validTo) && !is_string($validTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($validTo)), __LINE__);
        }
        $this->validTo = $validTo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\Status
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
