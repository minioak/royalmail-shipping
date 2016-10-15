<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for parcels Structs
 * Meta informations extracted from the WSDL
 * - documentation: schema to hold array of single parcel structures
 * @subpackage Structs
 */
class Parcels extends AbstractStructBase
{
    /**
     * The parcel
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Minioak\Royalmail\Shipping\Structs\Parcel[]
     */
    public $parcel;
    /**
     * Constructor method for parcels
     * @uses Parcels::setParcel()
     * @param \Minioak\Royalmail\Shipping\Structs\Parcel[] $parcel
     */
    public function __construct(array $parcel = array())
    {
        $this
            ->setParcel($parcel);
    }
    /**
     * Get parcel value
     * @return \Minioak\Royalmail\Shipping\Structs\Parcel[]|null
     */
    public function getParcel()
    {
        return $this->parcel;
    }
    /**
     * Set parcel value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\Parcel[] $parcel
     * @return \Minioak\Royalmail\Shipping\Structs\Parcels
     */
    public function setParcel(array $parcel = array())
    {
        foreach ($parcel as $parcelsParcelItem) {
            // validation for constraint: itemType
            if (!$parcelsParcelItem instanceof \Minioak\Royalmail\Shipping\Structs\Parcel) {
                throw new \InvalidArgumentException(sprintf('The parcel property can only contain items of \Minioak\Royalmail\Shipping\Structs\Parcel, "%s" given', is_object($parcelsParcelItem) ? get_class($parcelsParcelItem) : gettype($parcelsParcelItem)), __LINE__);
            }
        }
        $this->parcel = $parcel;
        return $this;
    }
    /**
     * Add item to parcel value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\Parcel $item
     * @return \Minioak\Royalmail\Shipping\Structs\Parcels
     */
    public function addToParcel(\Minioak\Royalmail\Shipping\Structs\Parcel $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Minioak\Royalmail\Shipping\Structs\Parcel) {
            throw new \InvalidArgumentException(sprintf('The parcel property can only contain items of \Minioak\Royalmail\Shipping\Structs\Parcel, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->parcel[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\Parcels
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
