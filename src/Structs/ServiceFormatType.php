<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for serviceFormatType Structs
 * Meta informations extracted from the WSDL
 * - documentation: Defines the format of the Service being offered.
 * - type: rd:serviceFormatType
 * @subpackage Structs
 */
class ServiceFormatType extends AbstractStructBase
{
    /**
     * The serviceFormatCode
     * Meta informations extracted from the WSDL
     * - documentation: Defines the format of the Service being offered.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $serviceFormatCode;
    /**
     * Constructor method for serviceFormatType
     * @uses ServiceFormatType::setServiceFormatCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $serviceFormatCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $serviceFormatCode = null)
    {
        $this
            ->setServiceFormatCode($serviceFormatCode);
    }
    /**
     * Get serviceFormatCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getServiceFormatCode()
    {
        return $this->serviceFormatCode;
    }
    /**
     * Set serviceFormatCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $serviceFormatCode
     * @return \Minioak\Royalmail\Shipping\Structs\ServiceFormatType
     */
    public function setServiceFormatCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $serviceFormatCode = null)
    {
        $this->serviceFormatCode = $serviceFormatCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\ServiceFormatType
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
