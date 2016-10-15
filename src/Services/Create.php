<?php

namespace Minioak\Royalmail\Shipping\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Create Services
 * @subpackage Services
 */
class Create extends AbstractSoapClientBase
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
     * Method to call the operation originally named createShipment
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : Security
     * - SOAPHeaderNamespaces : http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd
     * - SOAPHeaderTypes : \Minioak\Royalmail\Shipping\Structs\SecurityHeaderType
     * - SOAPHeaders : required
     * - documentation: Creates a shipment on the system.The details of an item are provided to Royal Mail, and a shipment is created on the system. The status of the shipment is ‘Allocated’.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Minioak\Royalmail\Shipping\Structs\CreateShipmentRequest $createShipmentRequest
     * @return \Minioak\Royalmail\Shipping\Structs\CreateShipmentResponse|bool
     */
    public function createShipment(\Minioak\Royalmail\Shipping\Structs\CreateShipmentRequest $createShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->createShipment($createShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createManifest
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : Security
     * - SOAPHeaderNamespaces : http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd
     * - SOAPHeaderTypes : \Minioak\Royalmail\Shipping\Structs\SecurityHeaderType
     * - SOAPHeaders : required
     * - documentation: Manifests current shipments.The createManifest operation allows customers to submit to Royal Mail details of all of the items that will be despatched that day. Once the createManifest operation has been called, all shipments that
     * have status ‘Printed’ will be set to status ‘Manifested’ and it will no longer be possible to update or cancel them.Manifests can be created by Service Reference or by Service Code, or if neither is specified then all shipments that have
     * status ‘Printed’ will be included (N.B. Tracked Returns are not included in any part of the manifesting process).
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Minioak\Royalmail\Shipping\Structs\CreateManifestRequest $createManifestRequest
     * @return \Minioak\Royalmail\Shipping\Structs\CreateManifestResponse|bool
     */
    public function createManifest(\Minioak\Royalmail\Shipping\Structs\CreateManifestRequest $createManifestRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->createManifest($createManifestRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Minioak\Royalmail\Shipping\Structs\CreateManifestResponse|\Minioak\Royalmail\Shipping\Structs\CreateShipmentResponse
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
