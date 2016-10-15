<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for barcode1DRange Structs
 * Meta informations extracted from the WSDL
 * - documentation: schema to hold start and end 1D barcode range
 * @subpackage Structs
 */
class Barcode1DRange extends AbstractStructBase
{
    /**
     * The barcode1DRangeStart
     * Meta informations extracted from the WSDL
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $barcode1DRangeStart;
    /**
     * The barcode1DRangeEnd
     * Meta informations extracted from the WSDL
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $barcode1DRangeEnd;
    /**
     * Constructor method for barcode1DRange
     * @uses Barcode1DRange::setBarcode1DRangeStart()
     * @uses Barcode1DRange::setBarcode1DRangeEnd()
     * @param string $barcode1DRangeStart
     * @param string $barcode1DRangeEnd
     */
    public function __construct($barcode1DRangeStart = null, $barcode1DRangeEnd = null)
    {
        $this
            ->setBarcode1DRangeStart($barcode1DRangeStart)
            ->setBarcode1DRangeEnd($barcode1DRangeEnd);
    }
    /**
     * Get barcode1DRangeStart value
     * @return string|null
     */
    public function getBarcode1DRangeStart()
    {
        return $this->barcode1DRangeStart;
    }
    /**
     * Set barcode1DRangeStart value
     * @param string $barcode1DRangeStart
     * @return \Minioak\Royalmail\Shipping\Structs\Barcode1DRange
     */
    public function setBarcode1DRangeStart($barcode1DRangeStart = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($barcode1DRangeStart) && strlen($barcode1DRangeStart) > 1) || (is_array($barcode1DRangeStart) && count($barcode1DRangeStart) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($barcode1DRangeStart) ? strlen($barcode1DRangeStart) : count($barcode1DRangeStart)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($barcode1DRangeStart) && !is_string($barcode1DRangeStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($barcode1DRangeStart)), __LINE__);
        }
        $this->barcode1DRangeStart = $barcode1DRangeStart;
        return $this;
    }
    /**
     * Get barcode1DRangeEnd value
     * @return string|null
     */
    public function getBarcode1DRangeEnd()
    {
        return $this->barcode1DRangeEnd;
    }
    /**
     * Set barcode1DRangeEnd value
     * @param string $barcode1DRangeEnd
     * @return \Minioak\Royalmail\Shipping\Structs\Barcode1DRange
     */
    public function setBarcode1DRangeEnd($barcode1DRangeEnd = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($barcode1DRangeEnd) && strlen($barcode1DRangeEnd) > 1) || (is_array($barcode1DRangeEnd) && count($barcode1DRangeEnd) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($barcode1DRangeEnd) ? strlen($barcode1DRangeEnd) : count($barcode1DRangeEnd)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($barcode1DRangeEnd) && !is_string($barcode1DRangeEnd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($barcode1DRangeEnd)), __LINE__);
        }
        $this->barcode1DRangeEnd = $barcode1DRangeEnd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\Barcode1DRange
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
