<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for printLabelRequest Structs
 * Meta informations extracted from the WSDL
 * - documentation: request to provide a label for one or more shipments | schema to hold request details for printLabel operation
 * - type: ns:printLabelRequest
 * @subpackage Structs
 */
class PrintLabelRequest extends BaseRequest
{
    /**
     * The shipmentNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $shipmentNumber;
    /**
     * The outputFormat
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $outputFormat;
    /**
     * The localisedAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\LocalisedAddress
     */
    public $localisedAddress;
    /**
     * Constructor method for printLabelRequest
     * @uses PrintLabelRequest::setShipmentNumber()
     * @uses PrintLabelRequest::setOutputFormat()
     * @uses PrintLabelRequest::setLocalisedAddress()
     * @param string $shipmentNumber
     * @param string $outputFormat
     * @param \Minioak\Royalmail\Shipping\Structs\LocalisedAddress $localisedAddress
     */
    public function __construct($shipmentNumber = null, $outputFormat = null, \Minioak\Royalmail\Shipping\Structs\LocalisedAddress $localisedAddress = null)
    {
        $this
            ->setShipmentNumber($shipmentNumber)
            ->setOutputFormat($outputFormat)
            ->setLocalisedAddress($localisedAddress);
    }
    /**
     * Get shipmentNumber value
     * @return string
     */
    public function getShipmentNumber()
    {
        return $this->shipmentNumber;
    }
    /**
     * Set shipmentNumber value
     * @param string $shipmentNumber
     * @return \Minioak\Royalmail\Shipping\Structs\PrintLabelRequest
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
     * Get outputFormat value
     * @return string|null
     */
    public function getOutputFormat()
    {
        return $this->outputFormat;
    }
    /**
     * Set outputFormat value
     * @param string $outputFormat
     * @return \Minioak\Royalmail\Shipping\Structs\PrintLabelRequest
     */
    public function setOutputFormat($outputFormat = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($outputFormat) && strlen($outputFormat) > 1) || (is_array($outputFormat) && count($outputFormat) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($outputFormat) ? strlen($outputFormat) : count($outputFormat)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($outputFormat) && !is_string($outputFormat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($outputFormat)), __LINE__);
        }
        $this->outputFormat = $outputFormat;
        return $this;
    }
    /**
     * Get localisedAddress value
     * @return \Minioak\Royalmail\Shipping\Structs\LocalisedAddress|null
     */
    public function getLocalisedAddress()
    {
        return $this->localisedAddress;
    }
    /**
     * Set localisedAddress value
     * @param \Minioak\Royalmail\Shipping\Structs\LocalisedAddress $localisedAddress
     * @return \Minioak\Royalmail\Shipping\Structs\PrintLabelRequest
     */
    public function setLocalisedAddress(\Minioak\Royalmail\Shipping\Structs\LocalisedAddress $localisedAddress = null)
    {
        $this->localisedAddress = $localisedAddress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\PrintLabelRequest
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
