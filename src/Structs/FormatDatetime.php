<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for formatDatetime Structs
 * Meta informations extracted from the WSDL
 * - documentation: Defines a primitive Date time with a specified format.
 * - type: com:formatDatetime
 * @subpackage Structs
 */
class FormatDatetime extends AbstractStructBase
{
    /**
     * The dateFormatType
     * Meta informations extracted from the WSDL
     * - documentation: Defines a preferred format for a date
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\DateFormatType
     */
    public $dateFormatType;
    /**
     * The dateTime
     * Meta informations extracted from the WSDL
     * - documentation: A temporal value which contains both date and time elements | dateTime represents a period in time which could be a particular month, day, and year at which some event happened or will happen but also includes a breakdown of time
     * using hours, minutes, seconds and milliseconds. A dateTime stamp is a common use for this data type so that a precise record of an event can be captured.
     * - maxOccurs: 1
     * - minOccurs: 1
     * - base: xs:dateTime
     * @var string
     */
    public $dateTime;
    /**
     * Constructor method for formatDatetime
     * @uses FormatDatetime::setDateFormatType()
     * @uses FormatDatetime::setDateTime()
     * @param \Minioak\Royalmail\Shipping\Structs\DateFormatType $dateFormatType
     * @param string $dateTime
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\DateFormatType $dateFormatType = null, $dateTime = null)
    {
        $this
            ->setDateFormatType($dateFormatType)
            ->setDateTime($dateTime);
    }
    /**
     * Get dateFormatType value
     * @return \Minioak\Royalmail\Shipping\Structs\DateFormatType
     */
    public function getDateFormatType()
    {
        return $this->dateFormatType;
    }
    /**
     * Set dateFormatType value
     * @param \Minioak\Royalmail\Shipping\Structs\DateFormatType $dateFormatType
     * @return \Minioak\Royalmail\Shipping\Structs\FormatDatetime
     */
    public function setDateFormatType(\Minioak\Royalmail\Shipping\Structs\DateFormatType $dateFormatType = null)
    {
        $this->dateFormatType = $dateFormatType;
        return $this;
    }
    /**
     * Get dateTime value
     * @return string
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }
    /**
     * Set dateTime value
     * @param string $dateTime
     * @return \Minioak\Royalmail\Shipping\Structs\FormatDatetime
     */
    public function setDateTime($dateTime = null)
    {
        // validation for constraint: string
        if (!is_null($dateTime) && !is_string($dateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateTime)), __LINE__);
        }
        $this->dateTime = $dateTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\FormatDatetime
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
