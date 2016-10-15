<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for unitOfMeasureType Structs
 * Meta informations extracted from the WSDL
 * - documentation: A unitOfMeasure represents is a definite magnitude of a physical quantity, defined and adopted by convention or by law, that is used as a standard for measurement of the same physical quantity. Any other value of the physical
 * quantity can be expressed as a simple multiple of the unit of measure. For example, length is a physical quantity. The metre is a unit of length that represents a definite predetermined length. When we say 10 metres, we actually mean 10 times the
 * definite predetermined length called “metre”.
 * - type: rd:unitOfMeasureType
 * @subpackage Structs
 */
class UnitOfMeasureType extends AbstractStructBase
{
    /**
     * The unitOfMeasureCode
     * Meta informations extracted from the WSDL
     * - documentation: A unitOfMeasure represents is a definite magnitude of a physical quantity, defined and adopted by convention or by law, that is used as a standard for measurement of the same physical quantity. Any other value of the physical
     * quantity can be expressed as a simple multiple of the unit of measure. For example, length is a physical quantity. The metre is a unit of length that represents a definite predetermined length. When we say 10 metres, we actually mean 10 times the
     * definite predetermined length called “metre”.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $unitOfMeasureCode;
    /**
     * Constructor method for unitOfMeasureType
     * @uses UnitOfMeasureType::setUnitOfMeasureCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $unitOfMeasureCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $unitOfMeasureCode = null)
    {
        $this
            ->setUnitOfMeasureCode($unitOfMeasureCode);
    }
    /**
     * Get unitOfMeasureCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getUnitOfMeasureCode()
    {
        return $this->unitOfMeasureCode;
    }
    /**
     * Set unitOfMeasureCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $unitOfMeasureCode
     * @return \Minioak\Royalmail\Shipping\Structs\UnitOfMeasureType
     */
    public function setUnitOfMeasureCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $unitOfMeasureCode = null)
    {
        $this->unitOfMeasureCode = $unitOfMeasureCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\UnitOfMeasureType
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
