<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for systemCrossReference Structs
 * Meta informations extracted from the WSDL
 * - documentation: This class is used to manage cross reference keys between systems. For example an entity will be known by one identifier in the source system and have another in the target system so these keys are used so that the target system can
 * identify the appropriate entity within its own system.
 * - type: com:systemCrossReference
 * @subpackage Structs
 */
class SystemCrossReference extends AbstractStructBase
{
    /**
     * The sourceSystemCode
     * Meta informations extracted from the WSDL
     * - documentation: The source identifier can be an acronym or number used to identify it. The system catalogue is a frequently used number to identify systems within RMG.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\SystemNameType
     */
    public $sourceSystemCode;
    /**
     * The sourceCrossReferenceAttribute
     * Meta informations extracted from the WSDL
     * - documentation: The name of the attribute of a source system cross referenced to the target system. | A name is a sub-type of string and is word or a combination of words by which a person, place, or thing, a body or class, or any object of thought
     * is designated, called, or known. | Simple set of alphanumeric characters.
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 64 | 4000
     * - base: xs:string
     * @var string
     */
    public $sourceCrossReferenceAttribute;
    /**
     * The sourceCrossReferenceValue
     * Meta informations extracted from the WSDL
     * - documentation: The value of a source system attribute cross referenced to the target system value. | Simple set of alphanumeric characters.
     * - maxOccurs: 1
     * - minOccurs: 1
     * - base: xs:string
     * - maxLength: 4000
     * @var string
     */
    public $sourceCrossReferenceValue;
    /**
     * The targetSystemCode
     * Meta informations extracted from the WSDL
     * - documentation: The target source system name is the commonly used name for a system and will be more business oriented than a numerical identifier. An example would the Traffic and Revenue Reporting System.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\SystemNameType
     */
    public $targetSystemCode;
    /**
     * The targetCrossReferenceAttribute
     * Meta informations extracted from the WSDL
     * - documentation: The name of a target system attribute cross referenced to the source system. | A name is a sub-type of string and is word or a combination of words by which a person, place, or thing, a body or class, or any object of thought is
     * designated, called, or known. | Simple set of alphanumeric characters.
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 64 | 4000
     * - base: xs:string
     * @var string
     */
    public $targetCrossReferenceAttribute;
    /**
     * The targetCrossReferenceValue
     * Meta informations extracted from the WSDL
     * - documentation: The value of a target system attribute cross referenced to the source system value. | Simple set of alphanumeric characters.
     * - maxOccurs: 1
     * - minOccurs: 1
     * - base: xs:string
     * - maxLength: 4000
     * @var string
     */
    public $targetCrossReferenceValue;
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
     * Constructor method for systemCrossReference
     * @uses SystemCrossReference::setSourceSystemCode()
     * @uses SystemCrossReference::setSourceCrossReferenceAttribute()
     * @uses SystemCrossReference::setSourceCrossReferenceValue()
     * @uses SystemCrossReference::setTargetSystemCode()
     * @uses SystemCrossReference::setTargetCrossReferenceAttribute()
     * @uses SystemCrossReference::setTargetCrossReferenceValue()
     * @uses SystemCrossReference::setStatus()
     * @uses SystemCrossReference::setAudit()
     * @param \Minioak\Royalmail\Shipping\Structs\SystemNameType $sourceSystemCode
     * @param string $sourceCrossReferenceAttribute
     * @param string $sourceCrossReferenceValue
     * @param \Minioak\Royalmail\Shipping\Structs\SystemNameType $targetSystemCode
     * @param string $targetCrossReferenceAttribute
     * @param string $targetCrossReferenceValue
     * @param \Minioak\Royalmail\Shipping\Structs\Status $status
     * @param \Minioak\Royalmail\Shipping\Structs\Audit $audit
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\SystemNameType $sourceSystemCode = null, $sourceCrossReferenceAttribute = null, $sourceCrossReferenceValue = null, \Minioak\Royalmail\Shipping\Structs\SystemNameType $targetSystemCode = null, $targetCrossReferenceAttribute = null, $targetCrossReferenceValue = null, \Minioak\Royalmail\Shipping\Structs\Status $status = null, \Minioak\Royalmail\Shipping\Structs\Audit $audit = null)
    {
        $this
            ->setSourceSystemCode($sourceSystemCode)
            ->setSourceCrossReferenceAttribute($sourceCrossReferenceAttribute)
            ->setSourceCrossReferenceValue($sourceCrossReferenceValue)
            ->setTargetSystemCode($targetSystemCode)
            ->setTargetCrossReferenceAttribute($targetCrossReferenceAttribute)
            ->setTargetCrossReferenceValue($targetCrossReferenceValue)
            ->setStatus($status)
            ->setAudit($audit);
    }
    /**
     * Get sourceSystemCode value
     * @return \Minioak\Royalmail\Shipping\Structs\SystemNameType
     */
    public function getSourceSystemCode()
    {
        return $this->sourceSystemCode;
    }
    /**
     * Set sourceSystemCode value
     * @param \Minioak\Royalmail\Shipping\Structs\SystemNameType $sourceSystemCode
     * @return \Minioak\Royalmail\Shipping\Structs\SystemCrossReference
     */
    public function setSourceSystemCode(\Minioak\Royalmail\Shipping\Structs\SystemNameType $sourceSystemCode = null)
    {
        $this->sourceSystemCode = $sourceSystemCode;
        return $this;
    }
    /**
     * Get sourceCrossReferenceAttribute value
     * @return string
     */
    public function getSourceCrossReferenceAttribute()
    {
        return $this->sourceCrossReferenceAttribute;
    }
    /**
     * Set sourceCrossReferenceAttribute value
     * @param string $sourceCrossReferenceAttribute
     * @return \Minioak\Royalmail\Shipping\Structs\SystemCrossReference
     */
    public function setSourceCrossReferenceAttribute($sourceCrossReferenceAttribute = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($sourceCrossReferenceAttribute) && strlen($sourceCrossReferenceAttribute) > 1) || (is_array($sourceCrossReferenceAttribute) && count($sourceCrossReferenceAttribute) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($sourceCrossReferenceAttribute) ? strlen($sourceCrossReferenceAttribute) : count($sourceCrossReferenceAttribute)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($sourceCrossReferenceAttribute) && !is_string($sourceCrossReferenceAttribute)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sourceCrossReferenceAttribute)), __LINE__);
        }
        $this->sourceCrossReferenceAttribute = $sourceCrossReferenceAttribute;
        return $this;
    }
    /**
     * Get sourceCrossReferenceValue value
     * @return string
     */
    public function getSourceCrossReferenceValue()
    {
        return $this->sourceCrossReferenceValue;
    }
    /**
     * Set sourceCrossReferenceValue value
     * @param string $sourceCrossReferenceValue
     * @return \Minioak\Royalmail\Shipping\Structs\SystemCrossReference
     */
    public function setSourceCrossReferenceValue($sourceCrossReferenceValue = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($sourceCrossReferenceValue) && strlen($sourceCrossReferenceValue) > 4000) || (is_array($sourceCrossReferenceValue) && count($sourceCrossReferenceValue) > 4000)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 4000 element(s) or a scalar of 4000 character(s) at most, "%d" length given', is_scalar($sourceCrossReferenceValue) ? strlen($sourceCrossReferenceValue) : count($sourceCrossReferenceValue)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($sourceCrossReferenceValue) && !is_string($sourceCrossReferenceValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sourceCrossReferenceValue)), __LINE__);
        }
        $this->sourceCrossReferenceValue = $sourceCrossReferenceValue;
        return $this;
    }
    /**
     * Get targetSystemCode value
     * @return \Minioak\Royalmail\Shipping\Structs\SystemNameType
     */
    public function getTargetSystemCode()
    {
        return $this->targetSystemCode;
    }
    /**
     * Set targetSystemCode value
     * @param \Minioak\Royalmail\Shipping\Structs\SystemNameType $targetSystemCode
     * @return \Minioak\Royalmail\Shipping\Structs\SystemCrossReference
     */
    public function setTargetSystemCode(\Minioak\Royalmail\Shipping\Structs\SystemNameType $targetSystemCode = null)
    {
        $this->targetSystemCode = $targetSystemCode;
        return $this;
    }
    /**
     * Get targetCrossReferenceAttribute value
     * @return string
     */
    public function getTargetCrossReferenceAttribute()
    {
        return $this->targetCrossReferenceAttribute;
    }
    /**
     * Set targetCrossReferenceAttribute value
     * @param string $targetCrossReferenceAttribute
     * @return \Minioak\Royalmail\Shipping\Structs\SystemCrossReference
     */
    public function setTargetCrossReferenceAttribute($targetCrossReferenceAttribute = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($targetCrossReferenceAttribute) && strlen($targetCrossReferenceAttribute) > 1) || (is_array($targetCrossReferenceAttribute) && count($targetCrossReferenceAttribute) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($targetCrossReferenceAttribute) ? strlen($targetCrossReferenceAttribute) : count($targetCrossReferenceAttribute)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($targetCrossReferenceAttribute) && !is_string($targetCrossReferenceAttribute)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($targetCrossReferenceAttribute)), __LINE__);
        }
        $this->targetCrossReferenceAttribute = $targetCrossReferenceAttribute;
        return $this;
    }
    /**
     * Get targetCrossReferenceValue value
     * @return string
     */
    public function getTargetCrossReferenceValue()
    {
        return $this->targetCrossReferenceValue;
    }
    /**
     * Set targetCrossReferenceValue value
     * @param string $targetCrossReferenceValue
     * @return \Minioak\Royalmail\Shipping\Structs\SystemCrossReference
     */
    public function setTargetCrossReferenceValue($targetCrossReferenceValue = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($targetCrossReferenceValue) && strlen($targetCrossReferenceValue) > 4000) || (is_array($targetCrossReferenceValue) && count($targetCrossReferenceValue) > 4000)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 4000 element(s) or a scalar of 4000 character(s) at most, "%d" length given', is_scalar($targetCrossReferenceValue) ? strlen($targetCrossReferenceValue) : count($targetCrossReferenceValue)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($targetCrossReferenceValue) && !is_string($targetCrossReferenceValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($targetCrossReferenceValue)), __LINE__);
        }
        $this->targetCrossReferenceValue = $targetCrossReferenceValue;
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
     * @return \Minioak\Royalmail\Shipping\Structs\SystemCrossReference
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
     * @return \Minioak\Royalmail\Shipping\Structs\SystemCrossReference
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
     * @return \Minioak\Royalmail\Shipping\Structs\SystemCrossReference
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
