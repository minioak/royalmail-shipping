<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for contactMechanism Structs
 * Meta informations extracted from the WSDL
 * - documentation: The Contact Mechanism object contains the methods and usage for contacting a Party.
 * - type: com:contactMechanism
 * @subpackage Structs
 */
class ContactMechanism extends AbstractStructBase
{
    /**
     * The contactMechanismIdentifier
     * Meta informations extracted from the WSDL
     * - documentation: Contact mechanism unique identifier | An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $contactMechanismIdentifier;
    /**
     * The contactMethod
     * Meta informations extracted from the WSDL
     * - documentation: Contact method unique identifier in the MDM system
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\ContactMethodType
     */
    public $contactMethod;
    /**
     * The contactUsage
     * Meta informations extracted from the WSDL
     * - documentation: Defines Contact usage i.e. • 1000000 – UNKNOWN• 1000001 – NOT APPLICABLE• 1000002 – BUSINESS
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\ContactUsageType
     */
    public $contactUsage;
    /**
     * The audit
     * Meta informations extracted from the WSDL
     * - documentation: The audit type is appended to all business data constructs to ensure a standard way of capturing key data to track back users who have made changes to the data.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\Audit
     */
    public $audit;
    /**
     * Constructor method for contactMechanism
     * @uses ContactMechanism::setContactMechanismIdentifier()
     * @uses ContactMechanism::setContactMethod()
     * @uses ContactMechanism::setContactUsage()
     * @uses ContactMechanism::setAudit()
     * @param string $contactMechanismIdentifier
     * @param \Minioak\Royalmail\Shipping\Structs\ContactMethodType $contactMethod
     * @param \Minioak\Royalmail\Shipping\Structs\ContactUsageType $contactUsage
     * @param \Minioak\Royalmail\Shipping\Structs\Audit $audit
     */
    public function __construct($contactMechanismIdentifier = null, \Minioak\Royalmail\Shipping\Structs\ContactMethodType $contactMethod = null, \Minioak\Royalmail\Shipping\Structs\ContactUsageType $contactUsage = null, \Minioak\Royalmail\Shipping\Structs\Audit $audit = null)
    {
        $this
            ->setContactMechanismIdentifier($contactMechanismIdentifier)
            ->setContactMethod($contactMethod)
            ->setContactUsage($contactUsage)
            ->setAudit($audit);
    }
    /**
     * Get contactMechanismIdentifier value
     * @return string|null
     */
    public function getContactMechanismIdentifier()
    {
        return $this->contactMechanismIdentifier;
    }
    /**
     * Set contactMechanismIdentifier value
     * @param string $contactMechanismIdentifier
     * @return \Minioak\Royalmail\Shipping\Structs\ContactMechanism
     */
    public function setContactMechanismIdentifier($contactMechanismIdentifier = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($contactMechanismIdentifier) && strlen($contactMechanismIdentifier) > 1) || (is_array($contactMechanismIdentifier) && count($contactMechanismIdentifier) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($contactMechanismIdentifier) ? strlen($contactMechanismIdentifier) : count($contactMechanismIdentifier)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($contactMechanismIdentifier) && !is_string($contactMechanismIdentifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactMechanismIdentifier)), __LINE__);
        }
        $this->contactMechanismIdentifier = $contactMechanismIdentifier;
        return $this;
    }
    /**
     * Get contactMethod value
     * @return \Minioak\Royalmail\Shipping\Structs\ContactMethodType|null
     */
    public function getContactMethod()
    {
        return $this->contactMethod;
    }
    /**
     * Set contactMethod value
     * @param \Minioak\Royalmail\Shipping\Structs\ContactMethodType $contactMethod
     * @return \Minioak\Royalmail\Shipping\Structs\ContactMechanism
     */
    public function setContactMethod(\Minioak\Royalmail\Shipping\Structs\ContactMethodType $contactMethod = null)
    {
        $this->contactMethod = $contactMethod;
        return $this;
    }
    /**
     * Get contactUsage value
     * @return \Minioak\Royalmail\Shipping\Structs\ContactUsageType|null
     */
    public function getContactUsage()
    {
        return $this->contactUsage;
    }
    /**
     * Set contactUsage value
     * @param \Minioak\Royalmail\Shipping\Structs\ContactUsageType $contactUsage
     * @return \Minioak\Royalmail\Shipping\Structs\ContactMechanism
     */
    public function setContactUsage(\Minioak\Royalmail\Shipping\Structs\ContactUsageType $contactUsage = null)
    {
        $this->contactUsage = $contactUsage;
        return $this;
    }
    /**
     * Get audit value
     * @return \Minioak\Royalmail\Shipping\Structs\Audit|null
     */
    public function getAudit()
    {
        return $this->audit;
    }
    /**
     * Set audit value
     * @param \Minioak\Royalmail\Shipping\Structs\Audit $audit
     * @return \Minioak\Royalmail\Shipping\Structs\ContactMechanism
     */
    public function setAudit(\Minioak\Royalmail\Shipping\Structs\Audit $audit = null)
    {
        $this->audit = $audit;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\ContactMechanism
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
