<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for serviceEnhancements Structs
 * Meta informations extracted from the WSDL
 * - documentation: schema to hold service enhancements
 * @subpackage Structs
 */
class ServiceEnhancements extends AbstractStructBase
{
    /**
     * The enhancementType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\ServiceEnhancementType[]
     */
    public $enhancementType;
    /**
     * Constructor method for serviceEnhancements
     * @uses ServiceEnhancements::setEnhancementType()
     * @param \Minioak\Royalmail\Shipping\Structs\ServiceEnhancementType[] $enhancementType
     */
    public function __construct(array $enhancementType = array())
    {
        $this
            ->setEnhancementType($enhancementType);
    }
    /**
     * Get enhancementType value
     * @return \Minioak\Royalmail\Shipping\Structs\ServiceEnhancementType[]|null
     */
    public function getEnhancementType()
    {
        return $this->enhancementType;
    }
    /**
     * Set enhancementType value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\ServiceEnhancementType[] $enhancementType
     * @return \Minioak\Royalmail\Shipping\Structs\ServiceEnhancements
     */
    public function setEnhancementType(array $enhancementType = array())
    {
        foreach ($enhancementType as $serviceEnhancementsEnhancementTypeItem) {
            // validation for constraint: itemType
            if (!$serviceEnhancementsEnhancementTypeItem instanceof \Minioak\Royalmail\Shipping\Structs\ServiceEnhancementType) {
                throw new \InvalidArgumentException(sprintf('The enhancementType property can only contain items of \Minioak\Royalmail\Shipping\Structs\ServiceEnhancementType, "%s" given', is_object($serviceEnhancementsEnhancementTypeItem) ? get_class($serviceEnhancementsEnhancementTypeItem) : gettype($serviceEnhancementsEnhancementTypeItem)), __LINE__);
            }
        }
        $this->enhancementType = $enhancementType;
        return $this;
    }
    /**
     * Add item to enhancementType value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\ServiceEnhancementType $item
     * @return \Minioak\Royalmail\Shipping\Structs\ServiceEnhancements
     */
    public function addToEnhancementType(\Minioak\Royalmail\Shipping\Structs\ServiceEnhancementType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Minioak\Royalmail\Shipping\Structs\ServiceEnhancementType) {
            throw new \InvalidArgumentException(sprintf('The enhancementType property can only contain items of \Minioak\Royalmail\Shipping\Structs\ServiceEnhancementType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->enhancementType[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\ServiceEnhancements
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
