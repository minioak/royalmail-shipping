<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for functionalLocationType Structs
 * Meta informations extracted from the WSDL
 * - documentation: Defines the type of Functional Location such as Region, Network Hub, Delivery Hub etc.
 * - type: rd:functionalLocationType
 * @subpackage Structs
 */
class FunctionalLocationType extends AbstractStructBase
{
    /**
     * The functionalLocationCode
     * Meta informations extracted from the WSDL
     * - documentation: Defines the type of Functional Location such as Region, Network Hub, Delivery Hub etc.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $functionalLocationCode;
    /**
     * Constructor method for functionalLocationType
     * @uses FunctionalLocationType::setFunctionalLocationCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $functionalLocationCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $functionalLocationCode = null)
    {
        $this
            ->setFunctionalLocationCode($functionalLocationCode);
    }
    /**
     * Get functionalLocationCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getFunctionalLocationCode()
    {
        return $this->functionalLocationCode;
    }
    /**
     * Set functionalLocationCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $functionalLocationCode
     * @return \Minioak\Royalmail\Shipping\Structs\FunctionalLocationType
     */
    public function setFunctionalLocationCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $functionalLocationCode = null)
    {
        $this->functionalLocationCode = $functionalLocationCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\FunctionalLocationType
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
