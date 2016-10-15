<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shipments Structs
 * Meta informations extracted from the WSDL
 * - documentation: schema to hold an array of shipment numbers
 * @subpackage Structs
 */
class Shipments extends AbstractStructBase
{
    /**
     * The shipmentNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string[]
     */
    public $shipmentNumber;
    /**
     * The shipment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \Minioak\Royalmail\Shipping\Structs\Shipment[]
     */
    public $shipment;
    /**
     * Constructor method for shipments
     * @uses Shipments::setShipmentNumber()
     * @uses Shipments::setShipment()
     * @param string[] $shipmentNumber
     * @param \Minioak\Royalmail\Shipping\Structs\Shipment[] $shipment
     */
    public function __construct(array $shipmentNumber = array(), array $shipment = array())
    {
        $this
            ->setShipmentNumber($shipmentNumber)
            ->setShipment($shipment);
    }
    /**
     * Get shipmentNumber value
     * @return string[]|null
     */
    public function getShipmentNumber()
    {
        return $this->shipmentNumber;
    }
    /**
     * Set shipmentNumber value
     * @throws \InvalidArgumentException
     * @param string[] $shipmentNumber
     * @return \Minioak\Royalmail\Shipping\Structs\Shipments
     */
    public function setShipmentNumber(array $shipmentNumber = array())
    {
        // validation for constraint: maxLength
        if ((is_scalar($shipmentNumber) && strlen($shipmentNumber) > 1) || (is_array($shipmentNumber) && count($shipmentNumber) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($shipmentNumber) ? strlen($shipmentNumber) : count($shipmentNumber)), __LINE__);
        }
        foreach ($shipmentNumber as $shipmentsShipmentNumberItem) {
            // validation for constraint: itemType
            if (!is_string($shipmentsShipmentNumberItem)) {
                throw new \InvalidArgumentException(sprintf('The shipmentNumber property can only contain items of string, "%s" given', is_object($shipmentsShipmentNumberItem) ? get_class($shipmentsShipmentNumberItem) : gettype($shipmentsShipmentNumberItem)), __LINE__);
            }
        }
        $this->shipmentNumber = $shipmentNumber;
        return $this;
    }
    /**
     * Add item to shipmentNumber value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Minioak\Royalmail\Shipping\Structs\Shipments
     */
    public function addToShipmentNumber($item)
    {
        // validation for constraint: maxLength
        if ((is_scalar($item) && strlen($item) > 1) || (is_array($item) && count($item) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($item) ? strlen($item) : count($item)), __LINE__);
        }
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The shipmentNumber property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->shipmentNumber[] = $item;
        return $this;
    }
    /**
     * Get shipment value
     * @return \Minioak\Royalmail\Shipping\Structs\Shipment[]|null
     */
    public function getShipment()
    {
        return $this->shipment;
    }
    /**
     * Set shipment value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\Shipment[] $shipment
     * @return \Minioak\Royalmail\Shipping\Structs\Shipments
     */
    public function setShipment(array $shipment = array())
    {
        foreach ($shipment as $shipmentsShipmentItem) {
            // validation for constraint: itemType
            if (!$shipmentsShipmentItem instanceof \Minioak\Royalmail\Shipping\Structs\Shipment) {
                throw new \InvalidArgumentException(sprintf('The shipment property can only contain items of \Minioak\Royalmail\Shipping\Structs\Shipment, "%s" given', is_object($shipmentsShipmentItem) ? get_class($shipmentsShipmentItem) : gettype($shipmentsShipmentItem)), __LINE__);
            }
        }
        $this->shipment = $shipment;
        return $this;
    }
    /**
     * Add item to shipment value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\Shipment $item
     * @return \Minioak\Royalmail\Shipping\Structs\Shipments
     */
    public function addToShipment(\Minioak\Royalmail\Shipping\Structs\Shipment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Minioak\Royalmail\Shipping\Structs\Shipment) {
            throw new \InvalidArgumentException(sprintf('The shipment property can only contain items of \Minioak\Royalmail\Shipping\Structs\Shipment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->shipment[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\Shipments
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
