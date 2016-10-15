<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for allCompletedShipments Structs
 * Meta informations extracted from the WSDL
 * - documentation: schema containing the choice of 1D or 2D structures
 * @subpackage Structs
 */
class AllCompletedShipments extends AbstractStructBase
{
    /**
     * The completedShipments
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\CompletedShipments[]
     */
    public $completedShipments;
    /**
     * Constructor method for allCompletedShipments
     * @uses AllCompletedShipments::setCompletedShipments()
     * @param \Minioak\Royalmail\Shipping\Structs\CompletedShipments[] $completedShipments
     */
    public function __construct(array $completedShipments = array())
    {
        $this
            ->setCompletedShipments($completedShipments);
    }
    /**
     * Get completedShipments value
     * @return \Minioak\Royalmail\Shipping\Structs\CompletedShipments[]
     */
    public function getCompletedShipments()
    {
        return $this->completedShipments;
    }
    /**
     * Set completedShipments value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\CompletedShipments[] $completedShipments
     * @return \Minioak\Royalmail\Shipping\Structs\AllCompletedShipments
     */
    public function setCompletedShipments(array $completedShipments = array())
    {
        foreach ($completedShipments as $allCompletedShipmentsCompletedShipmentsItem) {
            // validation for constraint: itemType
            if (!$allCompletedShipmentsCompletedShipmentsItem instanceof \Minioak\Royalmail\Shipping\Structs\CompletedShipments) {
                throw new \InvalidArgumentException(sprintf('The completedShipments property can only contain items of \Minioak\Royalmail\Shipping\Structs\CompletedShipments, "%s" given', is_object($allCompletedShipmentsCompletedShipmentsItem) ? get_class($allCompletedShipmentsCompletedShipmentsItem) : gettype($allCompletedShipmentsCompletedShipmentsItem)), __LINE__);
            }
        }
        $this->completedShipments = $completedShipments;
        return $this;
    }
    /**
     * Add item to completedShipments value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\CompletedShipments $item
     * @return \Minioak\Royalmail\Shipping\Structs\AllCompletedShipments
     */
    public function addToCompletedShipments(\Minioak\Royalmail\Shipping\Structs\CompletedShipments $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Minioak\Royalmail\Shipping\Structs\CompletedShipments) {
            throw new \InvalidArgumentException(sprintf('The completedShipments property can only contain items of \Minioak\Royalmail\Shipping\Structs\CompletedShipments, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->completedShipments[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\AllCompletedShipments
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
