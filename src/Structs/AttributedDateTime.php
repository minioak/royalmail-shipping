<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttributedDateTime Structs
 * Meta informations extracted from the WSDL
 * - documentation: This type is for elements whose [children] is a psuedo-dateTime and can have arbitrary attributes. | Simple set of alphanumeric characters.
 * - base: xs:string
 * - maxLength: 4000
 * @subpackage Structs
 */
class AttributedDateTime extends AbstractStructBase
{
    /**
     * The _
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - documentation: Simple set of alphanumeric characters.
     * - maxLength: 4000
     * @var string
     */
    public $_;
    /**
     * The Id
     * @var string
     */
    public $Id;
    /**
     * Constructor method for AttributedDateTime
     * @uses AttributedDateTime::set_()
     * @uses AttributedDateTime::setId()
     * @param string $_
     * @param string $id
     */
    public function __construct($_ = null, $id = null)
    {
        $this
            ->set_($_)
            ->setId($id);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Minioak\Royalmail\Shipping\Structs\AttributedDateTime
     */
    public function set_($_ = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($_) && strlen($_) > 4000) || (is_array($_) && count($_) > 4000)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 4000 element(s) or a scalar of 4000 character(s) at most, "%d" length given', is_scalar($_) ? strlen($_) : count($_)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
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
     * @return \Minioak\Royalmail\Shipping\Structs\AttributedDateTime
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
     * @return \Minioak\Royalmail\Shipping\Structs\AttributedDateTime
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
