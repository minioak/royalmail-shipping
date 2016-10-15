<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for taxType Structs
 * Meta informations extracted from the WSDL
 * - documentation: Defines the different types of tax i.e. VAT, Income, Corporate etc.
 * - type: rd:taxType
 * @subpackage Structs
 */
class TaxType extends AbstractStructBase
{
    /**
     * The taxCode
     * Meta informations extracted from the WSDL
     * - documentation: Defines the different types of tax i.e. VAT, Income, Corporate etc.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $taxCode;
    /**
     * Constructor method for taxType
     * @uses TaxType::setTaxCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $taxCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $taxCode = null)
    {
        $this
            ->setTaxCode($taxCode);
    }
    /**
     * Get taxCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getTaxCode()
    {
        return $this->taxCode;
    }
    /**
     * Set taxCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $taxCode
     * @return \Minioak\Royalmail\Shipping\Structs\TaxType
     */
    public function setTaxCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $taxCode = null)
    {
        $this->taxCode = $taxCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\TaxType
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
