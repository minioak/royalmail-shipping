<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for serviceReferences Structs
 * Meta informations extracted from the WSDL
 * - documentation: schema to hold array of service references
 * @subpackage Structs
 */
class ServiceReferences extends AbstractStructBase
{
    /**
     * The serviceReference
     * @var \Minioak\Royalmail\Shipping\Structs\ServiceReference
     */
    public $serviceReference;
    /**
     * Constructor method for serviceReferences
     * @uses ServiceReferences::setServiceReference()
     * @param \Minioak\Royalmail\Shipping\Structs\ServiceReference $serviceReference
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ServiceReference $serviceReference = null)
    {
        $this
            ->setServiceReference($serviceReference);
    }
    /**
     * Get serviceReference value
     * @return \Minioak\Royalmail\Shipping\Structs\ServiceReference|null
     */
    public function getServiceReference()
    {
        return $this->serviceReference;
    }
    /**
     * Set serviceReference value
     * @param \Minioak\Royalmail\Shipping\Structs\ServiceReference $serviceReference
     * @return \Minioak\Royalmail\Shipping\Structs\ServiceReferences
     */
    public function setServiceReference(\Minioak\Royalmail\Shipping\Structs\ServiceReference $serviceReference = null)
    {
        $this->serviceReference = $serviceReference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\ServiceReferences
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
