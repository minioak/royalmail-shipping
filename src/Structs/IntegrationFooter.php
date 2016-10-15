<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for integrationFooter Structs
 * Meta informations extracted from the WSDL
 * - documentation: Common integration footer definition
 * - type: int:integrationFooter
 * @subpackage Structs
 */
class IntegrationFooter extends AbstractStructBase
{
    /**
     * The errors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\ErrorStructure
     */
    public $errors;
    /**
     * The warnings
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\WarningStructure
     */
    public $warnings;
    /**
     * Constructor method for integrationFooter
     * @uses IntegrationFooter::setErrors()
     * @uses IntegrationFooter::setWarnings()
     * @param \Minioak\Royalmail\Shipping\Structs\ErrorStructure $errors
     * @param \Minioak\Royalmail\Shipping\Structs\WarningStructure $warnings
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ErrorStructure $errors = null, \Minioak\Royalmail\Shipping\Structs\WarningStructure $warnings = null)
    {
        $this
            ->setErrors($errors)
            ->setWarnings($warnings);
    }
    /**
     * Get errors value
     * @return \Minioak\Royalmail\Shipping\Structs\ErrorStructure|null
     */
    public function getErrors()
    {
        return $this->errors;
    }
    /**
     * Set errors value
     * @param \Minioak\Royalmail\Shipping\Structs\ErrorStructure $errors
     * @return \Minioak\Royalmail\Shipping\Structs\IntegrationFooter
     */
    public function setErrors(\Minioak\Royalmail\Shipping\Structs\ErrorStructure $errors = null)
    {
        $this->errors = $errors;
        return $this;
    }
    /**
     * Get warnings value
     * @return \Minioak\Royalmail\Shipping\Structs\WarningStructure|null
     */
    public function getWarnings()
    {
        return $this->warnings;
    }
    /**
     * Set warnings value
     * @param \Minioak\Royalmail\Shipping\Structs\WarningStructure $warnings
     * @return \Minioak\Royalmail\Shipping\Structs\IntegrationFooter
     */
    public function setWarnings(\Minioak\Royalmail\Shipping\Structs\WarningStructure $warnings = null)
    {
        $this->warnings = $warnings;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\IntegrationFooter
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
