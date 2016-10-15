<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransformsType Structs
 * @subpackage Structs
 */
class TransformsType extends AbstractStructBase
{
    /**
     * The Transform
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: ds:Transform
     * @var \Minioak\Royalmail\Shipping\Structs\TransformType[]
     */
    public $Transform;
    /**
     * Constructor method for TransformsType
     * @uses TransformsType::setTransform()
     * @param \Minioak\Royalmail\Shipping\Structs\TransformType[] $transform
     */
    public function __construct(array $transform = array())
    {
        $this
            ->setTransform($transform);
    }
    /**
     * Get Transform value
     * @return \Minioak\Royalmail\Shipping\Structs\TransformType[]|null
     */
    public function getTransform()
    {
        return $this->Transform;
    }
    /**
     * Set Transform value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\TransformType[] $transform
     * @return \Minioak\Royalmail\Shipping\Structs\TransformsType
     */
    public function setTransform(array $transform = array())
    {
        foreach ($transform as $transformsTypeTransformItem) {
            // validation for constraint: itemType
            if (!$transformsTypeTransformItem instanceof \Minioak\Royalmail\Shipping\Structs\TransformType) {
                throw new \InvalidArgumentException(sprintf('The Transform property can only contain items of \Minioak\Royalmail\Shipping\Structs\TransformType, "%s" given', is_object($transformsTypeTransformItem) ? get_class($transformsTypeTransformItem) : gettype($transformsTypeTransformItem)), __LINE__);
            }
        }
        $this->Transform = $transform;
        return $this;
    }
    /**
     * Add item to Transform value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\TransformType $item
     * @return \Minioak\Royalmail\Shipping\Structs\TransformsType
     */
    public function addToTransform(\Minioak\Royalmail\Shipping\Structs\TransformType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Minioak\Royalmail\Shipping\Structs\TransformType) {
            throw new \InvalidArgumentException(sprintf('The Transform property can only contain items of \Minioak\Royalmail\Shipping\Structs\TransformType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Transform[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\TransformsType
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
