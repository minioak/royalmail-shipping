<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for functionalLocationGroupType Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies if the type of Functional Location group
 * - type: rd:functionalLocationGroupType
 * @subpackage Structs
 */
class FunctionalLocationGroupType extends AbstractStructBase
{
    /**
     * The functionalLocationGroupCode
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the Functional Location Group type
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $functionalLocationGroupCode;
    /**
     * Constructor method for functionalLocationGroupType
     * @uses FunctionalLocationGroupType::setFunctionalLocationGroupCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $functionalLocationGroupCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $functionalLocationGroupCode = null)
    {
        $this
            ->setFunctionalLocationGroupCode($functionalLocationGroupCode);
    }
    /**
     * Get functionalLocationGroupCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getFunctionalLocationGroupCode()
    {
        return $this->functionalLocationGroupCode;
    }
    /**
     * Set functionalLocationGroupCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $functionalLocationGroupCode
     * @return \Minioak\Royalmail\Shipping\Structs\FunctionalLocationGroupType
     */
    public function setFunctionalLocationGroupCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $functionalLocationGroupCode = null)
    {
        $this->functionalLocationGroupCode = $functionalLocationGroupCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\FunctionalLocationGroupType
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
