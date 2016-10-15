<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for mailItemFormatType Structs
 * Meta informations extracted from the WSDL
 * - documentation: The format (RM Letters or International) of the Mail Item.
 * - type: rd:mailItemFormatType
 * @subpackage Structs
 */
class MailItemFormatType extends AbstractStructBase
{
    /**
     * The mailItemFormatCode
     * Meta informations extracted from the WSDL
     * - documentation: The format (RM Letters or International) of the Mail Item.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $mailItemFormatCode;
    /**
     * Constructor method for mailItemFormatType
     * @uses MailItemFormatType::setMailItemFormatCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $mailItemFormatCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $mailItemFormatCode = null)
    {
        $this
            ->setMailItemFormatCode($mailItemFormatCode);
    }
    /**
     * Get mailItemFormatCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getMailItemFormatCode()
    {
        return $this->mailItemFormatCode;
    }
    /**
     * Set mailItemFormatCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $mailItemFormatCode
     * @return \Minioak\Royalmail\Shipping\Structs\MailItemFormatType
     */
    public function setMailItemFormatCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $mailItemFormatCode = null)
    {
        $this->mailItemFormatCode = $mailItemFormatCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\MailItemFormatType
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
