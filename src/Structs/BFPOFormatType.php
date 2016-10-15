<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for bFPOFormatType Structs
 * Meta informations extracted from the WSDL
 * - documentation: Reference data identifying the format of British Forces Posting Overseas Mail Items
 * - type: rd:bFPOFormatType
 * @subpackage Structs
 */
class BFPOFormatType extends AbstractStructBase
{
    /**
     * The bFPOFormatCode
     * Meta informations extracted from the WSDL
     * - documentation: Reference data identifying the Format of British Forces Posting Overseas Mail Items
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $bFPOFormatCode;
    /**
     * Constructor method for bFPOFormatType
     * @uses BFPOFormatType::setBFPOFormatCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $bFPOFormatCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $bFPOFormatCode = null)
    {
        $this
            ->setBFPOFormatCode($bFPOFormatCode);
    }
    /**
     * Get bFPOFormatCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getBFPOFormatCode()
    {
        return $this->bFPOFormatCode;
    }
    /**
     * Set bFPOFormatCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $bFPOFormatCode
     * @return \Minioak\Royalmail\Shipping\Structs\BFPOFormatType
     */
    public function setBFPOFormatCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $bFPOFormatCode = null)
    {
        $this->bFPOFormatCode = $bFPOFormatCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\BFPOFormatType
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
