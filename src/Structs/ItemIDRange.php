<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for itemIDRange Structs
 * Meta informations extracted from the WSDL
 * - documentation: schema to hold start and end itemID range
 * @subpackage Structs
 */
class ItemIDRange extends AbstractStructBase
{
    /**
     * The itemIDRangeStart
     * Meta informations extracted from the WSDL
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $itemIDRangeStart;
    /**
     * The itemIDRangeEnd
     * Meta informations extracted from the WSDL
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $itemIDRangeEnd;
    /**
     * Constructor method for itemIDRange
     * @uses ItemIDRange::setItemIDRangeStart()
     * @uses ItemIDRange::setItemIDRangeEnd()
     * @param string $itemIDRangeStart
     * @param string $itemIDRangeEnd
     */
    public function __construct($itemIDRangeStart = null, $itemIDRangeEnd = null)
    {
        $this
            ->setItemIDRangeStart($itemIDRangeStart)
            ->setItemIDRangeEnd($itemIDRangeEnd);
    }
    /**
     * Get itemIDRangeStart value
     * @return string|null
     */
    public function getItemIDRangeStart()
    {
        return $this->itemIDRangeStart;
    }
    /**
     * Set itemIDRangeStart value
     * @param string $itemIDRangeStart
     * @return \Minioak\Royalmail\Shipping\Structs\ItemIDRange
     */
    public function setItemIDRangeStart($itemIDRangeStart = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($itemIDRangeStart) && strlen($itemIDRangeStart) > 1) || (is_array($itemIDRangeStart) && count($itemIDRangeStart) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($itemIDRangeStart) ? strlen($itemIDRangeStart) : count($itemIDRangeStart)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($itemIDRangeStart) && !is_string($itemIDRangeStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemIDRangeStart)), __LINE__);
        }
        $this->itemIDRangeStart = $itemIDRangeStart;
        return $this;
    }
    /**
     * Get itemIDRangeEnd value
     * @return string|null
     */
    public function getItemIDRangeEnd()
    {
        return $this->itemIDRangeEnd;
    }
    /**
     * Set itemIDRangeEnd value
     * @param string $itemIDRangeEnd
     * @return \Minioak\Royalmail\Shipping\Structs\ItemIDRange
     */
    public function setItemIDRangeEnd($itemIDRangeEnd = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($itemIDRangeEnd) && strlen($itemIDRangeEnd) > 1) || (is_array($itemIDRangeEnd) && count($itemIDRangeEnd) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($itemIDRangeEnd) ? strlen($itemIDRangeEnd) : count($itemIDRangeEnd)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($itemIDRangeEnd) && !is_string($itemIDRangeEnd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemIDRangeEnd)), __LINE__);
        }
        $this->itemIDRangeEnd = $itemIDRangeEnd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\ItemIDRange
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
