<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for printDocumentResponse Structs
 * Meta informations extracted from the WSDL
 * - documentation: response to print International document request returning document | schema to hold response details for printDocument operation
 * - type: ns:printDocumentResponse
 * @subpackage Structs
 */
class PrintDocumentResponse extends AbstractStructBase
{
    /**
     * The integrationHeader
     * @var \Minioak\Royalmail\Shipping\Structs\IntegrationHeader
     */
    public $integrationHeader;
    /**
     * The internationalDocument
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Used in the digital representation of documents
     * @var base64Binary
     */
    public $internationalDocument;
    /**
     * The integrationFooter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\IntegrationFooter
     */
    public $integrationFooter;
    /**
     * Constructor method for printDocumentResponse
     * @uses PrintDocumentResponse::setIntegrationHeader()
     * @uses PrintDocumentResponse::setInternationalDocument()
     * @uses PrintDocumentResponse::setIntegrationFooter()
     * @param \Minioak\Royalmail\Shipping\Structs\IntegrationHeader $integrationHeader
     * @param base64Binary $internationalDocument
     * @param \Minioak\Royalmail\Shipping\Structs\IntegrationFooter $integrationFooter
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\IntegrationHeader $integrationHeader = null, base64Binary $internationalDocument = null, \Minioak\Royalmail\Shipping\Structs\IntegrationFooter $integrationFooter = null)
    {
        $this
            ->setIntegrationHeader($integrationHeader)
            ->setInternationalDocument($internationalDocument)
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
     * @return \Minioak\Royalmail\Shipping\Structs\PrintDocumentResponse
     */
    public function setIntegrationHeader(\Minioak\Royalmail\Shipping\Structs\IntegrationHeader $integrationHeader = null)
    {
        $this->integrationHeader = $integrationHeader;
        return $this;
    }
    /**
     * Get internationalDocument value
     * @return base64Binary|null
     */
    public function getInternationalDocument()
    {
        return $this->internationalDocument;
    }
    /**
     * Set internationalDocument value
     * @param base64Binary $internationalDocument
     * @return \Minioak\Royalmail\Shipping\Structs\PrintDocumentResponse
     */
    public function setInternationalDocument(base64Binary $internationalDocument = null)
    {
        $this->internationalDocument = $internationalDocument;
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
     * @return \Minioak\Royalmail\Shipping\Structs\PrintDocumentResponse
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
     * @return \Minioak\Royalmail\Shipping\Structs\PrintDocumentResponse
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
