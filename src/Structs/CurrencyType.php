<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for currencyType Structs
 * Meta informations extracted from the WSDL
 * - documentation: The currency code for the taxonomy is used to indicate the system of money (monetary units) in common use, especially in a nation. Under this definition, British pounds, U.S. dollars, and European euros are different types of
 * currency, or currencies. Currencies in the sense used by foreign exchange markets, are defined by governments, and each type has limited boundaries of acceptance.
 * - type: rd:currencyType
 * @subpackage Structs
 */
class CurrencyType extends AbstractStructBase
{
    /**
     * The currencyCode
     * Meta informations extracted from the WSDL
     * - documentation: Currency code is used to indicate the system of money (monetary units) in common use within a nation. Under this definition, British pounds, U.S. dollars, and European euros are different types of currency, or currencies. Currencies
     * in the sense used by foreign exchange markets, are defined by governments, and each type has limited boundaries of acceptance.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $currencyCode;
    /**
     * Constructor method for currencyType
     * @uses CurrencyType::setCurrencyCode()
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $currencyCode
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $currencyCode = null)
    {
        $this
            ->setCurrencyCode($currencyCode);
    }
    /**
     * Get currencyCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }
    /**
     * Set currencyCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $currencyCode
     * @return \Minioak\Royalmail\Shipping\Structs\CurrencyType
     */
    public function setCurrencyCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $currencyCode = null)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\CurrencyType
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
