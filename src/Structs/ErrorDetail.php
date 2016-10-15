<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for errorDetail Structs
 * @subpackage Structs
 */
class ErrorDetail extends AbstractStructBase
{
    /**
     * The errorCode
     * Meta informations extracted from the WSDL
     * - documentation: Code associated with the error condition | Code associated with the error condition in the form ENNNN | An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be
     * associated with a name. | Simple set of alphanumeric characters.
     * - pattern: [E]{1}[0-9]{4}
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $errorCode;
    /**
     * The errorDescription
     * Meta informations extracted from the WSDL
     * - documentation: Description of the error condition | A description is a sub-type of string and is statement in words that gives an account or descriptive representation of a thing. Descriptions are only editable via an admin function and are for
     * display and information purposes only for end users. | Simple set of alphanumeric characters.
     * - maxLength: 256 | 4000
     * - base: xs:string
     * @var string
     */
    public $errorDescription;
    /**
     * The errorCause
     * Meta informations extracted from the WSDL
     * - documentation: Cause of the business error (if known) | A description is a sub-type of string and is statement in words that gives an account or descriptive representation of a thing. Descriptions are only editable via an admin function and are for
     * display and information purposes only for end users. | Simple set of alphanumeric characters.
     * - minOccurs: 0
     * - maxLength: 256 | 4000
     * - base: xs:string
     * @var string
     */
    public $errorCause;
    /**
     * The errorResolution
     * Meta informations extracted from the WSDL
     * - documentation: Description of the resolution and action required to correct the error | A description is a sub-type of string and is statement in words that gives an account or descriptive representation of a thing. Descriptions are only editable
     * via an admin function and are for display and information purposes only for end users. | Simple set of alphanumeric characters.
     * - minOccurs: 0
     * - maxLength: 256 | 4000
     * - base: xs:string
     * @var string
     */
    public $errorResolution;
    /**
     * The errorContext
     * Meta informations extracted from the WSDL
     * - documentation: Context of the business error, e.g. client or server | A description is a sub-type of string and is statement in words that gives an account or descriptive representation of a thing. Descriptions are only editable via an admin
     * function and are for display and information purposes only for end users. | Simple set of alphanumeric characters.
     * - minOccurs: 0
     * - nillable: true
     * - maxLength: 256 | 4000
     * - base: xs:string
     * @var string
     */
    public $errorContext;
    /**
     * Constructor method for errorDetail
     * @uses ErrorDetail::setErrorCode()
     * @uses ErrorDetail::setErrorDescription()
     * @uses ErrorDetail::setErrorCause()
     * @uses ErrorDetail::setErrorResolution()
     * @uses ErrorDetail::setErrorContext()
     * @param string $errorCode
     * @param string $errorDescription
     * @param string $errorCause
     * @param string $errorResolution
     * @param string $errorContext
     */
    public function __construct($errorCode = null, $errorDescription = null, $errorCause = null, $errorResolution = null, $errorContext = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorDescription($errorDescription)
            ->setErrorCause($errorCause)
            ->setErrorResolution($errorResolution)
            ->setErrorContext($errorContext);
    }
    /**
     * Get errorCode value
     * @return string|null
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param string $errorCode
     * @return \Minioak\Royalmail\Shipping\Structs\ErrorDetail
     */
    public function setErrorCode($errorCode = null)
    {
        // validation for constraint: pattern
        if (is_scalar($errorCode) && !preg_match('/[E]{1}[0-9]{4}/', $errorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[E]{1}[0-9]{4}", "%s" given', var_export($errorCode, true)), __LINE__);
        }
        // validation for constraint: maxLength
        if ((is_scalar($errorCode) && strlen($errorCode) > 1) || (is_array($errorCode) && count($errorCode) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($errorCode) ? strlen($errorCode) : count($errorCode)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($errorCode) && !is_string($errorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        return $this;
    }
    /**
     * Get errorDescription value
     * @return string|null
     */
    public function getErrorDescription()
    {
        return $this->errorDescription;
    }
    /**
     * Set errorDescription value
     * @param string $errorDescription
     * @return \Minioak\Royalmail\Shipping\Structs\ErrorDetail
     */
    public function setErrorDescription($errorDescription = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($errorDescription) && strlen($errorDescription) > 1) || (is_array($errorDescription) && count($errorDescription) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($errorDescription) ? strlen($errorDescription) : count($errorDescription)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($errorDescription) && !is_string($errorDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($errorDescription)), __LINE__);
        }
        $this->errorDescription = $errorDescription;
        return $this;
    }
    /**
     * Get errorCause value
     * @return string|null
     */
    public function getErrorCause()
    {
        return $this->errorCause;
    }
    /**
     * Set errorCause value
     * @param string $errorCause
     * @return \Minioak\Royalmail\Shipping\Structs\ErrorDetail
     */
    public function setErrorCause($errorCause = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($errorCause) && strlen($errorCause) > 1) || (is_array($errorCause) && count($errorCause) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($errorCause) ? strlen($errorCause) : count($errorCause)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($errorCause) && !is_string($errorCause)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($errorCause)), __LINE__);
        }
        $this->errorCause = $errorCause;
        return $this;
    }
    /**
     * Get errorResolution value
     * @return string|null
     */
    public function getErrorResolution()
    {
        return $this->errorResolution;
    }
    /**
     * Set errorResolution value
     * @param string $errorResolution
     * @return \Minioak\Royalmail\Shipping\Structs\ErrorDetail
     */
    public function setErrorResolution($errorResolution = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($errorResolution) && strlen($errorResolution) > 1) || (is_array($errorResolution) && count($errorResolution) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($errorResolution) ? strlen($errorResolution) : count($errorResolution)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($errorResolution) && !is_string($errorResolution)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($errorResolution)), __LINE__);
        }
        $this->errorResolution = $errorResolution;
        return $this;
    }
    /**
     * Get errorContext value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getErrorContext()
    {
        return isset($this->errorContext) ? $this->errorContext : null;
    }
    /**
     * Set errorContext value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $errorContext
     * @return \Minioak\Royalmail\Shipping\Structs\ErrorDetail
     */
    public function setErrorContext($errorContext = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($errorContext) && strlen($errorContext) > 1) || (is_array($errorContext) && count($errorContext) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($errorContext) ? strlen($errorContext) : count($errorContext)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($errorContext) && !is_string($errorContext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($errorContext)), __LINE__);
        }
        if (is_null($errorContext) || (is_array($errorContext) && empty($errorContext))) {
            unset($this->errorContext);
        } else {
            $this->errorContext = $errorContext;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\ErrorDetail
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
