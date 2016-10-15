<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignedInfoType Structs
 * @subpackage Structs
 */
class SignedInfoType extends AbstractStructBase
{
    /**
     * The CanonicalizationMethod
     * Meta informations extracted from the WSDL
     * - ref: ds:CanonicalizationMethod
     * @var \Minioak\Royalmail\Shipping\Structs\CanonicalizationMethodType
     */
    public $CanonicalizationMethod;
    /**
     * The SignatureMethod
     * Meta informations extracted from the WSDL
     * - ref: ds:SignatureMethod
     * @var \Minioak\Royalmail\Shipping\Structs\SignatureMethodType
     */
    public $SignatureMethod;
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
     * Constructor method for SignedInfoType
     * @uses SignedInfoType::setCanonicalizationMethod()
     * @uses SignedInfoType::setSignatureMethod()
     * @uses SignedInfoType::setReference()
     * @uses SignedInfoType::setId()
     * @param \Minioak\Royalmail\Shipping\Structs\CanonicalizationMethodType $canonicalizationMethod
     * @param \Minioak\Royalmail\Shipping\Structs\SignatureMethodType $signatureMethod
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceType[] $reference
     * @param string $id
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\CanonicalizationMethodType $canonicalizationMethod = null, \Minioak\Royalmail\Shipping\Structs\SignatureMethodType $signatureMethod = null, array $reference = array(), $id = null)
    {
        $this
            ->setCanonicalizationMethod($canonicalizationMethod)
            ->setSignatureMethod($signatureMethod)
            ->setReference($reference)
            ->setId($id);
    }
    /**
     * Get CanonicalizationMethod value
     * @return \Minioak\Royalmail\Shipping\Structs\CanonicalizationMethodType|null
     */
    public function getCanonicalizationMethod()
    {
        return $this->CanonicalizationMethod;
    }
    /**
     * Set CanonicalizationMethod value
     * @param \Minioak\Royalmail\Shipping\Structs\CanonicalizationMethodType $canonicalizationMethod
     * @return \Minioak\Royalmail\Shipping\Structs\SignedInfoType
     */
    public function setCanonicalizationMethod(\Minioak\Royalmail\Shipping\Structs\CanonicalizationMethodType $canonicalizationMethod = null)
    {
        $this->CanonicalizationMethod = $canonicalizationMethod;
        return $this;
    }
    /**
     * Get SignatureMethod value
     * @return \Minioak\Royalmail\Shipping\Structs\SignatureMethodType|null
     */
    public function getSignatureMethod()
    {
        return $this->SignatureMethod;
    }
    /**
     * Set SignatureMethod value
     * @param \Minioak\Royalmail\Shipping\Structs\SignatureMethodType $signatureMethod
     * @return \Minioak\Royalmail\Shipping\Structs\SignedInfoType
     */
    public function setSignatureMethod(\Minioak\Royalmail\Shipping\Structs\SignatureMethodType $signatureMethod = null)
    {
        $this->SignatureMethod = $signatureMethod;
        return $this;
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
     * @return \Minioak\Royalmail\Shipping\Structs\SignedInfoType
     */
    public function setReference(array $reference = array())
    {
        foreach ($reference as $signedInfoTypeReferenceItem) {
            // validation for constraint: itemType
            if (!$signedInfoTypeReferenceItem instanceof \Minioak\Royalmail\Shipping\Structs\ReferenceType) {
                throw new \InvalidArgumentException(sprintf('The Reference property can only contain items of \Minioak\Royalmail\Shipping\Structs\ReferenceType, "%s" given', is_object($signedInfoTypeReferenceItem) ? get_class($signedInfoTypeReferenceItem) : gettype($signedInfoTypeReferenceItem)), __LINE__);
            }
        }
        $this->Reference = $reference;
        return $this;
    }
    /**
     * Add item to Reference value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceType $item
     * @return \Minioak\Royalmail\Shipping\Structs\SignedInfoType
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
     * @return \Minioak\Royalmail\Shipping\Structs\SignedInfoType
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
     * @return \Minioak\Royalmail\Shipping\Structs\SignedInfoType
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
