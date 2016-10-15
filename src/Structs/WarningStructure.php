<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for warningStructure Structs
 * @subpackage Structs
 */
class WarningStructure extends AbstractStructBase
{
    /**
     * The warning
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\WarningDetail[]
     */
    public $warning;
    /**
     * Constructor method for warningStructure
     * @uses WarningStructure::setWarning()
     * @param \Minioak\Royalmail\Shipping\Structs\WarningDetail[] $warning
     */
    public function __construct(array $warning = array())
    {
        $this
            ->setWarning($warning);
    }
    /**
     * Get warning value
     * @return \Minioak\Royalmail\Shipping\Structs\WarningDetail[]|null
     */
    public function getWarning()
    {
        return $this->warning;
    }
    /**
     * Set warning value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\WarningDetail[] $warning
     * @return \Minioak\Royalmail\Shipping\Structs\WarningStructure
     */
    public function setWarning(array $warning = array())
    {
        foreach ($warning as $warningStructureWarningItem) {
            // validation for constraint: itemType
            if (!$warningStructureWarningItem instanceof \Minioak\Royalmail\Shipping\Structs\WarningDetail) {
                throw new \InvalidArgumentException(sprintf('The warning property can only contain items of \Minioak\Royalmail\Shipping\Structs\WarningDetail, "%s" given', is_object($warningStructureWarningItem) ? get_class($warningStructureWarningItem) : gettype($warningStructureWarningItem)), __LINE__);
            }
        }
        $this->warning = $warning;
        return $this;
    }
    /**
     * Add item to warning value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\WarningDetail $item
     * @return \Minioak\Royalmail\Shipping\Structs\WarningStructure
     */
    public function addToWarning(\Minioak\Royalmail\Shipping\Structs\WarningDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Minioak\Royalmail\Shipping\Structs\WarningDetail) {
            throw new \InvalidArgumentException(sprintf('The warning property can only contain items of \Minioak\Royalmail\Shipping\Structs\WarningDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->warning[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\WarningStructure
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
