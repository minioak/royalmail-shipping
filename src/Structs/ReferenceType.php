<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReferenceType Structs
 * Meta informations extracted from the WSDL
 * - documentation: This type represents a reference to an external security token.
 * @subpackage Structs
 */
class ReferenceType extends AbstractStructBase
{
    /**
     * The Transforms
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: ds:Transforms
     * @var \Minioak\Royalmail\Shipping\Structs\TransformsType
     */
    public $Transforms;
    /**
     * The DigestMethod
     * Meta informations extracted from the WSDL
     * - ref: ds:DigestMethod
     * @var \Minioak\Royalmail\Shipping\Structs\DigestMethodType
     */
    public $DigestMethod;
    /**
     * The DigestValue
     * Meta informations extracted from the WSDL
     * - ref: ds:DigestValue
     * @var base64Binary
     */
    public $DigestValue;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Id;
    /**
     * The URI
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $URI;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Type;
    /**
     * The ValueType
     * @var string
     */
    public $ValueType;
    /**
     * Constructor method for ReferenceType
     * @uses ReferenceType::setTransforms()
     * @uses ReferenceType::setDigestMethod()
     * @uses ReferenceType::setDigestValue()
     * @uses ReferenceType::setId()
     * @uses ReferenceType::setURI()
     * @uses ReferenceType::setType()
     * @uses ReferenceType::setValueType()
     * @param \Minioak\Royalmail\Shipping\Structs\TransformsType $transforms
     * @param \Minioak\Royalmail\Shipping\Structs\DigestMethodType $digestMethod
     * @param base64Binary $digestValue
     * @param string $id
     * @param string $uRI
     * @param string $type
     * @param string $valueType
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\TransformsType $transforms = null, \Minioak\Royalmail\Shipping\Structs\DigestMethodType $digestMethod = null, base64Binary $digestValue = null, $id = null, $uRI = null, $type = null, $valueType = null)
    {
        $this
            ->setTransforms($transforms)
            ->setDigestMethod($digestMethod)
            ->setDigestValue($digestValue)
            ->setId($id)
            ->setURI($uRI)
            ->setType($type)
            ->setValueType($valueType);
    }
    /**
     * Get Transforms value
     * @return \Minioak\Royalmail\Shipping\Structs\TransformsType|null
     */
    public function getTransforms()
    {
        return $this->Transforms;
    }
    /**
     * Set Transforms value
     * @param \Minioak\Royalmail\Shipping\Structs\TransformsType $transforms
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceType
     */
    public function setTransforms(\Minioak\Royalmail\Shipping\Structs\TransformsType $transforms = null)
    {
        $this->Transforms = $transforms;
        return $this;
    }
    /**
     * Get DigestMethod value
     * @return \Minioak\Royalmail\Shipping\Structs\DigestMethodType|null
     */
    public function getDigestMethod()
    {
        return $this->DigestMethod;
    }
    /**
     * Set DigestMethod value
     * @param \Minioak\Royalmail\Shipping\Structs\DigestMethodType $digestMethod
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceType
     */
    public function setDigestMethod(\Minioak\Royalmail\Shipping\Structs\DigestMethodType $digestMethod = null)
    {
        $this->DigestMethod = $digestMethod;
        return $this;
    }
    /**
     * Get DigestValue value
     * @return base64Binary|null
     */
    public function getDigestValue()
    {
        return $this->DigestValue;
    }
    /**
     * Set DigestValue value
     * @param base64Binary $digestValue
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceType
     */
    public function setDigestValue(base64Binary $digestValue = null)
    {
        $this->DigestValue = $digestValue;
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
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceType
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
     * Get URI value
     * @return string|null
     */
    public function getURI()
    {
        return $this->URI;
    }
    /**
     * Set URI value
     * @param string $uRI
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceType
     */
    public function setURI($uRI = null)
    {
        // validation for constraint: string
        if (!is_null($uRI) && !is_string($uRI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uRI)), __LINE__);
        }
        $this->URI = $uRI;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceType
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get ValueType value
     * @return string|null
     */
    public function getValueType()
    {
        return $this->ValueType;
    }
    /**
     * Set ValueType value
     * @param string $valueType
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceType
     */
    public function setValueType($valueType = null)
    {
        // validation for constraint: string
        if (!is_null($valueType) && !is_string($valueType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($valueType)), __LINE__);
        }
        $this->ValueType = $valueType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceType
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
