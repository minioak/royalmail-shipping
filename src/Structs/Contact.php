<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for contact Structs
 * @subpackage Structs
 */
class Contact extends AbstractStructBase
{
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: A long name is a sub-type of string and is word or a combination of words by which an organization, place, or thing, a body or class, or any object of thought is designated, called, or known. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $name;
    /**
     * The complementaryName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:complementaryName
     * - documentation: A long name is a sub-type of string and is word or a combination of words by which an organization, place, or thing, a body or class, or any object of thought is designated, called, or known. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $complementaryName;
    /**
     * The telephoneNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\TelephoneNumber
     */
    public $telephoneNumber;
    /**
     * The electronicAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\DigitalAddress
     */
    public $electronicAddress;
    /**
     * Constructor method for contact
     * @uses Contact::setName()
     * @uses Contact::setComplementaryName()
     * @uses Contact::setTelephoneNumber()
     * @uses Contact::setElectronicAddress()
     * @param string $name
     * @param string $complementaryName
     * @param \Minioak\Royalmail\Shipping\Structs\TelephoneNumber $telephoneNumber
     * @param \Minioak\Royalmail\Shipping\Structs\DigitalAddress $electronicAddress
     */
    public function __construct($name = null, $complementaryName = null, \Minioak\Royalmail\Shipping\Structs\TelephoneNumber $telephoneNumber = null, \Minioak\Royalmail\Shipping\Structs\DigitalAddress $electronicAddress = null)
    {
        $this
            ->setName($name)
            ->setComplementaryName($complementaryName)
            ->setTelephoneNumber($telephoneNumber)
            ->setElectronicAddress($electronicAddress);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Minioak\Royalmail\Shipping\Structs\Contact
     */
    public function setName($name = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($name) && strlen($name) > 1) || (is_array($name) && count($name) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($name) ? strlen($name) : count($name)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get complementaryName value
     * @return string|null
     */
    public function getComplementaryName()
    {
        return $this->complementaryName;
    }
    /**
     * Set complementaryName value
     * @param string $complementaryName
     * @return \Minioak\Royalmail\Shipping\Structs\Contact
     */
    public function setComplementaryName($complementaryName = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($complementaryName) && strlen($complementaryName) > 1) || (is_array($complementaryName) && count($complementaryName) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($complementaryName) ? strlen($complementaryName) : count($complementaryName)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($complementaryName) && !is_string($complementaryName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($complementaryName)), __LINE__);
        }
        $this->complementaryName = $complementaryName;
        return $this;
    }
    /**
     * Get telephoneNumber value
     * @return \Minioak\Royalmail\Shipping\Structs\TelephoneNumber|null
     */
    public function getTelephoneNumber()
    {
        return $this->telephoneNumber;
    }
    /**
     * Set telephoneNumber value
     * @param \Minioak\Royalmail\Shipping\Structs\TelephoneNumber $telephoneNumber
     * @return \Minioak\Royalmail\Shipping\Structs\Contact
     */
    public function setTelephoneNumber(\Minioak\Royalmail\Shipping\Structs\TelephoneNumber $telephoneNumber = null)
    {
        $this->telephoneNumber = $telephoneNumber;
        return $this;
    }
    /**
     * Get electronicAddress value
     * @return \Minioak\Royalmail\Shipping\Structs\DigitalAddress|null
     */
    public function getElectronicAddress()
    {
        return $this->electronicAddress;
    }
    /**
     * Set electronicAddress value
     * @param \Minioak\Royalmail\Shipping\Structs\DigitalAddress $electronicAddress
     * @return \Minioak\Royalmail\Shipping\Structs\Contact
     */
    public function setElectronicAddress(\Minioak\Royalmail\Shipping\Structs\DigitalAddress $electronicAddress = null)
    {
        $this->electronicAddress = $electronicAddress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\Contact
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
