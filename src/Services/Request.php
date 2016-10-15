<?php

namespace Minioak\Royalmail\Shipping\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Request Services
 * @subpackage Services
 */
class Request extends AbstractSoapClientBase
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
     * Method to call the operation originally named request1DRanges
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : Security
     * - SOAPHeaderNamespaces : http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd
     * - SOAPHeaderTypes : \Minioak\Royalmail\Shipping\Structs\SecurityHeaderType
     * - SOAPHeaders : required
     * - documentation: Provide a contiguous block of 1D Barcode identifiers for specified service(s)The request1DRanges operation allows customers to request a range of 1D Linear Barcode numbers for use in processing offline shipments.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Minioak\Royalmail\Shipping\Structs\Request1DRangesRequest $request1DRangesRequest
     * @return \Minioak\Royalmail\Shipping\Structs\Request1DRangesResponse|bool
     */
    public function request1DRanges(\Minioak\Royalmail\Shipping\Structs\Request1DRangesRequest $request1DRangesRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->request1DRanges($request1DRangesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named request2DItemIDRange
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : Security
     * - SOAPHeaderNamespaces : http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd
     * - SOAPHeaderTypes : \Minioak\Royalmail\Shipping\Structs\SecurityHeaderType
     * - SOAPHeaders : required
     * - documentation: Provide a contiguous block of 2D Item IDs for any service.The request2DItemIDRange operation allows customers to request a range of 2D Item ID numbers for use in processing offline shipments.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Minioak\Royalmail\Shipping\Structs\Request2DItemIDRangeRequest $request2DItemIDRangeRequest
     * @return \Minioak\Royalmail\Shipping\Structs\Request2DItemIDRangeResponse|bool
     */
    public function request2DItemIDRange(\Minioak\Royalmail\Shipping\Structs\Request2DItemIDRangeRequest $request2DItemIDRangeRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->request2DItemIDRange($request2DItemIDRangeRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Minioak\Royalmail\Shipping\Structs\Request1DRangesResponse|\Minioak\Royalmail\Shipping\Structs\Request2DItemIDRangeResponse
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
