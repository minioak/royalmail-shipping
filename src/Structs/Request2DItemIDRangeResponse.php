<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for request2DItemIDRangeResponse Structs
 * Meta informations extracted from the WSDL
 * - documentation: response to request a range of 2D ItemIDs | schema to hold response details for request2DItemIDRangeRequest operation
 * - type: ns:request2DItemIDRangeResponse
 * @subpackage Structs
 */
class Request2DItemIDRangeResponse extends AbstractStructBase
{
    /**
     * The integrationHeader
     * @var \Minioak\Royalmail\Shipping\Structs\IntegrationHeader
     */
    public $integrationHeader;
    /**
     * The itemIDRange
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\ItemIDRange
     */
    public $itemIDRange;
    /**
     * The integrationFooter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\IntegrationFooter
     */
    public $integrationFooter;
    /**
     * Constructor method for request2DItemIDRangeResponse
     * @uses Request2DItemIDRangeResponse::setIntegrationHeader()
     * @uses Request2DItemIDRangeResponse::setItemIDRange()
     * @uses Request2DItemIDRangeResponse::setIntegrationFooter()
     * @param \Minioak\Royalmail\Shipping\Structs\IntegrationHeader $integrationHeader
     * @param \Minioak\Royalmail\Shipping\Structs\ItemIDRange $itemIDRange
     * @param \Minioak\Royalmail\Shipping\Structs\IntegrationFooter $integrationFooter
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\IntegrationHeader $integrationHeader = null, \Minioak\Royalmail\Shipping\Structs\ItemIDRange $itemIDRange = null, \Minioak\Royalmail\Shipping\Structs\IntegrationFooter $integrationFooter = null)
    {
        $this
            ->setIntegrationHeader($integrationHeader)
            ->setItemIDRange($itemIDRange)
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
     * @return \Minioak\Royalmail\Shipping\Structs\Request2DItemIDRangeResponse
     */
    public function setIntegrationHeader(\Minioak\Royalmail\Shipping\Structs\IntegrationHeader $integrationHeader = null)
    {
        $this->integrationHeader = $integrationHeader;
        return $this;
    }
    /**
     * Get itemIDRange value
     * @return \Minioak\Royalmail\Shipping\Structs\ItemIDRange|null
     */
    public function getItemIDRange()
    {
        return $this->itemIDRange;
    }
    /**
     * Set itemIDRange value
     * @param \Minioak\Royalmail\Shipping\Structs\ItemIDRange $itemIDRange
     * @return \Minioak\Royalmail\Shipping\Structs\Request2DItemIDRangeResponse
     */
    public function setItemIDRange(\Minioak\Royalmail\Shipping\Structs\ItemIDRange $itemIDRange = null)
    {
        $this->itemIDRange = $itemIDRange;
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
     * @return \Minioak\Royalmail\Shipping\Structs\Request2DItemIDRangeResponse
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
     * @return \Minioak\Royalmail\Shipping\Structs\Request2DItemIDRangeResponse
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
