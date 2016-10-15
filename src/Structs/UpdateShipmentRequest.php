<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateShipmentRequest Structs
 * Meta informations extracted from the WSDL
 * - documentation: request to update details for a single shipment | schema to hold request details for updateShipment operation
 * - type: ns:updateShipmentRequest
 * @subpackage Structs
 */
class UpdateShipmentRequest extends BaseRequest
{
    /**
     * The shipmentNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $shipmentNumber;
    /**
     * The requestedShipment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\RequestedShipment
     */
    public $requestedShipment;
    /**
     * Constructor method for updateShipmentRequest
     * @uses UpdateShipmentRequest::setShipmentNumber()
     * @uses UpdateShipmentRequest::setRequestedShipment()
     * @param string $shipmentNumber
     * @param \Minioak\Royalmail\Shipping\Structs\RequestedShipment $requestedShipment
     */
    public function __construct($shipmentNumber = null, \Minioak\Royalmail\Shipping\Structs\RequestedShipment $requestedShipment = null)
    {
        $this
            ->setShipmentNumber($shipmentNumber)
            ->setRequestedShipment($requestedShipment);
    }
    /**
     * Get shipmentNumber value
     * @return string|null
     */
    public function getShipmentNumber()
    {
        return $this->shipmentNumber;
    }
    /**
     * Set shipmentNumber value
     * @param string $shipmentNumber
     * @return \Minioak\Royalmail\Shipping\Structs\UpdateShipmentRequest
     */
    public function setShipmentNumber($shipmentNumber = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($shipmentNumber) && strlen($shipmentNumber) > 1) || (is_array($shipmentNumber) && count($shipmentNumber) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($shipmentNumber) ? strlen($shipmentNumber) : count($shipmentNumber)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($shipmentNumber) && !is_string($shipmentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipmentNumber)), __LINE__);
        }
        $this->shipmentNumber = $shipmentNumber;
        return $this;
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
     * @return \Minioak\Royalmail\Shipping\Structs\UpdateShipmentRequest
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
     * @return \Minioak\Royalmail\Shipping\Structs\UpdateShipmentRequest
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
