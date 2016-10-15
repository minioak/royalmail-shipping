<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dayOfWeekType Structs
 * Meta informations extracted from the WSDL
 * - documentation: Day of week i.e. Monday, Tuesday etc
 * - type: rd:dayOfWeekType
 * @subpackage Structs
 */
class DayOfWeekType extends AbstractStructBase
{
    /**
     * The dayOfWeekCode
     * Meta informations extracted from the WSDL
     * - documentation: Day of week.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $dayOfWeekCode;
    /**
     * Constructor method for dayOfWeekType
     * @uses DayOfWeekType::setDayOfWeekCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $dayOfWeekCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $dayOfWeekCode = null)
    {
        $this
            ->setDayOfWeekCode($dayOfWeekCode);
    }
    /**
     * Get dayOfWeekCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getDayOfWeekCode()
    {
        return $this->dayOfWeekCode;
    }
    /**
     * Set dayOfWeekCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $dayOfWeekCode
     * @return \Minioak\Royalmail\Shipping\Structs\DayOfWeekType
     */
    public function setDayOfWeekCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $dayOfWeekCode = null)
    {
        $this->dayOfWeekCode = $dayOfWeekCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\DayOfWeekType
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
