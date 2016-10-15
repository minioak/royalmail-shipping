<?php

namespace Minioak\Royalmail\Shipping\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Cancel Services
 * @subpackage Services
 */
class Cancel extends AbstractSoapClientBase
{
    /**
     * Sets the Security SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Minioak\Royalmail\Shipping\Structs\SecurityHeaderType $security
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderSecurity(\Minioak\Royalmail\Shipping\Structs\SecurityHeaderType $security, $nameSpace = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'Security', $security, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named cancelShipment
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : Security
     * - SOAPHeaderNamespaces : http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd
     * - SOAPHeaderTypes : \Minioak\Royalmail\Shipping\Structs\SecurityHeaderType
     * - SOAPHeaders : required
     * - documentation: Cancels a shipment that has been created but not manifested.The cancelShipment operation allows customers to update the details of a previously created (but not manifested) shipment. Once a shipment has been cancelled its status will
     * change from ‘Allocated’ or ‘Printed’ to ‘Cancelled’.Shipments created by the GUI or API can be cancelled by the API call, and cancelled shipments are visible in the system. Any Tracked Returns shipments must be cancelled before midnight
     * as this is when they will be automatically processed and archived by the system.Up to 1,000 shipments can be cancelled in a single request.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Minioak\Royalmail\Shipping\Structs\CancelShipmentRequest $cancelShipmentRequest
     * @return \Minioak\Royalmail\Shipping\Structs\CancelShipmentResponse|bool
     */
    public function cancelShipment(\Minioak\Royalmail\Shipping\Structs\CancelShipmentRequest $cancelShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->cancelShipment($cancelShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Minioak\Royalmail\Shipping\Structs\CancelShipmentResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
