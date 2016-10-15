<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for durationType Structs
 * Meta informations extracted from the WSDL
 * - documentation: Defines a type of time period i.e. weekly, monthly, quarterly, annually etc
 * - type: rd:durationType
 * @subpackage Structs
 */
class DurationType extends AbstractStructBase
{
    /**
     * The durationCode
     * Meta informations extracted from the WSDL
     * - documentation: Defines a type of time period i.e. weekly, monthly, quarterly, annually etc
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $durationCode;
    /**
     * Constructor method for durationType
     * @uses DurationType::setDurationCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $durationCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $durationCode = null)
    {
        $this
            ->setDurationCode($durationCode);
    }
    /**
     * Get durationCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getDurationCode()
    {
        return $this->durationCode;
    }
    /**
     * Set durationCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $durationCode
     * @return \Minioak\Royalmail\Shipping\Structs\DurationType
     */
    public function setDurationCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $durationCode = null)
    {
        $this->durationCode = $durationCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\DurationType
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
