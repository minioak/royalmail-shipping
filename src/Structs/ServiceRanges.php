<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for serviceRanges Structs
 * Meta informations extracted from the WSDL
 * - documentation: schema to hold array of serviceRanges
 * @subpackage Structs
 */
class ServiceRanges extends AbstractStructBase
{
    /**
     * The serviceRange
     * @var \Minioak\Royalmail\Shipping\Structs\ServiceRange
     */
    public $serviceRange;
    /**
     * Constructor method for serviceRanges
     * @uses ServiceRanges::setServiceRange()
     * @param \Minioak\Royalmail\Shipping\Structs\ServiceRange $serviceRange
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ServiceRange $serviceRange = null)
    {
        $this
            ->setServiceRange($serviceRange);
    }
    /**
     * Get serviceRange value
     * @return \Minioak\Royalmail\Shipping\Structs\ServiceRange|null
     */
    public function getServiceRange()
    {
        return $this->serviceRange;
    }
    /**
     * Set serviceRange value
     * @param \Minioak\Royalmail\Shipping\Structs\ServiceRange $serviceRange
     * @return \Minioak\Royalmail\Shipping\Structs\ServiceRanges
     */
    public function setServiceRange(\Minioak\Royalmail\Shipping\Structs\ServiceRange $serviceRange = null)
    {
        $this->serviceRange = $serviceRange;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\ServiceRanges
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
