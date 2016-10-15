<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for amount Structs
 * Meta informations extracted from the WSDL
 * - documentation: An amount is the total or two or more quantities; the aggregate.
 * - type: com:amount
 * @subpackage Structs
 */
class Amount extends AbstractStructBase
{
    /**
     * The creditIndicator
     * Meta informations extracted from the WSDL
     * - documentation: This indicates whether the amount is a credit or a debit. If the boolean value is a 1 then the amount is greater than or equal to zero. If the boolean value is a 0, then the amount is less than zero. | Boolean, or boolean logic, is a
     * subset of algebra used for creating true/false statements. Boolean expressions use the operators AND, OR, XOR, and NOT to compare values and return a true or false result. Boolean values can also be referred to as 'flags'.
     * - maxOccurs: 1
     * - minOccurs: 1
     * - base: xs:boolean
     * @var bool
     */
    public $creditIndicator;
    /**
     * The currency
     * Meta informations extracted from the WSDL
     * - documentation: The currency code for the taxonomy is used to indicate the system of money (monetary units) in common use, especially in a nation. Under this definition, British pounds, U.S. dollars, and European euros are different types of
     * currency, or currencies. Currencies in the sense used by foreign exchange markets, are defined by governments, and each type has limited boundaries of acceptance.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Minioak\Royalmail\Shipping\Structs\CurrencyType
     */
    public $currency;
    /**
     * The value
     * Meta informations extracted from the WSDL
     * - documentation: The number that designates the quantity of the amount. i.e. 5.50 Because there is a credit indicator, this field MUST always be an absolute value and the credit or debit is interpreted through the indicator field. | A decimal data
     * type represents a real number with every decimal place indicating a multiple of a negative power of 10. It represents non-repeating decimal fractions like 0.3 and -1.17 without rounding, and gives the ability to do arithmetic on them.
     * - maxOccurs: 1
     * - minOccurs: 1
     * - base: xs:decimal
     * @var float
     */
    public $value;
    /**
     * Constructor method for amount
     * @uses Amount::setCreditIndicator()
     * @uses Amount::setCurrency()
     * @uses Amount::setValue()
     * @param bool $creditIndicator
     * @param \Minioak\Royalmail\Shipping\Structs\CurrencyType $currency
     * @param float $value
     */
    public function __construct($creditIndicator = null, \Minioak\Royalmail\Shipping\Structs\CurrencyType $currency = null, $value = null)
    {
        $this
            ->setCreditIndicator($creditIndicator)
            ->setCurrency($currency)
            ->setValue($value);
    }
    /**
     * Get creditIndicator value
     * @return bool
     */
    public function getCreditIndicator()
    {
        return $this->creditIndicator;
    }
    /**
     * Set creditIndicator value
     * @param bool $creditIndicator
     * @return \Minioak\Royalmail\Shipping\Structs\Amount
     */
    public function setCreditIndicator($creditIndicator = null)
    {
        $this->creditIndicator = $creditIndicator;
        return $this;
    }
    /**
     * Get currency value
     * @return \Minioak\Royalmail\Shipping\Structs\CurrencyType
     */
    public function getCurrency()
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param \Minioak\Royalmail\Shipping\Structs\CurrencyType $currency
     * @return \Minioak\Royalmail\Shipping\Structs\Amount
     */
    public function setCurrency(\Minioak\Royalmail\Shipping\Structs\CurrencyType $currency = null)
    {
        $this->currency = $currency;
        return $this;
    }
    /**
     * Get value value
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param float $value
     * @return \Minioak\Royalmail\Shipping\Structs\Amount
     */
    public function setValue($value = null)
    {
        $this->value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\Amount
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
