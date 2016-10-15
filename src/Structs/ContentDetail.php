<?php

namespace Minioak\Royalmail\Shipping\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for contentDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: schema to hold details of a parcel contents
 * @subpackage Structs
 */
class ContentDetail extends AbstractStructBase
{
    /**
     * The countryOfManufacture
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\CountryType
     */
    public $countryOfManufacture;
    /**
     * The manufacturersName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $manufacturersName;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - documentation: A short description is a sub-type of string and is a shorter version of a description (see definition of description) and is used to summarise a longer description. Descriptions are only editable via an admin function and are for
     * display and information purposes only for end users | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $description;
    /**
     * The unitWeight
     * @var \Minioak\Royalmail\Shipping\Structs\Dimension
     */
    public $unitWeight;
    /**
     * The unitQuantity
     * Meta informations extracted from the WSDL
     * - base: xs:integer
     * - documentation: An integer is a whole number (not a fraction) that can be positive, negative, or zero. Unlike floats, integers cannot have decimal places.
     * @var int
     */
    public $unitQuantity;
    /**
     * The unitValue
     * Meta informations extracted from the WSDL
     * - base: xs:decimal
     * - documentation: A decimal data type represents a real number with every decimal place indicating a multiple of a negative power of 10. It represents non-repeating decimal fractions like 0.3 and -1.17 without rounding, and gives the ability to do
     * arithmetic on them.
     * @var float
     */
    public $unitValue;
    /**
     * The currencyCode
     * Meta informations extracted from the WSDL
     * - documentation: Currency code is used to indicate the system of money (monetary units) in common use within a nation. Under this definition, British pounds, U.S. dollars, and European euros are different types of currency, or currencies. Currencies
     * in the sense used by foreign exchange markets, are defined by governments, and each type has limited boundaries of acceptance.
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $currencyCode;
    /**
     * The tariffCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $tariffCode;
    /**
     * The tariffDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Minioak\Royalmail\Shipping\Structs\ReferenceDataType
     */
    public $tariffDescription;
    /**
     * The articleReference
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: An identifier is a sub-type of string which serves as a means of identification for a particular thing; An identifier can be associated with a name. | Simple set of alphanumeric characters.
     * - maxLength: 128 | 4000
     * - base: xs:string
     * @var string
     */
    public $articleReference;
    /**
     * Constructor method for contentDetail
     * @uses ContentDetail::setCountryOfManufacture()
     * @uses ContentDetail::setManufacturersName()
     * @uses ContentDetail::setDescription()
     * @uses ContentDetail::setUnitWeight()
     * @uses ContentDetail::setUnitQuantity()
     * @uses ContentDetail::setUnitValue()
     * @uses ContentDetail::setCurrencyCode()
     * @uses ContentDetail::setTariffCode()
     * @uses ContentDetail::setTariffDescription()
     * @uses ContentDetail::setArticleReference()
     * @param \Minioak\Royalmail\Shipping\Structs\CountryType $countryOfManufacture
     * @param string $manufacturersName
     * @param string $description
     * @param \Minioak\Royalmail\Shipping\Structs\Dimension $unitWeight
     * @param int $unitQuantity
     * @param float $unitValue
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $currencyCode
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $tariffCode
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $tariffDescription
     * @param string $articleReference
     */
    public function __construct(\Minioak\Royalmail\Shipping\Structs\CountryType $countryOfManufacture = null, $manufacturersName = null, $description = null, \Minioak\Royalmail\Shipping\Structs\Dimension $unitWeight = null, $unitQuantity = null, $unitValue = null, \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $currencyCode = null, \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $tariffCode = null, \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $tariffDescription = null, $articleReference = null)
    {
        $this
            ->setCountryOfManufacture($countryOfManufacture)
            ->setManufacturersName($manufacturersName)
            ->setDescription($description)
            ->setUnitWeight($unitWeight)
            ->setUnitQuantity($unitQuantity)
            ->setUnitValue($unitValue)
            ->setCurrencyCode($currencyCode)
            ->setTariffCode($tariffCode)
            ->setTariffDescription($tariffDescription)
            ->setArticleReference($articleReference);
    }
    /**
     * Get countryOfManufacture value
     * @return \Minioak\Royalmail\Shipping\Structs\CountryType|null
     */
    public function getCountryOfManufacture()
    {
        return $this->countryOfManufacture;
    }
    /**
     * Set countryOfManufacture value
     * @param \Minioak\Royalmail\Shipping\Structs\CountryType $countryOfManufacture
     * @return \Minioak\Royalmail\Shipping\Structs\ContentDetail
     */
    public function setCountryOfManufacture(\Minioak\Royalmail\Shipping\Structs\CountryType $countryOfManufacture = null)
    {
        $this->countryOfManufacture = $countryOfManufacture;
        return $this;
    }
    /**
     * Get manufacturersName value
     * @return string|null
     */
    public function getManufacturersName()
    {
        return $this->manufacturersName;
    }
    /**
     * Set manufacturersName value
     * @param string $manufacturersName
     * @return \Minioak\Royalmail\Shipping\Structs\ContentDetail
     */
    public function setManufacturersName($manufacturersName = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($manufacturersName) && strlen($manufacturersName) > 1) || (is_array($manufacturersName) && count($manufacturersName) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($manufacturersName) ? strlen($manufacturersName) : count($manufacturersName)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($manufacturersName) && !is_string($manufacturersName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($manufacturersName)), __LINE__);
        }
        $this->manufacturersName = $manufacturersName;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Minioak\Royalmail\Shipping\Structs\ContentDetail
     */
    public function setDescription($description = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($description) && strlen($description) > 1) || (is_array($description) && count($description) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($description) ? strlen($description) : count($description)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get unitWeight value
     * @return \Minioak\Royalmail\Shipping\Structs\Dimension|null
     */
    public function getUnitWeight()
    {
        return $this->unitWeight;
    }
    /**
     * Set unitWeight value
     * @param \Minioak\Royalmail\Shipping\Structs\Dimension $unitWeight
     * @return \Minioak\Royalmail\Shipping\Structs\ContentDetail
     */
    public function setUnitWeight(\Minioak\Royalmail\Shipping\Structs\Dimension $unitWeight = null)
    {
        $this->unitWeight = $unitWeight;
        return $this;
    }
    /**
     * Get unitQuantity value
     * @return int|null
     */
    public function getUnitQuantity()
    {
        return $this->unitQuantity;
    }
    /**
     * Set unitQuantity value
     * @param int $unitQuantity
     * @return \Minioak\Royalmail\Shipping\Structs\ContentDetail
     */
    public function setUnitQuantity($unitQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($unitQuantity) && !is_numeric($unitQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($unitQuantity)), __LINE__);
        }
        $this->unitQuantity = $unitQuantity;
        return $this;
    }
    /**
     * Get unitValue value
     * @return float|null
     */
    public function getUnitValue()
    {
        return $this->unitValue;
    }
    /**
     * Set unitValue value
     * @param float $unitValue
     * @return \Minioak\Royalmail\Shipping\Structs\ContentDetail
     */
    public function setUnitValue($unitValue = null)
    {
        $this->unitValue = $unitValue;
        return $this;
    }
    /**
     * Get currencyCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType|null
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }
    /**
     * Set currencyCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $currencyCode
     * @return \Minioak\Royalmail\Shipping\Structs\ContentDetail
     */
    public function setCurrencyCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $currencyCode = null)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * Get tariffCode value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType|null
     */
    public function getTariffCode()
    {
        return $this->tariffCode;
    }
    /**
     * Set tariffCode value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $tariffCode
     * @return \Minioak\Royalmail\Shipping\Structs\ContentDetail
     */
    public function setTariffCode(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $tariffCode = null)
    {
        $this->tariffCode = $tariffCode;
        return $this;
    }
    /**
     * Get tariffDescription value
     * @return \Minioak\Royalmail\Shipping\Structs\ReferenceDataType|null
     */
    public function getTariffDescription()
    {
        return $this->tariffDescription;
    }
    /**
     * Set tariffDescription value
     * @param \Minioak\Royalmail\Shipping\Structs\ReferenceDataType $tariffDescription
     * @return \Minioak\Royalmail\Shipping\Structs\ContentDetail
     */
    public function setTariffDescription(\Minioak\Royalmail\Shipping\Structs\ReferenceDataType $tariffDescription = null)
    {
        $this->tariffDescription = $tariffDescription;
        return $this;
    }
    /**
     * Get articleReference value
     * @return string|null
     */
    public function getArticleReference()
    {
        return $this->articleReference;
    }
    /**
     * Set articleReference value
     * @param string $articleReference
     * @return \Minioak\Royalmail\Shipping\Structs\ContentDetail
     */
    public function setArticleReference($articleReference = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($articleReference) && strlen($articleReference) > 1) || (is_array($articleReference) && count($articleReference) > 1)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at most, "%d" length given', is_scalar($articleReference) ? strlen($articleReference) : count($articleReference)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($articleReference) && !is_string($articleReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($articleReference)), __LINE__);
        }
        $this->articleReference = $articleReference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Minioak\Royalmail\Shipping\Structs\ContentDetail
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
