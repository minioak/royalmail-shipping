<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateShipmentResponse Structs
 * Meta informations extracted from the WSDL
 * - documentation: response to request to update details for a single shipment | schema to hold response details for updateShipment operation
 * - type: ns:updateShipmentResponse
 * @subpackage Structs
 */
class UpdateShipmentResponse extends AbstractStructBase
{
    /**
     * The integrationHeader
     * @var \Minioak\Royalmail\Shipping\Structs\IntegrationHeader
     */
    public $integrationHeader;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\Status
     */
    public $status;
    /**
     * The shipmentNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $shipmentNumber;
    /**
     * The requestedShipment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\RequestedShipment
     */
    public $requestedShipment;
    /**
     * The integrationFooter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\IntegrationFooter
     */
    public $integrationFooter;
    /**
     * Constructor method for updateShipmentResponse
     * @uses UpdateShipmentResponse::setIntegrationHeader()
     * @uses UpdateShipmentResponse::setStatus()
     * @uses UpdateShipmentResponse::setShipmentNumber()
     * @uses UpdateShipmentResponse::setRequestedShipment()
     * @uses UpdateShipmentResponse::setIntegrationFooter()
     * @param \Minioak\Royalmail\Shipping\Structs\IntegrationHeader $integrationHeader
     * @param \Minioak\Royalmail\Shipping\Structs\Status $status
     * @param string $shipmentNumber
     * @param \Minioak\Royalmail\Shipping\Structs\RequestedShipment $requestedShipment
     * @param \Minioak\Royalmail\Shipping\Structs\IntegrationFooter $integrationFooter
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\IntegrationHeader $integrationHeader = null, \Minioak\Royalmail\Shipping\Structs\Status $status = null, $shipmentNumber = null, \Minioak\Royalmail\Shipping\Structs\RequestedShipment $requestedShipment = null, \Minioak\Royalmail\Shipping\Structs\IntegrationFooter $integrationFooter = null)
    {
        $this
            ->setIntegrationHeader($integrationHeader)
            ->setStatus($status)
            ->setShipmentNumber($shipmentNumber)
            ->setRequestedShipment($requestedShipment)
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
     * @return \Minioak\Royalmail\Shipping\Structs\UpdateShipmentResponse
     */
    public function setIntegrationHeader(\Minioak\Royalmail\Shipping\Structs\IntegrationHeader $integrationHeader = null)
    {
        $this->integrationHeader = $integrationHeader;
        return $this;
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
     * @return \Minioak\Royalmail\Shipping\Structs\UpdateShipmentResponse
     */
    public function setStatus(\Minioak\Royalmail\Shipping\Structs\Status $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get shipmentNumber value
     * @return string|null
     */
    public function getShipmentNumber()
    {
        return $this->shipmentNumber;
    }
    /**
     * Set shipmentNumber value
     * @param string $shipmentNumber
     * @return \Minioak\Royalmail\Shipping\Structs\UpdateShipmentResponse
     */
    public function setShipmentNumber($shipmentNumber = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($shipmentNumber) && strlen($shipmentNumber) > 1) || (is_array($shipmentNumber) && count($shipmentNumber) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($shipmentNumber) ? strlen($shipmentNumber) : count($shipmentNumber)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($shipmentNumber) && !is_string($shipmentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipmentNumber)), __LINE__);
        }
        $this->shipmentNumber = $shipmentNumber;
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
     * @return \Minioak\Royalmail\Shipping\Structs\UpdateShipmentResponse
     */
    public function setRequestedShipment(\Minioak\Royalmail\Shipping\Structs\RequestedShipment $requestedShipment = null)
    {
        $this->requestedShipment = $requestedShipment;
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
     * @return \Minioak\Royalmail\Shipping\Structs\UpdateShipmentResponse
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
     * @return \Minioak\Royalmail\Shipping\Structs\UpdateShipmentResponse
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
