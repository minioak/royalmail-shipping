<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ManifestType Structs
 * @subpackage Structs
 */
class ManifestType extends AbstractStructBase
{
    /**
     * The Reference
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: ds:Reference
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceType[]
     */
    public $Reference;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Id;
    /**
     * Constructor method for ManifestType
     * @uses ManifestType::setReference()
     * @uses ManifestType::setId()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceType[] $reference
     * @param string $id
     */
    public function __construct(array $reference = array(), $id = null)
    {
        $this
            ->setReference($reference)
            ->setId($id);
    }
    /**
     * Get Reference value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceType[]|null
     */
    public function getReference()
    {
        return $this->Reference;
    }
    /**
     * Set Reference value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceType[] $reference
     * @return \Minioak\Royalmail\Shipping\Structs\ManifestType
     */
    public function setReference(array $reference = array())
    {
        foreach ($reference as $manifestTypeReferenceItem) {
            // validation for constraint: itemType
            if (!$manifestTypeReferenceItem instanceof \Minioak\Royalmail\Shipping\Structs\ReferenceType) {
                throw new \InvalidArgumentException(sprintf('The Reference property can only contain items of \Minioak\Royalmail\Shipping\Structs\ReferenceType, "%s" given', is_object($manifestTypeReferenceItem) ? get_class($manifestTypeReferenceItem) : gettype($manifestTypeReferenceItem)), __LINE__);
            }
        }
        $this->Reference = $reference;
        return $this;
    }
    /**
     * Add item to Reference value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceType $item
     * @return \Minioak\Royalmail\Shipping\Structs\ManifestType
     */
    public function addToReference(\Minioak\Royalmail\Shipping\Structs\ReferenceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Minioak\Royalmail\Shipping\Structs\ReferenceType) {
            throw new \InvalidArgumentException(sprintf('The Reference property can only contain items of \Minioak\Royalmail\Shipping\Structs\ReferenceType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Reference[] = $item;
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Minioak\Royalmail\Shipping\Structs\ManifestType
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\ManifestType
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
