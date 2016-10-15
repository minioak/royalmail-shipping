<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for parcel Structs
 * Meta informations extracted from the WSDL
 * - documentation: schema to hold details of a single parcel
 * @subpackage Structs
 */
class Parcel extends AbstractStructBase
{
    /**
     * The weight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\Dimension
     */
    public $weight;
    /**
     * The length
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\Dimension
     */
    public $length;
    /**
     * The height
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\Dimension
     */
    public $height;
    /**
     * The width
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\Dimension
     */
    public $width;
    /**
     * The purposeOfShipment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $purposeOfShipment;
    /**
     * The explanation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: A description is a sub-type of string and is statement in words that gives an account or descriptive representation of a thing. Descriptions are only editable via an admin function and are for display and information purposes only
     * for end users. | Simple set of alphanumeric characters.
     * - maxLength: 256 | 4000
     * - base: xs:string
     * @var string
     */
    public $explanation;
    /**
     * The invoiceNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $invoiceNumber;
    /**
     * The exportLicenseNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $exportLicenseNumber;
    /**
     * The certificateNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $certificateNumber;
    /**
     * The contentDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\ContentDetails
     */
    public $contentDetails;
    /**
     * The fees
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - base: xs:decimal
     * - documentation: A decimal data type represents a real number with every decimal place indicating a multiple of a negative power of 10. It represents non-repeating decimal fractions like 0.3 and -1.17 without rounding, and gives the ability to do
     * arithmetic on them.
     * @var float
     */
    public $fees;
    /**
     * The offlineShipments
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\Shipment[]
     */
    public $offlineShipments;
    /**
     * Constructor method for parcel
     * @uses Parcel::setWeight()
     * @uses Parcel::setLength()
     * @uses Parcel::setHeight()
     * @uses Parcel::setWidth()
     * @uses Parcel::setPurposeOfShipment()
     * @uses Parcel::setExplanation()
     * @uses Parcel::setInvoiceNumber()
     * @uses Parcel::setExportLicenseNumber()
     * @uses Parcel::setCertificateNumber()
     * @uses Parcel::setContentDetails()
     * @uses Parcel::setFees()
     * @uses Parcel::setOfflineShipments()
     * @param \Minioak\Royalmail\Shipping\Structs\Dimension $weight
     * @param \Minioak\Royalmail\Shipping\Structs\Dimension $length
     * @param \Minioak\Royalmail\Shipping\Structs\Dimension $height
     * @param \Minioak\Royalmail\Shipping\Structs\Dimension $width
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $purposeOfShipment
     * @param string $explanation
     * @param string $invoiceNumber
     * @param string $exportLicenseNumber
     * @param string $certificateNumber
     * @param \Minioak\Royalmail\Shipping\Structs\ContentDetails $contentDetails
     * @param float $fees
     * @param \Minioak\Royalmail\Shipping\Structs\Shipment[] $offlineShipments
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\Dimension $weight = null, \Minioak\Royalmail\Shipping\Structs\Dimension $length = null, \Minioak\Royalmail\Shipping\Structs\Dimension $height = null, \Minioak\Royalmail\Shipping\Structs\Dimension $width = null, \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $purposeOfShipment = null, $explanation = null, $invoiceNumber = null, $exportLicenseNumber = null, $certificateNumber = null, \Minioak\Royalmail\Shipping\Structs\ContentDetails $contentDetails = null, $fees = null, array $offlineShipments = array())
    {
        $this
            ->setWeight($weight)
            ->setLength($length)
            ->setHeight($height)
            ->setWidth($width)
            ->setPurposeOfShipment($purposeOfShipment)
            ->setExplanation($explanation)
            ->setInvoiceNumber($invoiceNumber)
            ->setExportLicenseNumber($exportLicenseNumber)
            ->setCertificateNumber($certificateNumber)
            ->setContentDetails($contentDetails)
            ->setFees($fees)
            ->setOfflineShipments($offlineShipments);
    }
    /**
     * Get weight value
     * @return \Minioak\Royalmail\Shipping\Structs\Dimension|null
     */
    public function getWeight()
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param \Minioak\Royalmail\Shipping\Structs\Dimension $weight
     * @return \Minioak\Royalmail\Shipping\Structs\Parcel
     */
    public function setWeight(\Minioak\Royalmail\Shipping\Structs\Dimension $weight = null)
    {
        $this->weight = $weight;
        return $this;
    }
    /**
     * Get length value
     * @return \Minioak\Royalmail\Shipping\Structs\Dimension|null
     */
    public function getLength()
    {
        return $this->length;
    }
    /**
     * Set length value
     * @param \Minioak\Royalmail\Shipping\Structs\Dimension $length
     * @return \Minioak\Royalmail\Shipping\Structs\Parcel
     */
    public function setLength(\Minioak\Royalmail\Shipping\Structs\Dimension $length = null)
    {
        $this->length = $length;
        return $this;
    }
    /**
     * Get height value
     * @return \Minioak\Royalmail\Shipping\Structs\Dimension|null
     */
    public function getHeight()
    {
        return $this->height;
    }
    /**
     * Set height value
     * @param \Minioak\Royalmail\Shipping\Structs\Dimension $height
     * @return \Minioak\Royalmail\Shipping\Structs\Parcel
     */
    public function setHeight(\Minioak\Royalmail\Shipping\Structs\Dimension $height = null)
    {
        $this->height = $height;
        return $this;
    }
    /**
     * Get width value
     * @return \Minioak\Royalmail\Shipping\Structs\Dimension|null
     */
    public function getWidth()
    {
        return $this->width;
    }
    /**
     * Set width value
     * @param \Minioak\Royalmail\Shipping\Structs\Dimension $width
     * @return \Minioak\Royalmail\Shipping\Structs\Parcel
     */
    public function setWidth(\Minioak\Royalmail\Shipping\Structs\Dimension $width = null)
    {
        $this->width = $width;
        return $this;
    }
    /**
     * Get purposeOfShipment value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType|null
     */
    public function getPurposeOfShipment()
    {
        return $this->purposeOfShipment;
    }
    /**
     * Set purposeOfShipment value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $purposeOfShipment
     * @return \Minioak\Royalmail\Shipping\Structs\Parcel
     */
    public function setPurposeOfShipment(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $purposeOfShipment = null)
    {
        $this->purposeOfShipment = $purposeOfShipment;
        return $this;
    }
    /**
     * Get explanation value
     * @return string|null
     */
    public function getExplanation()
    {
        return $this->explanation;
    }
    /**
     * Set explanation value
     * @param string $explanation
     * @return \Minioak\Royalmail\Shipping\Structs\Parcel
     */
    public function setExplanation($explanation = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($explanation) && strlen($explanation) > 1) || (is_array($explanation) && count($explanation) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($explanation) ? strlen($explanation) : count($explanation)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($explanation) && !is_string($explanation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($explanation)), __LINE__);
        }
        $this->explanation = $explanation;
        return $this;
    }
    /**
     * Get invoiceNumber value
     * @return string|null
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }
    /**
     * Set invoiceNumber value
     * @param string $invoiceNumber
     * @return \Minioak\Royalmail\Shipping\Structs\Parcel
     */
    public function setInvoiceNumber($invoiceNumber = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($invoiceNumber) && strlen($invoiceNumber) > 1) || (is_array($invoiceNumber) && count($invoiceNumber) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($invoiceNumber) ? strlen($invoiceNumber) : count($invoiceNumber)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($invoiceNumber) && !is_string($invoiceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invoiceNumber)), __LINE__);
        }
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }
    /**
     * Get exportLicenseNumber value
     * @return string|null
     */
    public function getExportLicenseNumber()
    {
        return $this->exportLicenseNumber;
    }
    /**
     * Set exportLicenseNumber value
     * @param string $exportLicenseNumber
     * @return \Minioak\Royalmail\Shipping\Structs\Parcel
     */
    public function setExportLicenseNumber($exportLicenseNumber = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($exportLicenseNumber) && strlen($exportLicenseNumber) > 1) || (is_array($exportLicenseNumber) && count($exportLicenseNumber) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($exportLicenseNumber) ? strlen($exportLicenseNumber) : count($exportLicenseNumber)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($exportLicenseNumber) && !is_string($exportLicenseNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($exportLicenseNumber)), __LINE__);
        }
        $this->exportLicenseNumber = $exportLicenseNumber;
        return $this;
    }
    /**
     * Get certificateNumber value
     * @return string|null
     */
    public function getCertificateNumber()
    {
        return $this->certificateNumber;
    }
    /**
     * Set certificateNumber value
     * @param string $certificateNumber
     * @return \Minioak\Royalmail\Shipping\Structs\Parcel
     */
    public function setCertificateNumber($certificateNumber = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($certificateNumber) && strlen($certificateNumber) > 1) || (is_array($certificateNumber) && count($certificateNumber) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($certificateNumber) ? strlen($certificateNumber) : count($certificateNumber)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($certificateNumber) && !is_string($certificateNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($certificateNumber)), __LINE__);
        }
        $this->certificateNumber = $certificateNumber;
        return $this;
    }
    /**
     * Get contentDetails value
     * @return \Minioak\Royalmail\Shipping\Structs\ContentDetails|null
     */
    public function getContentDetails()
    {
        return $this->contentDetails;
    }
    /**
     * Set contentDetails value
     * @param \Minioak\Royalmail\Shipping\Structs\ContentDetails $contentDetails
     * @return \Minioak\Royalmail\Shipping\Structs\Parcel
     */
    public function setContentDetails(\Minioak\Royalmail\Shipping\Structs\ContentDetails $contentDetails = null)
    {
        $this->contentDetails = $contentDetails;
        return $this;
    }
    /**
     * Get fees value
     * @return float|null
     */
    public function getFees()
    {
        return $this->fees;
    }
    /**
     * Set fees value
     * @param float $fees
     * @return \Minioak\Royalmail\Shipping\Structs\Parcel
     */
    public function setFees($fees = null)
    {
        $this->fees = $fees;
        return $this;
    }
    /**
     * Get offlineShipments value
     * @return \Minioak\Royalmail\Shipping\Structs\Shipment[]|null
     */
    public function getOfflineShipments()
    {
        return $this->offlineShipments;
    }
    /**
     * Set offlineShipments value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\Shipment[] $offlineShipments
     * @return \Minioak\Royalmail\Shipping\Structs\Parcel
     */
    public function setOfflineShipments(array $offlineShipments = array())
    {
        foreach ($offlineShipments as $parcelOfflineShipmentsItem) {
            // validation for constraint: itemType
            if (!$parcelOfflineShipmentsItem instanceof \Minioak\Royalmail\Shipping\Structs\Shipment) {
                throw new \InvalidArgumentException(sprintf('The offlineShipments property can only contain items of \Minioak\Royalmail\Shipping\Structs\Shipment, "%s" given', is_object($parcelOfflineShipmentsItem) ? get_class($parcelOfflineShipmentsItem) : gettype($parcelOfflineShipmentsItem)), __LINE__);
            }
        }
        $this->offlineShipments = $offlineShipments;
        return $this;
    }
    /**
     * Add item to offlineShipments value
     * @throws \InvalidArgumentException
     * @param \Minioak\Royalmail\Shipping\Structs\Shipment $item
     * @return \Minioak\Royalmail\Shipping\Structs\Parcel
     */
    public function addToOfflineShipments(\Minioak\Royalmail\Shipping\Structs\Shipment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Minioak\Royalmail\Shipping\Structs\Shipment) {
            throw new \InvalidArgumentException(sprintf('The offlineShipments property can only contain items of \Minioak\Royalmail\Shipping\Structs\Shipment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->offlineShipments[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\Parcel
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
