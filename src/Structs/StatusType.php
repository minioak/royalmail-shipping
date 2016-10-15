<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for statusType Structs
 * Meta informations extracted from the WSDL
 * - documentation: This is the state of an entity (i.e. it is active, approved, draft, inactive, etc). The sequence of states an entity passes through define the entity life history.
 * - type: rd:statusType
 * @subpackage Structs
 */
class StatusType extends AbstractStructBase
{
    /**
     * The statusCode
     * Meta informations extracted from the WSDL
     * - documentation: This is the state of an entity (i.e. it is active, approved, draft, inactive, etc). The sequence of states an entity passes through define the entity life history.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $statusCode;
    /**
     * Constructor method for statusType
     * @uses StatusType::setStatusCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $statusCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $statusCode = null)
    {
        $this
            ->setStatusCode($statusCode);
    }
    /**
     * Get statusCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }
    /**
     * Set statusCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $statusCode
     * @return \Minioak\Royalmail\Shipping\Structs\StatusType
     */
    public function setStatusCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $statusCode = null)
    {
        $this->statusCode = $statusCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\StatusType
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
