<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addressUsageType Structs
 * Meta informations extracted from the WSDL
 * - documentation: This denotes the function the address plays (i.e. it is a primary address, seasonal, etc).
 * - type: rd:addressUsageType
 * @subpackage Structs
 */
class AddressUsageType extends AbstractStructBase
{
    /**
     * The addressUsageCode
     * Meta informations extracted from the WSDL
     * - documentation: This denotes the function the address plays (i.e. it is a primary address, seasonal, etc).
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $addressUsageCode;
    /**
     * Constructor method for addressUsageType
     * @uses AddressUsageType::setAddressUsageCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $addressUsageCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $addressUsageCode = null)
    {
        $this
            ->setAddressUsageCode($addressUsageCode);
    }
    /**
     * Get addressUsageCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getAddressUsageCode()
    {
        return $this->addressUsageCode;
    }
    /**
     * Set addressUsageCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $addressUsageCode
     * @return \Minioak\Royalmail\Shipping\Structs\AddressUsageType
     */
    public function setAddressUsageCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $addressUsageCode = null)
    {
        $this->addressUsageCode = $addressUsageCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\AddressUsageType
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
