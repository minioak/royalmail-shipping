<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createShipmentRequest Structs
 * Meta informations extracted from the WSDL
 * - documentation: request to create a domestic shipment | schema to hold request details for createShipment operation
 * - type: ns:createShipmentRequest
 * @subpackage Structs
 */
class CreateShipmentRequest extends BaseRequest
{
    /**
     * The requestedShipment
     * @var \Minioak\Royalmail\Shipping\Structs\RequestedShipment
     */
    public $requestedShipment;
    /**
     * Constructor method for createShipmentRequest
     * @uses CreateShipmentRequest::setRequestedShipment()
     * @param \Minioak\Royalmail\Shipping\Structs\RequestedShipment $requestedShipment
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\RequestedShipment $requestedShipment = null)
    {
        $this
            ->setRequestedShipment($requestedShipment);
    }
    /**
     * Get requestedShipment value
     * @return \Minioak\Royalmail\Shipping\Structs\RequestedShipment|null
     */
    public function getRequestedShipment()
    {
        return $this->requestedShipment;
    }
    /**
     * Set requestedShipment value
     * @param \Minioak\Royalmail\Shipping\Structs\RequestedShipment $requestedShipment
     * @return \Minioak\Royalmail\Shipping\Structs\CreateShipmentRequest
     */
    public function setRequestedShipment(\Minioak\Royalmail\Shipping\Structs\RequestedShipment $requestedShipment = null)
    {
        $this->requestedShipment = $requestedShipment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\CreateShipmentRequest
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
