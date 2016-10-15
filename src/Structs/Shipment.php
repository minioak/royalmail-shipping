<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shipment Structs
 * Meta informations extracted from the WSDL
 * - documentation: schema to hold an details of a shipment including 1D barcode and ItemID references
 * @subpackage Structs
 */
class Shipment extends AbstractStructBase
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
     * The itemID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $itemID;
    /**
     * The status
     * @var \Minioak\Royalmail\Shipping\Structs\Status
     */
    public $status;
    /**
     * Constructor method for shipment
     * @uses Shipment::setShipmentNumber()
     * @uses Shipment::setItemID()
     * @uses Shipment::setStatus()
     * @param string $shipmentNumber
     * @param string $itemID
     * @param \Minioak\Royalmail\Shipping\Structs\Status $status
     */
    public function __construct($shipmentNumber = null, $itemID = null, \Minioak\Royalmail\Shipping\Structs\Status $status = null)
    {
        $this
            ->setShipmentNumber($shipmentNumber)
            ->setItemID($itemID)
            ->setStatus($status);
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
     * @return \Minioak\Royalmail\Shipping\Structs\Shipment
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
     * Get itemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->itemID;
    }
    /**
     * Set itemID value
     * @param string $itemID
     * @return \Minioak\Royalmail\Shipping\Structs\Shipment
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($itemID) && strlen($itemID) > 1) || (is_array($itemID) && count($itemID) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($itemID) ? strlen($itemID) : count($itemID)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemID)), __LINE__);
        }
        $this->itemID = $itemID;
        return $this;
    }
    /**
     * Get status value
     * @return \Minioak\Royalmail\Shipping\Structs\Status|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param \Minioak\Royalmail\Shipping\Structs\Status $status
     * @return \Minioak\Royalmail\Shipping\Structs\Shipment
     */
    public function setStatus(\Minioak\Royalmail\Shipping\Structs\Status $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\Shipment
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
