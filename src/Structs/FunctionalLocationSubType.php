<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for functionalLocationSubType Structs
 * Meta informations extracted from the WSDL
 * - documentation: Defines the Functional Location at the lowest level in terms of airport, seaport, rail hub etc
 * - type: rd:functionalLocationSubType
 * @subpackage Structs
 */
class FunctionalLocationSubType extends AbstractStructBase
{
    /**
     * The functionalLocationSubtypeCode
     * Meta informations extracted from the WSDL
     * - documentation: Defines the Functional Location at the lowest level in terms of airport, seaport, rail hub etc
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $functionalLocationSubtypeCode;
    /**
     * Constructor method for functionalLocationSubType
     * @uses FunctionalLocationSubType::setFunctionalLocationSubtypeCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $functionalLocationSubtypeCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $functionalLocationSubtypeCode = null)
    {
        $this
            ->setFunctionalLocationSubtypeCode($functionalLocationSubtypeCode);
    }
    /**
     * Get functionalLocationSubtypeCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getFunctionalLocationSubtypeCode()
    {
        return $this->functionalLocationSubtypeCode;
    }
    /**
     * Set functionalLocationSubtypeCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $functionalLocationSubtypeCode
     * @return \Minioak\Royalmail\Shipping\Structs\FunctionalLocationSubType
     */
    public function setFunctionalLocationSubtypeCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $functionalLocationSubtypeCode = null)
    {
        $this->functionalLocationSubtypeCode = $functionalLocationSubtypeCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\FunctionalLocationSubType
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
