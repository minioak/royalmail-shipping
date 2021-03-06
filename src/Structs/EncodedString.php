<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EncodedString Structs
 * Meta informations extracted from the WSDL
 * - documentation: This type is used for elements containing stringified binary data.
 * @subpackage Structs
 */
class EncodedString extends AttributedString
{
    /**
     * The _
     * @var \Minioak\Royalmail\Shipping\Structs\AttributedString
     */
    public $_;
    /**
     * The EncodingType
     * @var string
     */
    public $EncodingType;
    /**
     * Constructor method for EncodedString
     * @uses EncodedString::set_()
     * @uses EncodedString::setEncodingType()
     * @param \Minioak\Royalmail\Shipping\Structs\AttributedString $_
     * @param string $encodingType
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\AttributedString $_ = null, $encodingType = null)
    {
        $this
            ->set_($_)
            ->setEncodingType($encodingType);
    }
    /**
     * Get _ value
     * @return \Minioak\Royalmail\Shipping\Structs\AttributedString|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param \Minioak\Royalmail\Shipping\Structs\AttributedString $_
     * @return \Minioak\Royalmail\Shipping\Structs\EncodedString
     */
    public function set_(\Minioak\Royalmail\Shipping\Structs\AttributedString $_ = null)
    {
        $this->_ = $_;
        return $this;
    }
    /**
     * Get EncodingType value
     * @return string|null
     */
    public function getEncodingType()
    {
        return $this->EncodingType;
    }
    /**
     * Set EncodingType value
     * @param string $encodingType
     * @return \Minioak\Royalmail\Shipping\Structs\EncodedString
     */
    public function setEncodingType($encodingType = null)
    {
        // validation for constraint: string
        if (!is_null($encodingType) && !is_string($encodingType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($encodingType)), __LINE__);
        }
        $this->EncodingType = $encodingType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\EncodedString
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
