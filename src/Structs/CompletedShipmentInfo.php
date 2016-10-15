<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for completedShipmentInfo Structs
 * Meta informations extracted from the WSDL
 * - documentation: schema to hold details of the response to created shipments
 * @subpackage Structs
 */
class CompletedShipmentInfo extends AbstractStructBase
{
    /**
     * The status
     * @var \Minioak\Royalmail\Shipping\Structs\Status
     */
    public $status;
    /**
     * The allCompletedShipments
     * @var \Minioak\Royalmail\Shipping\Structs\AllCompletedShipments
     */
    public $allCompletedShipments;
    /**
     * The requestedShipment
     * @var \Minioak\Royalmail\Shipping\Structs\RequestedShipment
     */
    public $requestedShipment;
    /**
     * Constructor method for completedShipmentInfo
     * @uses CompletedShipmentInfo::setStatus()
     * @uses CompletedShipmentInfo::setAllCompletedShipments()
     * @uses CompletedShipmentInfo::setRequestedShipment()
     * @param \Minioak\Royalmail\Shipping\Structs\Status $status
     * @param \Minioak\Royalmail\Shipping\Structs\AllCompletedShipments $allCompletedShipments
     * @param \Minioak\Royalmail\Shipping\Structs\RequestedShipment $requestedShipment
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\Status $status = null, \Minioak\Royalmail\Shipping\Structs\AllCompletedShipments $allCompletedShipments = null, \Minioak\Royalmail\Shipping\Structs\RequestedShipment $requestedShipment = null)
    {
        $this
            ->setStatus($status)
            ->setAllCompletedShipments($allCompletedShipments)
            ->setRequestedShipment($requestedShipment);
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
     * @return \Minioak\Royalmail\Shipping\Structs\CompletedShipmentInfo
     */
    public function setStatus(\Minioak\Royalmail\Shipping\Structs\Status $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get allCompletedShipments value
     * @return \Minioak\Royalmail\Shipping\Structs\AllCompletedShipments|null
     */
    public function getAllCompletedShipments()
    {
        return $this->allCompletedShipments;
    }
    /**
     * Set allCompletedShipments value
     * @param \Minioak\Royalmail\Shipping\Structs\AllCompletedShipments $allCompletedShipments
     * @return \Minioak\Royalmail\Shipping\Structs\CompletedShipmentInfo
     */
    public function setAllCompletedShipments(\Minioak\Royalmail\Shipping\Structs\AllCompletedShipments $allCompletedShipments = null)
    {
        $this->allCompletedShipments = $allCompletedShipments;
        return $this;
    }
    /**
     * Get requestedShipment value
     * @return \Minioak\Royalmail\Shipping\Structs\RequestedShipment|null
     */
    public function getRequestedShipment()
    {
        return $this->requestedShipment;
    }
    /**
     * Set requestedShipment value
     * @param \Minioak\Royalmail\Shipping\Structs\RequestedShipment $requestedShipment
     * @return \Minioak\Royalmail\Shipping\Structs\CompletedShipmentInfo
     */
    public function setRequestedShipment(\Minioak\Royalmail\Shipping\Structs\RequestedShipment $requestedShipment = null)
    {
        $this->requestedShipment = $requestedShipment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\CompletedShipmentInfo
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
