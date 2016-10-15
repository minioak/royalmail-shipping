<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for audit Structs
 * Meta informations extracted from the WSDL
 * - documentation: The audit class is appended to all business and reference data constructs to ensure a standard way of capturing key data to track back users who have made changes to the data.
 * - type: com:audit
 * @subpackage Structs
 */
class Audit extends AbstractStructBase
{
    /**
     * The lastUpdateDate
     * Meta informations extracted from the WSDL
     * - documentation: The date the data was late updated. | dateTime represents a period in time which could be a particular month, day, and year at which some event happened or will happen but also includes a breakdown of time using hours, minutes,
     * seconds and milliseconds. A dateTime stamp is a common use for this data type so that a precise record of an event can be captured.
     * - maxOccurs: 1
     * - minOccurs: 1
     * - base: xs:dateTime
     * @var string
     */
    public $lastUpdateDate;
    /**
     * The lastUpdateUserIdentifier
     * Meta informations extracted from the WSDL
     * - documentation: The last update user ID represents the user identifier for the last person who updated the record. | An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be
     * associated with a name. | Simple set of alphanumeric characters.
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $lastUpdateUserIdentifier;
    /**
     * Constructor method for audit
     * @uses Audit::setLastUpdateDate()
     * @uses Audit::setLastUpdateUserIdentifier()
     * @param string $lastUpdateDate
     * @param string $lastUpdateUserIdentifier
     */
    public function __construct($lastUpdateDate = null, $lastUpdateUserIdentifier = null)
    {
        $this
            ->setLastUpdateDate($lastUpdateDate)
            ->setLastUpdateUserIdentifier($lastUpdateUserIdentifier);
    }
    /**
     * Get lastUpdateDate value
     * @return string
     */
    public function getLastUpdateDate()
    {
        return $this->lastUpdateDate;
    }
    /**
     * Set lastUpdateDate value
     * @param string $lastUpdateDate
     * @return \Minioak\Royalmail\Shipping\Structs\Audit
     */
    public function setLastUpdateDate($lastUpdateDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastUpdateDate) && !is_string($lastUpdateDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastUpdateDate)), __LINE__);
        }
        $this->lastUpdateDate = $lastUpdateDate;
        return $this;
    }
    /**
     * Get lastUpdateUserIdentifier value
     * @return string
     */
    public function getLastUpdateUserIdentifier()
    {
        return $this->lastUpdateUserIdentifier;
    }
    /**
     * Set lastUpdateUserIdentifier value
     * @param string $lastUpdateUserIdentifier
     * @return \Minioak\Royalmail\Shipping\Structs\Audit
     */
    public function setLastUpdateUserIdentifier($lastUpdateUserIdentifier = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($lastUpdateUserIdentifier) && strlen($lastUpdateUserIdentifier) > 1) || (is_array($lastUpdateUserIdentifier) && count($lastUpdateUserIdentifier) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($lastUpdateUserIdentifier) ? strlen($lastUpdateUserIdentifier) : count($lastUpdateUserIdentifier)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($lastUpdateUserIdentifier) && !is_string($lastUpdateUserIdentifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastUpdateUserIdentifier)), __LINE__);
        }
        $this->lastUpdateUserIdentifier = $lastUpdateUserIdentifier;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\Audit
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
