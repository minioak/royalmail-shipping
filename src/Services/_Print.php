<?php

namespace Minioak\Royalmail\Shipping\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Print Services
 * @subpackage Services
 */
class _Print extends AbstractSoapClientBase
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
     * Method to call the operation originally named printLabel
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : Security
     * - SOAPHeaderNamespaces : http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd
     * - SOAPHeaderTypes : \Minioak\Royalmail\Shipping\Structs\SecurityHeaderType
     * - SOAPHeaders : required
     * - documentation: Prints a label for a shipment that has been created.The printLabel operation has several functions. It allows customers to request a label in Base64 encoded PDF format for a specific shipment. It also returns shipment data in XML
     * format for production of custom labels. Lastly, it allows the overriding of an English address on the label with a localised version of the same address. Once the printLabel operation has been called on a shipment with status ‘Allocated’ or
     * ‘Allocated Offline’, the status for that shipment is changed to ‘Printed’ or ‘Printed Offline’.Shipments created by either the GUI or API can be printed by the API call. There is no limit on the number of times the printLabel request can
     * be used on a shipment, though high numbers of reprints will be flagged to Royal Mail.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Minioak\Royalmail\Shipping\Structs\PrintLabelRequest $printLabelRequest
     * @return \Minioak\Royalmail\Shipping\Structs\PrintLabelResponse|bool
     */
    public function printLabel(\Minioak\Royalmail\Shipping\Structs\PrintLabelRequest $printLabelRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->printLabel($printLabelRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named printManifest
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : Security
     * - SOAPHeaderNamespaces : http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd
     * - SOAPHeaderTypes : \Minioak\Royalmail\Shipping\Structs\SecurityHeaderType
     * - SOAPHeaders : required
     * - documentation: Provides a printable manifest in PDF format.The printManifest operation allows customers to request a manifest (Customer Collection Receipt) in Base64 encoded PDF format. Once the printManifest operation has been called, all
     * shipments that have status ‘Manifested’ will be set to status ‘ManifestedPrinted’. Manifests can be specified by either the manifestBatchNumber or the salesOrderNumber (the salesOrderNumbers are available via the GUI the day after the
     * manifest was created). There is no limit on the number of times the PrintManifest request can be used on a manifest, however reprints will not include the barcodes and excessive requests for reprints will be flagged to Royal Mail.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Minioak\Royalmail\Shipping\Structs\PrintManifestRequest $printManifestRequest
     * @return \Minioak\Royalmail\Shipping\Structs\PrintManifestResponse|bool
     */
    public function printManifest(\Minioak\Royalmail\Shipping\Structs\PrintManifestRequest $printManifestRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->printManifest($printManifestRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named printDocument
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : Security
     * - SOAPHeaderNamespaces : http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd
     * - SOAPHeaderTypes : \Minioak\Royalmail\Shipping\Structs\SecurityHeaderType
     * - SOAPHeaders : required
     * - documentation: Provides one or more printable international document for CN22, CN23 and/or Commercial Invoice (CI) in PDF format.The printDocument operation allows customers to request an International Document (Based on HMRC export requirements)
     * in Base64 encoded PDF format. Printing International Documents is an optional step in sending a shipment.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Minioak\Royalmail\Shipping\Structs\PrintDocumentRequest $printDocumentRequest
     * @return \Minioak\Royalmail\Shipping\Structs\PrintDocumentResponse|bool
     */
    public function printDocument(\Minioak\Royalmail\Shipping\Structs\PrintDocumentRequest $printDocumentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->printDocument($printDocumentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Minioak\Royalmail\Shipping\Structs\PrintDocumentResponse|\Minioak\Royalmail\Shipping\Structs\PrintLabelResponse|\Minioak\Royalmail\Shipping\Structs\PrintManifestResponse
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
