<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for functionalLocationRelationshipType Structs
 * Meta informations extracted from the WSDL
 * - documentation: Defines the Functional Location Group Relationship in terms of PCA, Parent, Operational, Management etc
 * - type: rd:functionalLocationRelationshipType
 * @subpackage Structs
 */
class FunctionalLocationRelationshipType extends AbstractStructBase
{
    /**
     * The functionalLocationRelationCode
     * Meta informations extracted from the WSDL
     * - documentation: Defines the Functional Location Group Relationship in terms of PCA, Parent, Operational, Management etc
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $functionalLocationRelationCode;
    /**
     * Constructor method for functionalLocationRelationshipType
     * @uses FunctionalLocationRelationshipType::setFunctionalLocationRelationCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $functionalLocationRelationCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $functionalLocationRelationCode = null)
    {
        $this
            ->setFunctionalLocationRelationCode($functionalLocationRelationCode);
    }
    /**
     * Get functionalLocationRelationCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getFunctionalLocationRelationCode()
    {
        return $this->functionalLocationRelationCode;
    }
    /**
     * Set functionalLocationRelationCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $functionalLocationRelationCode
     * @return \Minioak\Royalmail\Shipping\Structs\FunctionalLocationRelationshipType
     */
    public function setFunctionalLocationRelationCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $functionalLocationRelationCode = null)
    {
        $this->functionalLocationRelationCode = $functionalLocationRelationCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\FunctionalLocationRelationshipType
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
