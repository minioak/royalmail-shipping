<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for request1DRangesRequest Structs
 * Meta informations extracted from the WSDL
 * - documentation: request to obtain one or more ranges of 1D barcodes for a service occurrence, service offering, service enhancement combination | schema to hold request details for request1DRangeRequest operation
 * - type: ns:request1DRangesRequest
 * @subpackage Structs
 */
class Request1DRangesRequest extends BaseRequest
{
    /**
     * The serviceReferences
     * @var \Minioak\Royalmail\Shipping\Structs\ServiceReferences
     */
    public $serviceReferences;
    /**
     * Constructor method for request1DRangesRequest
     * @uses Request1DRangesRequest::setServiceReferences()
     * @param \Minioak\Royalmail\Shipping\Structs\ServiceReferences $serviceReferences
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ServiceReferences $serviceReferences = null)
    {
        $this
            ->setServiceReferences($serviceReferences);
    }
    /**
     * Get serviceReferences value
     * @return \Minioak\Royalmail\Shipping\Structs\ServiceReferences|null
     */
    public function getServiceReferences()
    {
        return $this->serviceReferences;
    }
    /**
     * Set serviceReferences value
     * @param \Minioak\Royalmail\Shipping\Structs\ServiceReferences $serviceReferences
     * @return \Minioak\Royalmail\Shipping\Structs\Request1DRangesRequest
     */
    public function setServiceReferences(\Minioak\Royalmail\Shipping\Structs\ServiceReferences $serviceReferences = null)
    {
        $this->serviceReferences = $serviceReferences;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\Request1DRangesRequest
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
