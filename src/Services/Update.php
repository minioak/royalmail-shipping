<?php

namespace Minioak\Royalmail\Shipping\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Update Services
 * @subpackage Services
 */
class Update extends AbstractSoapClientBase
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
     * Method to call the operation originally named updateShipment
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : Security
     * - SOAPHeaderNamespaces : http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd
     * - SOAPHeaderTypes : \Minioak\Royalmail\Shipping\Structs\SecurityHeaderType
     * - SOAPHeaders : required
     * - documentation: Updates the details of a shipment that has been created but not manifested.The updateShipment operation allows customers to update the details of a previously created (but not manifested) shipment, provided that doing so does not
     * violate the validation rules applied, or change the barcode number (e.g. it is not possible to update a Special Delivery item to become a Tracked Next Day item).Only one shipment (identified by a single shipment number) can be updated per request,
     * although multiple fields can be updated each time. If any field fails validation, then an error code will be returned and no fields will be updated. There is no limit to the number of times a shipment can be updated.The status of the shipment is not
     * affected by the update (e.g. a shipment with status ‘Allocated’ before an update will be ‘Allocated’ afterwards; a shipment with status ‘Printed’ will be ‘Printed’ afterwards)
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Minioak\Royalmail\Shipping\Structs\UpdateShipmentRequest $updateShipmentRequest
     * @return \Minioak\Royalmail\Shipping\Structs\UpdateShipmentResponse|bool
     */
    public function updateShipment(\Minioak\Royalmail\Shipping\Structs\UpdateShipmentRequest $updateShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->updateShipment($updateShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Minioak\Royalmail\Shipping\Structs\UpdateShipmentResponse
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
