<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for internationalInfo Structs
 * Meta informations extracted from the WSDL
 * - documentation: Only for international shipments
 * @subpackage Structs
 */
class InternationalInfo extends AbstractStructBase
{
    /**
     * The parcels
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\Parcels
     */
    public $parcels;
    /**
     * The shipperExporterVatNo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $shipperExporterVatNo;
    /**
     * The recipientImporterVatNo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $recipientImporterVatNo;
    /**
     * The originalExportShipmentNo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $originalExportShipmentNo;
    /**
     * The documentsOnly
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - base: xs:boolean
     * - documentation: Boolean, or boolean logic, is a subset of algebra used for creating true/false statements. Boolean expressions use the operators AND, OR, XOR, and NOT to compare values and return a true or false result. Boolean values can also be
     * referred to as 'flags'.
     * @var bool
     */
    public $documentsOnly;
    /**
     * The documentsDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: A short description is a sub-type of string and is a shorter version of a description (see definition of description) and is used to summarise a longer description. Descriptions are only editable via an admin function and are for
     * display and information purposes only for end users | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $documentsDescription;
    /**
     * The shipmentDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: A short description is a sub-type of string and is a shorter version of a description (see definition of description) and is used to summarise a longer description. Descriptions are only editable via an admin function and are for
     * display and information purposes only for end users | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $shipmentDescription;
    /**
     * The comments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: A long description is a sub-type of string and is a longer version of a description (see definition of description) and is used to expand a description. Descriptions are only editable via an admin function and are for display and
     * information purposes only for end users. | Simple set of alphanumeric characters.
     * - maxLength: 512 | 4000
     * - base: xs:string
     * @var string
     */
    public $comments;
    /**
     * The invoiceDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - base: xs:date
     * - documentation: A date represents a period in time which could be a particular month, day, and year at which some event happened or will happen.
     * @var string
     */
    public $invoiceDate;
    /**
     * The termsOfDelivery
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: A long description is a sub-type of string and is a longer version of a description (see definition of description) and is used to expand a description. Descriptions are only editable via an admin function and are for display and
     * information purposes only for end users. | Simple set of alphanumeric characters.
     * - maxLength: 512 | 4000
     * - base: xs:string
     * @var string
     */
    public $termsOfDelivery;
    /**
     * The purchaseOrderRef
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $purchaseOrderRef;
    /**
     * Constructor method for internationalInfo
     * @uses InternationalInfo::setParcels()
     * @uses InternationalInfo::setShipperExporterVatNo()
     * @uses InternationalInfo::setRecipientImporterVatNo()
     * @uses InternationalInfo::setOriginalExportShipmentNo()
     * @uses InternationalInfo::setDocumentsOnly()
     * @uses InternationalInfo::setDocumentsDescription()
     * @uses InternationalInfo::setShipmentDescription()
     * @uses InternationalInfo::setComments()
     * @uses InternationalInfo::setInvoiceDate()
     * @uses InternationalInfo::setTermsOfDelivery()
     * @uses InternationalInfo::setPurchaseOrderRef()
     * @param \Minioak\Royalmail\Shipping\Structs\Parcels $parcels
     * @param string $shipperExporterVatNo
     * @param string $recipientImporterVatNo
     * @param string $originalExportShipmentNo
     * @param bool $documentsOnly
     * @param string $documentsDescription
     * @param string $shipmentDescription
     * @param string $comments
     * @param string $invoiceDate
     * @param string $termsOfDelivery
     * @param string $purchaseOrderRef
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\Parcels $parcels = null, $shipperExporterVatNo = null, $recipientImporterVatNo = null, $originalExportShipmentNo = null, $documentsOnly = null, $documentsDescription = null, $shipmentDescription = null, $comments = null, $invoiceDate = null, $termsOfDelivery = null, $purchaseOrderRef = null)
    {
        $this
            ->setParcels($parcels)
            ->setShipperExporterVatNo($shipperExporterVatNo)
            ->setRecipientImporterVatNo($recipientImporterVatNo)
            ->setOriginalExportShipmentNo($originalExportShipmentNo)
            ->setDocumentsOnly($documentsOnly)
            ->setDocumentsDescription($documentsDescription)
            ->setShipmentDescription($shipmentDescription)
            ->setComments($comments)
            ->setInvoiceDate($invoiceDate)
            ->setTermsOfDelivery($termsOfDelivery)
            ->setPurchaseOrderRef($purchaseOrderRef);
    }
    /**
     * Get parcels value
     * @return \Minioak\Royalmail\Shipping\Structs\Parcels|null
     */
    public function getParcels()
    {
        return $this->parcels;
    }
    /**
     * Set parcels value
     * @param \Minioak\Royalmail\Shipping\Structs\Parcels $parcels
     * @return \Minioak\Royalmail\Shipping\Structs\InternationalInfo
     */
    public function setParcels(\Minioak\Royalmail\Shipping\Structs\Parcels $parcels = null)
    {
        $this->parcels = $parcels;
        return $this;
    }
    /**
     * Get shipperExporterVatNo value
     * @return string|null
     */
    public function getShipperExporterVatNo()
    {
        return $this->shipperExporterVatNo;
    }
    /**
     * Set shipperExporterVatNo value
     * @param string $shipperExporterVatNo
     * @return \Minioak\Royalmail\Shipping\Structs\InternationalInfo
     */
    public function setShipperExporterVatNo($shipperExporterVatNo = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($shipperExporterVatNo) && strlen($shipperExporterVatNo) > 1) || (is_array($shipperExporterVatNo) && count($shipperExporterVatNo) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($shipperExporterVatNo) ? strlen($shipperExporterVatNo) : count($shipperExporterVatNo)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($shipperExporterVatNo) && !is_string($shipperExporterVatNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipperExporterVatNo)), __LINE__);
        }
        $this->shipperExporterVatNo = $shipperExporterVatNo;
        return $this;
    }
    /**
     * Get recipientImporterVatNo value
     * @return string|null
     */
    public function getRecipientImporterVatNo()
    {
        return $this->recipientImporterVatNo;
    }
    /**
     * Set recipientImporterVatNo value
     * @param string $recipientImporterVatNo
     * @return \Minioak\Royalmail\Shipping\Structs\InternationalInfo
     */
    public function setRecipientImporterVatNo($recipientImporterVatNo = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($recipientImporterVatNo) && strlen($recipientImporterVatNo) > 1) || (is_array($recipientImporterVatNo) && count($recipientImporterVatNo) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($recipientImporterVatNo) ? strlen($recipientImporterVatNo) : count($recipientImporterVatNo)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($recipientImporterVatNo) && !is_string($recipientImporterVatNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recipientImporterVatNo)), __LINE__);
        }
        $this->recipientImporterVatNo = $recipientImporterVatNo;
        return $this;
    }
    /**
     * Get originalExportShipmentNo value
     * @return string|null
     */
    public function getOriginalExportShipmentNo()
    {
        return $this->originalExportShipmentNo;
    }
    /**
     * Set originalExportShipmentNo value
     * @param string $originalExportShipmentNo
     * @return \Minioak\Royalmail\Shipping\Structs\InternationalInfo
     */
    public function setOriginalExportShipmentNo($originalExportShipmentNo = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($originalExportShipmentNo) && strlen($originalExportShipmentNo) > 1) || (is_array($originalExportShipmentNo) && count($originalExportShipmentNo) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($originalExportShipmentNo) ? strlen($originalExportShipmentNo) : count($originalExportShipmentNo)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($originalExportShipmentNo) && !is_string($originalExportShipmentNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originalExportShipmentNo)), __LINE__);
        }
        $this->originalExportShipmentNo = $originalExportShipmentNo;
        return $this;
    }
    /**
     * Get documentsOnly value
     * @return bool|null
     */
    public function getDocumentsOnly()
    {
        return $this->documentsOnly;
    }
    /**
     * Set documentsOnly value
     * @param bool $documentsOnly
     * @return \Minioak\Royalmail\Shipping\Structs\InternationalInfo
     */
    public function setDocumentsOnly($documentsOnly = null)
    {
        $this->documentsOnly = $documentsOnly;
        return $this;
    }
    /**
     * Get documentsDescription value
     * @return string|null
     */
    public function getDocumentsDescription()
    {
        return $this->documentsDescription;
    }
    /**
     * Set documentsDescription value
     * @param string $documentsDescription
     * @return \Minioak\Royalmail\Shipping\Structs\InternationalInfo
     */
    public function setDocumentsDescription($documentsDescription = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($documentsDescription) && strlen($documentsDescription) > 1) || (is_array($documentsDescription) && count($documentsDescription) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($documentsDescription) ? strlen($documentsDescription) : count($documentsDescription)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($documentsDescription) && !is_string($documentsDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($documentsDescription)), __LINE__);
        }
        $this->documentsDescription = $documentsDescription;
        return $this;
    }
    /**
     * Get shipmentDescription value
     * @return string|null
     */
    public function getShipmentDescription()
    {
        return $this->shipmentDescription;
    }
    /**
     * Set shipmentDescription value
     * @param string $shipmentDescription
     * @return \Minioak\Royalmail\Shipping\Structs\InternationalInfo
     */
    public function setShipmentDescription($shipmentDescription = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($shipmentDescription) && strlen($shipmentDescription) > 1) || (is_array($shipmentDescription) && count($shipmentDescription) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($shipmentDescription) ? strlen($shipmentDescription) : count($shipmentDescription)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($shipmentDescription) && !is_string($shipmentDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipmentDescription)), __LINE__);
        }
        $this->shipmentDescription = $shipmentDescription;
        return $this;
    }
    /**
     * Get comments value
     * @return string|null
     */
    public function getComments()
    {
        return $this->comments;
    }
    /**
     * Set comments value
     * @param string $comments
     * @return \Minioak\Royalmail\Shipping\Structs\InternationalInfo
     */
    public function setComments($comments = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($comments) && strlen($comments) > 1) || (is_array($comments) && count($comments) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($comments) ? strlen($comments) : count($comments)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($comments) && !is_string($comments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comments)), __LINE__);
        }
        $this->comments = $comments;
        return $this;
    }
    /**
     * Get invoiceDate value
     * @return string|null
     */
    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }
    /**
     * Set invoiceDate value
     * @param string $invoiceDate
     * @return \Minioak\Royalmail\Shipping\Structs\InternationalInfo
     */
    public function setInvoiceDate($invoiceDate = null)
    {
        // validation for constraint: string
        if (!is_null($invoiceDate) && !is_string($invoiceDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invoiceDate)), __LINE__);
        }
        $this->invoiceDate = $invoiceDate;
        return $this;
    }
    /**
     * Get termsOfDelivery value
     * @return string|null
     */
    public function getTermsOfDelivery()
    {
        return $this->termsOfDelivery;
    }
    /**
     * Set termsOfDelivery value
     * @param string $termsOfDelivery
     * @return \Minioak\Royalmail\Shipping\Structs\InternationalInfo
     */
    public function setTermsOfDelivery($termsOfDelivery = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($termsOfDelivery) && strlen($termsOfDelivery) > 1) || (is_array($termsOfDelivery) && count($termsOfDelivery) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($termsOfDelivery) ? strlen($termsOfDelivery) : count($termsOfDelivery)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($termsOfDelivery) && !is_string($termsOfDelivery)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($termsOfDelivery)), __LINE__);
        }
        $this->termsOfDelivery = $termsOfDelivery;
        return $this;
    }
    /**
     * Get purchaseOrderRef value
     * @return string|null
     */
    public function getPurchaseOrderRef()
    {
        return $this->purchaseOrderRef;
    }
    /**
     * Set purchaseOrderRef value
     * @param string $purchaseOrderRef
     * @return \Minioak\Royalmail\Shipping\Structs\InternationalInfo
     */
    public function setPurchaseOrderRef($purchaseOrderRef = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($purchaseOrderRef) && strlen($purchaseOrderRef) > 1) || (is_array($purchaseOrderRef) && count($purchaseOrderRef) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($purchaseOrderRef) ? strlen($purchaseOrderRef) : count($purchaseOrderRef)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($purchaseOrderRef) && !is_string($purchaseOrderRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($purchaseOrderRef)), __LINE__);
        }
        $this->purchaseOrderRef = $purchaseOrderRef;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\InternationalInfo
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
