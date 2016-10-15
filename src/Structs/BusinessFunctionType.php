<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for businessFunctionType Structs
 * Meta informations extracted from the WSDL
 * - documentation: A categorization of processes, people and resources organized in such a way as to produce a business outcome
 * - type: rd:businessFunctionType
 * @subpackage Structs
 */
class BusinessFunctionType extends AbstractStructBase
{
    /**
     * The businessFunctionCode
     * Meta informations extracted from the WSDL
     * - documentation: A categorization of processes, people and resources organized in such a way as to produce a business outcome
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $businessFunctionCode;
    /**
     * Constructor method for businessFunctionType
     * @uses BusinessFunctionType::setBusinessFunctionCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $businessFunctionCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $businessFunctionCode = null)
    {
        $this
            ->setBusinessFunctionCode($businessFunctionCode);
    }
    /**
     * Get businessFunctionCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getBusinessFunctionCode()
    {
        return $this->businessFunctionCode;
    }
    /**
     * Set businessFunctionCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $businessFunctionCode
     * @return \Minioak\Royalmail\Shipping\Structs\BusinessFunctionType
     */
    public function setBusinessFunctionCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $businessFunctionCode = null)
    {
        $this->businessFunctionCode = $businessFunctionCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\BusinessFunctionType
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
