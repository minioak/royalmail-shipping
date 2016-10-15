<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignatureType Structs
 * @subpackage Structs
 */
class SignatureType extends AbstractStructBase
{
    /**
     * The SignedInfo
     * Meta informations extracted from the WSDL
     * - ref: ds:SignedInfo
     * @var \Minioak\Royalmail\Shipping\Structs\SignedInfoType
     */
    public $SignedInfo;
    /**
     * The SignatureValue
     * Meta informations extracted from the WSDL
     * - ref: ds:SignatureValue
     * @var \Minioak\Royalmail\Shipping\Structs\SignatureValueType
     */
    public $SignatureValue;
    /**
     * The KeyInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: ds:KeyInfo
     * @var \Minioak\Royalmail\Shipping\Structs\KeyInfoType
     */
    public $KeyInfo;
    /**
     * The Object
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: ds:Object
     * @var \Minioak\Royalmail\Shipping\Structs\ObjectType[]
     */
    public $Object;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Id;
    /**
     * Constructor method for SignatureType
     * @uses SignatureType::setSignedInfo()
     * @uses SignatureType::setSignatureValue()
     * @uses SignatureType::setKeyInfo()
     * @uses SignatureType::setObject()
     * @uses SignatureType::setId()
     * @param \Minioak\Royalmail\Shipping\Structs\SignedInfoType $signedInfo
     * @param \Minioak\Royalmail\Shipping\Structs\SignatureValueType $signatureValue
     * @param \Minioak\Royalmail\Shipping\Structs\KeyInfoType $keyInfo
     * @param \Minioak\Royalmail\Shipping\Structs\ObjectType[] $object
     * @param string $id
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\SignedInfoType $signedInfo = null, \Minioak\Royalmail\Shipping\Structs\SignatureValueType $signatureValue = null, \Minioak\Royalmail\Shipping\Structs\KeyInfoType $keyInfo = null, array $object = array(), $id = null)
    {
        $this
            ->setSignedInfo($signedInfo)
            ->setSignatureValue($signatureValue)
            ->setKeyInfo($keyInfo)
            ->setObject($object)
            ->setId($id);
    }
    /**
     * Get SignedInfo value
     * @return \Minioak\Royalmail\Shipping\Structs\SignedInfoType|null
     */
    public function getSignedInfo()
    {
        return $this->SignedInfo;
    }
    /**
     * Set SignedInfo value
     * @param \Minioak\Royalmail\Shipping\Structs\SignedInfoType $signedInfo
     * @return \Minioak\Royalmail\Shipping\Structs\SignatureType
     */
    public function setSignedInfo(\Minioak\Royalmail\Shipping\Structs\SignedInfoType $signedInfo = null)
    {
        $this->SignedInfo = $signedInfo;
        return $this;
    }
    /**
     * Get SignatureValue value
     * @return \Minioak\Royalmail\Shipping\Structs\SignatureValueType|null
     */
    public function getSignatureValue()
    {
        return $this->SignatureValue;
    }
    /**
     * Set SignatureValue value
     * @param \Minioak\Royalmail\Shipping\Structs\SignatureValueType $signatureValue
     * @return \Minioak\Royalmail\Shipping\Structs\SignatureType
     */
    public function setSignatureValue(\Minioak\Royalmail\Shipping\Structs\SignatureValueType $signatureValue = null)
    {
        $this->SignatureValue = $signatureValue;
        return $this;
    }
    /**
     * Get KeyInfo value
     * @return \Minioak\Royalmail\Shipping\Structs\KeyInfoType|null
     */
    public function getKeyInfo()
    {
        return $this->KeyInfo;
    }
    /**
     * Set KeyInfo value
     * @param \Minioak\Royalmail\Shipping\Structs\KeyInfoType $keyInfo
     * @return \Minioak\Royalmail\Shipping\Structs\SignatureType
     */
    public function setKeyInfo(\Minioak\Royalmail\Shipping\Structs\KeyInfoType $keyInfo = null)
    {
        $this->KeyInfo = $keyInfo;
        return $this;
    }
    /**
     * Get Object value
     * @return \Minioak\Royalmail\Shipping\Structs\ObjectType[]|null
     */
    public function getObject()
    {
        return $this->Object;
    }
    /**
     * Set Object value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\ObjectType[] $object
     * @return \Minioak\Royalmail\Shipping\Structs\SignatureType
     */
    public function setObject(array $object = array())
    {
        foreach ($object as $signatureTypeObjectItem) {
            // validation for constraint: itemType
            if (!$signatureTypeObjectItem instanceof \Minioak\Royalmail\Shipping\Structs\ObjectType) {
                throw new \InvalidArgumentException(sprintf('The Object property can only contain items of \Minioak\Royalmail\Shipping\Structs\ObjectType, "%s" given', is_object($signatureTypeObjectItem) ? get_class($signatureTypeObjectItem) : gettype($signatureTypeObjectItem)), __LINE__);
            }
        }
        $this->Object = $object;
        return $this;
    }
    /**
     * Add item to Object value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\ObjectType $item
     * @return \Minioak\Royalmail\Shipping\Structs\SignatureType
     */
    public function addToObject(\Minioak\Royalmail\Shipping\Structs\ObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Minioak\Royalmail\Shipping\Structs\ObjectType) {
            throw new \InvalidArgumentException(sprintf('The Object property can only contain items of \Minioak\Royalmail\Shipping\Structs\ObjectType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Object[] = $item;
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
     * @return \Minioak\Royalmail\Shipping\Structs\SignatureType
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
     * @return \Minioak\Royalmail\Shipping\Structs\SignatureType
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
