<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for printLabelResponse Structs
 * Meta informations extracted from the WSDL
 * - documentation: response to print label request returning label is a Base64 Encoded Document | schema to hold response details for printLabel operation
 * - type: ns:printLabelResponse
 * @subpackage Structs
 */
class PrintLabelResponse extends AbstractStructBase
{
    /**
     * The integrationHeader
     * @var \Minioak\Royalmail\Shipping\Structs\IntegrationHeader
     */
    public $integrationHeader;
    /**
     * The label
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Used in the digital representation of documents
     * @var base64Binary
     */
    public $label;
    /**
     * The labelImages
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\LabelImages
     */
    public $labelImages;
    /**
     * The labelData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\LabelData
     */
    public $labelData;
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
     * The integrationFooter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\IntegrationFooter
     */
    public $integrationFooter;
    /**
     * Constructor method for printLabelResponse
     * @uses PrintLabelResponse::setIntegrationHeader()
     * @uses PrintLabelResponse::setLabel()
     * @uses PrintLabelResponse::setLabelImages()
     * @uses PrintLabelResponse::setLabelData()
     * @uses PrintLabelResponse::setOutputFormat()
     * @uses PrintLabelResponse::setIntegrationFooter()
     * @param \Minioak\Royalmail\Shipping\Structs\IntegrationHeader $integrationHeader
     * @param base64Binary $label
     * @param \Minioak\Royalmail\Shipping\Structs\LabelImages $labelImages
     * @param \Minioak\Royalmail\Shipping\Structs\LabelData $labelData
     * @param string $outputFormat
     * @param \Minioak\Royalmail\Shipping\Structs\IntegrationFooter $integrationFooter
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\IntegrationHeader $integrationHeader = null, base64Binary $label = null, \Minioak\Royalmail\Shipping\Structs\LabelImages $labelImages = null, \Minioak\Royalmail\Shipping\Structs\LabelData $labelData = null, $outputFormat = null, \Minioak\Royalmail\Shipping\Structs\IntegrationFooter $integrationFooter = null)
    {
        $this
            ->setIntegrationHeader($integrationHeader)
            ->setLabel($label)
            ->setLabelImages($labelImages)
            ->setLabelData($labelData)
            ->setOutputFormat($outputFormat)
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
     * @return \Minioak\Royalmail\Shipping\Structs\PrintLabelResponse
     */
    public function setIntegrationHeader(\Minioak\Royalmail\Shipping\Structs\IntegrationHeader $integrationHeader = null)
    {
        $this->integrationHeader = $integrationHeader;
        return $this;
    }
    /**
     * Get label value
     * @return base64Binary|null
     */
    public function getLabel()
    {
        return $this->label;
    }
    /**
     * Set label value
     * @param base64Binary $label
     * @return \Minioak\Royalmail\Shipping\Structs\PrintLabelResponse
     */
    public function setLabel(base64Binary $label = null)
    {
        $this->label = $label;
        return $this;
    }
    /**
     * Get labelImages value
     * @return \Minioak\Royalmail\Shipping\Structs\LabelImages|null
     */
    public function getLabelImages()
    {
        return $this->labelImages;
    }
    /**
     * Set labelImages value
     * @param \Minioak\Royalmail\Shipping\Structs\LabelImages $labelImages
     * @return \Minioak\Royalmail\Shipping\Structs\PrintLabelResponse
     */
    public function setLabelImages(\Minioak\Royalmail\Shipping\Structs\LabelImages $labelImages = null)
    {
        $this->labelImages = $labelImages;
        return $this;
    }
    /**
     * Get labelData value
     * @return \Minioak\Royalmail\Shipping\Structs\LabelData|null
     */
    public function getLabelData()
    {
        return $this->labelData;
    }
    /**
     * Set labelData value
     * @param \Minioak\Royalmail\Shipping\Structs\LabelData $labelData
     * @return \Minioak\Royalmail\Shipping\Structs\PrintLabelResponse
     */
    public function setLabelData(\Minioak\Royalmail\Shipping\Structs\LabelData $labelData = null)
    {
        $this->labelData = $labelData;
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
     * @return \Minioak\Royalmail\Shipping\Structs\PrintLabelResponse
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
     * @return \Minioak\Royalmail\Shipping\Structs\PrintLabelResponse
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
     * @return \Minioak\Royalmail\Shipping\Structs\PrintLabelResponse
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
