<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dateFormatType Structs
 * Meta informations extracted from the WSDL
 * - documentation: Defines a preferred format for a datetime value.
 * - type: rd:dateFormatType
 * @subpackage Structs
 */
class DateFormatType extends AbstractStructBase
{
    /**
     * The dateFormatCode
     * Meta informations extracted from the WSDL
     * - documentation: Defines a preferred format for a datetime value.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $dateFormatCode;
    /**
     * Constructor method for dateFormatType
     * @uses DateFormatType::setDateFormatCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $dateFormatCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $dateFormatCode = null)
    {
        $this
            ->setDateFormatCode($dateFormatCode);
    }
    /**
     * Get dateFormatCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getDateFormatCode()
    {
        return $this->dateFormatCode;
    }
    /**
     * Set dateFormatCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $dateFormatCode
     * @return \Minioak\Royalmail\Shipping\Structs\DateFormatType
     */
    public function setDateFormatCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $dateFormatCode = null)
    {
        $this->dateFormatCode = $dateFormatCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\DateFormatType
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
