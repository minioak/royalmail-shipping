<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for mailClassType Structs
 * Meta informations extracted from the WSDL
 * - documentation: Reference data identifying the class of mail service.
 * - type: rd:mailClassType
 * @subpackage Structs
 */
class MailClassType extends AbstractStructBase
{
    /**
     * The mailClassCode
     * Meta informations extracted from the WSDL
     * - documentation: Reference data identifying the class of mail service.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $mailClassCode;
    /**
     * Constructor method for mailClassType
     * @uses MailClassType::setMailClassCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $mailClassCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $mailClassCode = null)
    {
        $this
            ->setMailClassCode($mailClassCode);
    }
    /**
     * Get mailClassCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getMailClassCode()
    {
        return $this->mailClassCode;
    }
    /**
     * Set mailClassCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $mailClassCode
     * @return \Minioak\Royalmail\Shipping\Structs\MailClassType
     */
    public function setMailClassCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $mailClassCode = null)
    {
        $this->mailClassCode = $mailClassCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\MailClassType
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
