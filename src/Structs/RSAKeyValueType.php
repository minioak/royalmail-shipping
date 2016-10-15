<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RSAKeyValueType Structs
 * @subpackage Structs
 */
class RSAKeyValueType extends AbstractStructBase
{
    /**
     * The Modulus
     * @var base64Binary
     */
    public $Modulus;
    /**
     * The Exponent
     * @var base64Binary
     */
    public $Exponent;
    /**
     * Constructor method for RSAKeyValueType
     * @uses RSAKeyValueType::setModulus()
     * @uses RSAKeyValueType::setExponent()
     * @param base64Binary $modulus
     * @param base64Binary $exponent
     */
    public function __construct(base64Binary $modulus = null, base64Binary $exponent = null)
    {
        $this
            ->setModulus($modulus)
            ->setExponent($exponent);
    }
    /**
     * Get Modulus value
     * @return base64Binary|null
     */
    public function getModulus()
    {
        return $this->Modulus;
    }
    /**
     * Set Modulus value
     * @param base64Binary $modulus
     * @return \Minioak\Royalmail\Shipping\Structs\RSAKeyValueType
     */
    public function setModulus(base64Binary $modulus = null)
    {
        $this->Modulus = $modulus;
        return $this;
    }
    /**
     * Get Exponent value
     * @return base64Binary|null
     */
    public function getExponent()
    {
        return $this->Exponent;
    }
    /**
     * Set Exponent value
     * @param base64Binary $exponent
     * @return \Minioak\Royalmail\Shipping\Structs\RSAKeyValueType
     */
    public function setExponent(base64Binary $exponent = null)
    {
        $this->Exponent = $exponent;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\RSAKeyValueType
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
