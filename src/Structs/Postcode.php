<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for postcode Structs
 * Meta informations extracted from the WSDL
 * - documentation: A geospatial categorization of a geographical area.
 * - type: com:postcode
 * @subpackage Structs
 */
class Postcode extends AbstractStructBase
{
    /**
     * The postcodeIdentifier
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for a postcode | An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $postcodeIdentifier;
    /**
     * The postcode
     * Meta informations extracted from the WSDL
     * - documentation: A code created to abbreviate a series of postal addresses, that share location affinity, in order to facilitate mail collection, processing and delivery. | An identifier is a sub-type of string which serves as a means of
     * identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $postcode;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - documentation: This is the state of the entity (i.e. it is active, approved, draft, inactive, etc).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\Status
     */
    public $status;
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
     * Constructor method for postcode
     * @uses Postcode::setPostcodeIdentifier()
     * @uses Postcode::setPostcode()
     * @uses Postcode::setStatus()
     * @uses Postcode::setAudit()
     * @param string $postcodeIdentifier
     * @param string $postcode
     * @param \Minioak\Royalmail\Shipping\Structs\Status $status
     * @param \Minioak\Royalmail\Shipping\Structs\Audit $audit
     */
    public function __construct($postcodeIdentifier = null, $postcode = null, \Minioak\Royalmail\Shipping\Structs\Status $status = null, \Minioak\Royalmail\Shipping\Structs\Audit $audit = null)
    {
        $this
            ->setPostcodeIdentifier($postcodeIdentifier)
            ->setPostcode($postcode)
            ->setStatus($status)
            ->setAudit($audit);
    }
    /**
     * Get postcodeIdentifier value
     * @return string|null
     */
    public function getPostcodeIdentifier()
    {
        return $this->postcodeIdentifier;
    }
    /**
     * Set postcodeIdentifier value
     * @param string $postcodeIdentifier
     * @return \Minioak\Royalmail\Shipping\Structs\Postcode
     */
    public function setPostcodeIdentifier($postcodeIdentifier = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($postcodeIdentifier) && strlen($postcodeIdentifier) > 1) || (is_array($postcodeIdentifier) && count($postcodeIdentifier) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($postcodeIdentifier) ? strlen($postcodeIdentifier) : count($postcodeIdentifier)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($postcodeIdentifier) && !is_string($postcodeIdentifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postcodeIdentifier)), __LINE__);
        }
        $this->postcodeIdentifier = $postcodeIdentifier;
        return $this;
    }
    /**
     * Get postcode value
     * @return string|null
     */
    public function getPostcode()
    {
        return $this->postcode;
    }
    /**
     * Set postcode value
     * @param string $postcode
     * @return \Minioak\Royalmail\Shipping\Structs\Postcode
     */
    public function setPostcode($postcode = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($postcode) && strlen($postcode) > 1) || (is_array($postcode) && count($postcode) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($postcode) ? strlen($postcode) : count($postcode)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($postcode) && !is_string($postcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postcode)), __LINE__);
        }
        $this->postcode = $postcode;
        return $this;
    }
    /**
     * Get status value
     * @return \Minioak\Royalmail\Shipping\Structs\Status|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param \Minioak\Royalmail\Shipping\Structs\Status $status
     * @return \Minioak\Royalmail\Shipping\Structs\Postcode
     */
    public function setStatus(\Minioak\Royalmail\Shipping\Structs\Status $status = null)
    {
        $this->status = $status;
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
     * @return \Minioak\Royalmail\Shipping\Structs\Postcode
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
     * @return \Minioak\Royalmail\Shipping\Structs\Postcode
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
