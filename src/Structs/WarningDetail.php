<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for warningDetail Structs
 * @subpackage Structs
 */
class WarningDetail extends AbstractStructBase
{
    /**
     * The warningCode
     * Meta informations extracted from the WSDL
     * - documentation: Code associated with the warning | Code associated with the warning condition in the form WNNNN | An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated
     * with a name. | Simple set of alphanumeric characters.
     * - pattern: [W]{1}[0-9]{4}
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $warningCode;
    /**
     * The warningDescription
     * Meta informations extracted from the WSDL
     * - documentation: Description of the warning | A description is a sub-type of string and is statement in words that gives an account or descriptive representation of a thing. Descriptions are only editable via an admin function and are for display and
     * information purposes only for end users. | Simple set of alphanumeric characters.
     * - maxLength: 256 | 4000
     * - base: xs:string
     * @var string
     */
    public $warningDescription;
    /**
     * The warningCause
     * Meta informations extracted from the WSDL
     * - documentation: Cause of the warning (if known) | A description is a sub-type of string and is statement in words that gives an account or descriptive representation of a thing. Descriptions are only editable via an admin function and are for
     * display and information purposes only for end users. | Simple set of alphanumeric characters.
     * - minOccurs: 0
     * - maxLength: 256 | 4000
     * - base: xs:string
     * @var string
     */
    public $warningCause;
    /**
     * The warningResolution
     * Meta informations extracted from the WSDL
     * - documentation: Description of the resolution and action required to correct the warning | A description is a sub-type of string and is statement in words that gives an account or descriptive representation of a thing. Descriptions are only editable
     * via an admin function and are for display and information purposes only for end users. | Simple set of alphanumeric characters.
     * - minOccurs: 0
     * - maxLength: 256 | 4000
     * - base: xs:string
     * @var string
     */
    public $warningResolution;
    /**
     * The warningContext
     * Meta informations extracted from the WSDL
     * - documentation: Context of the warning, e.g. client or server | A description is a sub-type of string and is statement in words that gives an account or descriptive representation of a thing. Descriptions are only editable via an admin function and
     * are for display and information purposes only for end users. | Simple set of alphanumeric characters.
     * - minOccurs: 0
     * - nillable: true
     * - maxLength: 256 | 4000
     * - base: xs:string
     * @var string
     */
    public $warningContext;
    /**
     * Constructor method for warningDetail
     * @uses WarningDetail::setWarningCode()
     * @uses WarningDetail::setWarningDescription()
     * @uses WarningDetail::setWarningCause()
     * @uses WarningDetail::setWarningResolution()
     * @uses WarningDetail::setWarningContext()
     * @param string $warningCode
     * @param string $warningDescription
     * @param string $warningCause
     * @param string $warningResolution
     * @param string $warningContext
     */
    public function __construct($warningCode = null, $warningDescription = null, $warningCause = null, $warningResolution = null, $warningContext = null)
    {
        $this
            ->setWarningCode($warningCode)
            ->setWarningDescription($warningDescription)
            ->setWarningCause($warningCause)
            ->setWarningResolution($warningResolution)
            ->setWarningContext($warningContext);
    }
    /**
     * Get warningCode value
     * @return string|null
     */
    public function getWarningCode()
    {
        return $this->warningCode;
    }
    /**
     * Set warningCode value
     * @param string $warningCode
     * @return \Minioak\Royalmail\Shipping\Structs\WarningDetail
     */
    public function setWarningCode($warningCode = null)
    {
        // validation for constraint: pattern
        if (is_scalar($warningCode) && !preg_match('/[W]{1}[0-9]{4}/', $warningCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[W]{1}[0-9]{4}", "%s" given', var_export($warningCode, true)), __LINE__);
        }
        // validation for constraint: maxLength
        if ((is_scalar($warningCode) && strlen($warningCode) > 1) || (is_array($warningCode) && count($warningCode) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($warningCode) ? strlen($warningCode) : count($warningCode)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($warningCode) && !is_string($warningCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($warningCode)), __LINE__);
        }
        $this->warningCode = $warningCode;
        return $this;
    }
    /**
     * Get warningDescription value
     * @return string|null
     */
    public function getWarningDescription()
    {
        return $this->warningDescription;
    }
    /**
     * Set warningDescription value
     * @param string $warningDescription
     * @return \Minioak\Royalmail\Shipping\Structs\WarningDetail
     */
    public function setWarningDescription($warningDescription = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($warningDescription) && strlen($warningDescription) > 1) || (is_array($warningDescription) && count($warningDescription) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($warningDescription) ? strlen($warningDescription) : count($warningDescription)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($warningDescription) && !is_string($warningDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($warningDescription)), __LINE__);
        }
        $this->warningDescription = $warningDescription;
        return $this;
    }
    /**
     * Get warningCause value
     * @return string|null
     */
    public function getWarningCause()
    {
        return $this->warningCause;
    }
    /**
     * Set warningCause value
     * @param string $warningCause
     * @return \Minioak\Royalmail\Shipping\Structs\WarningDetail
     */
    public function setWarningCause($warningCause = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($warningCause) && strlen($warningCause) > 1) || (is_array($warningCause) && count($warningCause) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($warningCause) ? strlen($warningCause) : count($warningCause)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($warningCause) && !is_string($warningCause)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($warningCause)), __LINE__);
        }
        $this->warningCause = $warningCause;
        return $this;
    }
    /**
     * Get warningResolution value
     * @return string|null
     */
    public function getWarningResolution()
    {
        return $this->warningResolution;
    }
    /**
     * Set warningResolution value
     * @param string $warningResolution
     * @return \Minioak\Royalmail\Shipping\Structs\WarningDetail
     */
    public function setWarningResolution($warningResolution = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($warningResolution) && strlen($warningResolution) > 1) || (is_array($warningResolution) && count($warningResolution) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($warningResolution) ? strlen($warningResolution) : count($warningResolution)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($warningResolution) && !is_string($warningResolution)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($warningResolution)), __LINE__);
        }
        $this->warningResolution = $warningResolution;
        return $this;
    }
    /**
     * Get warningContext value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWarningContext()
    {
        return isset($this->warningContext) ? $this->warningContext : null;
    }
    /**
     * Set warningContext value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $warningContext
     * @return \Minioak\Royalmail\Shipping\Structs\WarningDetail
     */
    public function setWarningContext($warningContext = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($warningContext) && strlen($warningContext) > 1) || (is_array($warningContext) && count($warningContext) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($warningContext) ? strlen($warningContext) : count($warningContext)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($warningContext) && !is_string($warningContext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($warningContext)), __LINE__);
        }
        if (is_null($warningContext) || (is_array($warningContext) && empty($warningContext))) {
            unset($this->warningContext);
        } else {
            $this->warningContext = $warningContext;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\WarningDetail
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
