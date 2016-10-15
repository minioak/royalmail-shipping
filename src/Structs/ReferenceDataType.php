<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for referenceDataType Structs
 * Meta informations extracted from the WSDL
 * - documentation: The reference data class gives a common structure which will be adopted for all generic reference data. Reference data tends to be 'Qualifier' data (referenced in the data standards document on Sharepoint). For example the expression
 * Product Short Name; 'Short' in this instance is the qualifier and could have a corresponding set of reference values that could be used.
 * - type: rd:referenceDataType
 * @subpackage Structs
 */
class ReferenceDataType extends AbstractStructBase
{
    /**
     * The identifier
     * Meta informations extracted from the WSDL
     * - documentation: ~Unique identifier for a Reference Data instance. | An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric
     * characters.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $identifier;
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - documentation: The code is used as an identifier to recognize or establish a particular person or thing. It is used to verify the identity of the bearer of an identity. | An identifier is a sub-type of string which serves as a means of
     * identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $code;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - documentation: Name assorted with the code i.e. Name - United States for Code - US. | A long name is a sub-type of string and is word or a combination of words by which an organization, place, or thing, a body or class, or any object of thought is
     * designated, called, or known. | Simple set of alphanumeric characters.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $name;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - documentation: A description or the reference data item. | A description is a sub-type of string and is statement in words that gives an account or descriptive representation of a thing. Descriptions are only editable via an admin function and are
     * for display and information purposes only for end users. | Simple set of alphanumeric characters.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 256 | 4000
     * - base: xs:string
     * @var string
     */
    public $description;
    /**
     * Constructor method for referenceDataType
     * @uses ReferenceDataType::setIdentifier()
     * @uses ReferenceDataType::setCode()
     * @uses ReferenceDataType::setName()
     * @uses ReferenceDataType::setDescription()
     * @param string $identifier
     * @param string $code
     * @param string $name
     * @param string $description
     */
    public function __construct($identifier = null, $code = null, $name = null, $description = null)
    {
        $this
            ->setIdentifier($identifier)
            ->setCode($code)
            ->setName($name)
            ->setDescription($description);
    }
    /**
     * Get identifier value
     * @return string|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }
    /**
     * Set identifier value
     * @param string $identifier
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function setIdentifier($identifier = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($identifier) && strlen($identifier) > 1) || (is_array($identifier) && count($identifier) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($identifier) ? strlen($identifier) : count($identifier)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($identifier) && !is_string($identifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($identifier)), __LINE__);
        }
        $this->identifier = $identifier;
        return $this;
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function setCode($code = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($code) && strlen($code) > 1) || (is_array($code) && count($code) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($code) ? strlen($code) : count($code)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function setName($name = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($name) && strlen($name) > 1) || (is_array($name) && count($name) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($name) ? strlen($name) : count($name)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($description) && strlen($description) > 1) || (is_array($description) && count($description) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($description) ? strlen($description) : count($description)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
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
