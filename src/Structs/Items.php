<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for items Structs
 * Meta informations extracted from the WSDL
 * - documentation: schema to hold array of single item structures
 * @subpackage Structs
 */
class Items extends AbstractStructBase
{
    /**
     * The item
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\Item[]
     */
    public $item;
    /**
     * Constructor method for items
     * @uses Items::setItem()
     * @param \Minioak\Royalmail\Shipping\Structs\Item[] $item
     */
    public function __construct(array $item = array())
    {
        $this
            ->setItem($item);
    }
    /**
     * Get item value
     * @return \Minioak\Royalmail\Shipping\Structs\Item[]|null
     */
    public function getItem()
    {
        return $this->item;
    }
    /**
     * Set item value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\Item[] $item
     * @return \Minioak\Royalmail\Shipping\Structs\Items
     */
    public function setItem(array $item = array())
    {
        foreach ($item as $itemsItemItem) {
            // validation for constraint: itemType
            if (!$itemsItemItem instanceof \Minioak\Royalmail\Shipping\Structs\Item) {
                throw new \InvalidArgumentException(sprintf('The item property can only contain items of \Minioak\Royalmail\Shipping\Structs\Item, "%s" given', is_object($itemsItemItem) ? get_class($itemsItemItem) : gettype($itemsItemItem)), __LINE__);
            }
        }
        $this->item = $item;
        return $this;
    }
    /**
     * Add item to item value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\Item $item
     * @return \Minioak\Royalmail\Shipping\Structs\Items
     */
    public function addToItem(\Minioak\Royalmail\Shipping\Structs\Item $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Minioak\Royalmail\Shipping\Structs\Item) {
            throw new \InvalidArgumentException(sprintf('The item property can only contain items of \Minioak\Royalmail\Shipping\Structs\Item, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->item[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\Items
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
