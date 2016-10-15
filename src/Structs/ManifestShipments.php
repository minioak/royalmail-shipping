<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for manifestShipments Structs
 * Meta informations extracted from the WSDL
 * - documentation: schema to hold array of shipments manifested
 * @subpackage Structs
 */
class ManifestShipments extends AbstractStructBase
{
    /**
     * The manifestShipment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ManifestShipment[]
     */
    public $manifestShipment;
    /**
     * Constructor method for manifestShipments
     * @uses ManifestShipments::setManifestShipment()
     * @param \Minioak\Royalmail\Shipping\Structs\ManifestShipment[] $manifestShipment
     */
    public function __construct(array $manifestShipment = array())
    {
        $this
            ->setManifestShipment($manifestShipment);
    }
    /**
     * Get manifestShipment value
     * @return \Minioak\Royalmail\Shipping\Structs\ManifestShipment[]
     */
    public function getManifestShipment()
    {
        return $this->manifestShipment;
    }
    /**
     * Set manifestShipment value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\ManifestShipment[] $manifestShipment
     * @return \Minioak\Royalmail\Shipping\Structs\ManifestShipments
     */
    public function setManifestShipment(array $manifestShipment = array())
    {
        foreach ($manifestShipment as $manifestShipmentsManifestShipmentItem) {
            // validation for constraint: itemType
            if (!$manifestShipmentsManifestShipmentItem instanceof \Minioak\Royalmail\Shipping\Structs\ManifestShipment) {
                throw new \InvalidArgumentException(sprintf('The manifestShipment property can only contain items of \Minioak\Royalmail\Shipping\Structs\ManifestShipment, "%s" given', is_object($manifestShipmentsManifestShipmentItem) ? get_class($manifestShipmentsManifestShipmentItem) : gettype($manifestShipmentsManifestShipmentItem)), __LINE__);
            }
        }
        $this->manifestShipment = $manifestShipment;
        return $this;
    }
    /**
     * Add item to manifestShipment value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\ManifestShipment $item
     * @return \Minioak\Royalmail\Shipping\Structs\ManifestShipments
     */
    public function addToManifestShipment(\Minioak\Royalmail\Shipping\Structs\ManifestShipment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Minioak\Royalmail\Shipping\Structs\ManifestShipment) {
            throw new \InvalidArgumentException(sprintf('The manifestShipment property can only contain items of \Minioak\Royalmail\Shipping\Structs\ManifestShipment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->manifestShipment[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\ManifestShipments
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
