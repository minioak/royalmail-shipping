<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for nameSuffixType Structs
 * Meta informations extracted from the WSDL
 * - documentation: Defines the suffix of a name i.e. Jnr, Esq etc.
 * - type: rd:nameSuffixType
 * @subpackage Structs
 */
class NameSuffixType extends AbstractStructBase
{
    /**
     * The nameSuffixCode
     * Meta informations extracted from the WSDL
     * - documentation: Defines the suffix of a name i.e. Jnr, Esq etc.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $nameSuffixCode;
    /**
     * Constructor method for nameSuffixType
     * @uses NameSuffixType::setNameSuffixCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $nameSuffixCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $nameSuffixCode = null)
    {
        $this
            ->setNameSuffixCode($nameSuffixCode);
    }
    /**
     * Get nameSuffixCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getNameSuffixCode()
    {
        return $this->nameSuffixCode;
    }
    /**
     * Set nameSuffixCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $nameSuffixCode
     * @return \Minioak\Royalmail\Shipping\Structs\NameSuffixType
     */
    public function setNameSuffixCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $nameSuffixCode = null)
    {
        $this->nameSuffixCode = $nameSuffixCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\NameSuffixType
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
