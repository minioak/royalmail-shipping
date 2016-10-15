<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for printManifestRequest Structs
 * Meta informations extracted from the WSDL
 * - documentation: request to print previously created manifest by Batch Number or Sales Order Number | schema to hold request details for printManifest operation
 * - type: ns:printManifestRequest
 * @subpackage Structs
 */
class PrintManifestRequest extends BaseRequest
{
    /**
     * The manifestBatchNumber
     * Meta informations extracted from the WSDL
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $manifestBatchNumber;
    /**
     * The salesOrderNumber
     * Meta informations extracted from the WSDL
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $salesOrderNumber;
    /**
     * Constructor method for printManifestRequest
     * @uses PrintManifestRequest::setManifestBatchNumber()
     * @uses PrintManifestRequest::setSalesOrderNumber()
     * @param string $manifestBatchNumber
     * @param string $salesOrderNumber
     */
    public function __construct($manifestBatchNumber = null, $salesOrderNumber = null)
    {
        $this
            ->setManifestBatchNumber($manifestBatchNumber)
            ->setSalesOrderNumber($salesOrderNumber);
    }
    /**
     * Get manifestBatchNumber value
     * @return string|null
     */
    public function getManifestBatchNumber()
    {
        return $this->manifestBatchNumber;
    }
    /**
     * Set manifestBatchNumber value
     * @param string $manifestBatchNumber
     * @return \Minioak\Royalmail\Shipping\Structs\PrintManifestRequest
     */
    public function setManifestBatchNumber($manifestBatchNumber = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($manifestBatchNumber) && strlen($manifestBatchNumber) > 1) || (is_array($manifestBatchNumber) && count($manifestBatchNumber) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($manifestBatchNumber) ? strlen($manifestBatchNumber) : count($manifestBatchNumber)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($manifestBatchNumber) && !is_string($manifestBatchNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($manifestBatchNumber)), __LINE__);
        }
        $this->manifestBatchNumber = $manifestBatchNumber;
        return $this;
    }
    /**
     * Get salesOrderNumber value
     * @return string|null
     */
    public function getSalesOrderNumber()
    {
        return $this->salesOrderNumber;
    }
    /**
     * Set salesOrderNumber value
     * @param string $salesOrderNumber
     * @return \Minioak\Royalmail\Shipping\Structs\PrintManifestRequest
     */
    public function setSalesOrderNumber($salesOrderNumber = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($salesOrderNumber) && strlen($salesOrderNumber) > 1) || (is_array($salesOrderNumber) && count($salesOrderNumber) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($salesOrderNumber) ? strlen($salesOrderNumber) : count($salesOrderNumber)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($salesOrderNumber) && !is_string($salesOrderNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($salesOrderNumber)), __LINE__);
        }
        $this->salesOrderNumber = $salesOrderNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\PrintManifestRequest
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
