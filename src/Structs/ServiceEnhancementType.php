<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for serviceEnhancementType Structs
 * Meta informations extracted from the WSDL
 * - documentation: Defines the type of enhancement used to add to an offering/product (with specific parameters) which may be sold to a customer.
 * - type: rd:serviceEnhancementType
 * @subpackage Structs
 */
class ServiceEnhancementType extends AbstractStructBase
{
    /**
     * The serviceEnhancementCode
     * Meta informations extracted from the WSDL
     * - documentation: Defines the type of enhancement used to add to an offering/product (with specific parameters) which may be sold to a customer.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $serviceEnhancementCode;
    /**
     * Constructor method for serviceEnhancementType
     * @uses ServiceEnhancementType::setServiceEnhancementCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $serviceEnhancementCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $serviceEnhancementCode = null)
    {
        $this
            ->setServiceEnhancementCode($serviceEnhancementCode);
    }
    /**
     * Get serviceEnhancementCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getServiceEnhancementCode()
    {
        return $this->serviceEnhancementCode;
    }
    /**
     * Set serviceEnhancementCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $serviceEnhancementCode
     * @return \Minioak\Royalmail\Shipping\Structs\ServiceEnhancementType
     */
    public function setServiceEnhancementCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $serviceEnhancementCode = null)
    {
        $this->serviceEnhancementCode = $serviceEnhancementCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\ServiceEnhancementType
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
