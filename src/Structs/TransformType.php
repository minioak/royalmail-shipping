<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransformType Structs
 * Meta informations extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class TransformType extends AbstractStructBase
{
    /**
     * The Algorithm
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Algorithm;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The XPath
     * Meta informations extracted from the WSDL
     * - base: xs:string
     * - documentation: Simple set of alphanumeric characters.
     * - maxLength: 4000
     * @var string
     */
    public $XPath;
    /**
     * Constructor method for TransformType
     * @uses TransformType::setAlgorithm()
     * @uses TransformType::setAny()
     * @uses TransformType::setXPath()
     * @param string $algorithm
     * @param \DOMDocument $any
     * @param string $xPath
     */
    public function __construct($algorithm = null, \DOMDocument $any = null, $xPath = null)
    {
        $this
            ->setAlgorithm($algorithm)
            ->setAny($any)
            ->setXPath($xPath);
    }
    /**
     * Get Algorithm value
     * @return string
     */
    public function getAlgorithm()
    {
        return $this->Algorithm;
    }
    /**
     * Set Algorithm value
     * @param string $algorithm
     * @return \Minioak\Royalmail\Shipping\Structs\TransformType
     */
    public function setAlgorithm($algorithm = null)
    {
        // validation for constraint: string
        if (!is_null($algorithm) && !is_string($algorithm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($algorithm)), __LINE__);
        }
        $this->Algorithm = $algorithm;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \Minioak\Royalmail\Shipping\Structs\TransformType::setAny()
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
     * @return \Minioak\Royalmail\Shipping\Structs\TransformType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Get XPath value
     * @return string|null
     */
    public function getXPath()
    {
        return $this->XPath;
    }
    /**
     * Set XPath value
     * @param string $xPath
     * @return \Minioak\Royalmail\Shipping\Structs\TransformType
     */
    public function setXPath($xPath = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($xPath) && strlen($xPath) > 4000) || (is_array($xPath) && count($xPath) > 4000)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 4000 element(s) or a scalar of 4000 character(s) at most, "%d" length given', is_scalar($xPath) ? strlen($xPath) : count($xPath)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($xPath) && !is_string($xPath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($xPath)), __LINE__);
        }
        $this->XPath = $xPath;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\TransformType
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
