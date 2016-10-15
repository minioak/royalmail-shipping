<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for printDocumentRequest Structs
 * Meta informations extracted from the WSDL
 * - documentation: request to provide an International document for one or more shipments | schema to hold request details for printDocument operation
 * - type: ns:printDocumentRequest
 * @subpackage Structs
 */
class PrintDocumentRequest extends BaseRequest
{
    /**
     * The shipmentNumber
     * Meta informations extracted from the WSDL
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $shipmentNumber;
    /**
     * The documentName
     * Meta informations extracted from the WSDL
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $documentName;
    /**
     * The documentFormat
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $documentFormat;
    /**
     * The documentCopies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - base: xs:integer
     * - documentation: An integer is a whole number (not a fraction) that can be positive, negative, or zero. Unlike floats, integers cannot have decimal places.
     * @var int
     */
    public $documentCopies;
    /**
     * Constructor method for printDocumentRequest
     * @uses PrintDocumentRequest::setShipmentNumber()
     * @uses PrintDocumentRequest::setDocumentName()
     * @uses PrintDocumentRequest::setDocumentFormat()
     * @uses PrintDocumentRequest::setDocumentCopies()
     * @param string $shipmentNumber
     * @param string $documentName
     * @param string $documentFormat
     * @param int $documentCopies
     */
    public function __construct($shipmentNumber = null, $documentName = null, $documentFormat = null, $documentCopies = null)
    {
        $this
            ->setShipmentNumber($shipmentNumber)
            ->setDocumentName($documentName)
            ->setDocumentFormat($documentFormat)
            ->setDocumentCopies($documentCopies);
    }
    /**
     * Get shipmentNumber value
     * @return string|null
     */
    public function getShipmentNumber()
    {
        return $this->shipmentNumber;
    }
    /**
     * Set shipmentNumber value
     * @param string $shipmentNumber
     * @return \Minioak\Royalmail\Shipping\Structs\PrintDocumentRequest
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
     * Get documentName value
     * @return string|null
     */
    public function getDocumentName()
    {
        return $this->documentName;
    }
    /**
     * Set documentName value
     * @param string $documentName
     * @return \Minioak\Royalmail\Shipping\Structs\PrintDocumentRequest
     */
    public function setDocumentName($documentName = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($documentName) && strlen($documentName) > 1) || (is_array($documentName) && count($documentName) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($documentName) ? strlen($documentName) : count($documentName)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($documentName) && !is_string($documentName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($documentName)), __LINE__);
        }
        $this->documentName = $documentName;
        return $this;
    }
    /**
     * Get documentFormat value
     * @return string|null
     */
    public function getDocumentFormat()
    {
        return $this->documentFormat;
    }
    /**
     * Set documentFormat value
     * @param string $documentFormat
     * @return \Minioak\Royalmail\Shipping\Structs\PrintDocumentRequest
     */
    public function setDocumentFormat($documentFormat = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($documentFormat) && strlen($documentFormat) > 1) || (is_array($documentFormat) && count($documentFormat) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($documentFormat) ? strlen($documentFormat) : count($documentFormat)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($documentFormat) && !is_string($documentFormat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($documentFormat)), __LINE__);
        }
        $this->documentFormat = $documentFormat;
        return $this;
    }
    /**
     * Get documentCopies value
     * @return int|null
     */
    public function getDocumentCopies()
    {
        return $this->documentCopies;
    }
    /**
     * Set documentCopies value
     * @param int $documentCopies
     * @return \Minioak\Royalmail\Shipping\Structs\PrintDocumentRequest
     */
    public function setDocumentCopies($documentCopies = null)
    {
        // validation for constraint: int
        if (!is_null($documentCopies) && !is_numeric($documentCopies)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($documentCopies)), __LINE__);
        }
        $this->documentCopies = $documentCopies;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\PrintDocumentRequest
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
