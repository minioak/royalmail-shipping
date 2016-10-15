<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for completedCancelInfo Structs
 * Meta informations extracted from the WSDL
 * - documentation: schema to hold array of cancelled shipments
 * @subpackage Structs
 */
class CompletedCancelInfo extends AbstractStructBase
{
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\Status
     */
    public $status;
    /**
     * The completedCancelShipments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\CompletedCancelShipments
     */
    public $completedCancelShipments;
    /**
     * Constructor method for completedCancelInfo
     * @uses CompletedCancelInfo::setStatus()
     * @uses CompletedCancelInfo::setCompletedCancelShipments()
     * @param \Minioak\Royalmail\Shipping\Structs\Status $status
     * @param \Minioak\Royalmail\Shipping\Structs\CompletedCancelShipments $completedCancelShipments
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\Status $status = null, \Minioak\Royalmail\Shipping\Structs\CompletedCancelShipments $completedCancelShipments = null)
    {
        $this
            ->setStatus($status)
            ->setCompletedCancelShipments($completedCancelShipments);
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
     * @return \Minioak\Royalmail\Shipping\Structs\CompletedCancelInfo
     */
    public function setStatus(\Minioak\Royalmail\Shipping\Structs\Status $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get completedCancelShipments value
     * @return \Minioak\Royalmail\Shipping\Structs\CompletedCancelShipments|null
     */
    public function getCompletedCancelShipments()
    {
        return $this->completedCancelShipments;
    }
    /**
     * Set completedCancelShipments value
     * @param \Minioak\Royalmail\Shipping\Structs\CompletedCancelShipments $completedCancelShipments
     * @return \Minioak\Royalmail\Shipping\Structs\CompletedCancelInfo
     */
    public function setCompletedCancelShipments(\Minioak\Royalmail\Shipping\Structs\CompletedCancelShipments $completedCancelShipments = null)
    {
        $this->completedCancelShipments = $completedCancelShipments;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\CompletedCancelInfo
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
