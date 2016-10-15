<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for digitalAddress Structs
 * Meta informations extracted from the WSDL
 * - documentation: Electronic address such as email or twitter.
 * - type: com:digitalAddress
 * @subpackage Structs
 */
class DigitalAddress extends ContactMechanism
{
    /**
     * The electronicAddress
     * Meta informations extracted from the WSDL
     * - documentation: A address relating to email, website or other internet location | A description is a sub-type of string and is statement in words that gives an account or descriptive representation of a thing. Descriptions are only editable via an
     * admin function and are for display and information purposes only for end users. | Simple set of alphanumeric characters.
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 256 | 4000
     * - base: xs:string
     * @var string
     */
    public $electronicAddress;
    /**
     * Constructor method for digitalAddress
     * @uses DigitalAddress::setElectronicAddress()
     * @param string $electronicAddress
     */
    public function __construct($electronicAddress = null)
    {
        $this
            ->setElectronicAddress($electronicAddress);
    }
    /**
     * Get electronicAddress value
     * @return string
     */
    public function getElectronicAddress()
    {
        return $this->electronicAddress;
    }
    /**
     * Set electronicAddress value
     * @param string $electronicAddress
     * @return \Minioak\Royalmail\Shipping\Structs\DigitalAddress
     */
    public function setElectronicAddress($electronicAddress = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($electronicAddress) && strlen($electronicAddress) > 1) || (is_array($electronicAddress) && count($electronicAddress) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($electronicAddress) ? strlen($electronicAddress) : count($electronicAddress)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($electronicAddress) && !is_string($electronicAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($electronicAddress)), __LINE__);
        }
        $this->electronicAddress = $electronicAddress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\DigitalAddress
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
