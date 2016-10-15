<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for serviceRange Structs
 * Meta informations extracted from the WSDL
 * - documentation: schema to hold details of 1D Barcodes and associated service references
 * @subpackage Structs
 */
class ServiceRange extends AbstractStructBase
{
    /**
     * The serviceReference
     * @var \Minioak\Royalmail\Shipping\Structs\ServiceReference
     */
    public $serviceReference;
    /**
     * The barcode1DRange
     * @var \Minioak\Royalmail\Shipping\Structs\Barcode1DRange
     */
    public $barcode1DRange;
    /**
     * Constructor method for serviceRange
     * @uses ServiceRange::setServiceReference()
     * @uses ServiceRange::setBarcode1DRange()
     * @param \Minioak\Royalmail\Shipping\Structs\ServiceReference $serviceReference
     * @param \Minioak\Royalmail\Shipping\Structs\Barcode1DRange $barcode1DRange
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ServiceReference $serviceReference = null, \Minioak\Royalmail\Shipping\Structs\Barcode1DRange $barcode1DRange = null)
    {
        $this
            ->setServiceReference($serviceReference)
            ->setBarcode1DRange($barcode1DRange);
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
     * @return \Minioak\Royalmail\Shipping\Structs\ServiceRange
     */
    public function setServiceReference(\Minioak\Royalmail\Shipping\Structs\ServiceReference $serviceReference = null)
    {
        $this->serviceReference = $serviceReference;
        return $this;
    }
    /**
     * Get barcode1DRange value
     * @return \Minioak\Royalmail\Shipping\Structs\Barcode1DRange|null
     */
    public function getBarcode1DRange()
    {
        return $this->barcode1DRange;
    }
    /**
     * Set barcode1DRange value
     * @param \Minioak\Royalmail\Shipping\Structs\Barcode1DRange $barcode1DRange
     * @return \Minioak\Royalmail\Shipping\Structs\ServiceRange
     */
    public function setBarcode1DRange(\Minioak\Royalmail\Shipping\Structs\Barcode1DRange $barcode1DRange = null)
    {
        $this->barcode1DRange = $barcode1DRange;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\ServiceRange
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
