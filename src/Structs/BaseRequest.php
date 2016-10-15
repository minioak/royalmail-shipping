<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for baseRequest Structs
 * Meta informations extracted from the WSDL
 * - documentation: schema to hold static elements in ComplexContents
 * @subpackage Structs
 */
class BaseRequest extends AbstractStructBase
{
    /**
     * The integrationHeader
     * @var \Minioak\Royalmail\Shipping\Structs\IntegrationHeader
     */
    public $integrationHeader;
    /**
     * Constructor method for baseRequest
     * @uses BaseRequest::setIntegrationHeader()
     * @param \Minioak\Royalmail\Shipping\Structs\IntegrationHeader $integrationHeader
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\IntegrationHeader $integrationHeader = null)
    {
        $this
            ->setIntegrationHeader($integrationHeader);
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
     * @return \Minioak\Royalmail\Shipping\Structs\BaseRequest
     */
    public function setIntegrationHeader(\Minioak\Royalmail\Shipping\Structs\IntegrationHeader $integrationHeader = null)
    {
        $this->integrationHeader = $integrationHeader;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\BaseRequest
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
