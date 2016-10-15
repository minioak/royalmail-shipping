<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createShipmentResponse Structs
 * Meta informations extracted from the WSDL
 * - documentation: response to creating a domestic shipment
 * - type: ns:createShipmentResponse
 * @subpackage Structs
 */
class CreateShipmentResponse extends AbstractStructBase
{
    /**
     * The integrationHeader
     * @var \Minioak\Royalmail\Shipping\Structs\IntegrationHeader
     */
    public $integrationHeader;
    /**
     * The completedShipmentInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\CompletedShipmentInfo
     */
    public $completedShipmentInfo;
    /**
     * The integrationFooter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\IntegrationFooter
     */
    public $integrationFooter;
    /**
     * Constructor method for createShipmentResponse
     * @uses CreateShipmentResponse::setIntegrationHeader()
     * @uses CreateShipmentResponse::setCompletedShipmentInfo()
     * @uses CreateShipmentResponse::setIntegrationFooter()
     * @param \Minioak\Royalmail\Shipping\Structs\IntegrationHeader $integrationHeader
     * @param \Minioak\Royalmail\Shipping\Structs\CompletedShipmentInfo $completedShipmentInfo
     * @param \Minioak\Royalmail\Shipping\Structs\IntegrationFooter $integrationFooter
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\IntegrationHeader $integrationHeader = null, \Minioak\Royalmail\Shipping\Structs\CompletedShipmentInfo $completedShipmentInfo = null, \Minioak\Royalmail\Shipping\Structs\IntegrationFooter $integrationFooter = null)
    {
        $this
            ->setIntegrationHeader($integrationHeader)
            ->setCompletedShipmentInfo($completedShipmentInfo)
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
     * @return \Minioak\Royalmail\Shipping\Structs\CreateShipmentResponse
     */
    public function setIntegrationHeader(\Minioak\Royalmail\Shipping\Structs\IntegrationHeader $integrationHeader = null)
    {
        $this->integrationHeader = $integrationHeader;
        return $this;
    }
    /**
     * Get completedShipmentInfo value
     * @return \Minioak\Royalmail\Shipping\Structs\CompletedShipmentInfo|null
     */
    public function getCompletedShipmentInfo()
    {
        return $this->completedShipmentInfo;
    }
    /**
     * Set completedShipmentInfo value
     * @param \Minioak\Royalmail\Shipping\Structs\CompletedShipmentInfo $completedShipmentInfo
     * @return \Minioak\Royalmail\Shipping\Structs\CreateShipmentResponse
     */
    public function setCompletedShipmentInfo(\Minioak\Royalmail\Shipping\Structs\CompletedShipmentInfo $completedShipmentInfo = null)
    {
        $this->completedShipmentInfo = $completedShipmentInfo;
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
     * @return \Minioak\Royalmail\Shipping\Structs\CreateShipmentResponse
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
     * @return \Minioak\Royalmail\Shipping\Structs\CreateShipmentResponse
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
