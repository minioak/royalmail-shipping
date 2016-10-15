<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cancelShipmentRequest Structs
 * Meta informations extracted from the WSDL
 * - documentation: request to cancel one or more shipments | schema to hold request details for cancelShipmentRequest operation
 * - type: ns:cancelShipmentRequest
 * @subpackage Structs
 */
class CancelShipmentRequest extends BaseRequest
{
    /**
     * The cancelShipments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\CancelShipments
     */
    public $cancelShipments;
    /**
     * Constructor method for cancelShipmentRequest
     * @uses CancelShipmentRequest::setCancelShipments()
     * @param \Minioak\Royalmail\Shipping\Structs\CancelShipments $cancelShipments
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\CancelShipments $cancelShipments = null)
    {
        $this
            ->setCancelShipments($cancelShipments);
    }
    /**
     * Get cancelShipments value
     * @return \Minioak\Royalmail\Shipping\Structs\CancelShipments|null
     */
    public function getCancelShipments()
    {
        return $this->cancelShipments;
    }
    /**
     * Set cancelShipments value
     * @param \Minioak\Royalmail\Shipping\Structs\CancelShipments $cancelShipments
     * @return \Minioak\Royalmail\Shipping\Structs\CancelShipmentRequest
     */
    public function setCancelShipments(\Minioak\Royalmail\Shipping\Structs\CancelShipments $cancelShipments = null)
    {
        $this->cancelShipments = $cancelShipments;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\CancelShipmentRequest
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
