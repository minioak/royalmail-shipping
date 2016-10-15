<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for workingDayType Structs
 * Meta informations extracted from the WSDL
 * - documentation: Working Day Type contains the set of Types of working days.
 * - type: rd:workingDayType
 * @subpackage Structs
 */
class WorkingDayType extends AbstractStructBase
{
    /**
     * The workingDayCode
     * Meta informations extracted from the WSDL
     * - documentation: Working Day Type contains the set of Types of working days.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $workingDayCode;
    /**
     * Constructor method for workingDayType
     * @uses WorkingDayType::setWorkingDayCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $workingDayCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $workingDayCode = null)
    {
        $this
            ->setWorkingDayCode($workingDayCode);
    }
    /**
     * Get workingDayCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getWorkingDayCode()
    {
        return $this->workingDayCode;
    }
    /**
     * Set workingDayCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $workingDayCode
     * @return \Minioak\Royalmail\Shipping\Structs\WorkingDayType
     */
    public function setWorkingDayCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $workingDayCode = null)
    {
        $this->workingDayCode = $workingDayCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\WorkingDayType
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
