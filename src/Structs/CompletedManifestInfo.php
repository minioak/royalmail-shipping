<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for completedManifestInfo Structs
 * Meta informations extracted from the WSDL
 * - documentation: schema to hold details of manifest
 * @subpackage Structs
 */
class CompletedManifestInfo extends AbstractStructBase
{
    /**
     * The manifestBatchNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $manifestBatchNumber;
    /**
     * The totalItemCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * - documentation: A number indicating a whole number amount as in a count of items. | An integer is a whole number (not a fraction) that can be positive, negative, or zero. Unlike floats, integers cannot have decimal places.
     * - base: xs:integer
     * @var int
     */
    public $totalItemCount;
    /**
     * The manifestShipments
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ManifestShipments
     */
    public $manifestShipments;
    /**
     * Constructor method for completedManifestInfo
     * @uses CompletedManifestInfo::setManifestBatchNumber()
     * @uses CompletedManifestInfo::setTotalItemCount()
     * @uses CompletedManifestInfo::setManifestShipments()
     * @param string $manifestBatchNumber
     * @param int $totalItemCount
     * @param \Minioak\Royalmail\Shipping\Structs\ManifestShipments $manifestShipments
     */
    public function __construct($manifestBatchNumber = null, $totalItemCount = null, \Minioak\Royalmail\Shipping\Structs\ManifestShipments $manifestShipments = null)
    {
        $this
            ->setManifestBatchNumber($manifestBatchNumber)
            ->setTotalItemCount($totalItemCount)
            ->setManifestShipments($manifestShipments);
    }
    /**
     * Get manifestBatchNumber value
     * @return string
     */
    public function getManifestBatchNumber()
    {
        return $this->manifestBatchNumber;
    }
    /**
     * Set manifestBatchNumber value
     * @param string $manifestBatchNumber
     * @return \Minioak\Royalmail\Shipping\Structs\CompletedManifestInfo
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
     * Get totalItemCount value
     * @return int
     */
    public function getTotalItemCount()
    {
        return $this->totalItemCount;
    }
    /**
     * Set totalItemCount value
     * @param int $totalItemCount
     * @return \Minioak\Royalmail\Shipping\Structs\CompletedManifestInfo
     */
    public function setTotalItemCount($totalItemCount = null)
    {
        // validation for constraint: int
        if (!is_null($totalItemCount) && !is_numeric($totalItemCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalItemCount)), __LINE__);
        }
        $this->totalItemCount = $totalItemCount;
        return $this;
    }
    /**
     * Get manifestShipments value
     * @return \Minioak\Royalmail\Shipping\Structs\ManifestShipments
     */
    public function getManifestShipments()
    {
        return $this->manifestShipments;
    }
    /**
     * Set manifestShipments value
     * @param \Minioak\Royalmail\Shipping\Structs\ManifestShipments $manifestShipments
     * @return \Minioak\Royalmail\Shipping\Structs\CompletedManifestInfo
     */
    public function setManifestShipments(\Minioak\Royalmail\Shipping\Structs\ManifestShipments $manifestShipments = null)
    {
        $this->manifestShipments = $manifestShipments;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\CompletedManifestInfo
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
