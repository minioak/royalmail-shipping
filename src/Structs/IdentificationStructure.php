<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for identificationStructure Structs
 * @subpackage Structs
 */
class IdentificationStructure extends AbstractStructBase
{
    /**
     * The endUserId
     * Meta informations extracted from the WSDL
     * - documentation: User ID associated with the end user of the internal or external organisation | An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. |
     * Simple set of alphanumeric characters.
     * - minOccurs: 0
     * - nillable: false
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $endUserId;
    /**
     * The applicationId
     * Meta informations extracted from the WSDL
     * - documentation: The ID of the Service Requester system calling the service, unique when combined with the transactionId. | For a request, this is the ID of the Service Requester calling the service, unique when combined with the TransactionId. For
     * the response, this is the ID of the Service Provider, unique when combined with the TransactionId. | An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name.
     * | Simple set of alphanumeric characters.
     * - maxLength: 50 | 128 | 4000
     * - minLength: 1
     * - pattern: [a-zA-Z0-9/\-]*
     * - whiteSpace: preserve
     * - base: xs:string
     * @var string
     */
    public $applicationId;
    /**
     * The intermediaryId
     * Meta informations extracted from the WSDL
     * - documentation: Id associated with the Intermediary application (if applicable). | For a request, this is the ID of the Service Requester calling the service, unique when combined with the TransactionId. For the response, this is the ID of the
     * Service Provider, unique when combined with the TransactionId. | An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric
     * characters.
     * - minOccurs: 0
     * - nillable: false
     * - maxLength: 50 | 128 | 4000
     * - minLength: 1
     * - pattern: [a-zA-Z0-9/\-]*
     * - whiteSpace: preserve
     * - base: xs:string
     * @var string
     */
    public $intermediaryId;
    /**
     * The transactionId
     * Meta informations extracted from the WSDL
     * - documentation: Unique session id sent by the Service Requestor (for the request) or returned by the Service Provider (for the response) | Id preserved throughout the lifespan of the transaction, unique when combined with the applicationId and
     * intermediaryId (if applicable). | An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 50 | 128 | 4000
     * - minLength: 1
     * - pattern: [a-zA-Z0-9/\-]*
     * - whiteSpace: preserve
     * - base: xs:string
     * @var string
     */
    public $transactionId;
    /**
     * Constructor method for identificationStructure
     * @uses IdentificationStructure::setEndUserId()
     * @uses IdentificationStructure::setApplicationId()
     * @uses IdentificationStructure::setIntermediaryId()
     * @uses IdentificationStructure::setTransactionId()
     * @param string $endUserId
     * @param string $applicationId
     * @param string $intermediaryId
     * @param string $transactionId
     */
    public function __construct($endUserId = null, $applicationId = null, $intermediaryId = null, $transactionId = null)
    {
        $this
            ->setEndUserId($endUserId)
            ->setApplicationId($applicationId)
            ->setIntermediaryId($intermediaryId)
            ->setTransactionId($transactionId);
    }
    /**
     * Get endUserId value
     * @return string|null
     */
    public function getEndUserId()
    {
        return $this->endUserId;
    }
    /**
     * Set endUserId value
     * @param string $endUserId
     * @return \Minioak\Royalmail\Shipping\Structs\IdentificationStructure
     */
    public function setEndUserId($endUserId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($endUserId) && strlen($endUserId) > 1) || (is_array($endUserId) && count($endUserId) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($endUserId) ? strlen($endUserId) : count($endUserId)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($endUserId) && !is_string($endUserId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endUserId)), __LINE__);
        }
        $this->endUserId = $endUserId;
        return $this;
    }
    /**
     * Get applicationId value
     * @return string|null
     */
    public function getApplicationId()
    {
        return $this->applicationId;
    }
    /**
     * Set applicationId value
     * @param string $applicationId
     * @return \Minioak\Royalmail\Shipping\Structs\IdentificationStructure
     */
    public function setApplicationId($applicationId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($applicationId) && strlen($applicationId) > 1) || (is_array($applicationId) && count($applicationId) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($applicationId) ? strlen($applicationId) : count($applicationId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($applicationId) && strlen($applicationId) < 1) || (is_array($applicationId) && count($applicationId) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($applicationId) && !preg_match('/[a-zA-Z0-9/\-]*/', $applicationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[a-zA-Z0-9/\-]*", "%s" given', var_export($applicationId, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($applicationId) && !is_string($applicationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($applicationId)), __LINE__);
        }
        $this->applicationId = $applicationId;
        return $this;
    }
    /**
     * Get intermediaryId value
     * @return string|null
     */
    public function getIntermediaryId()
    {
        return $this->intermediaryId;
    }
    /**
     * Set intermediaryId value
     * @param string $intermediaryId
     * @return \Minioak\Royalmail\Shipping\Structs\IdentificationStructure
     */
    public function setIntermediaryId($intermediaryId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($intermediaryId) && strlen($intermediaryId) > 1) || (is_array($intermediaryId) && count($intermediaryId) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($intermediaryId) ? strlen($intermediaryId) : count($intermediaryId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($intermediaryId) && strlen($intermediaryId) < 1) || (is_array($intermediaryId) && count($intermediaryId) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($intermediaryId) && !preg_match('/[a-zA-Z0-9/\-]*/', $intermediaryId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[a-zA-Z0-9/\-]*", "%s" given', var_export($intermediaryId, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($intermediaryId) && !is_string($intermediaryId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($intermediaryId)), __LINE__);
        }
        $this->intermediaryId = $intermediaryId;
        return $this;
    }
    /**
     * Get transactionId value
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }
    /**
     * Set transactionId value
     * @param string $transactionId
     * @return \Minioak\Royalmail\Shipping\Structs\IdentificationStructure
     */
    public function setTransactionId($transactionId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($transactionId) && strlen($transactionId) > 1) || (is_array($transactionId) && count($transactionId) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($transactionId) ? strlen($transactionId) : count($transactionId)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($transactionId) && strlen($transactionId) < 1) || (is_array($transactionId) && count($transactionId) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($transactionId) && !preg_match('/[a-zA-Z0-9/\-]*/', $transactionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[a-zA-Z0-9/\-]*", "%s" given', var_export($transactionId, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($transactionId) && !is_string($transactionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionId)), __LINE__);
        }
        $this->transactionId = $transactionId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\IdentificationStructure
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
