<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for stateOrProvinceType Structs
 * Meta informations extracted from the WSDL
 * - documentation: This is used specifically for international items only and is applicable for the US, Canada, Australia, etc.
 * - type: rd:stateOrProvinceType
 * @subpackage Structs
 */
class StateOrProvinceType extends AbstractStructBase
{
    /**
     * The stateOrProvinceCode
     * Meta informations extracted from the WSDL
     * - documentation: This is used specifically for international items only and is applicable for the US, Canada, Australia, etc.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $stateOrProvinceCode;
    /**
     * Constructor method for stateOrProvinceType
     * @uses StateOrProvinceType::setStateOrProvinceCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $stateOrProvinceCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $stateOrProvinceCode = null)
    {
        $this
            ->setStateOrProvinceCode($stateOrProvinceCode);
    }
    /**
     * Get stateOrProvinceCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getStateOrProvinceCode()
    {
        return $this->stateOrProvinceCode;
    }
    /**
     * Set stateOrProvinceCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $stateOrProvinceCode
     * @return \Minioak\Royalmail\Shipping\Structs\StateOrProvinceType
     */
    public function setStateOrProvinceCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $stateOrProvinceCode = null)
    {
        $this->stateOrProvinceCode = $stateOrProvinceCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\StateOrProvinceType
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
