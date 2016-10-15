<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for countyType Structs
 * Meta informations extracted from the WSDL
 * - documentation: A territorial division exercising administrative, judicial, and political functions.
 * - type: rd:countyType
 * @subpackage Structs
 */
class CountyType extends AbstractStructBase
{
    /**
     * The countyCode
     * Meta informations extracted from the WSDL
     * - documentation: A territorial division exercising administrative, judicial, and political functions.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $countyCode;
    /**
     * Constructor method for countyType
     * @uses CountyType::setCountyCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $countyCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $countyCode = null)
    {
        $this
            ->setCountyCode($countyCode);
    }
    /**
     * Get countyCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getCountyCode()
    {
        return $this->countyCode;
    }
    /**
     * Set countyCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $countyCode
     * @return \Minioak\Royalmail\Shipping\Structs\CountyType
     */
    public function setCountyCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $countyCode = null)
    {
        $this->countyCode = $countyCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\CountyType
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
