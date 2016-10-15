<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cancelShipmentResponse Structs
 * Meta informations extracted from the WSDL
 * - documentation: response to request to cancel one or more shipments | schema to hold request details for cancelShipmentResponse operation
 * - type: ns:cancelShipmentResponse
 * @subpackage Structs
 */
class CancelShipmentResponse extends AbstractStructBase
{
    /**
     * The integrationHeader
     * @var \Minioak\Royalmail\Shipping\Structs\IntegrationHeader
     */
    public $integrationHeader;
    /**
     * The completedCancelInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\CompletedCancelInfo
     */
    public $completedCancelInfo;
    /**
     * The integrationFooter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\IntegrationFooter
     */
    public $integrationFooter;
    /**
     * Constructor method for cancelShipmentResponse
     * @uses CancelShipmentResponse::setIntegrationHeader()
     * @uses CancelShipmentResponse::setCompletedCancelInfo()
     * @uses CancelShipmentResponse::setIntegrationFooter()
     * @param \Minioak\Royalmail\Shipping\Structs\IntegrationHeader $integrationHeader
     * @param \Minioak\Royalmail\Shipping\Structs\CompletedCancelInfo $completedCancelInfo
     * @param \Minioak\Royalmail\Shipping\Structs\IntegrationFooter $integrationFooter
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\IntegrationHeader $integrationHeader = null, \Minioak\Royalmail\Shipping\Structs\CompletedCancelInfo $completedCancelInfo = null, \Minioak\Royalmail\Shipping\Structs\IntegrationFooter $integrationFooter = null)
    {
        $this
            ->setIntegrationHeader($integrationHeader)
            ->setCompletedCancelInfo($completedCancelInfo)
            ->setIntegrationFooter($integrationFooter);
    }
    /**
     * Get integrationHeader value
     * @return \Minioak\Royalmail\Shipping\Structs\IntegrationHeader|null
     */
    public function getIntegrationHeader()
    {
        return $this->integrationHeader;
    }
    /**
     * Set integrationHeader value
     * @param \Minioak\Royalmail\Shipping\Structs\IntegrationHeader $integrationHeader
     * @return \Minioak\Royalmail\Shipping\Structs\CancelShipmentResponse
     */
    public function setIntegrationHeader(\Minioak\Royalmail\Shipping\Structs\IntegrationHeader $integrationHeader = null)
    {
        $this->integrationHeader = $integrationHeader;
        return $this;
    }
    /**
     * Get completedCancelInfo value
     * @return \Minioak\Royalmail\Shipping\Structs\CompletedCancelInfo|null
     */
    public function getCompletedCancelInfo()
    {
        return $this->completedCancelInfo;
    }
    /**
     * Set completedCancelInfo value
     * @param \Minioak\Royalmail\Shipping\Structs\CompletedCancelInfo $completedCancelInfo
     * @return \Minioak\Royalmail\Shipping\Structs\CancelShipmentResponse
     */
    public function setCompletedCancelInfo(\Minioak\Royalmail\Shipping\Structs\CompletedCancelInfo $completedCancelInfo = null)
    {
        $this->completedCancelInfo = $completedCancelInfo;
        return $this;
    }
    /**
     * Get integrationFooter value
     * @return \Minioak\Royalmail\Shipping\Structs\IntegrationFooter|null
     */
    public function getIntegrationFooter()
    {
        return $this->integrationFooter;
    }
    /**
     * Set integrationFooter value
     * @param \Minioak\Royalmail\Shipping\Structs\IntegrationFooter $integrationFooter
     * @return \Minioak\Royalmail\Shipping\Structs\CancelShipmentResponse
     */
    public function setIntegrationFooter(\Minioak\Royalmail\Shipping\Structs\IntegrationFooter $integrationFooter = null)
    {
        $this->integrationFooter = $integrationFooter;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\CancelShipmentResponse
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
