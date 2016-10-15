<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for X509DataType Structs
 * @subpackage Structs
 */
class X509DataType extends AbstractStructBase
{
    /**
     * The X509IssuerSerial
     * @var \Minioak\Royalmail\Shipping\Structs\X509IssuerSerialType
     */
    public $X509IssuerSerial;
    /**
     * The X509SKI
     * @var base64Binary
     */
    public $X509SKI;
    /**
     * The X509SubjectName
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - documentation: Simple set of alphanumeric characters.
     * - maxLength: 4000
     * @var string
     */
    public $X509SubjectName;
    /**
     * The X509Certificate
     * @var base64Binary
     */
    public $X509Certificate;
    /**
     * The X509CRL
     * @var base64Binary
     */
    public $X509CRL;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for X509DataType
     * @uses X509DataType::setX509IssuerSerial()
     * @uses X509DataType::setX509SKI()
     * @uses X509DataType::setX509SubjectName()
     * @uses X509DataType::setX509Certificate()
     * @uses X509DataType::setX509CRL()
     * @uses X509DataType::setAny()
     * @param \Minioak\Royalmail\Shipping\Structs\X509IssuerSerialType $x509IssuerSerial
     * @param base64Binary $x509SKI
     * @param string $x509SubjectName
     * @param base64Binary $x509Certificate
     * @param base64Binary $x509CRL
     * @param \DOMDocument $any
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\X509IssuerSerialType $x509IssuerSerial = null, base64Binary $x509SKI = null, $x509SubjectName = null, base64Binary $x509Certificate = null, base64Binary $x509CRL = null, \DOMDocument $any = null)
    {
        $this
            ->setX509IssuerSerial($x509IssuerSerial)
            ->setX509SKI($x509SKI)
            ->setX509SubjectName($x509SubjectName)
            ->setX509Certificate($x509Certificate)
            ->setX509CRL($x509CRL)
            ->setAny($any);
    }
    /**
     * Get X509IssuerSerial value
     * @return \Minioak\Royalmail\Shipping\Structs\X509IssuerSerialType|null
     */
    public function getX509IssuerSerial()
    {
        return $this->X509IssuerSerial;
    }
    /**
     * Set X509IssuerSerial value
     * @param \Minioak\Royalmail\Shipping\Structs\X509IssuerSerialType $x509IssuerSerial
     * @return \Minioak\Royalmail\Shipping\Structs\X509DataType
     */
    public function setX509IssuerSerial(\Minioak\Royalmail\Shipping\Structs\X509IssuerSerialType $x509IssuerSerial = null)
    {
        $this->X509IssuerSerial = $x509IssuerSerial;
        return $this;
    }
    /**
     * Get X509SKI value
     * @return base64Binary|null
     */
    public function getX509SKI()
    {
        return $this->X509SKI;
    }
    /**
     * Set X509SKI value
     * @param base64Binary $x509SKI
     * @return \Minioak\Royalmail\Shipping\Structs\X509DataType
     */
    public function setX509SKI(base64Binary $x509SKI = null)
    {
        $this->X509SKI = $x509SKI;
        return $this;
    }
    /**
     * Get X509SubjectName value
     * @return string|null
     */
    public function getX509SubjectName()
    {
        return $this->X509SubjectName;
    }
    /**
     * Set X509SubjectName value
     * @param string $x509SubjectName
     * @return \Minioak\Royalmail\Shipping\Structs\X509DataType
     */
    public function setX509SubjectName($x509SubjectName = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($x509SubjectName) && strlen($x509SubjectName) > 4000) || (is_array($x509SubjectName) && count($x509SubjectName) > 4000)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 4000 element(s) or a scalar of 4000 character(s) at most, "%d" length given', is_scalar($x509SubjectName) ? strlen($x509SubjectName) : count($x509SubjectName)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($x509SubjectName) && !is_string($x509SubjectName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($x509SubjectName)), __LINE__);
        }
        $this->X509SubjectName = $x509SubjectName;
        return $this;
    }
    /**
     * Get X509Certificate value
     * @return base64Binary|null
     */
    public function getX509Certificate()
    {
        return $this->X509Certificate;
    }
    /**
     * Set X509Certificate value
     * @param base64Binary $x509Certificate
     * @return \Minioak\Royalmail\Shipping\Structs\X509DataType
     */
    public function setX509Certificate(base64Binary $x509Certificate = null)
    {
        $this->X509Certificate = $x509Certificate;
        return $this;
    }
    /**
     * Get X509CRL value
     * @return base64Binary|null
     */
    public function getX509CRL()
    {
        return $this->X509CRL;
    }
    /**
     * Set X509CRL value
     * @param base64Binary $x509CRL
     * @return \Minioak\Royalmail\Shipping\Structs\X509DataType
     */
    public function setX509CRL(base64Binary $x509CRL = null)
    {
        $this->X509CRL = $x509CRL;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \Minioak\Royalmail\Shipping\Structs\X509DataType::setAny()
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
     * @return \Minioak\Royalmail\Shipping\Structs\X509DataType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\X509DataType
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
