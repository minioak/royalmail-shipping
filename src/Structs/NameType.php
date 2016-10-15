<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for nameType Structs
 * Meta informations extracted from the WSDL
 * - documentation: Defines the type of name in terms of being Primary, Alias or Nickname
 * - type: rd:nameType
 * @subpackage Structs
 */
class NameType extends AbstractStructBase
{
    /**
     * The nameCode
     * Meta informations extracted from the WSDL
     * - documentation: Defines the type of name in terms of being Primary, Alias or Nickname
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $nameCode;
    /**
     * Constructor method for nameType
     * @uses NameType::setNameCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $nameCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $nameCode = null)
    {
        $this
            ->setNameCode($nameCode);
    }
    /**
     * Get nameCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getNameCode()
    {
        return $this->nameCode;
    }
    /**
     * Set nameCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $nameCode
     * @return \Minioak\Royalmail\Shipping\Structs\NameType
     */
    public function setNameCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $nameCode = null)
    {
        $this->nameCode = $nameCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\NameType
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
