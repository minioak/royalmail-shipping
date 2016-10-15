<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for roleType Structs
 * Meta informations extracted from the WSDL
 * - documentation: Defines the different roles which a party may fulfil.
 * - type: rd:roleType
 * @subpackage Structs
 */
class RoleType extends AbstractStructBase
{
    /**
     * The roleCode
     * Meta informations extracted from the WSDL
     * - documentation: Defines the different roles a party may fulfil.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $roleCode;
    /**
     * Constructor method for roleType
     * @uses RoleType::setRoleCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $roleCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $roleCode = null)
    {
        $this
            ->setRoleCode($roleCode);
    }
    /**
     * Get roleCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getRoleCode()
    {
        return $this->roleCode;
    }
    /**
     * Set roleCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $roleCode
     * @return \Minioak\Royalmail\Shipping\Structs\RoleType
     */
    public function setRoleCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $roleCode = null)
    {
        $this->roleCode = $roleCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\RoleType
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
