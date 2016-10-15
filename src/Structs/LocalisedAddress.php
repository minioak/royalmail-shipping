<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for localisedAddress Structs
 * Meta informations extracted from the WSDL
 * - documentation: schema to hold native address and contact details for non-English countries
 * @subpackage Structs
 */
class LocalisedAddress extends AbstractStructBase
{
    /**
     * The recipientContact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\Contact
     */
    public $recipientContact;
    /**
     * The recipientAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\Address
     */
    public $recipientAddress;
    /**
     * Constructor method for localisedAddress
     * @uses LocalisedAddress::setRecipientContact()
     * @uses LocalisedAddress::setRecipientAddress()
     * @param \Minioak\Royalmail\Shipping\Structs\Contact $recipientContact
     * @param \Minioak\Royalmail\Shipping\Structs\Address $recipientAddress
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\Contact $recipientContact = null, \Minioak\Royalmail\Shipping\Structs\Address $recipientAddress = null)
    {
        $this
            ->setRecipientContact($recipientContact)
            ->setRecipientAddress($recipientAddress);
    }
    /**
     * Get recipientContact value
     * @return \Minioak\Royalmail\Shipping\Structs\Contact|null
     */
    public function getRecipientContact()
    {
        return $this->recipientContact;
    }
    /**
     * Set recipientContact value
     * @param \Minioak\Royalmail\Shipping\Structs\Contact $recipientContact
     * @return \Minioak\Royalmail\Shipping\Structs\LocalisedAddress
     */
    public function setRecipientContact(\Minioak\Royalmail\Shipping\Structs\Contact $recipientContact = null)
    {
        $this->recipientContact = $recipientContact;
        return $this;
    }
    /**
     * Get recipientAddress value
     * @return \Minioak\Royalmail\Shipping\Structs\Address|null
     */
    public function getRecipientAddress()
    {
        return $this->recipientAddress;
    }
    /**
     * Set recipientAddress value
     * @param \Minioak\Royalmail\Shipping\Structs\Address $recipientAddress
     * @return \Minioak\Royalmail\Shipping\Structs\LocalisedAddress
     */
    public function setRecipientAddress(\Minioak\Royalmail\Shipping\Structs\Address $recipientAddress = null)
    {
        $this->recipientAddress = $recipientAddress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\LocalisedAddress
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
