<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for errorStructure Structs
 * @subpackage Structs
 */
class ErrorStructure extends AbstractStructBase
{
    /**
     * The error
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\ErrorDetail[]
     */
    public $error;
    /**
     * Constructor method for errorStructure
     * @uses ErrorStructure::setError()
     * @param \Minioak\Royalmail\Shipping\Structs\ErrorDetail[] $error
     */
    public function __construct(array $error = array())
    {
        $this
            ->setError($error);
    }
    /**
     * Get error value
     * @return \Minioak\Royalmail\Shipping\Structs\ErrorDetail[]|null
     */
    public function getError()
    {
        return $this->error;
    }
    /**
     * Set error value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\ErrorDetail[] $error
     * @return \Minioak\Royalmail\Shipping\Structs\ErrorStructure
     */
    public function setError(array $error = array())
    {
        foreach ($error as $errorStructureErrorItem) {
            // validation for constraint: itemType
            if (!$errorStructureErrorItem instanceof \Minioak\Royalmail\Shipping\Structs\ErrorDetail) {
                throw new \InvalidArgumentException(sprintf('The error property can only contain items of \Minioak\Royalmail\Shipping\Structs\ErrorDetail, "%s" given', is_object($errorStructureErrorItem) ? get_class($errorStructureErrorItem) : gettype($errorStructureErrorItem)), __LINE__);
            }
        }
        $this->error = $error;
        return $this;
    }
    /**
     * Add item to error value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\ErrorDetail $item
     * @return \Minioak\Royalmail\Shipping\Structs\ErrorStructure
     */
    public function addToError(\Minioak\Royalmail\Shipping\Structs\ErrorDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Minioak\Royalmail\Shipping\Structs\ErrorDetail) {
            throw new \InvalidArgumentException(sprintf('The error property can only contain items of \Minioak\Royalmail\Shipping\Structs\ErrorDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->error[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\ErrorStructure
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
