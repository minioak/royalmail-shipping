<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for completedShipments Structs
 * Meta informations extracted from the WSDL
 * - documentation: schema to hold the details for 1D barcoded items
 * @subpackage Structs
 */
class CompletedShipments extends AbstractStructBase
{
    /**
     * The shipments
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\Shipments[]
     */
    public $shipments;
    /**
     * The weight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\Dimension
     */
    public $weight;
    /**
     * Constructor method for completedShipments
     * @uses CompletedShipments::setShipments()
     * @uses CompletedShipments::setWeight()
     * @param \Minioak\Royalmail\Shipping\Structs\Shipments[] $shipments
     * @param \Minioak\Royalmail\Shipping\Structs\Dimension $weight
     */
    public function __construct(array $shipments = array(), \Minioak\Royalmail\Shipping\Structs\Dimension $weight = null)
    {
        $this
            ->setShipments($shipments)
            ->setWeight($weight);
    }
    /**
     * Get shipments value
     * @return \Minioak\Royalmail\Shipping\Structs\Shipments[]
     */
    public function getShipments()
    {
        return $this->shipments;
    }
    /**
     * Set shipments value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\Shipments[] $shipments
     * @return \Minioak\Royalmail\Shipping\Structs\CompletedShipments
     */
    public function setShipments(array $shipments = array())
    {
        foreach ($shipments as $completedShipmentsShipmentsItem) {
            // validation for constraint: itemType
            if (!$completedShipmentsShipmentsItem instanceof \Minioak\Royalmail\Shipping\Structs\Shipments) {
                throw new \InvalidArgumentException(sprintf('The shipments property can only contain items of \Minioak\Royalmail\Shipping\Structs\Shipments, "%s" given', is_object($completedShipmentsShipmentsItem) ? get_class($completedShipmentsShipmentsItem) : gettype($completedShipmentsShipmentsItem)), __LINE__);
            }
        }
        $this->shipments = $shipments;
        return $this;
    }
    /**
     * Add item to shipments value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\Shipments $item
     * @return \Minioak\Royalmail\Shipping\Structs\CompletedShipments
     */
    public function addToShipments(\Minioak\Royalmail\Shipping\Structs\Shipments $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Minioak\Royalmail\Shipping\Structs\Shipments) {
            throw new \InvalidArgumentException(sprintf('The shipments property can only contain items of \Minioak\Royalmail\Shipping\Structs\Shipments, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->shipments[] = $item;
        return $this;
    }
    /**
     * Get weight value
     * @return \Minioak\Royalmail\Shipping\Structs\Dimension|null
     */
    public function getWeight()
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param \Minioak\Royalmail\Shipping\Structs\Dimension $weight
     * @return \Minioak\Royalmail\Shipping\Structs\CompletedShipments
     */
    public function setWeight(\Minioak\Royalmail\Shipping\Structs\Dimension $weight = null)
    {
        $this->weight = $weight;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\CompletedShipments
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
