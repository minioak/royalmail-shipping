<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ObjectType Structs
 * Meta informations extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class ObjectType extends AbstractStructBase
{
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
     * The MimeType
     * Meta informations extracted from the WSDL
     * - use: optional
     * - base: xs:string
     * - documentation: Simple set of alphanumeric characters.
     * - maxLength: 4000
     * @var string
     */
    public $MimeType;
    /**
     * The Encoding
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Encoding;
    /**
     * Constructor method for ObjectType
     * @uses ObjectType::setAny()
     * @uses ObjectType::setId()
     * @uses ObjectType::setMimeType()
     * @uses ObjectType::setEncoding()
     * @param \DOMDocument $any
     * @param string $id
     * @param string $mimeType
     * @param string $encoding
     */
    public function __construct(\DOMDocument $any = null, $id = null, $mimeType = null, $encoding = null)
    {
        $this
            ->setAny($any)
            ->setId($id)
            ->setMimeType($mimeType)
            ->setEncoding($encoding);
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \Minioak\Royalmail\Shipping\Structs\ObjectType::setAny()
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
     * @return \Minioak\Royalmail\Shipping\Structs\ObjectType
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
     * @return \Minioak\Royalmail\Shipping\Structs\ObjectType
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
     * Get MimeType value
     * @return string|null
     */
    public function getMimeType()
    {
        return $this->MimeType;
    }
    /**
     * Set MimeType value
     * @param string $mimeType
     * @return \Minioak\Royalmail\Shipping\Structs\ObjectType
     */
    public function setMimeType($mimeType = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($mimeType) && strlen($mimeType) > 4000) || (is_array($mimeType) && count($mimeType) > 4000)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 4000 element(s) or a scalar of 4000 character(s) at most, "%d" length given', is_scalar($mimeType) ? strlen($mimeType) : count($mimeType)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($mimeType) && !is_string($mimeType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mimeType)), __LINE__);
        }
        $this->MimeType = $mimeType;
        return $this;
    }
    /**
     * Get Encoding value
     * @return string|null
     */
    public function getEncoding()
    {
        return $this->Encoding;
    }
    /**
     * Set Encoding value
     * @param string $encoding
     * @return \Minioak\Royalmail\Shipping\Structs\ObjectType
     */
    public function setEncoding($encoding = null)
    {
        // validation for constraint: string
        if (!is_null($encoding) && !is_string($encoding)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($encoding)), __LINE__);
        }
        $this->Encoding = $encoding;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\ObjectType
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
