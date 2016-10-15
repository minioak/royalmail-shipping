<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for countryType Structs
 * Meta informations extracted from the WSDL
 * - documentation: A Country as recognised by the International Standards Organisation.
 * - type: rd:countryType
 * @subpackage Structs
 */
class CountryType extends AbstractStructBase
{
    /**
     * The countryCode
     * Meta informations extracted from the WSDL
     * - documentation: A Country as recognised by the International Standards Organisation
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $countryCode;
    /**
     * Constructor method for countryType
     * @uses CountryType::setCountryCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $countryCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $countryCode = null)
    {
        $this
            ->setCountryCode($countryCode);
    }
    /**
     * Get countryCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $countryCode
     * @return \Minioak\Royalmail\Shipping\Structs\CountryType
     */
    public function setCountryCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $countryCode = null)
    {
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\CountryType
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
