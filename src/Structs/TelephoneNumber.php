<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephoneNumber Structs
 * Meta informations extracted from the WSDL
 * - documentation: Standard Format for a telephone number
 * - type: com:telephoneNumber
 * @subpackage Structs
 */
class TelephoneNumber extends ContactMechanism
{
    /**
     * The countryCode
     * Meta informations extracted from the WSDL
     * - documentation: Standard Country Dialing code i.e. 0044 | An integer is a whole number (not a fraction) that can be positive, negative, or zero. Unlike floats, integers cannot have decimal places.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - base: xs:integer
     * @var int
     */
    public $countryCode;
    /**
     * The areaCode
     * Meta informations extracted from the WSDL
     * - documentation: Standard telephone number area code | An integer is a whole number (not a fraction) that can be positive, negative, or zero. Unlike floats, integers cannot have decimal places.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - base: xs:integer
     * @var int
     */
    public $areaCode;
    /**
     * The telephoneNumber
     * Meta informations extracted from the WSDL
     * - documentation: Body of the telephone number. | An integer is a whole number (not a fraction) that can be positive, negative, or zero. Unlike floats, integers cannot have decimal places.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - base: xs:integer
     * @var int
     */
    public $telephoneNumber;
    /**
     * The extensionNumber
     * Meta informations extracted from the WSDL
     * - documentation: Extension number within a location. | An integer is a whole number (not a fraction) that can be positive, negative, or zero. Unlike floats, integers cannot have decimal places.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - base: xs:integer
     * @var int
     */
    public $extensionNumber;
    /**
     * The speedDialNumber
     * Meta informations extracted from the WSDL
     * - documentation: Speed dial number for a location. | An integer is a whole number (not a fraction) that can be positive, negative, or zero. Unlike floats, integers cannot have decimal places.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - base: xs:integer
     * @var int
     */
    public $speedDialNumber;
    /**
     * Constructor method for telephoneNumber
     * @uses TelephoneNumber::setCountryCode()
     * @uses TelephoneNumber::setAreaCode()
     * @uses TelephoneNumber::setTelephoneNumber()
     * @uses TelephoneNumber::setExtensionNumber()
     * @uses TelephoneNumber::setSpeedDialNumber()
     * @param int $countryCode
     * @param int $areaCode
     * @param int $telephoneNumber
     * @param int $extensionNumber
     * @param int $speedDialNumber
     */
    public function __construct($countryCode = null, $areaCode = null, $telephoneNumber = null, $extensionNumber = null, $speedDialNumber = null)
    {
        $this
            ->setCountryCode($countryCode)
            ->setAreaCode($areaCode)
            ->setTelephoneNumber($telephoneNumber)
            ->setExtensionNumber($extensionNumber)
            ->setSpeedDialNumber($speedDialNumber);
    }
    /**
     * Get countryCode value
     * @return int|null
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param int $countryCode
     * @return \Minioak\Royalmail\Shipping\Structs\TelephoneNumber
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: int
        if (!is_null($countryCode) && !is_numeric($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * Get areaCode value
     * @return int|null
     */
    public function getAreaCode()
    {
        return $this->areaCode;
    }
    /**
     * Set areaCode value
     * @param int $areaCode
     * @return \Minioak\Royalmail\Shipping\Structs\TelephoneNumber
     */
    public function setAreaCode($areaCode = null)
    {
        // validation for constraint: int
        if (!is_null($areaCode) && !is_numeric($areaCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($areaCode)), __LINE__);
        }
        $this->areaCode = $areaCode;
        return $this;
    }
    /**
     * Get telephoneNumber value
     * @return int|null
     */
    public function getTelephoneNumber()
    {
        return $this->telephoneNumber;
    }
    /**
     * Set telephoneNumber value
     * @param int $telephoneNumber
     * @return \Minioak\Royalmail\Shipping\Structs\TelephoneNumber
     */
    public function setTelephoneNumber($telephoneNumber = null)
    {
        // validation for constraint: int
        if (!is_null($telephoneNumber) && !is_numeric($telephoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($telephoneNumber)), __LINE__);
        }
        $this->telephoneNumber = $telephoneNumber;
        return $this;
    }
    /**
     * Get extensionNumber value
     * @return int|null
     */
    public function getExtensionNumber()
    {
        return $this->extensionNumber;
    }
    /**
     * Set extensionNumber value
     * @param int $extensionNumber
     * @return \Minioak\Royalmail\Shipping\Structs\TelephoneNumber
     */
    public function setExtensionNumber($extensionNumber = null)
    {
        // validation for constraint: int
        if (!is_null($extensionNumber) && !is_numeric($extensionNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($extensionNumber)), __LINE__);
        }
        $this->extensionNumber = $extensionNumber;
        return $this;
    }
    /**
     * Get speedDialNumber value
     * @return int|null
     */
    public function getSpeedDialNumber()
    {
        return $this->speedDialNumber;
    }
    /**
     * Set speedDialNumber value
     * @param int $speedDialNumber
     * @return \Minioak\Royalmail\Shipping\Structs\TelephoneNumber
     */
    public function setSpeedDialNumber($speedDialNumber = null)
    {
        // validation for constraint: int
        if (!is_null($speedDialNumber) && !is_numeric($speedDialNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($speedDialNumber)), __LINE__);
        }
        $this->speedDialNumber = $speedDialNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\TelephoneNumber
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
