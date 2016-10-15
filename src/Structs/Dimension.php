<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dimension Structs
 * Meta informations extracted from the WSDL
 * - documentation: A dimension is a measure of spatial extent. It is a physical property, such as mass, length, time, or a combination thereof, regarded as a fundamental measure or as one of a set of fundamental measures of a physical quantity.
 * - type: com:dimension
 * @subpackage Structs
 */
class Dimension extends AbstractStructBase
{
    /**
     * The unitOfMeasure
     * Meta informations extracted from the WSDL
     * - documentation: A unit of measure is the reference value to select the type of dimension being referenced. Sample values could be weight, length, height, depth, etc.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\UnitOfMeasureType
     */
    public $unitOfMeasure;
    /**
     * The value
     * Meta informations extracted from the WSDL
     * - documentation: The number that designates the quantity of the dimension. i.e. 5 centimeters. | A float describes a data type for representing an approximation to real numbers in a way that can support a wide range of values. The numbers are, in
     * general, represented approximately to a fixed number of significant digits (the mantissa) and scaled using an exponent. The base for the scaling is normally 2, 10 or 16.For example, the numbers 5.5, 0.001, and -2,345.6789 are floating point numbers.
     * - maxOccurs: 1
     * - minOccurs: 1
     * - base: xs:float
     * @var float
     */
    public $value;
    /**
     * Constructor method for dimension
     * @uses Dimension::setUnitOfMeasure()
     * @uses Dimension::setValue()
     * @param \Minioak\Royalmail\Shipping\Structs\UnitOfMeasureType $unitOfMeasure
     * @param float $value
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\UnitOfMeasureType $unitOfMeasure = null, $value = null)
    {
        $this
            ->setUnitOfMeasure($unitOfMeasure)
            ->setValue($value);
    }
    /**
     * Get unitOfMeasure value
     * @return \Minioak\Royalmail\Shipping\Structs\UnitOfMeasureType
     */
    public function getUnitOfMeasure()
    {
        return $this->unitOfMeasure;
    }
    /**
     * Set unitOfMeasure value
     * @param \Minioak\Royalmail\Shipping\Structs\UnitOfMeasureType $unitOfMeasure
     * @return \Minioak\Royalmail\Shipping\Structs\Dimension
     */
    public function setUnitOfMeasure(\Minioak\Royalmail\Shipping\Structs\UnitOfMeasureType $unitOfMeasure = null)
    {
        $this->unitOfMeasure = $unitOfMeasure;
        return $this;
    }
    /**
     * Get value value
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param float $value
     * @return \Minioak\Royalmail\Shipping\Structs\Dimension
     */
    public function setValue($value = null)
    {
        $this->value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\Dimension
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
