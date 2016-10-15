<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignatureValueType Structs
 * @subpackage Structs
 */
class SignatureValueType extends AbstractStructBase
{
    /**
     * The _
     * @var base64Binary
     */
    public $_;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Id;
    /**
     * Constructor method for SignatureValueType
     * @uses SignatureValueType::set_()
     * @uses SignatureValueType::setId()
     * @param base64Binary $_
     * @param string $id
     */
    public function __construct(base64Binary $_ = null, $id = null)
    {
        $this
            ->set_($_)
            ->setId($id);
    }
    /**
     * Get _ value
     * @return base64Binary|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param base64Binary $_
     * @return \Minioak\Royalmail\Shipping\Structs\SignatureValueType
     */
    public function set_(base64Binary $_ = null)
    {
        $this->_ = $_;
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
     * @return \Minioak\Royalmail\Shipping\Structs\SignatureValueType
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
     * @return \Minioak\Royalmail\Shipping\Structs\SignatureValueType
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
