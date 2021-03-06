<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UsernameTokenType Structs
 * Meta informations extracted from the WSDL
 * - documentation: This type represents a username token per Section 4.1
 * @subpackage Structs
 */
class UsernameTokenType extends AbstractStructBase
{
    /**
     * The Username
     * @var \Minioak\Royalmail\Shipping\Structs\AttributedString
     */
    public $Username;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - ref: wsu:Id
     * @var string
     */
    public $Id;
    /**
     * Constructor method for UsernameTokenType
     * @uses UsernameTokenType::setUsername()
     * @uses UsernameTokenType::setAny()
     * @uses UsernameTokenType::setId()
     * @param \Minioak\Royalmail\Shipping\Structs\AttributedString $username
     * @param \DOMDocument $any
     * @param string $id
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\AttributedString $username = null, \DOMDocument $any = null, $id = null)
    {
        $this
            ->setUsername($username)
            ->setAny($any)
            ->setId($id);
    }
    /**
     * Get Username value
     * @return \Minioak\Royalmail\Shipping\Structs\AttributedString|null
     */
    public function getUsername()
    {
        return $this->Username;
    }
    /**
     * Set Username value
     * @param \Minioak\Royalmail\Shipping\Structs\AttributedString $username
     * @return \Minioak\Royalmail\Shipping\Structs\UsernameTokenType
     */
    public function setUsername(\Minioak\Royalmail\Shipping\Structs\AttributedString $username = null)
    {
        $this->Username = $username;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \Minioak\Royalmail\Shipping\Structs\UsernameTokenType::setAny()
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
     * @return \Minioak\Royalmail\Shipping\Structs\UsernameTokenType
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
     * @return \Minioak\Royalmail\Shipping\Structs\UsernameTokenType
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
     * @return \Minioak\Royalmail\Shipping\Structs\UsernameTokenType
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
