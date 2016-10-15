<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for request2DItemIDRangeRequest Structs
 * Meta informations extracted from the WSDL
 * - documentation: request to obtain a range of 2D ItemIDs for use in 2D Matrix | schema to hold request details for request2DItemIDRangeRequest operation
 * - type: ns:request2DItemIDRangeRequest
 * @subpackage Structs
 */
class Request2DItemIDRangeRequest extends BaseRequest
{
    /**
     * Constructor method for request2DItemIDRangeRequest
     */
    public function __construct()
    {
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\Request2DItemIDRangeRequest
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
