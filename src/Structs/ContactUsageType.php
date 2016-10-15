<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for contactUsageType Structs
 * Meta informations extracted from the WSDL
 * - documentation: Usage associated with a contact method i.e. business, social etc
 * - type: rd:contactUsageType
 * @subpackage Structs
 */
class ContactUsageType extends AbstractStructBase
{
    /**
     * The contactUsageCode
     * Meta informations extracted from the WSDL
     * - documentation: Usage associated with a contact method i.e. business, social etc
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $contactUsageCode;
    /**
     * Constructor method for contactUsageType
     * @uses ContactUsageType::setContactUsageCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $contactUsageCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $contactUsageCode = null)
    {
        $this
            ->setContactUsageCode($contactUsageCode);
    }
    /**
     * Get contactUsageCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getContactUsageCode()
    {
        return $this->contactUsageCode;
    }
    /**
     * Set contactUsageCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $contactUsageCode
     * @return \Minioak\Royalmail\Shipping\Structs\ContactUsageType
     */
    public function setContactUsageCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $contactUsageCode = null)
    {
        $this->contactUsageCode = $contactUsageCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\ContactUsageType
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
