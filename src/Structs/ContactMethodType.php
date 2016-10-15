<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for contactMethodType Structs
 * Meta informations extracted from the WSDL
 * - documentation: Contains the communication methods. Communication methods include telephone or email.
 * - type: rd:contactMethodType
 * @subpackage Structs
 */
class ContactMethodType extends AbstractStructBase
{
    /**
     * The contactMethodCode
     * Meta informations extracted from the WSDL
     * - documentation: Means of communication, telephone, email, etc
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $contactMethodCode;
    /**
     * Constructor method for contactMethodType
     * @uses ContactMethodType::setContactMethodCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $contactMethodCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $contactMethodCode = null)
    {
        $this
            ->setContactMethodCode($contactMethodCode);
    }
    /**
     * Get contactMethodCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getContactMethodCode()
    {
        return $this->contactMethodCode;
    }
    /**
     * Set contactMethodCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $contactMethodCode
     * @return \Minioak\Royalmail\Shipping\Structs\ContactMethodType
     */
    public function setContactMethodCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $contactMethodCode = null)
    {
        $this->contactMethodCode = $contactMethodCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\ContactMethodType
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
