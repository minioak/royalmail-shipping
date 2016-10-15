<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for titleType Structs
 * Meta informations extracted from the WSDL
 * - documentation: Defines the prefix of a name
 * - type: rd:titleType
 * @subpackage Structs
 */
class TitleType extends AbstractStructBase
{
    /**
     * The titleCode
     * Meta informations extracted from the WSDL
     * - documentation: Defines the prefix of a name
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $titleCode;
    /**
     * Constructor method for titleType
     * @uses TitleType::setTitleCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $titleCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $titleCode = null)
    {
        $this
            ->setTitleCode($titleCode);
    }
    /**
     * Get titleCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getTitleCode()
    {
        return $this->titleCode;
    }
    /**
     * Set titleCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $titleCode
     * @return \Minioak\Royalmail\Shipping\Structs\TitleType
     */
    public function setTitleCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $titleCode = null)
    {
        $this->titleCode = $titleCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\TitleType
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
