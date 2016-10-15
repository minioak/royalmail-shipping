<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for calendarType Structs
 * Meta informations extracted from the WSDL
 * - documentation: Defines a calendar as being Fiscal, Operational, Quality or Calendar
 * - type: rd:calendarType
 * @subpackage Structs
 */
class CalendarType extends AbstractStructBase
{
    /**
     * The calendarCode
     * Meta informations extracted from the WSDL
     * - documentation: Defines a calendar as being Fiscal, Operational, Quality or Calendar.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $calendarCode;
    /**
     * Constructor method for calendarType
     * @uses CalendarType::setCalendarCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $calendarCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $calendarCode = null)
    {
        $this
            ->setCalendarCode($calendarCode);
    }
    /**
     * Get calendarCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getCalendarCode()
    {
        return $this->calendarCode;
    }
    /**
     * Set calendarCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $calendarCode
     * @return \Minioak\Royalmail\Shipping\Structs\CalendarType
     */
    public function setCalendarCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $calendarCode = null)
    {
        $this->calendarCode = $calendarCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\CalendarType
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
