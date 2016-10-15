<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for systemNameType Structs
 * Meta informations extracted from the WSDL
 * - documentation: The official RMG system name is the commonly used name for a system and will be more business oriented than a numerical identifier. An example would the Traffic and Revenue Reporting System.
 * - type: rd:systemNameType
 * @subpackage Structs
 */
class SystemNameType extends AbstractStructBase
{
    /**
     * The systemNameCode
     * Meta informations extracted from the WSDL
     * - documentation: The official RMG system name is the commonly used name for a system and will be more business oriented than a numerical identifier. An example would the Traffic and Revenue Reporting System.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $systemNameCode;
    /**
     * Constructor method for systemNameType
     * @uses SystemNameType::setSystemNameCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $systemNameCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $systemNameCode = null)
    {
        $this
            ->setSystemNameCode($systemNameCode);
    }
    /**
     * Get systemNameCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getSystemNameCode()
    {
        return $this->systemNameCode;
    }
    /**
     * Set systemNameCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $systemNameCode
     * @return \Minioak\Royalmail\Shipping\Structs\SystemNameType
     */
    public function setSystemNameCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $systemNameCode = null)
    {
        $this->systemNameCode = $systemNameCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\SystemNameType
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
