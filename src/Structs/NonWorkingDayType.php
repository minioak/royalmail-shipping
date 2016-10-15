<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for nonWorkingDayType Structs
 * Meta informations extracted from the WSDL
 * - documentation: Non Working Day object contains all the planned non-working days.
 * - type: rd:nonWorkingDayType
 * @subpackage Structs
 */
class NonWorkingDayType extends AbstractStructBase
{
    /**
     * The nonWorkingDayCode
     * Meta informations extracted from the WSDL
     * - documentation: Non Working Day object contains all the planned non-working days i.e. Bank Holiday, Local Holiday.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $nonWorkingDayCode;
    /**
     * Constructor method for nonWorkingDayType
     * @uses NonWorkingDayType::setNonWorkingDayCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $nonWorkingDayCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $nonWorkingDayCode = null)
    {
        $this
            ->setNonWorkingDayCode($nonWorkingDayCode);
    }
    /**
     * Get nonWorkingDayCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getNonWorkingDayCode()
    {
        return $this->nonWorkingDayCode;
    }
    /**
     * Set nonWorkingDayCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $nonWorkingDayCode
     * @return \Minioak\Royalmail\Shipping\Structs\NonWorkingDayType
     */
    public function setNonWorkingDayCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $nonWorkingDayCode = null)
    {
        $this->nonWorkingDayCode = $nonWorkingDayCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\NonWorkingDayType
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
