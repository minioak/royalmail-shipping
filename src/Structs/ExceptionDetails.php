<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for exceptionDetails Structs
 * Meta informations extracted from the WSDL
 * - documentation: schema to hold exceptions responses | Used to hold the RMG defined data elements associated with the SOAP fault
 * - type: soapext:exceptionDetails
 * @subpackage Structs
 */
class ExceptionDetails extends AbstractStructBase
{
    /**
     * The exceptionTransactionId
     * Meta informations extracted from the WSDL
     * - documentation: Id preserved throughout the lifespan of the transaction, unique when combined with the applicationId and intermediaryId (if applicable). | An identifier is a sub-type of string which serves as a means of identification for a
     * particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 50 | 128 | 4000
     * - minLength: 1
     * - pattern: [a-zA-Z0-9/\-]*
     * - whiteSpace: preserve
     * - base: xs:string
     * @var string
     */
    public $exceptionTransactionId;
    /**
     * The exceptionCode
     * Meta informations extracted from the WSDL
     * - documentation: Code associated with the error condition in the form ENNNN | An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of
     * alphanumeric characters.
     * - pattern: [E]{1}[0-9]{4}
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $exceptionCode;
    /**
     * The exceptionText
     * Meta informations extracted from the WSDL
     * - documentation: A description is a sub-type of string and is statement in words that gives an account or descriptive representation of a thing. Descriptions are only editable via an admin function and are for display and information purposes only
     * for end users. | Simple set of alphanumeric characters.
     * - maxLength: 256 | 4000
     * - base: xs:string
     * @var string
     */
    public $exceptionText;
    /**
     * Constructor method for exceptionDetails
     * @uses ExceptionDetails::setExceptionTransactionId()
     * @uses ExceptionDetails::setExceptionCode()
     * @uses ExceptionDetails::setExceptionText()
     * @param string $exceptionTransactionId
     * @param string $exceptionCode
     * @param string $exceptionText
     */
    public function __construct($exceptionTransactionId = null, $exceptionCode = null, $exceptionText = null)
    {
        $this
            ->setExceptionTransactionId($exceptionTransactionId)
            ->setExceptionCode($exceptionCode)
            ->setExceptionText($exceptionText);
    }
    /**
     * Get exceptionTransactionId value
     * @return string|null
     */
    public function getExceptionTransactionId()
    {
        return $this->exceptionTransactionId;
    }
    /**
     * Set exceptionTransactionId value
     * @param string $exceptionTransactionId
     * @return \Minioak\Royalmail\Shipping\Structs\ExceptionDetails
     */
    public function setExceptionTransactionId($exceptionTransactionId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($exceptionTransactionId) && strlen($exceptionTransactionId) > 1) || (is_array($exceptionTransactionId) && count($exceptionTransactionId) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($exceptionTransactionId) ? strlen($exceptionTransactionId) : count($exceptionTransactionId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($exceptionTransactionId) && strlen($exceptionTransactionId) < 1) || (is_array($exceptionTransactionId) && count($exceptionTransactionId) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($exceptionTransactionId) && !preg_match('/[a-zA-Z0-9/\-]*/', $exceptionTransactionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[a-zA-Z0-9/\-]*", "%s" given', var_export($exceptionTransactionId, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($exceptionTransactionId) && !is_string($exceptionTransactionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($exceptionTransactionId)), __LINE__);
        }
        $this->exceptionTransactionId = $exceptionTransactionId;
        return $this;
    }
    /**
     * Get exceptionCode value
     * @return string|null
     */
    public function getExceptionCode()
    {
        return $this->exceptionCode;
    }
    /**
     * Set exceptionCode value
     * @param string $exceptionCode
     * @return \Minioak\Royalmail\Shipping\Structs\ExceptionDetails
     */
    public function setExceptionCode($exceptionCode = null)
    {
        // validation for constraint: pattern
        if (is_scalar($exceptionCode) && !preg_match('/[E]{1}[0-9]{4}/', $exceptionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[E]{1}[0-9]{4}", "%s" given', var_export($exceptionCode, true)), __LINE__);
        }
        // validation for constraint: maxLength
        if ((is_scalar($exceptionCode) && strlen($exceptionCode) > 1) || (is_array($exceptionCode) && count($exceptionCode) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($exceptionCode) ? strlen($exceptionCode) : count($exceptionCode)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($exceptionCode) && !is_string($exceptionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($exceptionCode)), __LINE__);
        }
        $this->exceptionCode = $exceptionCode;
        return $this;
    }
    /**
     * Get exceptionText value
     * @return string|null
     */
    public function getExceptionText()
    {
        return $this->exceptionText;
    }
    /**
     * Set exceptionText value
     * @param string $exceptionText
     * @return \Minioak\Royalmail\Shipping\Structs\ExceptionDetails
     */
    public function setExceptionText($exceptionText = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($exceptionText) && strlen($exceptionText) > 1) || (is_array($exceptionText) && count($exceptionText) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($exceptionText) ? strlen($exceptionText) : count($exceptionText)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($exceptionText) && !is_string($exceptionText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($exceptionText)), __LINE__);
        }
        $this->exceptionText = $exceptionText;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\ExceptionDetails
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
