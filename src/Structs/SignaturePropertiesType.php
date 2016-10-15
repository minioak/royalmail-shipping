<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignaturePropertiesType Structs
 * @subpackage Structs
 */
class SignaturePropertiesType extends AbstractStructBase
{
    /**
     * The SignatureProperty
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: ds:SignatureProperty
     * @var \Minioak\Royalmail\Shipping\Structs\SignaturePropertyType[]
     */
    public $SignatureProperty;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Id;
    /**
     * Constructor method for SignaturePropertiesType
     * @uses SignaturePropertiesType::setSignatureProperty()
     * @uses SignaturePropertiesType::setId()
     * @param \Minioak\Royalmail\Shipping\Structs\SignaturePropertyType[] $signatureProperty
     * @param string $id
     */
    public function __construct(array $signatureProperty = array(), $id = null)
    {
        $this
            ->setSignatureProperty($signatureProperty)
            ->setId($id);
    }
    /**
     * Get SignatureProperty value
     * @return \Minioak\Royalmail\Shipping\Structs\SignaturePropertyType[]|null
     */
    public function getSignatureProperty()
    {
        return $this->SignatureProperty;
    }
    /**
     * Set SignatureProperty value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\SignaturePropertyType[] $signatureProperty
     * @return \Minioak\Royalmail\Shipping\Structs\SignaturePropertiesType
     */
    public function setSignatureProperty(array $signatureProperty = array())
    {
        foreach ($signatureProperty as $signaturePropertiesTypeSignaturePropertyItem) {
            // validation for constraint: itemType
            if (!$signaturePropertiesTypeSignaturePropertyItem instanceof \Minioak\Royalmail\Shipping\Structs\SignaturePropertyType) {
                throw new \InvalidArgumentException(sprintf('The SignatureProperty property can only contain items of \Minioak\Royalmail\Shipping\Structs\SignaturePropertyType, "%s" given', is_object($signaturePropertiesTypeSignaturePropertyItem) ? get_class($signaturePropertiesTypeSignaturePropertyItem) : gettype($signaturePropertiesTypeSignaturePropertyItem)), __LINE__);
            }
        }
        $this->SignatureProperty = $signatureProperty;
        return $this;
    }
    /**
     * Add item to SignatureProperty value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\SignaturePropertyType $item
     * @return \Minioak\Royalmail\Shipping\Structs\SignaturePropertiesType
     */
    public function addToSignatureProperty(\Minioak\Royalmail\Shipping\Structs\SignaturePropertyType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Minioak\Royalmail\Shipping\Structs\SignaturePropertyType) {
            throw new \InvalidArgumentException(sprintf('The SignatureProperty property can only contain items of \Minioak\Royalmail\Shipping\Structs\SignaturePropertyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SignatureProperty[] = $item;
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
     * @return \Minioak\Royalmail\Shipping\Structs\SignaturePropertiesType
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
     * @return \Minioak\Royalmail\Shipping\Structs\SignaturePropertiesType
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
