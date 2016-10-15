<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for postageSizeType Structs
 * Meta informations extracted from the WSDL
 * - documentation: Defines the different sizes of letters or parcels
 * - type: rd:postageSizeType
 * @subpackage Structs
 */
class PostageSizeType extends AbstractStructBase
{
    /**
     * The postageSizeCode
     * Meta informations extracted from the WSDL
     * - documentation: Defines the different sizes of letters and parcels
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $postageSizeCode;
    /**
     * Constructor method for postageSizeType
     * @uses PostageSizeType::setPostageSizeCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $postageSizeCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $postageSizeCode = null)
    {
        $this
            ->setPostageSizeCode($postageSizeCode);
    }
    /**
     * Get postageSizeCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getPostageSizeCode()
    {
        return $this->postageSizeCode;
    }
    /**
     * Set postageSizeCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $postageSizeCode
     * @return \Minioak\Royalmail\Shipping\Structs\PostageSizeType
     */
    public function setPostageSizeCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $postageSizeCode = null)
    {
        $this->postageSizeCode = $postageSizeCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\PostageSizeType
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
