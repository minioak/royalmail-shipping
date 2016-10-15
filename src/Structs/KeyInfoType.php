<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KeyInfoType Structs
 * Meta informations extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class KeyInfoType extends AbstractStructBase
{
    /**
     * The KeyName
     * Meta informations extracted from the WSDL
     * - ref: ds:KeyName
     * - base: xs:string
     * - documentation: Simple set of alphanumeric characters.
     * - maxLength: 4000
     * @var string
     */
    public $KeyName;
    /**
     * The KeyValue
     * Meta informations extracted from the WSDL
     * - ref: ds:KeyValue
     * @var \Minioak\Royalmail\Shipping\Structs\KeyValueType
     */
    public $KeyValue;
    /**
     * The RetrievalMethod
     * Meta informations extracted from the WSDL
     * - ref: ds:RetrievalMethod
     * @var \Minioak\Royalmail\Shipping\Structs\RetrievalMethodType
     */
    public $RetrievalMethod;
    /**
     * The X509Data
     * Meta informations extracted from the WSDL
     * - ref: ds:X509Data
     * @var \Minioak\Royalmail\Shipping\Structs\X509DataType
     */
    public $X509Data;
    /**
     * The PGPData
     * Meta informations extracted from the WSDL
     * - ref: ds:PGPData
     * @var \Minioak\Royalmail\Shipping\Structs\PGPDataType
     */
    public $PGPData;
    /**
     * The SPKIData
     * Meta informations extracted from the WSDL
     * - ref: ds:SPKIData
     * @var \Minioak\Royalmail\Shipping\Structs\SPKIDataType
     */
    public $SPKIData;
    /**
     * The MgmtData
     * Meta informations extracted from the WSDL
     * - ref: ds:MgmtData
     * - base: xs:string
     * - documentation: Simple set of alphanumeric characters.
     * - maxLength: 4000
     * @var string
     */
    public $MgmtData;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Id;
    /**
     * Constructor method for KeyInfoType
     * @uses KeyInfoType::setKeyName()
     * @uses KeyInfoType::setKeyValue()
     * @uses KeyInfoType::setRetrievalMethod()
     * @uses KeyInfoType::setX509Data()
     * @uses KeyInfoType::setPGPData()
     * @uses KeyInfoType::setSPKIData()
     * @uses KeyInfoType::setMgmtData()
     * @uses KeyInfoType::setAny()
     * @uses KeyInfoType::setId()
     * @param string $keyName
     * @param \Minioak\Royalmail\Shipping\Structs\KeyValueType $keyValue
     * @param \Minioak\Royalmail\Shipping\Structs\RetrievalMethodType $retrievalMethod
     * @param \Minioak\Royalmail\Shipping\Structs\X509DataType $x509Data
     * @param \Minioak\Royalmail\Shipping\Structs\PGPDataType $pGPData
     * @param \Minioak\Royalmail\Shipping\Structs\SPKIDataType $sPKIData
     * @param string $mgmtData
     * @param \DOMDocument $any
     * @param string $id
     */
    public function __construct($keyName = null, \Minioak\Royalmail\Shipping\Structs\KeyValueType $keyValue = null, \Minioak\Royalmail\Shipping\Structs\RetrievalMethodType $retrievalMethod = null, \Minioak\Royalmail\Shipping\Structs\X509DataType $x509Data = null, \Minioak\Royalmail\Shipping\Structs\PGPDataType $pGPData = null, \Minioak\Royalmail\Shipping\Structs\SPKIDataType $sPKIData = null, $mgmtData = null, \DOMDocument $any = null, $id = null)
    {
        $this
            ->setKeyName($keyName)
            ->setKeyValue($keyValue)
            ->setRetrievalMethod($retrievalMethod)
            ->setX509Data($x509Data)
            ->setPGPData($pGPData)
            ->setSPKIData($sPKIData)
            ->setMgmtData($mgmtData)
            ->setAny($any)
            ->setId($id);
    }
    /**
     * Get KeyName value
     * @return string|null
     */
    public function getKeyName()
    {
        return $this->KeyName;
    }
    /**
     * Set KeyName value
     * @param string $keyName
     * @return \Minioak\Royalmail\Shipping\Structs\KeyInfoType
     */
    public function setKeyName($keyName = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($keyName) && strlen($keyName) > 4000) || (is_array($keyName) && count($keyName) > 4000)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 4000 element(s) or a scalar of 4000 character(s) at most, "%d" length given', is_scalar($keyName) ? strlen($keyName) : count($keyName)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($keyName) && !is_string($keyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($keyName)), __LINE__);
        }
        $this->KeyName = $keyName;
        return $this;
    }
    /**
     * Get KeyValue value
     * @return \Minioak\Royalmail\Shipping\Structs\KeyValueType|null
     */
    public function getKeyValue()
    {
        return $this->KeyValue;
    }
    /**
     * Set KeyValue value
     * @param \Minioak\Royalmail\Shipping\Structs\KeyValueType $keyValue
     * @return \Minioak\Royalmail\Shipping\Structs\KeyInfoType
     */
    public function setKeyValue(\Minioak\Royalmail\Shipping\Structs\KeyValueType $keyValue = null)
    {
        $this->KeyValue = $keyValue;
        return $this;
    }
    /**
     * Get RetrievalMethod value
     * @return \Minioak\Royalmail\Shipping\Structs\RetrievalMethodType|null
     */
    public function getRetrievalMethod()
    {
        return $this->RetrievalMethod;
    }
    /**
     * Set RetrievalMethod value
     * @param \Minioak\Royalmail\Shipping\Structs\RetrievalMethodType $retrievalMethod
     * @return \Minioak\Royalmail\Shipping\Structs\KeyInfoType
     */
    public function setRetrievalMethod(\Minioak\Royalmail\Shipping\Structs\RetrievalMethodType $retrievalMethod = null)
    {
        $this->RetrievalMethod = $retrievalMethod;
        return $this;
    }
    /**
     * Get X509Data value
     * @return \Minioak\Royalmail\Shipping\Structs\X509DataType|null
     */
    public function getX509Data()
    {
        return $this->X509Data;
    }
    /**
     * Set X509Data value
     * @param \Minioak\Royalmail\Shipping\Structs\X509DataType $x509Data
     * @return \Minioak\Royalmail\Shipping\Structs\KeyInfoType
     */
    public function setX509Data(\Minioak\Royalmail\Shipping\Structs\X509DataType $x509Data = null)
    {
        $this->X509Data = $x509Data;
        return $this;
    }
    /**
     * Get PGPData value
     * @return \Minioak\Royalmail\Shipping\Structs\PGPDataType|null
     */
    public function getPGPData()
    {
        return $this->PGPData;
    }
    /**
     * Set PGPData value
     * @param \Minioak\Royalmail\Shipping\Structs\PGPDataType $pGPData
     * @return \Minioak\Royalmail\Shipping\Structs\KeyInfoType
     */
    public function setPGPData(\Minioak\Royalmail\Shipping\Structs\PGPDataType $pGPData = null)
    {
        $this->PGPData = $pGPData;
        return $this;
    }
    /**
     * Get SPKIData value
     * @return \Minioak\Royalmail\Shipping\Structs\SPKIDataType|null
     */
    public function getSPKIData()
    {
        return $this->SPKIData;
    }
    /**
     * Set SPKIData value
     * @param \Minioak\Royalmail\Shipping\Structs\SPKIDataType $sPKIData
     * @return \Minioak\Royalmail\Shipping\Structs\KeyInfoType
     */
    public function setSPKIData(\Minioak\Royalmail\Shipping\Structs\SPKIDataType $sPKIData = null)
    {
        $this->SPKIData = $sPKIData;
        return $this;
    }
    /**
     * Get MgmtData value
     * @return string|null
     */
    public function getMgmtData()
    {
        return $this->MgmtData;
    }
    /**
     * Set MgmtData value
     * @param string $mgmtData
     * @return \Minioak\Royalmail\Shipping\Structs\KeyInfoType
     */
    public function setMgmtData($mgmtData = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($mgmtData) && strlen($mgmtData) > 4000) || (is_array($mgmtData) && count($mgmtData) > 4000)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 4000 element(s) or a scalar of 4000 character(s) at most, "%d" length given', is_scalar($mgmtData) ? strlen($mgmtData) : count($mgmtData)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($mgmtData) && !is_string($mgmtData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mgmtData)), __LINE__);
        }
        $this->MgmtData = $mgmtData;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \Minioak\Royalmail\Shipping\Structs\KeyInfoType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \Minioak\Royalmail\Shipping\Structs\KeyInfoType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Minioak\Royalmail\Shipping\Structs\KeyInfoType
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\KeyInfoType
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
