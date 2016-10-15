<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for detail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Element used to hold SOAP fault details
 * @subpackage Structs
 */
class Detail extends AbstractStructBase
{
    /**
     * The exceptionDetails
     * @var \Minioak\Royalmail\Shipping\Structs\ExceptionDetails
     */
    public $exceptionDetails;
    /**
     * Constructor method for detail
     * @uses Detail::setExceptionDetails()
     * @param \Minioak\Royalmail\Shipping\Structs\ExceptionDetails $exceptionDetails
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ExceptionDetails $exceptionDetails = null)
    {
        $this
            ->setExceptionDetails($exceptionDetails);
    }
    /**
     * Get exceptionDetails value
     * @return \Minioak\Royalmail\Shipping\Structs\ExceptionDetails|null
     */
    public function getExceptionDetails()
    {
        return $this->exceptionDetails;
    }
    /**
     * Set exceptionDetails value
     * @param \Minioak\Royalmail\Shipping\Structs\ExceptionDetails $exceptionDetails
     * @return \Minioak\Royalmail\Shipping\Structs\Detail
     */
    public function setExceptionDetails(\Minioak\Royalmail\Shipping\Structs\ExceptionDetails $exceptionDetails = null)
    {
        $this->exceptionDetails = $exceptionDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\Detail
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
