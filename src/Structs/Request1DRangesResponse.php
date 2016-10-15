<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for request1DRangesResponse Structs
 * Meta informations extracted from the WSDL
 * - documentation: response to request range of 1D barcode ranges | schema to hold response details for request1DRangeRequest operation
 * - type: ns:request1DRangesResponse
 * @subpackage Structs
 */
class Request1DRangesResponse extends AbstractStructBase
{
    /**
     * The integrationHeader
     * @var \Minioak\Royalmail\Shipping\Structs\IntegrationHeader
     */
    public $integrationHeader;
    /**
     * The serviceRanges
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\ServiceRanges
     */
    public $serviceRanges;
    /**
     * The integrationFooter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\IntegrationFooter
     */
    public $integrationFooter;
    /**
     * Constructor method for request1DRangesResponse
     * @uses Request1DRangesResponse::setIntegrationHeader()
     * @uses Request1DRangesResponse::setServiceRanges()
     * @uses Request1DRangesResponse::setIntegrationFooter()
     * @param \Minioak\Royalmail\Shipping\Structs\IntegrationHeader $integrationHeader
     * @param \Minioak\Royalmail\Shipping\Structs\ServiceRanges $serviceRanges
     * @param \Minioak\Royalmail\Shipping\Structs\IntegrationFooter $integrationFooter
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\IntegrationHeader $integrationHeader = null, \Minioak\Royalmail\Shipping\Structs\ServiceRanges $serviceRanges = null, \Minioak\Royalmail\Shipping\Structs\IntegrationFooter $integrationFooter = null)
    {
        $this
            ->setIntegrationHeader($integrationHeader)
            ->setServiceRanges($serviceRanges)
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
     * @return \Minioak\Royalmail\Shipping\Structs\Request1DRangesResponse
     */
    public function setIntegrationHeader(\Minioak\Royalmail\Shipping\Structs\IntegrationHeader $integrationHeader = null)
    {
        $this->integrationHeader = $integrationHeader;
        return $this;
    }
    /**
     * Get serviceRanges value
     * @return \Minioak\Royalmail\Shipping\Structs\ServiceRanges|null
     */
    public function getServiceRanges()
    {
        return $this->serviceRanges;
    }
    /**
     * Set serviceRanges value
     * @param \Minioak\Royalmail\Shipping\Structs\ServiceRanges $serviceRanges
     * @return \Minioak\Royalmail\Shipping\Structs\Request1DRangesResponse
     */
    public function setServiceRanges(\Minioak\Royalmail\Shipping\Structs\ServiceRanges $serviceRanges = null)
    {
        $this->serviceRanges = $serviceRanges;
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
     * @return \Minioak\Royalmail\Shipping\Structs\Request1DRangesResponse
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
     * @return \Minioak\Royalmail\Shipping\Structs\Request1DRangesResponse
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
