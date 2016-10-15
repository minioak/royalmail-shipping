<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for item Structs
 * Meta informations extracted from the WSDL
 * - documentation: schema to hold quantity and weight of items
 * @subpackage Structs
 */
class Item extends AbstractStructBase
{
    /**
     * The weight
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\Dimension
     */
    public $weight;
    /**
     * The numberOfItems
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: A number indicating a whole number amount as in a count of items. | An integer is a whole number (not a fraction) that can be positive, negative, or zero. Unlike floats, integers cannot have decimal places.
     * - base: xs:integer
     * @var int
     */
    public $numberOfItems;
    /**
     * The offlineShipments
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\Shipment[]
     */
    public $offlineShipments;
    /**
     * Constructor method for item
     * @uses Item::setWeight()
     * @uses Item::setNumberOfItems()
     * @uses Item::setOfflineShipments()
     * @param \Minioak\Royalmail\Shipping\Structs\Dimension $weight
     * @param int $numberOfItems
     * @param \Minioak\Royalmail\Shipping\Structs\Shipment[] $offlineShipments
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\Dimension $weight = null, $numberOfItems = null, array $offlineShipments = array())
    {
        $this
            ->setWeight($weight)
            ->setNumberOfItems($numberOfItems)
            ->setOfflineShipments($offlineShipments);
    }
    /**
     * Get weight value
     * @return \Minioak\Royalmail\Shipping\Structs\Dimension
     */
    public function getWeight()
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param \Minioak\Royalmail\Shipping\Structs\Dimension $weight
     * @return \Minioak\Royalmail\Shipping\Structs\Item
     */
    public function setWeight(\Minioak\Royalmail\Shipping\Structs\Dimension $weight = null)
    {
        $this->weight = $weight;
        return $this;
    }
    /**
     * Get numberOfItems value
     * @return int|null
     */
    public function getNumberOfItems()
    {
        return $this->numberOfItems;
    }
    /**
     * Set numberOfItems value
     * @param int $numberOfItems
     * @return \Minioak\Royalmail\Shipping\Structs\Item
     */
    public function setNumberOfItems($numberOfItems = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfItems) && !is_numeric($numberOfItems)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfItems)), __LINE__);
        }
        $this->numberOfItems = $numberOfItems;
        return $this;
    }
    /**
     * Get offlineShipments value
     * @return \Minioak\Royalmail\Shipping\Structs\Shipment[]|null
     */
    public function getOfflineShipments()
    {
        return $this->offlineShipments;
    }
    /**
     * Set offlineShipments value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\Shipment[] $offlineShipments
     * @return \Minioak\Royalmail\Shipping\Structs\Item
     */
    public function setOfflineShipments(array $offlineShipments = array())
    {
        foreach ($offlineShipments as $itemOfflineShipmentsItem) {
            // validation for constraint: itemType
            if (!$itemOfflineShipmentsItem instanceof \Minioak\Royalmail\Shipping\Structs\Shipment) {
                throw new \InvalidArgumentException(sprintf('The offlineShipments property can only contain items of \Minioak\Royalmail\Shipping\Structs\Shipment, "%s" given', is_object($itemOfflineShipmentsItem) ? get_class($itemOfflineShipmentsItem) : gettype($itemOfflineShipmentsItem)), __LINE__);
            }
        }
        $this->offlineShipments = $offlineShipments;
        return $this;
    }
    /**
     * Add item to offlineShipments value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\Shipment $item
     * @return \Minioak\Royalmail\Shipping\Structs\Item
     */
    public function addToOfflineShipments(\Minioak\Royalmail\Shipping\Structs\Shipment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Minioak\Royalmail\Shipping\Structs\Shipment) {
            throw new \InvalidArgumentException(sprintf('The offlineShipments property can only contain items of \Minioak\Royalmail\Shipping\Structs\Shipment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->offlineShipments[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\Item
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
