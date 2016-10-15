<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for X509IssuerSerialType Structs
 * @subpackage Structs
 */
class X509IssuerSerialType extends AbstractStructBase
{
    /**
     * The X509IssuerName
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - documentation: Simple set of alphanumeric characters.
     * - maxLength: 4000
     * @var string
     */
    public $X509IssuerName;
    /**
     * The X509SerialNumber
     * Meta informations extracted from the WSDL
     * - base: xs:integer
     * - documentation: An integer is a whole number (not a fraction) that can be positive, negative, or zero. Unlike floats, integers cannot have decimal places.
     * @var int
     */
    public $X509SerialNumber;
    /**
     * Constructor method for X509IssuerSerialType
     * @uses X509IssuerSerialType::setX509IssuerName()
     * @uses X509IssuerSerialType::setX509SerialNumber()
     * @param string $x509IssuerName
     * @param int $x509SerialNumber
     */
    public function __construct($x509IssuerName = null, $x509SerialNumber = null)
    {
        $this
            ->setX509IssuerName($x509IssuerName)
            ->setX509SerialNumber($x509SerialNumber);
    }
    /**
     * Get X509IssuerName value
     * @return string|null
     */
    public function getX509IssuerName()
    {
        return $this->X509IssuerName;
    }
    /**
     * Set X509IssuerName value
     * @param string $x509IssuerName
     * @return \Minioak\Royalmail\Shipping\Structs\X509IssuerSerialType
     */
    public function setX509IssuerName($x509IssuerName = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($x509IssuerName) && strlen($x509IssuerName) > 4000) || (is_array($x509IssuerName) && count($x509IssuerName) > 4000)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 4000 element(s) or a scalar of 4000 character(s) at most, "%d" length given', is_scalar($x509IssuerName) ? strlen($x509IssuerName) : count($x509IssuerName)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($x509IssuerName) && !is_string($x509IssuerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($x509IssuerName)), __LINE__);
        }
        $this->X509IssuerName = $x509IssuerName;
        return $this;
    }
    /**
     * Get X509SerialNumber value
     * @return int|null
     */
    public function getX509SerialNumber()
    {
        return $this->X509SerialNumber;
    }
    /**
     * Set X509SerialNumber value
     * @param int $x509SerialNumber
     * @return \Minioak\Royalmail\Shipping\Structs\X509IssuerSerialType
     */
    public function setX509SerialNumber($x509SerialNumber = null)
    {
        // validation for constraint: int
        if (!is_null($x509SerialNumber) && !is_numeric($x509SerialNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($x509SerialNumber)), __LINE__);
        }
        $this->X509SerialNumber = $x509SerialNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\X509IssuerSerialType
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
