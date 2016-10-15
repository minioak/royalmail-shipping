<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for serviceOfferingType Structs
 * Meta informations extracted from the WSDL
 * - documentation: Defines the type of offering/product (with specific parameters) which may be sold to a customer.
 * - type: rd:serviceOfferingType
 * @subpackage Structs
 */
class ServiceOfferingType extends AbstractStructBase
{
    /**
     * The serviceOfferingCode
     * Meta informations extracted from the WSDL
     * - documentation: Defines the type of offering/product (with specific parameters) which may be sold to a customer.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $serviceOfferingCode;
    /**
     * Constructor method for serviceOfferingType
     * @uses ServiceOfferingType::setServiceOfferingCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $serviceOfferingCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $serviceOfferingCode = null)
    {
        $this
            ->setServiceOfferingCode($serviceOfferingCode);
    }
    /**
     * Get serviceOfferingCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getServiceOfferingCode()
    {
        return $this->serviceOfferingCode;
    }
    /**
     * Set serviceOfferingCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $serviceOfferingCode
     * @return \Minioak\Royalmail\Shipping\Structs\ServiceOfferingType
     */
    public function setServiceOfferingCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $serviceOfferingCode = null)
    {
        $this->serviceOfferingCode = $serviceOfferingCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\ServiceOfferingType
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
